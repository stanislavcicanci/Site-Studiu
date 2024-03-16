<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" href={{ URL('/images/Logo.svg') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @yield('custom_css')
    @vite(['resources/css/app.css','resources/css/layout.scss', 'resources/js/app.js'])
    <title>MiniStore</title>
</head>
<body>
  @yield('header')
  <div class="navig_t">
    <div class="navigarea container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
        <div class="col-md-3 mb-2 mb-md-0">
          <a href="{{ route('home') }}" class="d-inline-flex link-body-emphasis text-decoration-none">
           <img src={{ URL('/images/Logo.svg') }} alt="">
          </a>
        </div>
  
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 gap-4 ml-5">
          <li><a href={{ route('home') }} class="@yield('active1')">Home</a></li>
          <li><a href={{ route('about') }} class="@yield('active2')">About</a></li>
          <li><a href={{ route('shop') }} class="@yield('active3')">Shop</a></li>
          <li><a href={{ route('contact') }} class="@yield('active4')">Contact</a></li>
        </ul>
  
        <div class="col-md-3 text-end d-flex gap-3 align-items-center justify-content-end">
         <a href=""><i class="bi bi-search"></i></a>
         <a href={{ route('login') }}><i class="bi bi-person-fill"></i></a>
         <a href={{ route('logout') }}>
          @auth
          {{ auth()->user()->username }}   
          @endauth
        </a>
         <a href=''><i class="bi bi-cart3"></i>(0)</a>
        </div>
      </header>
    </div>
  </div>
      
      @yield('eljos1')
      <div class="conainer penuljos d-flex justify-content-space-around align-items-center flex-wrap">
       <div class="pen_pr">
        <h2 class="col-12">Subscribe Us now</h2>
        <p>Get latest news, updates and deals directly mailed to your inbox.</p>
       </div>
       <div class="pen_d d-flex align-items-center justify-content-center">
        <input type="text" name="" id="" placeholder="Your email address here"> <input type="button" value="Subscribe">
       </div>
      </div>
     
      @yield('eljos2')
      <div class="container">
        <h2 class="el2jt text-center mb-5">Shop our insta</h2>
        <div class="ultjos d-flex flex-wrap justify-content-center">
         <a href=""><img src={{ URL('/images/iphone10.svg') }} alt="iphone10"></a>
         <a href=""><img src={{ URL('/images/heavywatch.svg') }} alt="heavywatch"></a>
         <a href=""><img src={{ URL('/images/iphone11pro.svg') }} alt="iphone11pro"></a>
         <a href=""><img src={{ URL('/images/technologyhack.svg') }} alt="technologyhack"></a>
         <a href=""><img src={{ URL('/images/smallcamera.svg') }} alt="smallcamera"></a>
        </div>
      </div>
      
      @yield('footer')
      <footer class="footer d-flex flex-wrap justify-content-center align-items-top">
       <div class="prim_f">
        <a href={{ route('home') }} class="footer_logo"><img src={{ URL('/images/Logo.svg') }} alt=""></a>
        <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa volutpat aenean odio erat nullam fringilla.</p>
        <div class="social d-flex justify-content-start align-items-center">
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-twitter"></i></a>  
          <a href=""><i class="bi bi-linkedin"></i></a>
          <a href=""><i class="bi bi-youtube"></i></a>
        </div>
       </div>
        <div class="doi_f">
          <h3>Quick links</h3>
          <ul class="nav d-flex flex-column mb-2 justify-content-center">
            <li><a href={{ route('home') }} class="@yield('active1')">Home</a></li>
            <li><a href={{ route('about') }} class="@yield('active2')">About</a></li>
            <li><a href={{ route('shop') }} class="@yield('active3')">Shop</a></li>
            <li><a href={{ route('contact') }} class="@yield('active4')">Contact</a></li>
          </ul>
        </div>

        <div class="trei_f">
          <h3>Help & info</h3>
          <ul class="nav d-flex flex-column mb-2 justify-content-center">
            <li><a href="" >Track Your Order</a></li>
            <li><a href="" >Returns policies</a></li>
            <li><a href="" >Shipping + Delivery </a></li>
            <li><a href="" >Contact Us</a></li>
          </ul>
        </div>

        <div class="patru_f d-flex flex-column justify-content-center text-left">
          <h3>Contact us</h3>
          <div class="el_pat_f">
            <p>Do you have any queries or suggestions?</p>
          <a href="">stanislavacicanci@gmail.com</a>
          </div>
         <div class="el_pat_f">
          <p>If you need support? Just give us a call.</p>
          <a href="">+373 68 111 234</a>
         </div>
        </div>
      
        <hr>
      
      </footer>
      <p class="copy text-center justify-content-center align-items-center">© Copyright 2023 MiniStore. Code by stanislav_cicanci</p>

    </body>
</html>