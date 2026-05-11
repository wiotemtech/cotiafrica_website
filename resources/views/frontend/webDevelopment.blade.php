@extends('layouts.app')

@section('content')
    <!--
    <div class="background">
        <div class="card" style="background-color:rgb(3, 3, 56); color: white;">
            <h2 style="font-size: 20px;">Web Development at CodeToInnovate Africa</h2>
            <p style="font-size: 18px;">

                At CodeToInnovate Africa, we create responsive, secure, and user-friendly
                websites using the latest technologies. Our team builds everything from
                business websites to e-commerce platforms, NGOs ensuring fast performance and
                 a seamless user experience across all devices.
            </p>
        </div>
    </div>
    -->

    <!-- resources/views/yourview.blade.php -->
    <div class="background1"
        style="background-image: url('assets/images/softpage.jpeg'); background-size: cover; background-position: center; height: 90vh;">
        <div class="card" style="background-color: rgb(3, 3, 56); color: white;">
            <h2 style="font-size: 20px;">Web Development at CodeToInnovate Africa</h2>
            <p style="font-size: 18px;">
                At CodeToInnovate Africa, we create responsive, secure, and user-friendly
                websites using the latest technologies. Our team builds everything from
                business websites to e-commerce platforms, NGOs ensuring fast performance and
                a seamless user experience across all devices.
            </p>
        </div>
    </div>





    <section class="custom-section" style=" margin-top: 2px;">
        <!-- First Div -->
        <div class="custom-div custom-first-div">
            <img src="{{ asset('assets/images/softpage.jpeg') }}" alt="">

        </div>

        <!-- Second Div -->
        <div class="custom-div custom-second-div">
            <!--<img src="/img/eric.jpg" alt="Smaller Profile Picture">-->
            <!--<span class="custom-span">Name<br>Number</span>-->
            <h1 class="custom-h1" style="font-size: 25px;">Web Developemnt</h1>
            <p class="custom-p" style="text-align: left; font-size: 18px;">


                Web development is more than just building websites,it's
                about creating digital experiences that connect people with businesses.We focus on
                crafting responsive,fast,and secure platforms using cutting-edge technologies.
                Our goal is to ensure that every site we develop is user-friendly and fully optimized
                for both performance and growth.Whether it's a simple site or a complex application,
                we turn your vision into a reality, one line of code at a time."<br>


            </p>
        </div>
    </section>



    <section class="py-5" style="margin-top: -50px;background: linear-gradient(135deg, #1E88E5, #43A047);">
        <h1 class="text-center" style="font-size: 25px;font-family: Arial, sans-serif; font-weight: bold;">Programming Languages We Use</h1>
        <div class="scroll-container">
            <div class="language-wrapper">
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919852.png" alt="JavaScript">
                    <h3>JavaScript</h3>
                    <p>Interactive Web Development</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919832.png" alt="Python">
                    <h3>Python</h3>
                    <p>Data Science & ML</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919830.png" alt="PHP">
                    <h3>PHP</h3>
                    <p>Backend Web Development</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919826.png" alt="Laravel">
                    <h3>Laravel</h3>
                    <p>Modern PHP Framework</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919825.png" alt="React.js">
                    <h3>React.js</h3>
                    <p>Frontend Framework</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132222.png" alt="C++">
                    <h3>C++</h3>
                    <p>System & App Development</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/226/226777.png" alt="Java">
                    <h3>Java</h3>
                    <p>Enterprise Software</p>
                </div>
                <!-- Duplicate items for seamless scrolling -->
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919852.png" alt="JavaScript">
                    <h3>JavaScript</h3>
                    <p>Interactive Web Development</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919832.png" alt="Python">
                    <h3>Python</h3>
                    <p>Data Science & ML</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919830.png" alt="PHP">
                    <h3>PHP</h3>
                    <p>Backend Web Development</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919826.png" alt="Laravel">
                    <h3>Laravel</h3>
                    <p>Modern PHP Framework</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919825.png" alt="React.js">
                    <h3>React.js</h3>
                    <p>Frontend Framework</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132222.png" alt="C++">
                    <h3>C++</h3>
                    <p>System & App Development</p>
                </div>
                <div class="language-item">
                    <img src="https://cdn-icons-png.flaticon.com/512/226/226777.png" alt="Java">
                    <h3>Java</h3>
                    <p>Enterprise Software</p>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-section" style="margin-top: -2px; background-color: white;">
        <div class="container">
            <h1 style="font-size: 18x; font-family: Arial, sans-serif;">Have an idea?Lets Build it together!</h1>
            <p>

                At CodeToInnovate Africa, we believe in turning great ideas into reality.
                If you have a vision for a website, app, or digital project, we’re here to
                collaborate and bring it to life. Together, we’ll build a solution that not
                only meets your needs but exceeds your expectations. Let’s innovate, create,
                and grow together</p>

            <a style="border: 2px solid green; text-decoration: none; padding-right: 30px; display: inline-flex; align-items: center; "
                class="oj ms-lg-0" href="{{ route('contactus') }}">
                Contact Us <i class="fa fa-arrow-right arrow-icon"></i>
            </a>




        </div>
    </section>
