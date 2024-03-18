@extends('layout')

@section('header')
@endsection
@section('custom_css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href={{ URL('CSS/shop.css') }}  rel="stylesheet">

@section('active3', 'activ')

@endsection
@section('eljos1')

<div class="shop d-flex justify-content-center align-items-center">
    <h1 class="text-center">Shop</h1>
</div>

<div class="all_prod d-flex justify-content-center align-items-center flex-wrap">
  @foreach ($products as $product)
  <a href="{{ route('prod.show', ['id' => $product->id]) }}" style="all: initial;">
      <div class="prod">
          <div class="img">
              <img src="{{ URL('images/'.$product->image) }}" alt="">
          </div>
          <div class="cont d-flex align-items-center">
              <h3>{{ $product->name }}</h3>
              <p>${{ $product->price }}</p>
              <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button>
          </div>
      </div>
  </a>
  @endforeach
</div>
{{ $products->links() }}
@endsection

@section('eljos2')

<script>
    var elemente = document.querySelectorAll(".prod");
    var buttons = document.querySelectorAll(".addToCart");
    
    elemente.forEach((element, index) => {
        element.addEventListener("mouseenter", function() {
            buttons[index].classList.add("active");
        });

        element.addEventListener("mouseleave", function() {
            buttons[index].classList.remove("active");
        });

       
    });
</script>


@endsection

