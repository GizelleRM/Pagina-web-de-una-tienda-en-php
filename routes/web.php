<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;


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

Route::get('products/create', function(){
    return view('products.create');
}) -> name('products.create');

Route::post('products', function(Request $request){
    $newProduct= new Product;
    $newProduct->description = $request->input(('description'));
    $newProduct->price = $request->input(('price'));
    $newProduct->save();

})->name('products.store');