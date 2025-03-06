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
    $products = Product::all();
    //tambien puede ser de esta forma
    //$products = Products::orderBy('created_at', 'desc')-> get();
    return view('products.index', compact('products')); //devolver una vista
}) ->name('products.index');

Route::get('products/create', function(){
    return view('products.create');
}) -> name('products.create');

Route::post('products', function(Request $request){
    $newProduct= new Product;
    $newProduct->description = $request->input(('description'));
    $newProduct->price = $request->input(('price'));
    $newProduct->save();

    return redirect()->route('products.index') -> with('info', 'Producto creado exitosamente');
})->name('products.store');