@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/w3pro-4.13.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/w3-theme.css') }}">
    <div class="row mt-5"></div>

<section id="blogshow" class="py-5 container mt-5">
    <div class="w3-card-4 w3-light-grey w3-padding-16 p-3">
        <h4 class="text-center display-4 font-weight-bold">{{$allevents->title}}</h4>
        <p style="font-size:20px; font-weight: bolder;"><small>Published on {{ optional($allevents->created_at)->format('Y-m-d') }}</small></p>
        <img src="{{asset('storage/' . $allevents->blog_image)}}" width="100%" alt="">
        <hr>
      
        <p>{!! $allevents->content !!}</p>
        <a href="">REGISTER FOR THE EVENT</a>
    </div>

</section>
@endsection

