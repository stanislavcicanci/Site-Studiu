@extends('layout')

@section('header')
@section('custom_css')
<link href={{ URL('CSS/contact.css') }}  rel="stylesheet">
@section('active4', 'activ')

@endsection
@section('eljos1')
    <div class="about d-flex justify-content-center align-items-center">
        <h1 class="text-center">Contact</h1>
    </div>

    <div class="sec1_cont d-flex flex-wrap justify-content-center align-items-top">
        <div class="sec1_st_c flex-wrap ">
            <h2>Contact info</h2>
            <p>Tortor dignissim convallis aenean et tortor at risus viverra adipiscing.</p>
            <div class="sec1_el2_c d-flex flex-wrap">
                <div class="sec1_el2_1">
                    <h3>Office</h3>
                    <h4>730 Glenstone Ave 65802, Springfield, US</h4>
                    <h4>+123 222 333 44</h4>
                    <h4>+123 666 777 88</h4>
                    <h4>ministore@yandex.ru</h4>
                </div>
                <div class="sec1_el2_2">
                    <h3>Management</h3>
                    <h4>730 Glenstone Ave 65802, Springfield, US</h4>
                    <h4>+123 222 333 44</h4>
                    <h4>+123 666 777 88</h4>
                    <h4>ministore@gmail.com</h4>
                </div>
            </div>
        </div>
        <div class="sec1_dr_c">
            <h2>any questions?</h2>
            <p>Use the form below to get in touch with us.</p>
            <form action="">
                <div class="inputuri d-flex">
   <div class="inp_1 d-flex align-items-center">
    <input type="text" class="in_text" placeholder="Your full name *">
    <input type="text" class="in_text" placeholder="Your full name *">
   </div>
   <input type="phone" class="inp_2" name="" id="" placeholder="Phone number">
   <input type="text" class="inp_2" name="" id="" placeholder="Write your subject here">
   <input type="text" name="" id="" class="inp_2" placeholder="Write your message here *">
   <input type="button" value="Submit" class="contact_1b">
                </div>
            </form>
        </div>

    </div>

@endsection

@section('eljos2')

@endsection