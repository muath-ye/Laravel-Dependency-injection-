<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>🧨 @yield('page_title', 'BySwadi')</title>

    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

    <!-- Styles -->
    @include('Style')
</head>
<body class="scrollbar-lg">
@include('nav')
<div class="container">
    @yield('content')
    @yield('Payment')
    @guest
        <p><small><b><i>Choose payment method</i></b> : <a href="{{route('view.payment')}}?kuraimi">Kuraimi</a> | <a href="{{route('view.payment')}}?credit">Credit</a> | <a href="{{route('view.payment')}}?paypal">PayPal</a> | <a href="{{route('view.payment')}}?coupon">Coupon</a></small></p>
    @else
        <p><small><i>{{auth()->user()->name}}</i> : <a href="mailto:{{auth()->user()->email}}">{{auth()->user()->email}}</a></small></p>
        <p><small><b><i>Choose payment method</i></b> : <a href="{{route('view.payment')}}?kuraimi">Kuraimi</a> | <a href="{{route('view.payment')}}?credit">Credit</a> | <a href="{{route('view.payment')}}?paypal">PayPal</a> | <a href="{{route('view.payment')}}?coupon">Coupon</a></small></p>
    @endguest
</div>
</body>
</html>
