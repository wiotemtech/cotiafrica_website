@extends('layouts.app')

@section('content')


<div class="landing-page">
    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Web Development" class="landing-image">
    <div class="overlay">
        <h1>Transform Your Workforce, Elevate Your Business
        </h1>

    </div>
</div>

<section class="photo-text-section">
    <div class="container">
        <div class="row" style="padding: 30px;">
            <div class="col-md-6">

                <img src="{{ asset('assets/images/ict train.jpg') }}" alt="" style="width: 100%; height:250px;" >

            </div>
            <div class="col-md-6 text-content">
                <h2 style="font-size: 25px; color:white;" >About The Programm</h2>
                <p style="font-size: 18px; text-align:justify">
                    Boost your organization's productivity and innovation with our expert-led
                    Corporate ICT Training. Our tailored programs equip your team with the
                    latest technologies and industry best practices, driving business growth
                     and transformation.
</p>
            </div>
        </div>
    </div>

      <!-- Corporate ICT Training Section -->
      <section id="ict-section">
        <div class="container">
            <h2 id="ict-title " class="text-center">Our Corporate ICT Training Programs</h2>
            <div class="row">
                <!-- Program 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card-t shadow-sm">
                        <h3 class="card-h">Cybersecurity Essentials</h3>
                        <p class="card-p">Learn to protect your organization's critical data and networks from cybersecurity threats.
                            Ideal for IT professionals looking to enhance their security skills.</p>
                    </div>
                </div>
                <!-- Program 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card-t shadow-sm">
                        <h3 class="card-h">Computer Networking</h3>
                        <p class="card-p">Master cloud technologies like AWS and Azure to optimize your organization’s IT infrastructure and improve operational efficiency.</p>
                    </div>
                </div>
                <!-- Program 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card-t shadow-sm">
                        <h3 class="card-h">Data Analysis</h3>
                        <p class="card-p">Equip your team with data analysis skills using tools like Power BI and Python to make data-driven decisions that improve business performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

            <!-- Who Can Apply Section -->
    <section id="who-can-apply">
        <div class="container">
            <h2>Who Can Apply for Corporate ICT Training</h2>
            <ul class="list-group">
                <li class="lgs-item-123">
                    <i class="fas fa-user"></i>
                    <span class="fwb-987">IT Professionals:</span>
                    <span>Upgrade your skills with our Corporate ICT training programs.</span>
                </li>
                <li class="lgs-item-123">
                    <i class="fas fa-graduation-cap"></i>
                    <span class="fwb-987">Students & Graduates:</span>
                    <span>Enhance your knowledge and gain practical ICT skills to boost your career prospects.</span>
                </li>
                <li class="lgs-item-123">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="fwb-987">Educators:</span>
                    <span>Gain advanced skills to integrate technology into your teaching methods.</span>
                </li>
                <li class="lgs-item-123">
                    <i class="fas fa-user-tie"></i>
                    <span class="fwb-987">Entrepreneurs:</span>
                    <span>Discover how to leverage ICT for business innovation and growth.</span>
                </li>
            </ul>
        </div>
    </section>








<div class="section-join" style="background-color:  white;">
    <h1 id="heading-join">Get Started With Our Corperate ICT Training</h1>
    <p  style="color: black; font-size: 18px;" >
    Contact us today to find the best training program for your team.<br>

        Together, let's break barriers and shatter glass ceilings. <br>


   </p>
    <!--<a href="contact.html" id="enroll-btn">Enroll Now</a>-->
    <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                            class="ok ms-lg-0" href="{{ route('ict-training') }}">
                            Enrole Now<i class="fa fa-arrow-right arrow-icon-1"></i></a>
</div>
















@endsection








