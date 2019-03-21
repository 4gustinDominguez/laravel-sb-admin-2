Laravel and sb-admin-2 theme
--------------

Description  ......

--------------

Utiliza una plantilla base **sb-admin2**.

#### Manual 

Para utilizar esta plantilla primero la descaragamos https://startbootstrap.com/themes/sb-admin-2/ la colocamos dentro de la carpeta ./resources/theme
`mkdir ./resources/theme`

Copiamos el gulpfile del theme en el root de laravel

Comprobar el packages.json del theme y colocar lo que haga falta en el packages.json del root de laravel 

Eliminar de ./resources/theme  los siguientes ficheros 

`` *.html gulpfile.js package*``
 
Modificar el gulpfile para que use los ficheros que estan dentro de ./resources/theme y que el lugar donde los almacene los css js y vendor sea 
*./public* 



1. composer install

2. npm install

###### Check gulp file 
`gulp default`
 
`gulp watch`


#### Auto 

git clone this repo

1. composer install

2. npm install

###### Check gulp file 
`gulp default`
 
`gulp watch`


