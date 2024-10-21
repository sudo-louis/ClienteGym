<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FakeStoreApiController extends Controller
{
    public function productos(){
        $response=Http::get('https://fakestoreapi.com/products');
        if ($response->successful()) {
            //dd(json_decode($response->body()));
            $productos=json_decode($response->body());
            return view('catalogo.listado')->with('products', $productos);
        }else {
            return "Error".$response->status();
        }
    }

    public function productobyid($id){
        $response=Http::get('https://fakestoreapi.com/products/'.$id);
        if ($response->successful()) {
            //dd(json_decode($response->body()));
            $producto=json_decode($response->body());
            return view('/catalogo/detalle')->with('product',$producto);
        }else {
            return "Error".$response->status();
        }
    }
}
