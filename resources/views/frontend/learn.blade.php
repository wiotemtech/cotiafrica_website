@extends('layouts.app')

@section('content')

<h2 id="hh">djjjjjj  kdid</h2>
    <!-- Hero Section with Popping Signs -->
    <section class="hero animate__animated animate__fadeInDown">
        <div class="popping-signs">
            <div>🚀 100+ Students Enrolled</div>
            <div>💼 95% Job Placement</div>
            <div>🏆 Industry-Recognized Certificates</div>
        </div>
        <h1>Learn to Code Anytime, Anywhere!</h1>
        <p>Join our online coding school and master programming skills.</p>
        <a href="{{ route('contactus') }}" class="btn-1 btn-lg shadow">Start Learning</a>
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
                            <a href="{{ route('frontend') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
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
                            <a href="{{ route('backend') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                        <img src="{{ asset('assets/images/mobile app.jpg') }}" class="img-fluid" alt="Women in Tech">
                        <div class="card-body">
                            <h5 class="card-title-1">Mobile App Development</h5>
                            <p class="card-text-1">Mobile app development involves creating software for smartphones and tablets, encompassing both native (iOS/Android) and cross-platform approaches, where developers design user interfaces, implement functionalities, and optimize performance across diverse devices, followed by rigorous testing, debugging, and deployment to app stores.</p>
                            <a href="{{ route('mobileApp-development') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
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
                        <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
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
                        <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
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
                        <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
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
                        <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
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







    <section style=" background: linear-gradient(to right, #007bff, #6610f2);"  class="unique-faq-section">
        <div class="faq-container">
          <h2>Your Questions,Answered</h2>
          <div class="faq-accordion">
            <details>
              <summary>
                <span> What programming languages will I learn in the Frontend Development track?</span>
                <i class="bi b"></i>
              </summary>
              <div class="faq-content">
                <p>You’ll learn HTML, CSS, JavaScript, and frameworks like React.js to build dynamic, responsive web applications.
    
                </p>
              </div>
            </details>
            <details>
              <summary>
                <span>  What tools do we use for Backend Development?</span>
                <i class="bi bi-chev"></i>
              </summary>
              <div class="faq-content">
                <p>We focus on server-side technologies like PHP, Node.js, Laravel, and databases like MySQL to handle data and business logic.</p>
              </div>
            </details>
            <details>
              <summary>
                <span> Will the Mobile App Development program cover both Android and iOS??</span>
                <i class="bi bi-chevro"></i>
              </summary>
              <div class="faq-content">
                <p>Yes, we teach mobile app development using React Native, enabling you to build cross-platform apps for both Android and iOS.
    
                </p>
              </div>
            </details>
            <details>
              <summary>
                <span>  Do we get hands-on projects during the program?</span>
                <i class="bi bi-chevr"></i>
              </summary>
              <div class="faq-content">
                <p> Absolutely! Each track includes practical projects to help you apply your knowledge in real-world scenarios and build your portfolio.</p>
              </div>
            </details>
          </div>
        </div>
      </section>






<section class="partner-section ">
    <div class="container">
        <h1 class="animate-heading">Code Your Success—Join Now!</h1>
        <p class="animate-paragraph">"Unlock your career potential with our hands-on curriculum,
        expertly designed to <br> equip you with the skills needed to thrive in today's
        competitive job market."</p>

        <a class="btn-join-talent" href="{{ route('contactus') }}">
            Enrole Now<i id="arrow" class="fa fa-arrow-right arrow"></i>
        </a>
    </div>
</section>



























@endsection
