@extends('layout')

@section('header')
@endsection

@section('custom_css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ URL('CSS/product.css') }}"  rel="stylesheet">
@endsection


@section('eljos1')
    <div class="produsul mt-5 d-flex justify-content-center align-items-center flex-wrap">
        <div class="">
            <img src="{{ URL('images/'.$product->image) }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="">
            <h2 style="
                color: #272727;
                text-transform: uppercase;
                font-size: 30px;
                font-style: normal;
                font-weight: 400;
">{{ $product->name }}</h2>
            <p class="lead" style="
           color: #72AEC8;
            font-size: 40px;
            font-style: normal;
            font-weight: 500;
            ">Price: ${{ $product->price }}</p>
            <p style="
            color: #3A3A3A;
            font-size: 16px;
            font-style: normal;
            font-weight: 300;
            max-width: 600px;
            ">{{ $product->description }}</p>
        
            <div class="mt-3">
                <button class="produs"
                style="
                color: #FFFFFF;
                padding: 16px 50px;
                background: #72AEC8;
                text-transform: uppercase;
                border: none;
                outline: none;
                transition: all 0.5s ease-in;
                "
                >Buy now</button>
            </div>
        </div>
    </div>
@endsection

@section('eljos2')
@endsection




