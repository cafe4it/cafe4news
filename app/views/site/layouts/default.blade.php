<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <title>
        @section('title')
        Laravel 4 Sample Site
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
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('bootstrap3/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap3/css/bootstrap-theme.min.css')}}">

    <style>
        body {
            padding: 60px 0;
        }
        @section('styles')
        @show
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<!-- To make sticky footer need to wrap in a div -->
<div id="wrap">
    <!-- Navbar -->
    <div class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    @if (Auth::check())
                    @if (Auth::user()->hasRole('admin'))
                    <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                    @endif
                    <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                    <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                    @else
                    <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Đăng nhập</a></li>
                    <li {{ (Request::is('user/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Đăng ký</a></li>
                    @endif
                </ul>
                <!-- ./ nav-collapse -->
            </div>
        </div>
    </div>
    <!-- ./ navbar -->
    <!-- Container -->
    <div class="container">
        <!-- Notifications -->
        @include('notifications')
        <!-- ./ notifications -->
        <!-- Content -->
        @yield('content')
        <!-- ./ content -->
    </div>
    <!-- ./ container -->
    <!-- the following div is needed to make a sticky footer -->
    <div id="push"></div>
</div>
<!-- ./wrap -->
<div id="footer">
    <div class="container">
        <p class="muted credit">Laravel 4 Starter Site on <a href="https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site">Github</a>.</p>
    </div>
</div>
<!-- Javascripts
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="{{asset('bootstrap3/js/bootstrap.min.js')}}"></script>
@yield('scripts')
</body>
</html>