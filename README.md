<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalação

Clonar o repositório

    git clone https://github.com/nathaliapavan/laravel-shortner-url.git

Entrar na pasta do projeto

    cd laravel-shortner-url

Instalar todas as dependências via Composer

    composer install
    
Instalar e rodar as dependências NPM

    npm install && npm run dev

Copiar o arquivo .env.example e fazer as configurações necessárias no arquivo .env

    cp .env.example .env

Gerar uma chave para a aplicação

    php artisan key:generate
    
Configura cronjob de limpeza das urls expiradas a cada hora

    0 * * * * cd /laravel-shortener-url && php artisan schedule:run >> /dev/null 2>&1
    
Comando para forçar a limpeza das urls expiradas

    php artisan url:clear_expired

Executar as migrações no banco de dados (**defina a conexão com o banco de dados no arquivo .env antes dessa etapa**)

    php artisan migrate

Iniciar o servidor de desenvolvimento local

    php artisan serve

Acessar o servidor em http://127.0.0.1:8000

**Lista de comandos**

    git clone https://github.com/nathaliapavan/laravel-shortner-url.git
    cd laravel-shortner-url
    composer install
    npm install && npm run dev
    cp .env.example .env
    php artisan key:generate
    
**Certifique-se de definir as informações de conexão do banco de dados antes de executar as migrações**

    php artisan migrate
    php artisan serve

Link da documentação no Postman https://documenter.getpostman.com/view/1162481/TzeXkT3a 
