@extends('layouts.layout')
@section('content')
    <div class="wrapper pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
        <p class="toppings">Extra Toppings :</p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li>{{$topping}}</li>
            @endforeach
        </ul>
    <form action="/pizzas/{{$pizza->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Complete Order</button>
    </form>
    </div>
    <a href="/pizzas" class = 'back'><- Back to the Pizzas List</a>
@endsection