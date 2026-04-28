# ASTRO



### Install

- composer install
- php artisan passport:keys
- php artisan vendor:publish --tag=passport-config


### Config ARUBA SERVER

- create .htaccess file

`<IfModule mod_rewrite.c>
    RewriteEngine On

    RewriteRule ^$ public/ [L]

    RewriteCond %{REQUEST_URI} !^/public/
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>`
