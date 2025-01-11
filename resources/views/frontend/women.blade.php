
@extends('layouts.app')

@section('content')

<div class="landing-page">
    <img src="{{ asset('assets/images/rr.jpg') }}" alt="Web Development" class="landing-image">
    <div class="overlay">
        <h1>The Rise Of Women In Tech</h1>

    </div>
</div>

<section class="photo-text-section1" style="background-color: #e8f0ff;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <img src="{{ asset('assets/images/rr.jpg') }}" alt="" style="width: 100%; height:300px;" >

            </div>
            <div class="col-md-6 text-content" style="margin-top: 16px;">
                <h2 style="font-size: 25px; color: #1e88e5;" >About The Programm</h2>
                <p style="font-size: 18px; color:black;text-align:justify;">
                We recognize the significance of diversity in driving innovation and growth in the
                 tech industry. Our Women in Tech initiative aims to bridge the gender gap by
                 providing a supportive ecosystem for women to thrive. Through mentorship programs,
                  networking events, and specialized training, we empower women to overcome
                  obstacles and achieve their full potential.
</p>
            </div>
        </div>
    </div>
</section>


<!-- Women in Tech Section -->
<section id="women-in-tech">
    <div class="container">
        <h2>Empowering Women in Tech</h2>
        <p>Women have played a pivotal role in the technology sector, breaking barriers and leading
             innovations that shape our world. <br>From coding to leadership, their contributions are
             invaluable. Our initiative aims to support, educate, and inspire <br>women to thrive in
             tech careers, fostering a more diverse and inclusive industry.</p>
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-laptop-code icon"></i>
                <h4>Coding & Development</h4>
                <p>Encouraging women to excel in software development and programming languages.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-users icon"></i>
                <h4>Community Building</h4>
                <p>Creating supportive networks for women to share experiences and opportunities.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-chalkboard-teacher icon"></i>
                <h4>Education & Mentorship</h4>
                <p>Providing resources and mentorship to nurture the next generation of female tech leaders.</p>
            </div>
        </div>
    </div>
</section>





<div class="section-join">
    <h1 id="heading-join">Join Our Tallent Community</h1>
    <p  style="color: black; font-size: 18px;" >
        Together, let's break barriers and shatter glass ceilings. <br>
        Become part of our vibrant network of women who are redefining the future of tech.

   </p>
    <!--<a href="contact.html" id="enroll-btn">Enroll Now</a>-->
    <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                            class="ok ms-lg-0" href="{{ route('ict-training') }}">
                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>
</div>


























@endsection
