@extends('layouts.app')

@section('content')
<div id="particles-js"></div>

<div style="margin-bottom: 88px" class="landing-container">
    <div class="landing-left large-screen-home-heading">
        <h2 style="color:#1E88E5;  font-family: 'Poppins', sans-serif; "> CodeToInnovate <span style="color: white" >Africa</span> </h2>
        <p>Innovating the Future With <span style="color: #1E88E5;">Advanced Software Solutions.</span></p>
        <a href="{{ route('contactus') }}" class="btn-1">Get Started</a>
    </div>

    <div class="cards-wrapper">
        <div class="card-item active">
            <i class="bi bi-award"></i>
            <h5>projects completed</h5>
            <p style="color: #1E88E5; font-size: 25px; font-weight: bold;" class="card-number">10+</p>
            <p class="card-description">Goals Achieved, Tasks Finalized.</p>
        </div>
        <div class="card-item">
            <i class="bi bi-graph-up"></i>
            <h5>Learners Served</h5>
            <p style="color: #43A047; font-size: 25px; font-weight: bold;" class="card-number">100+</p>
            <p class="card-description">participants in learning initiatives.</p>
        </div>
        <div class="card-item">
            <i class="bi bi-emoji-smile"></i>
            <h5>Active Clients</h5>
            <p style="color: #FFC107; font-size: 25px; font-weight: bold;" class="card-number">80%</p>
            <p class="card-description">We're confident you'll be pleased.</p>
        </div>
    </div>
</div>

 <!-- Trusted Partners Section -->
 <div  class="full-page-container">
    <!-- Logo Container -->
    <div class="logo-container">
        <img src="{{ asset('assets/images/utc.jpg') }}" alt="Logo 1">
        <img src="{{ asset('assets/images/logo7.png') }}" alt="Logo 2">
    </div>
    
    <!-- Text Content -->
    <p class="custom-text">Trusted Partners of the Technology Innovation Support Centre (TISC) UTC-Lira.</p>
</div>



<!--OUR STORY SECTION-->
<section class="story-section">
    <div class="container">
        <h2 class="story-title" data-aos="fade-up">Our Story</h2>
        <div class="row align-items-center">
            <!-- Our Story Text -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="glass-card">
                    <p class="story-text">
                        Founded in 2023, CodeToInnovate Africa empowers communities by bridging skill gaps, enhancing problem-solving, and driving digital transformation. Our expert team leverages technology to create sustainable solutions for education, automation, and web maintenance across Africa.
                    </p>
                    <div class="extra-content">
                        <p class="story-text">
                        
                        </p>
                    </div>
                    <button class="btn btn-primary" id="readMoreBtn" onclick="toggleContent()">Read More</button>
                </div>
            </div>
            
            <!-- YouTube Video -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>





<div style="margin-top: 44px" class="container ">
    <h4 class="text-center text-app-1">Our Expertise</h4>
    <p class="text-center tex-app-2">We deliver custom software solutions, from mobile apps 
        to web platforms, to enhance your operations and drive success.
        </p>

    <div class="row justify-content-center g-3 py-4">
        <!-- Web Development Card -->
        <div class="col-md-4 col-lg-2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/web3.avif');">
                        <p class="service">Web Development</p>
                    </div>
                    <div class="flip-card-back">
                        <div class="content">
                            <img src="{{ asset('assets/images/software symbole.jpg') }}" alt="" style="height: 50px;">
                            <p>Explore Engineering</p>
                            <a class="oe ms-lg-0" href="{{ route('webDevelopment') }}">
                                Learn More<i class="fa fa-arrow-right arrow-icon-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile App Development Card -->
        <div class="col-md-4 col-lg-2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/app.avif');">
                        <p class="service">Mobile App Development</p>
                    </div>
                    <div class="flip-card-back">
                        <div class="content">
                            <img src="{{ asset('assets/images/software symbole.jpg') }}" alt="" style="height: 50px;">
                            <p>Explore Mobile App Development</p>
                            <a class="oe ms-lg-0" href="{{ route('mobileApp') }}">
                                Learn More<i class="fa fa-arrow-right arrow-icon-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cloud Computing Card -->
        <div class="col-md-4 col-lg-2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/cloud.jpg');">
                        <p class="service">Cloud Computing</p>
                    </div>
                    <div class="flip-card-back">
                        <div class="content">
                            <img src="{{ asset('assets/images/software symbole.jpg') }}" alt="" style="height: 50px;">
                            <p>Explore Cloud Computing</p>
                            <a class="oe ms-lg-0" href="{{ route('cloude') }}">
                                Learn More<i class="fa fa-arrow-right arrow-icon-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Software Development Card -->
        <div class="col-md-4 col-lg-2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/soft.jpg');">
                        <p class="service">Software Development</p>
                    </div>
                    <div class="flip-card-back">
                        <div class="content">
                            <img src="{{ asset('assets/images/software symbole.jpg') }}" alt="" style="height: 50px;">
                            <p>Explore Software Development</p>
                            <a class="oe ms-lg-0" href="{{ route('software') }}">
                                Learn More<i class="fa fa-arrow-right arrow-icon-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- AI & Machine Learning Card -->
        <div class="col-md-4 col-lg-2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front" style="background-image: url('assets/images/ai.jpg');">
                        <p class="service">Data Analysis</p>
                    </div>
                    <div class="flip-card-back">
                        <div class="content">
                            <img src="{{ asset('assets/images/software symbole.jpg') }}" alt="" style="height: 50px;">
                            <p>Explore Data Analysis</p>
                            <a class="oe ms-lg-0" href="{{ route('data') }}">
                                Learn More<i class="fa fa-arrow-right arrow-icon-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   

<section style="background: linear-gradient(to top, #ffffff, #6daee8);" class=" py-5">
    <div class="container">
        <h2 class="text-center mb-4  top-head">Top Programs</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                    <img src="{{ asset('assets/images/a.jpg') }}" class="img-fluid" alt="Learn Programming">
                    <div class="card-body">
                        <h5 class="card-title-1">School of Engineering</h5>
                        <p class="card-text-1">Our tailored programming courses offer a practical path to mastery. From beginner to advanced, learn key languages like Python, JavaScript, and PHP through real-world projects and develop essential problem-solving skills</p>
                        <a href="{{ route('programming') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                    <img src="{{ asset('assets/images/intern.jpg') }}" class="img-fluid" alt="Corporate ICT Training">
                    <div class="card-body">
                        <h5 class="card-title-1">Internship Program</h5>
                        <p class="card-text-1">Our internships provide a unique opportunity to learn, grow, and contribute. Immerse yourself in a dynamic environment, work alongside experienced professionals, and gain practical knowledge that will shape your future</p>
                        <a href="{{ route('ict-training') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                    <img src="{{ asset('assets/images/women.jpg') }}" class="img-fluid" alt="Women in Tech">
                    <div class="card-body">
                        <h5 class="card-title-1">Women in Tech</h5>
                        <p class="card-text-1">CodeToInnovate Africa's Women in Tech program champions gender equality in technology. We provide women with mentorship, practical training, and pathways to leadership in software development, data science, and IT</p>
                        <a href="{{ route('women-in tech') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        




    <!-- OUR CLIENTS SECTION -->
    <div style="
    background-image: url('{{ asset('assets/images/test.png') }}');
     margin-top:0px;"   class="">
        <h2 class="testimonial-title ">Our Clients Speak for Us</h2>
        <p class="text-center testimonial-p" >See it Below!</p>
        <div class="container">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/images/learn programmimg.JXBtAr') }}" alt="Client Photo" class="testimonial-img">
                            <div class="client-info">
                                <p class="testimonial-content">"CodeToInnovate Africa provided us with exceptional service and went above and beyond to meet our needs. Highly recommended!"</p>
                                <p class="client-name">Lule Paul</p>
                                <p class="client-position">CEO, Tech Solutions</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/images/learn programmimg.JXBtAr') }}" alt="Client Photo" class="testimonial-img">
                            <div class="client-info">
                                <p class="testimonial-content">"The professionalism and quality of work at CodeToInnovate Africa are unmatched. We are very pleased with their services."</p>
                                <p class="client-name">Opio Lawrence</p>
                                <p class="client-position">Marketing Manager, InnovateCo</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/images/learn programmimg.JXBtAr') }}" alt="Client Photo" class="testimonial-img">
                            <div class="client-info">
                                <p class="testimonial-content">"Working with CodeToInnovate Africa was a fantastic experience. Their team is knowledgeable, responsive, and reliable."</p>
                                <p class="client-name">Daniel Roy</p>
                                <p class="client-position">CTO, StartUp Inc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="container my-5">
        <h2 style="color:#1E88E5;font-size:30px;font-family:'poppins',sanserif; font-weight: bold;;" class="text-center mb-4">Network of Excellence</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="partner-card">
                    <img src="{{ asset('assets/images/UTCL Logo.png') }}" alt="Partner 1" class="partner-logo">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="partner-card">
                    <img src="{{ asset('assets/images/capsci.jpg') }}" alt="Partner 2" class="partner-logo">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="partner-card">
                    <img src="{{ asset('assets/images/utc.jpg') }}" alt="Partner 3" class="partner-logo">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="partner-card">
                    <img src="{{ asset('assets/images/maros.jpg') }}" alt="Partner 4" class="partner-logo">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="partner-card">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Partner 5" class="partner-logo">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="partner-card">
                    <img src="{{ asset('assets/images/fimat.jpeg') }}" alt="Partner 6" class="partner-logo">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="partner-card">
                    <img src="{{ asset('assets/images/town c.jpg') }}" alt="Partner 7" class="partner-logo">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="partner-card">
                    <img src="{{ asset('assets/images/ri.jpeg') }}" alt="Partner 8" class="partner-logo">
                </div>
            </div>
        </div>
    </section>



















    
 <section class="partner-section">
        <div class="container">
            <h1 class="animate-heading">Partner with Our Talent Community!</h1>
            <p class="animate-paragraph">Join a network of skilled professionals and innovators.Connect with top talent, share <br>knowledge,
                 and drive success together.Let's make it happen together!</p>

            <a class="btn-join-talent" href="{{ route('contactus') }}">
                Join the Talent Crew <i id="arrow" class="fa fa-arrow-right arrow"></i>
            </a>
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
