<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @if (session()->get('locale') == 'ar' || session()->get('locale') == null)
        <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700&display=swap&subset=arabic"
              rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset_public('css/stylear.css') }}" media="all" />
    @else
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap"
              rel="stylesheet">
    @endif
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset_public('css/homepage.css') }}" media="all" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top ">
    <div class="container-fluid">
        <a href="#" class="navbar-brand font-italic font-weight-bold " >
            <img   style="max-height:50px;" src="{{asset_public('images/news.jpg')}}">
        </a>
        @if(\Illuminate\Support\Facades\Request::method() !='POST')
         <div class="languages px-4">
            <a class="text-uppercase mainclr2" href="{{route('language',trans('nav.language'))}}">{{trans('nav.language')}}</a>
        </div>
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenue">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse "  id ="navMenue">
            <ul class="navbar-nav  ml-auto ">
                <li class="nav-item " >
                    <a href="{{route('home',app()->getLocale())}}" class="nav-link">@lang('front.home')</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('subscriber',app()->getLocale())}}" class="nav-link">@lang('front.analysis')</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">@lang('front.about')</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a href="#" class="nav-link">@lang('front.contact')</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">@lang('front.register') </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{route('login',app()->getLocale())}}" class="nav-link">@lang('front.login')</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
@yield('content')

<footer class="text-light">
    <div>
        <p class="footer mt-5 mb-3 paragraph">&copy; 2020 - @lang('front.rights') </p>
        <div class="social-menu">
            <ul>
                <li><a href=""><i class="fa fa-facebook" id="#fb"></i></a></li>
                <li><a href=""><i class="fa fa-twitter" id="#tw"></i></a></li>
                <li><a href=""><i class="fa fa-instagram" id ="#insta"></i></a></li>
                <li><a href=""><i class="fa fa-youtube" id ="#you"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin" id="#linked"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset_public('js/script.js')}}"></script>
</body>
</html>
