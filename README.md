# Projeto

Este projeto consiste em uma API desenvolvida em Laravel 9, utilizando MySQL como banco de dados e autenticação JWT do Passport. Os recursos dessa API incluem cadastrar e gerenciar lojas e os produtos dessa loja.


## Passport - Autenticação escolhida

O sistema de autenticação Passport do Laravel 9 é uma biblioteca que facilita a implementação de autenticação OAuth2 em uma aplicação Laravel. Ele fornece rotas para autenticação, registro, recuperação de senha e outras funcionalidades comuns de autenticação. Além disso, ele permite a criação de tokens de acesso para usuários autenticados, que podem ser usados para acessar recursos protegidos pela API. Com o Passport, é possível integrar facilmente a autenticação em aplicativos móveis ou em outras aplicações que se comunicam com a API.

## Pré-requisitos

- PHP v8.2^
- Composer v2.5.4
- MySQL

### Instalação do MySQL

Para instalar o MySQL no Windows, siga [estas instruções](https://www.notion.so/fd0af0cc2dbf44f0afa747b8b2d00b50).

Para instalar o MySQL no Linux, siga [estas instruções](https://www.notion.so/14c9515e60f6424d8fdb415f362e103f).

### Instalação do PHP e Composer

Para instalar o PHP e o Composer no Windows, siga [estas instruções](https://www.notion.so/25d144956a6642879dc1ba84e75d3c3f).

Para instalar o PHP e o Composer no Linux, siga [estas instruções](https://www.notion.so/09a30319fb19479aafd0d892266f1e17).

## Clonando o projeto

1. Abra o terminal ou prompt de comando
2. Navegue até a pasta onde deseja clonar o repositório
3. Digite o seguinte comando: `git clone https://github.com/DukaSiqueira/laravel-rest-api.git` 
4. Aguarde o processo de clonagem ser concluído
5. Após o processo de clonagem ser concluído, navegue até a pasta do projeto clonado digitando o comando: `cd laravel-rest-api`

## Configuração .env

1. Duplique o arquivo `.env.example` e renomeie-o para `.env` (ou crie um novo arquivo `.env` a partir do zero).
2. Abra o arquivo `.env` e localize a seção de configuração do banco de dados.
3. Preencha as variáveis com as informações do seu banco de dados. Por exemplo:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_seu_banco_de_dados
DB_USERNAME=seu_usuario_do_mysql
DB_PASSWORD=sua_senha_do_mysql

```

## Como rodar o projeto

Para executar o projeto, siga os seguintes passos:

1. Instale as dependências do projeto com o comando: `composer install`.
2. Gere a chave de aplicação com o comando: `php artisan key:generate`.
3. Execute as migrações do banco de dados com o comando: `php artisan migrate`.
4. Execute as seeders do banco de dados com o comando: `php artisan db:seed`.
5. Adicione o arquivo de chave privada utilizado para autenticação do Passport com o comando `php artisan passport:install`.
6. Execute o servidor de desenvolvimento com o comando: `php artisan serve`.

Após seguir esses passos, o projeto estará rodando em `http://localhost:8000`.

## Dados gerados por seeders

- Usuário para teste:
    - email → user@example.com
    - password → password
- Três lojas:
    - id = [1, 2, 3]
- Seis produtos:
    - Três produtos para cada loja e nenhum para loja_id = 3
