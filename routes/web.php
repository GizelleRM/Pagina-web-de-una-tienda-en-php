<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return 'Esta es la url raíz';
});

//2 rutas con el mismo nombre pero diferente metodo 
Route::post('/', function(){
    return 'Url raiz por el método post';
});

//aqui se van a cargar todo el listado de los productos
Route::get('products', function(){
    return view('products.index'); //devolver una vista
}) ->name('products.index');

//para crear nuevo producto minuto 2 video 5
Route::get('products/create', function(){
    return view('products.create');
}) -> name('products.create');