<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizza = [
            ['type'=>'Hawaiian','base'=>'chessy crust','price'=>'$50'],
            ['type'=>'Volcano','base'=>'garlic crust','price'=>'$40'],
            ['type'=>'Veg Supreme','base'=>'thin & crispy','price'=>'$20']
        ];
        return view('pizza',['pizzas'=>$pizza]);
    }

    public function show($id){
        return view('details',['id'=>$id]);
    }
}
