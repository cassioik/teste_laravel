# Teste Laravel

1. Clone the project: git clone https://github.com/cassioik/teste_laravel.git
2. run `composer install`
3. Make a copy from '.env.example' to '.env'
4. run `php artisan migrate` after creating database
5. run `php artisan db:seed --class=PermissionTableSeeder`
6. run `php artisan key:generate` to fill "APP_KEY" in .env file
7. run `php artisan config:cache`
8. run `php artisan serve`