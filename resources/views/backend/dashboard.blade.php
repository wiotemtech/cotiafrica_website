@extends('backend.layouts.app')

@section('content')
<div class="w3-white w3-round w3-border">
    <header class="w3-padding-large w3-border-bottom">
        <h1 class="w3-xlarge" style="margin:0">Dashboard</h1>
        <p class="w3-text-grey" style="margin-bottom:0">Manage published content and client work.</p>
    </header>
    <div class="w3-row-padding w3-padding-large">
        <div class="w3-half w3-margin-bottom">
            <a href="{{ route('blogs.index') }}" class="w3-block w3-border w3-round w3-padding-large w3-hover-light-grey" style="text-decoration:none">
                <i class="fa fa-book w3-text-blue w3-xlarge" aria-hidden="true"></i>
                <h2 class="w3-large">Blogs</h2>
                <p class="w3-text-grey">Create and update website articles.</p>
            </a>
        </div>
        <div class="w3-half w3-margin-bottom">
            <a href="{{ route('works.index') }}" class="w3-block w3-border w3-round w3-padding-large w3-hover-light-grey" style="text-decoration:none">
                <i class="fa fa-briefcase w3-text-green w3-xlarge" aria-hidden="true"></i>
                <h2 class="w3-large">Work &amp; Contracts</h2>
                <p class="w3-text-grey">Publish approved project and client summaries.</p>
            </a>
        </div>
        <div class="w3-half w3-margin-bottom">
            <a href="{{ route('events.index') }}" class="w3-block w3-border w3-round w3-padding-large w3-hover-light-grey" style="text-decoration:none">
                <i class="fa fa-calendar w3-text-blue w3-xlarge" aria-hidden="true"></i>
                <h2 class="w3-large">Events</h2>
                <p class="w3-text-grey">Publish upcoming events and past event recordings.</p>
            </a>
        </div>
    </div>
</div>
@endsection
