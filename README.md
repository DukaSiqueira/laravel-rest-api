# Laravel RESTful API 

Este projeto têm como finalidade desenvolver endpoints de APIRest em PHP, Laravel e Mysql, juntamente com uma autenticação via JWT.
Para a autenticação foi escolhido o Passport que pode ser facilmente instalado com o composer e é integrada ao Laravel.

# Instalação do MySQL

#### 1. No Windows

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

#### 2. No Linux

Na linha de comando do Linux, digite os comandos a seguir:

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

# Instalação do PHP e composer

#### No Windows

#### Composer:
##### 1. Download do Composer pelo link: https://getcomposer.org/download/
##### 2. Abra o arquivo .exe e faça a instalação do composer
##### 3. Digite o comando composer -v para verificar se foi instalado normalmente

#### PHP:
##### 1. Download da versão 8.2 (Thread Safe) do PHP: https://windows.php.net/download#php-8.2
##### 2. Abra o arquivo .exe e faça a instalação do PHP
##### 3. Digite o comando PHP -v para verificar se foi instalado normalmente

#### No Linux

#### Abra uma linha de comando no Linux e digite os comandos abaixo

#### Composer: 

```
1. sudo apt-get install composer
2. composer -v
```

#### PHP: 
```
1. sudo apt-get install php
2. php -v
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
3. php artisan passport:install
```
