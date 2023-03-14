# Laravel RESTful API 

Este projeto é uma simples API crud feita em Laravel

# Configuração do MySQL no Windows

Faça o download do MySQL server (Segunda opção): https://dev.mysql.com/downloads/installer/

Após a instalação, abre o terminal do MySQL e digite os comandos a seguir: 

```
CREATE DATABASE nome_do_banco_de_dados;
```
```
CREATE USER 'nome_do_usuario'@'localhost' IDENTIFIED BY 'senha_do_usuario';
```
```
GRANT ALL PRIVILEGES ON nome_do_banco_de_dados.* TO 'nome_do_usuario'@'localhost';
```
```
FLUSH PRIVILEGES;
```

# Configuração no Linux


```
sudo apt-get update
```
```
sudo apt-get install mysql-server
```
```
sudo systemctl start mysql
```
```
sudo mysql -u root -p
```
```
CREATE DATABASE nome_do_banco_de_dados;
```
```
CREATE USER 'nome_do_usuario'@'localhost' IDENTIFIED BY 'senha_do_usuario';
```
```
GRANT ALL PRIVILEGES ON nome_do_banco_de_dados.* TO 'nome_do_usuario'@'localhost';
```
```
FLUSH PRIVILEGES;
```

# Clonando e configurando

Após clonar o repositório, configure um novo é necessário configurar um banco no seu MySQL server e atribuir as credenciais do usuário do MySQL nas variáveis de ambiente da aplicação Laravel (arquivo .env).

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=nome_do_usuario
DB_PASSWORD=senha_do_usuario
```

A seguir utilize os seguintes comandos no diretório onde foi clonada a aplicação para instalar os pacotes do composer e rodar as migrations:

```
1. composer install
2. php artisan migrate
3. php artisan db:seed
```
