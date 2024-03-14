@extends('layout')

@section('header')
   @section('custom_css')
   <link href={{ URL('CSS/about.css') }}  rel="stylesheet">

@section('active2', 'activ')

@endsection

@section('eljos1')

    <div class="about d-flex justify-content-center align-items-center">
        <h1 class="text-center">About us</h1>
    </div>

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

    <section class="sec_1 d-flex justify-content-center align-items-center flex-wrap">
        <img src={{ URL('images/about_sec1.png') }} alt="">
        <div class="el_sec1">
            <h2>How was Ministore Found?</h2>
            <p>Risus augue curabitur diam senectus congue velit et. Sed vitae metus nibh sit era. Nulla adipiscing pharetra pellentesque maecenas odio eros at. Et libero vulputate amet duis erat volutpat vitae eget. Sed vitae metus nibh sit era. Nulla adipiscing pharetra pellentesque maecenas odio eros at. Quam libero etiam et in ac at quis. <br>
                Sed vitae metus nibh sit era. Nulla adipiscing pharetra pellentesque maecenas odio eros at. Et libero vulputate amet duis erat volutpat vitae eget. Quam libero etiam et in ac at quis. Risus augue curabitur diam senectus congue velit et. </p>

            <button>Shop Our store</button>
            </div>
    </section>

    <div class="slider text-center  d-flex justify-content-center align-items-center text-center">
        <i class="bi bi-quote" style="transform: rotate(180deg); font-size: 60px; color: #EBEFF1;"></i>
        <p>“Tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis Pellen tesque pretium feugiat vel morbi suspen dise sagittis lorem habi tasse morbi.”</p>
    </div>
@endsection

@section('eljos2')

@endsection

@section('footer')

@endsection


