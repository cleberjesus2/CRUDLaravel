<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
  
    public function index()
    {
        $cars = session('cars', []);   
        return view('cars.index', compact('cars'));
    }

    
    public function create()
    {
        return view('cars.create');
    }

   
    public function store(Request $request)
    {
        $cars = session('cars', []);

        $newCar = [
            'id'    => count($cars) + 1,
            'nome'  => $request->input('nome'),
            'marca' => $request->input('marca'),
            'modelo'=> $request->input('modelo'),
        ];

        $cars[] = $newCar;
        session(['cars' => $cars]);

        return redirect()->route('carros.index')->with('success', 'Carro criado com sucesso!');
    }

    
    public function show($id)
    {
        $cars = session('cars', []);
        $car = collect($cars)->firstWhere('id', (int)$id);

        if (!$car) {
            return redirect()->route('carros.index')->with('error', 'Carro não encontrado!');
        }

        return view('cars.show', compact('car'));
    }

   
    public function edit($id)
    { 
        $cars = session('cars', []);
        $car = collect($cars)->firstWhere('id', (int)$id);

        if (!$car) {
            return redirect()->route('carros.index')->with('error', 'Carro não encontrado!');
        }

        return view('cars.edit', compact('car'));
    }

   
    public function update(Request $request, $id)
    {
        $cars = session('cars', []);

        foreach ($cars as $key => $car) {
            if ($car['id'] == $id) {
                $cars[$key]['nome']  = $request->input('nome');
                $cars[$key]['marca'] = $request->input('marca');
                $cars[$key]['modelo']= $request->input('modelo');
                break;
            }
        }

        session(['cars' => $cars]);

        return redirect()->route('carros.index')->with('success', 'Carro atualizado com sucesso!');
    }

    
    public function destroy($id)
    {
        $cars = session('cars', []);

        foreach ($cars as $key => $car) {
            if ($car['id'] == $id) {
                unset($cars[$key]);
                break;
            }
        }

       
        $cars = array_values($cars);
        session(['cars' => $cars]);

        return redirect()->route('carros.index')->with('success', 'Carro removido com sucesso!');
    
    }
}
