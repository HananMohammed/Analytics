@extends('components.front.layouts.master')
@push('style')
    <link rel="stylesheet" href="{{asset_public('css/homepage.css')}}">
@endpush
@section('content')
   <div class="container">
       <div class="jumbotron">
           <h1 class="display-4">Analytics </h1>
           <p class="lead text-dark">
               a free web  Site for analytics still under deployment.
           </p>
           <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
       </div>
   </div>
@endsection
