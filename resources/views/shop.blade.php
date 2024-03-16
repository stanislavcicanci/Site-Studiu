@extends('layout')

@section('header')
@endsection
@section('custom_css')
<link href={{ URL('CSS/shop.css') }}  rel="stylesheet">

@section('active3', 'activ')

@endsection
@section('eljos1')

<div class="shop d-flex justify-content-center align-items-center">
    <h1 class="text-center">Shop</h1>
</div>

<div class="all_prod d-flex justify-content-center align-items-center flex-wrap">
    <div class="prod">
      <div class="img">
        <img src="{{ URL('images/iphone10.svg') }}" alt="">
      </div>
        <div class="cont d-flex align-items-center">
            <h3>iPhone 10</h3>
            <p>$1200</p>
          <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
        </div>
    </div>
    <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
      <div class="prod">
        <div class="img">
          <img src="{{ URL('images/iphone10.svg') }}" alt="">
        </div>
          <div class="cont d-flex align-items-center">
              <h3>iPhone 10</h3>
              <p>$1200</p>
            <a href="">  <button class="addToCart">Add to cart  <i class="bi bi-cart-plus-fill"></i></button></a>
          </div>
      </div>
</div>
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

