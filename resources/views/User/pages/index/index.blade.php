@extends('User.layouts.master')

@section('title', 'trang đầu tiên')

@section('content')
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
        @include('User.partial.product')
	</section>
@endsection
