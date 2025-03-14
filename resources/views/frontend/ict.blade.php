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
        <a class="btn-1" href="https://docs.google.com/forms/d/e/1FAIpQLSdy_uIywrsqinOgqRpBgYFWz65de5ysU-b1vCJKIk667cNtsQ/formResponse">Apply Now</a>
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
                        <a href="{{ route('software-intern') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                    <img src="{{ asset('assets/images/dataA.jpg') }}" class="img-fluid" alt="Corporate ICT Training">
                    <div class="card-body">
                        <h5 class="card-title-1">Data Analytics intern</h5>
                        <p class="card-text-1">Our Data Analytics Internship is your entry point into the dynamic world of data-driven decision making. You'll gain hands-on experience with real-world datasets, learning how to extract insights, build visualizations, and deliver actionable recommendations. You'll work alongside experienced analysts, gaining practical skills in areas like data cleaning, statistical analysis, and data visualization.</p>
                        <a href="{{ route('data-analysis') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div style="border-radius: 20px" class="card shadow p-3 tttyd-program-card">
                    <img src="{{ asset('assets/images/cyper.jpg') }}" class="img-fluid" alt="Women in Tech">
                    <div class="card-body">
                        <h5 class="card-title-1"> Cybersecurity intern</h5>
                        <p class="card-text-1">A Cybersecurity Internship offers a critical launchpad, where you'll translate security concepts into robust defenses. You'll gain hands-on experience with security tools and platforms, working on real-world scenarios that span threat analysis, vulnerability assessments, and incident response. You'll collaborate with experienced security professionals, refining your skills in network security.</p>
                        <a href="{{ route('cyber-security') }}" class="tttyd-ok-link">Learn More <i class="fa fa-arrow-right tttyd-arrow-icon"></i></a>
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
                    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
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
                    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
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
                    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
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
                    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
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


<section style=" background: linear-gradient(to right, #007bff, #6610f2);"  class="unique-faq-section">
    <div class="faq-container">
      <h2>You Ask, We Answer!
        <h2></h2>
      <div class="faq-accordion">
        <details>
          <summary>
            <span>What specific projects will I work on?</span>
            <i class="bi b"></i>
          </summary>
          <div class="faq-content">
            <p>You'll tackle real-world challenges, contributing to live data analysis, software development, or cybersecurity incident response. Expect hands-on experience and mentorship.

            </p>
          </div>
        </details>
        <details>
          <summary>
            <span>  What skills will I gain during the internship?</span>
            <i class="bi bi-chev"></i>
          </summary>
          <div class="faq-content">
            <p>You'll sharpen your technical skills in data analysis tools, software development languages, or cybersecurity protocols. Expect practical experience and portfolio building.</p>
          </div>
        </details>
        <details>
          <summary>
            <span> Is this a paid internship, and what is the duration?</span>
            <i class="bi bi-chevro"></i>
          </summary>
          <div class="faq-content">
            <p>Paid internships are available, and the duration is typically three(3) months, with flexible scheduling options. Check our website for precise details.

            </p>
          </div>
        </details>
        <details>
          <summary>
            <span> What are the career prospects after completing the internship?   </span>
            <i class="bi bi-chevr"></i>
          </summary>
          <div class="faq-content">
            <p>Interns gain valuable industry connections and experience, often leading to full-time opportunities or enhanced career prospects within our company or related fields.</p>
          </div>
        </details>
      </div>
    </div>
  </section>



<section class="partner-section ">
    <div class="container">
        <h1 class="animate-heading">Gain skills—apply for our internship!</h1>
        <p class="animate-paragraph">Make a real impact with our dynamic internship. You'll contribute to meaningful <br> projects and gain industry insights. Apply now to launch your career.</p>

        <a class="btn-join-talent" href="https://docs.google.com/forms/d/e/1FAIpQLSdy_uIywrsqinOgqRpBgYFWz65de5ysU-b1vCJKIk667cNtsQ/formResponse">
            Apply Now <i id="arrow" class="fa fa-arrow-right arrow"></i>
        </a>
    </div>
</section>


@endsection








