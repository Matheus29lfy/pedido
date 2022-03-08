# Laravel-sistema-de-controle-de-produtos

### Sobre
**Pedido

### Instalação

1. Clone repositório

2. Mude para o diretório

3. Instalar dependências 
```
composer install
```
4. Update do composer
```
composer update
```
5. Renomei o arquivo .env.exemple para .env

6. Gerando a chave para a aplicação
```
php artisan key:generate
```
7. Subir servidor
```
php artisan serve
```
Obs:
Em Teste-Vendas/app/Providers/AppServiceProvider.php
Comente o seguinte trecho:
```
 if (env('APP_ENV') !== 'production') {
     URL::forceScheme('https');
 }
```



