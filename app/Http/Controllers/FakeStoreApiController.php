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
            return view('/catalogo/listado')->with('products',$productos);
        } else {
            return "Error".$response->status();
        }

        //$productos=(json_decode($response->body()));
    }

    public function productobyid(){
        
    }
}
