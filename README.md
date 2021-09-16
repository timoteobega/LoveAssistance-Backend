# Love Assistance

Backend do CRUD dos produtos ofertados pela plataforma Love Assistance

## Antes de começar

As etapas descritas abaixo tem por objetivo te guiar na tarefa de clonar e reproduzir o projeto na sua máquina.

### Pré-requisitos 

**Obrigatório**
* Composer 2
* Laravel 8

**Opcionais**
* XAMPP 7.4.2

ou 

* Apache 2.4
* PHP 7.4
* MySQL 

Clonar o projeto do Github
```
git clone https://github.com/timoteobega/LoveAssistance-Backend.git
```

Acessar o diretório 
```
cd LoveAssistance-Backend
```

Instale todos os pacote necessários com o composer
```
composer install
```

Crie um arquivo .env baseado no arquivo .env.example e adicione as credencias do MySQL
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Gere a chave da aplicação
```
php artisan key:generate
```

## PARABÉNS!!! Você está com o backend do Love Assistance em funcionamento!!! 

Feito com ❤️ por [Timoteo BEga](https://github.com/timoteobega/)
