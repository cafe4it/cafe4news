<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>
        @section('title')
            Café News
        @show
    </title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here" />
    @show
    @section('meta_author')
        <meta name="author" content="Nguyen Xuan Cong" />
    @show
    @section('meta_description')
        <meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
    @show

    <link rel="stylesheet" type="text/css" href="{{asset('semanticui/semantic.min.css')}}">


    <style>
        @section('styles')
        @show
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body id="home">
@include('site/layouts/top_menu')
@include('notifications')
<div class="twelve column row">
    <div class="column">
        @yield('content')
    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
<script src="{{asset('semanticui/semantic.min.js')}}"></script>
@yield('scripts')
</body>
</html>