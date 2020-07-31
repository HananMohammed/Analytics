@extends('components.front.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-sm-6 text-success card-title">
                <h1 style="margin-top: -110px;" data-aos="fade-right" > @lang('front.youtube_analytics')</h1>
            </div>
            <div class="col-sm-6 ml-5" data-aos="flip-left"
                                       data-aos-easing="ease-out-cubic"
                                       data-aos-duration="2000" >
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="{{asset_public('images/youtube.jpg')}}"alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">@lang('front.ch')</h5>
                        <hr>
                        <p class="card-text"><label class="card-text-label">@lang('front.link') </label><label class="text-success ml-5 label-ar">{{$data['url']}}</label> </p>
                        <p class="card-text"> <label class="card-text-label">@lang('front.subNumber')</label><label class="text-success ml-5 label-ar">{{$subscribers}}</label> </p>
                        <p class="card-text"><label class="card-text-label">@lang('front.count') </label><label class="text-success ml-5 label-ar">{{$viewCount}}</label> </p>
                        <p class="card-text"><label class="card-text-label">@lang('front.total')</label><label class="text-success ml-5 label-ar">{{$videoCount}}</label> </p>
                        <a href="{{route('subscriber',app()->getLocale())}}" class="btn btn-success ml-5" style="margin-left: 30%!important;" >check new channel</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
