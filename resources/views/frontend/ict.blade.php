@extends('layouts.app')

@section('content')


<!-- Internship Section -->
<div style="background-image: url('{{ asset('assets/images/intern.jpg') }}');" class="internship-section ">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Text -->
    <div class="internship-text">
        <h1 class="intern-h">Kickstart Your Career with Our Internship Program</h1>
        <p class="intern-p">Gain hands-on experience, develop key skills, and work on real-world projects. Apply today and take the first step toward your professional future!</p>
        <a class="btn-1" href="#apply-now">Apply Now</a>
    </div>
</div>




<section class="photo-text-section1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 tttyd-program-card-2" data-aos="fade-right">
                <img src="{{ asset('assets/images/intern.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-6 text-content tttyd-program-card-2" data-aos="fade-left" style="margin-top: 16px;">
                <h2 id="h12">   Our Internship Program</h2>
                <p id="p12" >
                    

Our internship program offers a valuable, hands-on experience across various tech roles. Interns collaborate with experienced professionals on real projects, building practical skills and gaining industry insights. We provide mentorship and exposure to cutting-edge technologies, fostering professional growth in a collaborative environment. This program aims to cultivate the next generation of talent, equipping them with the tools and experience to thrive in the dynamic tech industry.
                </p>
                
            </div>
        </div>
    </div>
</section>




<section style="background: linear-gradient(to top, #ffffff, #6daee8);" class=" py-5">
    <div class="container">
        <h2 class="text-center mb-4  top-head">Our Internship Tracks</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                    <img src="{{ asset('assets/images/software intern.jpg') }}" class="img-fluid" alt="Learn Programming">
                    <div class="card-body">
                        <h5 class="card-title-1">Software Development Intern</h5>
                        <p class="card-text-1">Our software internship program is your chance to jump from learning theory to real-world practice. You'll work on actual projects, side-by-side with experienced developers, gaining hands-on experience in coding, debugging, and more. It's a structured program designed to bridge the gap between education and a software career, offering mentorship, training, and valuable industry insights.</p>
                        <a href="{{ route('programming') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                    <img src="{{ asset('assets/images/digital.jpg') }}" class="img-fluid" alt="Corporate ICT Training">
                    <div class="card-body">
                        <h5 class="card-title-1">Digital Marketing Intern</h5>
                        <p class="card-text-1">Our Digital Marketing Internship is your entry point into the fast-paced world of online promotion. You'll get hands-on experience with real marketing campaigns, learning how to use social media, create engaging content, analyze data, and understand how to reach online audiences. You'll work alongside experienced marketers, gaining practical skills in areas like SEO, content creation, and social media management</p>
                        <a href="{{ route('ict-training') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                    <img src="{{ asset('assets/images/gg.avif') }}" class="img-fluid" alt="Women in Tech">
                    <div class="card-body">
                        <h5 class="card-title-1"> Graphics Design Intern</h5>
                        <p class="card-text-1">A Graphics Design Internship offers a creative launchpad, where you'll translate concepts into visual masterpieces. You'll gain hands-on experience with design software, working on real projects that span branding, marketing materials, and digital assets. 1  You'll collaborate with experienced designers, refining your skills in layout, typography, and color theory.</p>
                        <a href="{{ route('women-in tech') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="container py-5">
    <h2 class="text-center mb-4">What Students Say About Us</h2>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="testimonial-card p-3">
                <div class="testimonial-header">
                    <img src="/about.jpg" alt="Student" class="testimonial-img">
                    <div>
                        <h5 class="t-h">Information Technology</h5>
                        <p class="mb-1"><strong>John Doe</strong></p>
                    </div>
                </div>
                <p class="mt-2">As an Information Technology intern, this program has been invaluable. I've been able to apply classroom concepts to real-world scenarios, from network troubleshooting to database management.am so excited!</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="testimonial-card p-3">
                <div class="testimonial-header">
                    <img src="/about.jpg" alt="Student" class="testimonial-img">
                    <div>
                        <h5 class="t-h">Digital Marketing</h5>
                        <p class="mb-1"><strong>Jane Smith</strong></p>
                    </div>
                </div>
                <p class="mt-2">I was excited about social media, but I had no idea how much goes into a successful campaign. This internship wasn't just about posting; it was about strategy, analysis, and understanding the customer.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="testimonial-card p-3">
                <div class="testimonial-header">
                    <img src="/about.jpg" alt="Student" class="testimonial-img">
                    <div>
                        <h5 class="t-h">Graphics Design</h5>
                        <p class="mb-1"><strong>muwanguzi Allan</strong></p>
                    </div>
                </div>
                <p class="mt-2">Whew! Seeing my designs actually used in the presentation? That was something else. I was so nervous about the color palette, but it really popped on the screen! I think I finally understand how to make a logo really resonate.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="testimonial-card p-3">
                <div class="testimonial-header">
                    <img src="/about.jpg" alt="Student" class="testimonial-img">
                    <div>
                        <h5 class="t-h">Computer Science</h5>
                        <p class="mb-1"><strong>Emily Davis</strong></p>
                    </div>
                </div>
                <p class="mt-2">I've learned more in these few months than I did in years of studying. Being able to work on real-world projects, facing actual challenges, and collaborating with experienced engineers has been transformative.</p>
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
                        What internship opportunities do you offer?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We offer internships in Digital Marketing, Software Engineering, and Graphics Design. Each program provides hands-on experience, mentorship, and exposure to industry-standard tools and practices.
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ 2 --
        <div class="faq-item">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What are the requirements needed to apply for the internship?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        To apply for the internship, we require a placement letter from your institution, as well as a registration fee of 50,000 UGX. These are the basic requirements to secure your spot in the program
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ 3 --
        <div class="faq-item">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How long do the internship programs last?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our internship programs typically last 8 to 12 weeks, with flexible start dates. Some programs may offer part-time options, allowing you to balance other commitments..
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ 4 --
        <div class="faq-item">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Can I work at my own pace during the internship?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, our internship programs are designed with flexibility in mind. You can work at your own pace while meeting project deadlines. Our mentors will guide you throughout the program to ensure you stay on track.
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ 5 --
        <div class="faq-item">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Will I receive job placement assistance after completing the internship?
                        </button>
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


<section class="partner-section mt-3">
    <div class="container">
        <h1 class="animate-heading">Gain real-world skills,Apply for our internship today!</h1>
        <p class="animate-paragraph">Make a real impact with our dynamic internship. You'll contribute to meaningful <br> projects and gain industry insights. Apply now to launch your career.</p>

        <a class="btn-join-talent" href="{{ route('contactus') }}">
            Apply Now <i id="arrow" class="fa fa-arrow-right arrow"></i>
        </a>
    </div>
</section>




      <!-- Corporate ICT Training Section -
      <section id="ict-section">
        <div class="container">
            <h2 id="ict-title " class="text-center">Our Corporate ICT Training Programs</h2>
            <div class="row">
                <!-- Program 1 --
                <div class="col-md-4 mb-4">
                    <div class="card-t shadow-sm">
                        <h3 class="card-h">Cybersecurity Essentials</h3>
                        <p class="card-p">Learn to protect your organization's critical data and networks from cybersecurity threats.
                            Ideal for IT professionals looking to enhance their security skills.</p>
                    </div>
                </div>
                <!-- Program 2 --
                <div class="col-md-4 mb-4">
                    <div class="card-t shadow-sm">
                        <h3 class="card-h">Computer Networking</h3>
                        <p class="card-p">Master cloud technologies like AWS and Azure to optimize your organization’s IT infrastructure and improve operational efficiency.</p>
                    </div>
                </div>
                <!-- Program 3 --
                <div class="col-md-4 mb-4">
                    <div class="card-t shadow-sm">
                        <h3 class="card-h">Data Analysis</h3>
                        <p class="card-p">Equip your team with data analysis skills using tools like Power BI and Python to make data-driven decisions that improve business performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->

            <!-- Who Can Apply Section --
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
-->























@endsection








