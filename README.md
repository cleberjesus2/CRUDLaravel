# CRUD Laravel - Sistema de Produtos, Carros e Usuários
Este projeto é um reaproveitamento da ultima atividade, contendo um CRUD com conexão ao banco de dados, permitindo gerenciar os Controllers: Produtos, Usuarios e Carros.



## Tecnologias Utilizadas

- **Laravel** (PHP)
- **MySQL** (Banco de dados)

## Estrutura do Projeto
- **Rotas**: Definidas em `routes/web.php`.
- **Controllers**: Localizados em `app/Http/Controllers`.
- **Views**: Localizadas em `resources/views`.


## Instalação

Para instalar e executar este projeto, siga os passos abaixo:


1. Clone o Repositório: 

   git clone https://github.com/cleberjesus2/ControllerLaravel.git
   
   cd ControllerLaravel


3. Instale as dependências do Laravel:
    

- Run
- Copy code
- composer install


4. Configure o Arquivo .env
 - Obs: Se não houver ao clonar o projeto, copie o arquivo ".env.examplecrie" e renomeie para ".env") e configure o Banco de dados;

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha


5. Inicie o servidor embutido do Laravel:

- php artisan serve
