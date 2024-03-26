@extends('User.layouts.master')

@section('title', 'Shop')

@section('content')


    <header class="header-v4">
        @include('User.partial.header')
    </header>

    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            @include('User.partial.product')
        </div>
    </div>

@endsection
