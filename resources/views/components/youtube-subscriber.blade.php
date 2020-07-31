@extends('components.front.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-sm-12 pb-5 text-light url-form">
                <h5 class="sub"> @lang('front.youtube')</h5>
            </div>
            <div class="col-sm-12 pt-3 pb-3 url-form">
                <form action="{{route('youtube',app()->getLocale())}}" method="post">
                    @csrf
                    <input class="form-control" type="url" name="url" placeholder="@lang('front.url')">
                     @if(isset($wrongLink))
                       <br>
                        <span class="error" style="color: red;">{{$wrongLink }}</span>
                    <br>
                    @endif

                    <input type="submit" class="btn btn-success mt-5 ml-5 btn-subscribe" value="get Data">
                </form>
            </div>
        </div>

    </div>
@endsection
