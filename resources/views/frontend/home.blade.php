@extends('layouts.app')

@section('content')
    <div id="particles-js" class="">
        <div class="content">
            <h1>Innovating the Future With Advance<br> Software Solution</h1>
            <a id="ll" style="margin-bottom: 60px;" href="{{ route('contactus') }}">Learn more</a>
        </div>
    </div>

    <div class="container py-5">
        <div class="row ">
            <div class="col-md-6">
                <h4 class="text-app">Our Story</h4>
                <p>In 2023, we established CodeToInnovate Africa to address pressing challenges in our communities such as
                    the lack of essential workforce skills among university graduates, limited critical thinking and
                    problem-solving capabilities, underutilization of smartphones for education, inefficient manual
                    processes, and neglected website maintenance through the combined expertise of our diverse team of
                    professionals, including a full stack developer, backend developer, frontend developer, DevOps engineer,
                    and IT specialist, all united by a shared vision to empower African communities through innovative
                    technology and sustainable solutions.</p>
            </div>
            <div class="col-md-6 bg-warning p-3">
                <h5 class="text-app">Mission</h5>
                <p>Empowering African Communities through Inovative technology solutions, education,collaboration,driving
                    socio-economic growth and transformation</p>
                <h5 class="text-app">Vision</h5>
                <p>Establish CodeToInnovate Africa as the leading technology innovation hub,fostering a culture of
                    creativity ,entreprenuership and progress across Africa</p>
                <h5 class="text-app">Goal</h5>
                <p>Transform Africa through technology innovation,education and entreprenuership impacting 0ne million lives
                    by 2035</p>
            </div>


            <div class="col-md-12 py-5">
                <h4 class="text-center text-app">Our Expertise</h4>
                <p class="text-center">We craft innovative software solutions tailored to your business needs. From mobile
                    apps to web platforms, we deliver seamless, <br> efficient, and secure systems designed to enhance your
                    operations and drive success.</p>

                <div class="row justify-content-center g-3 py-4">
                    <!-- Engineering Card -->
                    <div class="col-md-4 col-lg-2">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front" style="background-image: url('assets/images/softpage.jpeg');">
                                    <p>Web Development</p>
                                </div>
                                <div class="flip-card-back">
                                    <div class="content">
                                        <img src="{{ asset('assets/images/software symbole.jpg') }}" alt=""
                                            style="height: 50px; height: 50px;">
                                        <p style="color: #003366;">Explore Engineering</p>


                                        <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                                            class="oe ms-lg-0" href="{{ route('webDevelopment') }}">
                                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>


                                        <!--<p style="color: #003366;">Explore Engineering</p>-->
                                        <!--<a href="{{ route('webDevelopment') }}" class="btn">Learn More</a>-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Card -->
                    <div class="col-md-4 col-lg-2">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front"
                                    style="background-image: url('assets/images/mobile\ app\ developemnt.png');">
                                    <p style="color: white;">Mobile App Development</p>
                                </div>
                                <div class="flip-card-back">
                                    <div class="content">
                                        <img src="{{ asset('assets/images/software symbole.jpg') }}" alt=""
                                            style="height: 50px; height: 50px;">
                                        <p style="color: #003366;">Explore Mobile App Development</p>

                                        <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                                            class="oe ms-lg-0" href="{{ route('mobileApp') }}">
                                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>

                                        <!--<p style="color: #003366;">Explore Mobile App Development</p>-->
                                        <!--<a href="{{ route('mobileApp') }}" class="btn">Learn More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud Computing Card -->
                    <div class="col-md-4 col-lg-2">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front"
                                    style="background-image: url('assets/images/cloude\ computing.jpeg');">
                                    <p>Cloud Computing</p>
                                </div>
                                <div class="flip-card-back">
                                    <div class="content">
                                        <img src="{{ asset('assets/images/software symbole.jpg') }}" alt=""
                                            style="height: 50px; height: 50px;">

                                        <p style="color: #003366;">Explore Cloud Computing</p>
                                        <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                                            class="oe ms-lg-0" href="{{ route('cloude') }}">
                                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>
                                        <!--<a href="{{ route('cloude') }}" class="btn">Learn More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Management Card -->
                    <div class="col-md-4 col-lg-2">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front"
                                    style="background-image: url('assets/images/software\ development.jpeg');">
                                    <p>Software Development</p>
                                </div>
                                <div class="flip-card-back">
                                    <div class="content">
                                        <img src="{{ asset('assets/images/software symbole.jpg') }}" alt=""
                                            style="height: 50px; height: 50px;">

                                        <p style="color: #003366;">Explore Software Development</p>
                                        <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                                            class="oe ms-lg-0" href="{{ route('software') }}">
                                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>
                                        <!--<a href="{{ route('software') }}" class="btn">Learn More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cybersecurity Card -->
                    <div class="col-md-4 col-lg-2">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front"
                                    style="background-image: url('assets/images/Machine\ learning.jpg');">
                                    <p>AI & Machine Learning</p>
                                </div>
                                <div class="flip-card-back";>
                                    <div class="content">
                                        <img src="{{ asset('assets/images/software symbole.jpg') }}" alt=""
                                            style="height: 50px; height: 50px;">

                                        <p style="color: #003366;">Explore AI & Machine Learning</p>
                                        <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                                            class="oe ms-lg-0" href="{{ route('ai') }}">
                                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>
                                        <!--<a href="{{ route('ai') }}" class="btn">Learn More</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="bg-light py-5" style="margin-top: -88px;">
        <h2 class="text-center text-app" style="font-size: 25px;">Top Programs</h2>
        <div class="container py-5">
            <div class="program-card-grid">
                <div class="program-card">
                    <img src="{{ asset('assets/images/learn programmimg.JXBtAr') }}" alt="Data Analysis">
                    <div class="program-card-content">
                        <h3>Learn Programming</h3>
                        <p style="font-size: 16px;">
                            "Master programming with our practical courses tailored for all levels.
                            Whether you're new or experienced, learn key languages like Python,
                            JavaScript, and PHP while working on real-world projects. Our hands-on
                            approach ensures you build problem-solving skills and confidently bring
                            your ideas to life.".</p>
                        <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                            class="ok ms-lg-0" href="{{ route('programming') }}">
                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>
                        <!--<a href="{{ route('programming') }}">Learn More</a>-->
                    </div>
                </div>

                <div class="program-card">
                    <img src="{{ asset('assets/images/ict training.jpg') }}" alt="Product Design">
                    <div class="program-card-content">
                        <h3>Coperate ICT Trainings</h3>
                        <p style="font-size: 16px;">


                            "Empower your team with our tailored Corporate ICT Training programs.
                            We offer specialized courses in IT infrastructure, software development,
                            cybersecurity, and cloud computing. Designed to meet industry standards,
                            our training ensures your staff stay updated with the latest technologies.


                        </p>
                        <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                            class="ok ms-lg-0" href="{{ route('ict-training') }}">
                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>

                        <!--<a href="{{ route('ict-training') }}">Learn More</a>-->
                    </div>
                </div>

                <div class="program-card">
                    <img src="{{ asset('assets/images/women in tech.png') }}" alt="women in tech">
                    <div class="program-card-content">
                        <h3>Women in Tech</h3>
                        <p style="font-size: 16px;">


                            "At CodeToInnovate Africa, we are committed to bridging the gender gap in technology.
                            Our Women in Tech initiative empowers women by offering mentorship, hands-on training,
                            and opportunities to excel in fields like software development, data science,
                            and IT leadership."

                        </p>
                        <a style=" text-decoration: none; padding-right: 10px; display: inline-flex; align-items: center; "
                            class="ok ms-lg-0" href="{{ route('women-in tech') }}">
                            Learn More<i class="fa fa-arrow-right arrow-icon-1"></i></a>
                        <!--<a href="{{ route('women-in tech') }}">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section" id="statsSection">
        <div class="container">
            <h2 class="stats-header">Our Impact</h2>
            <div class="row justify-content-center">
                <!-- Clients Served -->
                <div class="col-md-2 stat-item" data-count="150">
                    <i class="fas fa-users stat-icon"></i>
                    <div class="stat-value">+0</div>
                    <div class="stat-label">Clients Served</div>
                </div>
                <!-- Lines of Code -->
                <div class="col-md-2 stat-item" data-count="100000">
                    <i class="fas fa-code stat-icon"></i>
                    <div class="stat-value">+0</div>
                    <div class="stat-label">Lines of Code</div>
                </div>
                <!-- Students Taught -->
                <div class="col-md-2 stat-item" data-count="100">
                    <i class="fas fa-user-graduate stat-icon"></i>
                    <div class="stat-value">+0</div>
                    <div class="stat-label">Learners Served</div>
                </div>
                <!-- Projects Completed -->
                <div class="col-md-2 stat-item" data-count="75">
                    <i class="fas fa-project-diagram stat-icon"></i>
                    <div class="stat-value">+0</div>
                    <div class="stat-label">Projects Completed</div>
                </div>
                <!-- Hours of Training -->
                <div class="col-md-2 stat-item" data-count="1200">
                    <i class="fas fa-clock stat-icon"></i>
                    <div class="stat-value">+0</div>
                    <div class="stat-label">Time Spent on Content</div>
                </div>
            </div>
        </div>
    </section>


    <section id="faq" class="bg-white">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-section-container">
                <!-- Image on Left -->
                <div class="faq-image-container">
                    <img src="{{ asset('assets/images/faq.png') }}" alt="CodeToInnovate Africa" class="img-fluid">
                </div>

                <!-- FAQ Content on Right -->
                <div class="faq-text-container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-10">
                            <!-- FAQ 1 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <span>What is CodeToInnovate Africa?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-body">
                                    CodeToInnovate Africa is a leading software company that empowers businesses and
                                    individuals across Africa by providing cutting-edge training, mentorship, and innovative
                                    solutions for the modern tech world.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <span>Who can join the training programs?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-body">
                                    Our training programs are designed for anyone passionate about learning technology,
                                    whether you’re a student, professional, or entrepreneur. We cater to all levels of
                                    expertise, from beginners to advanced learners.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <span>How do I register for a course?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-body">
                                    You can easily register for a course by visiting our registration page. Choose your
                                    desired course and complete the simple online registration form. You can also contact us
                                    for any registration assistance.
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <span>Are online programs available ?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-body">
                                    Yes, we offer both in-person and online programs. Our online courses are fully
                                    interactive and provide the same quality of learning as our in-person sessions. You can
                                    access them from anywhere in the world.
                                </div>
                            </div>

                            <!-- FAQ 5 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <span>What is the cost of the courses?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-body">
                                    The pricing for our courses depends on the program you choose. We offer competitive
                                    pricing, and scholarships are available. For full details on costs, please refer to our
                                    course catalog or contact our support team.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- OUR CLIENTS SECTION -->
    <div class="bg-light py-5">
        <h2 class="testimonial-title" style="font-size: 25px;">Clients Say We Are the Best</h2>
        <p style="text-align: center; font-size: 18px;">See it Below!</p>
        <div class="container">
            <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-item">
                            <img src="/img/eric.jpg" alt="Client Photo">
                            <div class="client-info">
                                <p class="testimonial-content">"CodeToInnovate Africa provided us with exceptional service
                                    and
                                    went above and beyond to meet our needs. Highly recommended!"</p>
                                <p class="client-name">Lule paul</p>
                                <p class="client-position">CEO, Tech Solutions</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <img src="/img/eric.jpg" alt="Client Photo">
                            <div class="client-info">
                                <p class="testimonial-content">"The professionalism and quality of work at CodeToInnovate
                                    Africa are unmatched. We are very pleased with their services."</p>
                                <p class="client-name">opio lawrence</p>
                                <p class="client-position">Marketing Manager, InnovateCo</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <img src="/img/eric.jpg" alt="Client Photo">
                            <div class="client-info">
                                <p class="testimonial-content">"Working with CodeToInnovate Africa was a fantastic
                                    experience.
                                    Their team is knowledgeable, responsive, and reliable."</p>
                                <p class="client-name">Daniel Roy</p>
                                <p class="client-position">CTO, StartUp Inc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--OUR PATNERS SECTION-->
    <section class="partners-section py-5">
        <div class="container">
            <h2 class="partners-heade text-center mb-4 text-app">Our Partners</h2>
            <div id="partnersCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-3 col-lg-2 mb-3">
                                <img src="{{ asset('assets/images/maros.jpg') }}" alt="partner 1" class="partner-logo img-fluid">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 mb-3">
                                <img src="{{ asset('assets/images/capsci.jpg') }}" alt="partner 2" class="partner-logo img-fluid">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 mb-3">
                                <img src="{{ asset('assets/images/maros.jpg') }}" alt="partner 3" class="partner-logo img-fluid">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 mb-3">
                                <img src="{{ asset('assets/images/cdc.jpg') }}" alt="partner 4" class="partner-logo img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-3 col-lg-2 mb-3">
                                <img src="{{ asset('assets/images/capsci.jpg') }}" alt="partner 5" class="partner-logo img-fluid">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 mb-3">
                                <img src="{{ asset('assets/images/maros.jpg') }}" alt="partner 6" class="partner-logo img-fluid">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 mb-3">
                                <img src="{{ asset('assets/images/cdc.jpg') }}" alt="partner 7" class="partner-logo img-fluid">
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 mb-3">
                                <img src="{{ asset('assets/images/capsci.jpg') }}" alt="partner 8" class="partner-logo img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#partnersCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#partnersCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> --}}
            </div>
        </div>
    </section>




    <section class="partner-section">
        <div class="container">
            <h1>Partner with Our Tallent Community!</h1>
            <p>Join a network of skilled professionals and innovators!
                Our talent community connects expertise with opportunity,
                fostering partnerships that drive success. Collaborate with
                us to access top talent, share knowledge, and bring fresh solutions
                to your business. Let's make it happen together!</p>

            <a style="border: 2px solid green; text-decoration: none; padding-right: 30px; display: inline-flex; align-items: center; "
                class="oj ms-lg-0 btn" href="{{ route('contactus') }}">
                Join the Talent Crew<i class="fa fa-arrow-right arrow-icon"></i></a>


        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



    <script>
        window.onload = function() {
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 150, 
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": true
                    },
                    "size": {
                        "value": 4,
                        "random": true,
                        "anim": {
                            "enable": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out"
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        }
                    },
                    "modes": {
                        "repulse": {
                            "distance": 100
                        },
                        "push": {
                            "particles_nb": 4
                        }
                    }
                },
                "retina_detect": true
            });
        }


        const statsSection = document.getElementById('statsSection');
        let counted = false;

        statsSection.addEventListener('mouseenter', function() {
            if (counted) return; // Prevent recounting on additional hovers
            counted = true;

            document.querySelectorAll('.stat-item').forEach(item => {
                const statValue = item.querySelector('.stat-value');
                const targetCount = +item.getAttribute('data-count');
                let startCount = 0;
                const increment = Math.ceil(targetCount / 100); // Adjust for faster/slower counting

                function updateCount() {
                    startCount += increment;
                    if (startCount >= targetCount) {
                        statValue.textContent = `+${targetCount}`;
                    } else {
                        statValue.textContent = `+${startCount}`;
                        requestAnimationFrame(updateCount);
                    }
                }

                updateCount(); // Start counting
            });
        });

        // FAQ Toggle Script
        const faqHeaders = document.querySelectorAll('.faq-header');

        faqHeaders.forEach(header => {
            header.addEventListener('click', () => {
                const faqBody = header.nextElementSibling;
                const icon = header.querySelector('i');

                // Toggle the body and icon
                faqBody.classList.toggle('open');
                header.classList.toggle('active');
            });
        });
    </script>
@endsection
