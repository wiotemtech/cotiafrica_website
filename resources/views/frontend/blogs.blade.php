@extends('layouts.app')

@section('content')

<section style="
background-image: url('{{ asset('assets/images/test.png') }}');
 margin-top:120px;"  class="landing-section ">
    <div class="overlay"></div>
    <div class="landing-content">
        <h1>Tech Trends & <span style="color: #1E88E5"> Tips</span></h1>
        <p style="font-weight: bold; padding-left: 30px; ;">"Get the latest in software engineering and tech trends."</p>
    </div>
</section>


<div class="row mt-1"></div>

<section id="blog" class="py-5 bg-light mt-1">
    <div class="container">
        
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{asset('storage/' . $blog->blog_image)}}" class="card-img-top" height="200" alt="Blog Image">
                    <div class="card-body">
                        <a href="{{ route('blogs.show', ['id' => $blog->id, 'title' => \Str::slug($blog->title)]) }}" class="text-dark custom-link"style="text-decoration:none;"><h5 class="card-title truncate">{{$blog->title}}</h5></a>
                        <p style="font-size:20px; font-weight: bolder;"><small><i class="fa fa-calendar-alt"></i>  {{ optional($blog->created_at)->format('Y-m-d') }}</small></p>
                        <p class="card-text truncate">{{$blog->meta_description}}</p>
                        <a href="{{ route('blogs.show', ['id' => $blog->id, 'title' => \Str::slug($blog->title)]) }}" class="text-app " style="text-decoration:none;">Read More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="w3-center">
        </div>

    </div>
</section>
@endsection
