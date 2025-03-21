@extends('layouts.app')

@section('content')

<section style="
background-image: url('{{ asset('assets/images/event.avif') }}');
 margin-top:120px;"  class="landing-section ">
    <div class="overlay"></div>
    <div class="landing-content">
        <h1>Upcoming Events</h1>
        <p style="font-weight: bold; padding-left: 30px; ;">"Stay updated on tech events and workshops."</p>
    </div>
</section>


<div class="row mt-1"></div>

<section id="blog" class="py-5 bg-light mt-1">
    <div class="container">
        
        <div class="row">
            @foreach ($allevents as $event)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{asset('storage/' . $event->blog_image)}}" class="card-img-top" height="200" alt="Blog Image">
                    <div class="card-body">
                        <a href="{{ route('events.show', ['id' => $event->id, 'title' => \Str::slug($event->title)]) }}" class="text-dark custom-link"style="text-decoration:none;"><h5 class="card-title truncate">{{$event->title}}</h5></a>
                        <p style="font-size:20px; font-weight: bolder;"><small><i class="fa fa-calendar-alt"></i> {{ optional($event->created_at)->format('Y-m-d') }}</small></p>
                        <p class="card-text truncate">{{$event->meta_description}}</p>
                        <a href="{{ route('events.show', ['id' => $event->id, 'title' => \Str::slug($event->title)]) }}" class="text-app " style="text-decoration:none;">Read More <i class="fa fa-chevron-right"></i></a>
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
