<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Email Notify

## Getting Started
1. remote and pull the latest version of the source code on your host
> git remote add your_name _https://github.com/FrigoreD/Rbroker-bot.git_

> git pull your_name
2. install with conposer
> composer install --optimize-autoloader --no-dev
3. make and edit .env file's lines
>mv .env.example .env

You need to change these lines
>DB_DATABASE=your_db_name

>DB_USERNAME=your_db_login

>DB_PASSWORD=your_db_password

> MAIL_MAILER=smtp

> MAIL_HOST=smtp.mail

> MAIL_PORT=465

> MAIL_USERNAME=your_email

> MAIL_PASSWORD=your_password

4. set key and migrate tables

> php artisan key:generate

>php artisan migrate

5. for deploy you can also use these

> php artisan config:cache

>php artisan route:cache

>php artisan view:cache

>php artisan storage:link
6. Factories
>php artisan db:seed --class=UserSeeder
7. local serve
>vite

>php artisan serve

> npm install

## Documentation

To use notify type in console
> php artisan schedule:work

### Model
model helps me to communicate with database and do it not direct but to MVC pattern


### Migrations
You can type your own table in method up with Schemma:create of Facades
it's simple to make new attributes and migrate in DB
It's usually test with Seeders to fill DB with some test values

### App
![img.png](img.png)



