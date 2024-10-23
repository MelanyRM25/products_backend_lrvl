<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

class ProductController extends Controller
{
function index(){
    return Product::all(); //muestra todos los productos
}
    function store(Request $request){
        return Product::create($request->all()); //para guardar 
}
function update(Request $request, Product $product){
$product ->update($request->all()); //para actualizar
return $product;
}
function show (Product $product){
    return $product;
}
function destroy(Product $product){

    $product->delete(); //eliminar 
    return $product;
}
}