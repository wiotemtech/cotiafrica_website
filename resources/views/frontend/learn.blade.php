@extends('layouts.app')

@section('content')
<div class="landing-page">
    <img src="{{ asset('assets/images/web2.jpg') }}" alt="Web Development" class="landing-image">
    <div class="overlay">
        <h1>Become a Web Developer</h1>
        <p style="color: #ffc107;">Start your journey in web development today!</p>
    </div>
</div>

<section class="photo-text-section1" style="background-color: #e8f0ff;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <img src="{{ asset('assets/images/web2.jpg') }}" alt="" style="width: 100%; height:300px;" >

            </div>
            <div class="col-md-6 text-content" style="margin-top: 16px;">
                <h2 style="font-size: 25px; color: #1e88e5;" >About The Programm</h2>
                <p style="font-size: 18px; color:black;text-align:justify">


          Unlock the world of coding with our comprehensive programming courses designed for all
          levels,from beginners to advanced developers.Learn essential skills,explore modern
          programming languages,and build real-world projects to become a proficient coder ready
          to excel in the tech industry.
                </p>
            </div>
        </div>
    </div>
</section>
<!--COURSE OUTLINE SECTION-->
<section id="ercdv-course-outline-section">
    <div class="ercdv-container">
        <h2 class="ercdv-section-title" style="font-size: 25px;">Course Outline</h2>

        <div class="ercdv-course-content">
            <!-- Card 1 -->
<div class="ercdv-card">
    <ul class="ercdv-course-outline">
        <li>Understand the fundamentals of deploying front-end projects on various platforms, ensuring a smooth launch process.</li>
        <li>Implement real-time updates and dynamic features in your applications using websockets for instant communication.</li>
        <li>Build mobile-responsive websites that adjust effortlessly across devices, offering a flawless user experience on all screens.</li>
        <li>Get hands-on experience with powerful front-end libraries like Vue.js and React to create modern and feature-rich web applications.</li>
    </ul>
</div>

<!-- Card 2 -->
<div class="ercdv-card">
    <ul class="ercdv-course-outline">
        <li>Master the process of interacting with APIs to retrieve data from back-end servers and display it within your apps.</li>
        <li>Learn to follow coding standards and participate in peer code reviews, ensuring that your codebase is clean and maintainable.</li>
        <li>Boost your site’s efficiency by minimizing load times and refining overall performance to enhance user engagement.</li>
        <li>Build confidence for front-end job applications by creating a diverse project portfolio and polishing interview skills.</li>
    </ul>
</div>


            </div>
        </div>
    </div>
</section>

<!--ADMISSION SECTION-->
<section class="admission-requirements-section">
    <div class="container">
        <div class="admission-card">
            <h2>Admission Criteria
            </h2>
            <ul>
                <li>
                    <strong>Background of Education:</strong>
                    High school diploma or equivalent, foundation in mathematics and computer science
                </li>
                <li>
                    <strong>English Language Proficiency:</strong>
                    English is the mode of teaching.
                </li>
                <li>
                    <strong>Admission Fee:</strong>
                    Application fee: $10 (non-refundable), Tuition fee: $22 (per month).
                </li>
            </ul>
        </div>

        <!-- Small Card for Course Duration -->
        <div class="small-card">
            <h4>Course Duration</h4>
            <p style="font-size: 18px;">12 Months</p>
        </div>
    </div>
</section>





<div class="section-join">
    <h1 id="heading-join">Join Our Online Class</h1>
    <p  style="color: black; font-size: 18px;" >
        "Unlock your career potential with our hands-on curriculum,
        expertly designed to <br> equip you with the skills needed to thrive in today's
        competitive job market."
   </p>
    <!--<a href="https://forms.gle/tPA5FKKKv3EmTuXRA" id="enroll-btn">Enroll Now</a>-->
    <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                            class="ok ms-lg-0" href="{{ route('ict-training') }}">
                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>
</div>























@endsection
