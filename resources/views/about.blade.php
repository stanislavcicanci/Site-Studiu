@extends('layout')

@section('header')
   @section('custom_css')
   <link href={{ URL('CSS/about.css') }}  rel="stylesheet">

@section('active2', 'activ')

@endsection

@section('eljos1')
    <div class="privilegii d-flex flex-wrap justify-content-center">
        <div class="priv d-flex justify-content-top">
            <a href=""><i class="bi bi-cart3"></i></a>
            <div class="min_priv">
                <h4>Free delivery</h4>
                <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="priv d-flex justify-content-top">
            <a href=""><i class="bi bi-award"></i></a>
            <div class="min_priv">
                <h4>Quality guarantee</h4>
                <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
            </div>
        </div>
        <div class="priv d-flex justify-content-top">
            <a href=""><i class="bi bi-cup-hot"></i></a>
            <div class="min_priv">
                <h4>Daily offers</h4>
                <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
            </div>
        </div>
        <div class="priv d-flex justify-content-top">
            <a href=""><i class="bi bi-shield-check"></i></a>
            <div class="min_priv">
                <h4>100% secure payment</h4>
                <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
            </div>
        </div>
    </div>
@endsection

@section('eljos2')

@endsection

@section('footer')

@endsection


