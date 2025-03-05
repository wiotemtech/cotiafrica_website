@extends('layouts.app')

@section('content')

<h2 id="hh">djjjjjj  kdid</h2>
    <!-- Hero Section with Popping Signs -->
    <section class="hero animate__animated animate__fadeInDown">
        <div class="popping-signs">
            <div>🚀 10,000+ Students Enrolled</div>
            <div>💼 95% Job Placement</div>
            <div>🏆 Industry-Recognized Certificates</div>
        </div>
        <h1>Learn to Code Anytime, Anywhere!</h1>
        <p>Join our online coding school and master programming skills.</p>
        <a href="#courses" class="btn-1 btn-lg shadow">Start Learning</a>
    </section>
    

    <section class="photo-text-section1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 tttyd-program-card-2" data-aos="fade-right">
                    <img src="{{ asset('assets/images/python l.jpg') }}" alt="About Image" class="img-fluid">
                </div>
                <div class="col-md-6 text-content tttyd-program-card-2" data-aos="fade-left" style="margin-top: 16px;">
                    <h2 id="h11">About the Program</h2>
                    <p id="p11" >
                        CodeToInnovate Africa's Software Engineering class focuses on building robust and scalable software solutions through a practical, hands-on approach, emphasizing the Software Development Life Cycle (SDLC), requirements gathering, design principles like OOP, rigorous testing, version control with Git, and agile methodologies, while also stressing collaboration, problem-solving, ethical considerations, and the development of software for social good, ultimately equipping students to create impactful software solutions that drive innovation and development within the African context.
                    </p>
                  
                </div>
            </div>
        </div>
    </section>


    <section style="background: linear-gradient(to top, #ffffff, #6daee8);" class=" py-5">
        <div class="container">
            <h2 class="text-center mb-4  top-head">Software Engineering Class</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                        <img src="{{ asset('assets/images/web design.jpg') }}" class="img-fluid" alt="Learn Programming">
                        <div class="card-body">
                            <h5 class="card-title-1">Front-end Development</h5>
                            <p class="card-text-1">Front-end engineering creates engaging web experiences by translating designs into interactive interfaces. Mastering HTML, CSS, and JavaScript ensures responsiveness and optimal performance across devices. Engineers focus on user experience, leveraging frameworks to build intuitive applications. They bridge design and functionality, shaping impactful online experiences.</p>
                            <a href="{{ route('programming') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                        <img src="{{ asset('assets/images/python l.jpg') }}" class="img-fluid" alt="Corporate ICT Training">
                        <div class="card-body">
                            <h5 class="card-title-1">Back-end Development</h5>
                            <p class="card-text-1">

                                Back-end engineering builds the server-side foundation of web applications, handling crucial tasks like database management, API development, and server infrastructure. Engineers utilize languages such as Python or Node.js to ensure data integrity and optimize application performance, crafting the robust systems that power seamless front-end experiences.</p>
                            <a href="{{ route('ict-training') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                        <img src="{{ asset('assets/images/mobile app.jpg') }}" class="img-fluid" alt="Women in Tech">
                        <div class="card-body">
                            <h5 class="card-title-1">Mobile App Development</h5>
                            <p class="card-text-1">Mobile app development involves creating software for smartphones and tablets, encompassing both native (iOS/Android) and cross-platform approaches, where developers design user interfaces, implement functionalities, and optimize performance across diverse devices, followed by rigorous testing, debugging, and deployment to app stores.</p>
                            <a href="{{ route('women-in tech') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container py-5">
        <h2 style="font-family: 'poppins',sanserif;font-weight:bold;font-size:30px; color: #1E88E5;" class="text-center mb-4">What Students Say About Us</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="testimonial-card p-3">
                    <div class="testimonial-header">
                        <img src="/about.jpg" alt="Student" class="testimonial-img">
                        <div>
                            <h5 class="t-h">Front-end track</h5>
                            <p class="mb-1"><strong>Apio Daniella</strong></p>
                        </div>
                    </div>
                    <p class="mt-2">The curriculum is very well structured, and it is easy to follow. The support from the instructors and teaching assistants is excellent. I find that staying motivated.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="testimonial-card p-3">
                    <div class="testimonial-header">
                        <img src="/about.jpg" alt="Student" class="testimonial-img">
                        <div>
                            <h5 class="t-h">Mobile App track</h5>
                            <p class="mb-1"><strong>Jane Blessings</strong></p>
                        </div>
                    </div>
                    <p class="mt-2">The online format is a lifesaver! I can learn at my own pace, during evenings and weekends. The recorded lectures are fantastic, and I really appreciate being able to re-watch them.!</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="testimonial-card p-3">
                    <div class="testimonial-header">
                        <img src="/about.jpg" alt="Student" class="testimonial-img">
                        <div>
                            
                            <h5 class="t-h">Back-end track</h5>
                            <p class="mb-1"><strong>yunus Edmon</strong></p>
                        </div>
                    </div>
                    <p class="mt-2">I was worried about the lack of in-person interaction, but the online community is surprisingly active. The project-based learning is excellent, and I feel like I'm building real-world skills</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="testimonial-card p-3">
                    <div class="testimonial-header">
                        <img src="/about.jpg" alt="Student" class="testimonial-img">
                        <div>
                            <h5 class="t-h">Front-end track</h5>
                            <p class="mb-1"><strong>Akac Jane</strong></p>
                        </div>
                    </div>
                    <p class="mt-2">I never thought I could learn software engineering! This online school has made it possible. The course materials are clear and well-organized. Sometimes my internet connection can be a bit unreliable,</p>
                </div>
            </div>
        </div>
    </div>





<!--

    <div style="background-image: url('{{ asset('assets/images/test.png') }}');" class="container faq-section mt-4">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 --
            <div class="faq-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What programming languages do you teach?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer courses in various programming languages, including Python, JavaScript, PHP, and React. Our curriculum is designed to give students a solid foundation in both front-end and back-end development.
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- FAQ 2 --
            <div class="faq-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Do I need any prior experience to join?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            No prior experience is required. Our courses are beginner-friendly and designed to take you from basic concepts to advanced topics. We welcome learners of all skill levels!
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- FAQ 3 --
            <div class="faq-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How long do the courses last?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our courses vary in length. Some can be completed in a few weeks, while others may take a few months, depending on the intensity and level of detail. We offer both full-time and part-time options to suit your schedule.
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- FAQ 4 --
            <div class="faq-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Can I learn at my own pace?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes! Our platform offers flexible learning options, allowing you to learn at your own pace. You can access course materials and lessons at any time, so you can fit learning around your schedule.
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- FAQ 5 --
            <div class="faq-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Do you provide job placement assistance?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we provide job placement assistance to our students. Our team helps with resume building, interview preparation, and connecting you with potential employers in the tech industry.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
-->     
    


    

<!--COURSE OUTLINE SECTION-
<section id="ercdv-course-outline-section">
    <div class="ercdv-container">
        <h2 class="ercdv-section-title" style="font-size: 25px;">Course Outline</h2>

        <div class="ercdv-course-content">
            <!-- Card 1 --
<div class="ercdv-card">
    <ul class="ercdv-course-outline">
        <li>Understand the fundamentals of deploying front-end projects on various platforms, ensuring a smooth launch process.</li>
        <li>Implement real-time updates and dynamic features in your applications using websockets for instant communication.</li>
        <li>Build mobile-responsive websites that adjust effortlessly across devices, offering a flawless user experience on all screens.</li>
        <li>Get hands-on experience with powerful front-end libraries like Vue.js and React to create modern and feature-rich web applications.</li>
    </ul>
</div>

<!-- Card 2 --
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

<!--ADMISSION SECTION--
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

        <!-- Small Card for Course Duration --
        <div class="small-card">
            <h4>Course Duration</h4>
            <p style="font-size: 18px;">12 Months</p>
        </div>
    </div>
</section>

-->


<section class="partner-section mt-3">
    <div class="container">
        <h1 class="animate-heading">Code Your Success,Secure Your Spot Now!</h1>
        <p class="animate-paragraph">"Unlock your career potential with our hands-on curriculum,
        expertly designed to <br> equip you with the skills needed to thrive in today's
        competitive job market."</p>

        <a class="btn-join-talent" href="{{ route('contactus') }}">
            Enrole Now<i id="arrow" class="fa fa-arrow-right arrow"></i>
        </a>
    </div>
</section>



























@endsection
