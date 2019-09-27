
## Proposito
Desarrollar una solucion web en la cual se pueda dar respuesta a las necesidades de contexto industrial electrica

## requisitos

 php >= 7.2.18
 apache >= 2.4.39
 mysql >= 5.7.26
 Laravel >= 5.5
 composer >= 1.9.0
 dompdf >= 0.8.3

## Iniciacion 

Requiere la libreria dompdf de laravel
    composer require barryvdh/laravel-dompdf
Iniciamos el aplicativo en modo homestead
    php artisan serve
Creamos las tablas y generamos los datos 
    php artisan migrate:refresh --seed
