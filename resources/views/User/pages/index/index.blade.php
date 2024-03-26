@extends('User.layouts.master')

@section('title', 'trang đầu tiên')

@section('content')

    <header>
        @include('User.partial.header')
    </header>

    {{-- <h1>Xin chào, đây là trang chào mừng!</h1> --}}
    <!-- Slider -->
    <section class="section-slide">
        @include('User.partial.slider')
    </section>


    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        @include('User.partial.banner')
    </div>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Product Overview
                </h3>
            </div>
            @include('User.partial.product')
        </div>
    </section>
@endsection
