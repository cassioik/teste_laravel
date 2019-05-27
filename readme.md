# Teste Laravel

1. Clone o projeto: git clone https://github.com/cassioik/teste_laravel.git
2. Rode o comando `composer install`
3. Copie e renomeio o arquivo '.env.example' para '.env' e faça as configurações do banco
4. Rode o comando `php artisan migrate` depois de criar o banco
5. Rode o comando `php artisan db:seed --class=PermissionTableSeeder` para criar as permissões padrões
6. Rode o comando `php artisan key:generate` para preencher o "APP_KEY" no arquivo .env
7. Rode o comando `php artisan config:cache`
8. Rode o comando `php artisan serve`

### Nesse projeto estou testando alguns itens que pretendo sempre usar nos projetos:
1. Perfis e permissões de usuario: spatie/laravel-permission
2. Log de ações do usuario: spatie/laravel-activitylog
3. Softdelete 