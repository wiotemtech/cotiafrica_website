
@extends('layouts.app')

@section('content')

<!-- Internship Section -->
<div style="background-image: url('{{ asset('assets/images/we2.jpg') }}');" class="internship-section ">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Text -->
    <div class="internship-text">
        <h1>A Community for Women in Technology.</h1>
        <p>Join a network of driven women, develop essential tech skills, and make a real impact through hands-on experience. Apply now and start shaping the future of technology</p>
        <a href="{{ route('contactus') }}">Apply Now</a>
    </div>
</div>



    <!-- About Section -->
    <section class="about" data-aos="fade-up">
        <h2 style="font-size:30px;font-weight:bold; font-family: 'poppins',sasarif; color:  #1e88e5;">Why Women in Tech?</h2>
        <p style="font-size: 22px;font-family:'poppins',sansarif">Women in technology are underrepresented, yet their contributions <br>are vital for shaping the future. With the right support, women can lead innovations in all aspects of the tech industry.</p>
    </section>



   


<!-- Women in Tech Section -->
<section id="women-in-tech">
    <div class="container">
        <h2>Creating Pathways for Women in Technology.</h2>
        <p>"Women are pivotal to technological advancement, driving innovation and shaping <br> our digital world. Our initiative empowers women to  thrive in tech by providing<br> educational resources, supportive communities, and mentorship opportunities</p>
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



<div class="container py-5">
    <h2 class="text-center mb-4">What Students Say About Us</h2>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="testimonial-card p-3">
                <div class="testimonial-header">
                    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
                    <div>
                        <h5>Bussines</h5>
                        <p class="mb-1"><strong>Mercy Ruth</strong></p>
                    </div>
                </div>
                <p class="mt-2">This training gave me the confidence I desperately needed. I feel empowered to take on new challenges now. I really appreciate the support.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="testimonial-card p-3">
                <div class="testimonial-header">
                    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
                    <div>
                        <h5>Teacher</h5>
                        <p class="mb-1"><strong>Akello Lucy</strong></p>
                    </div>
                </div>
                <p class="mt-2">I was lost about my career path, but this training helped me see clear possibilities. It opened my eyes to new opportunities. Thank you for the guidance!</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="testimonial-card p-3">
                <div class="testimonial-header">
                    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
                    <div>
                        <h5>Student</h5>
                        <p class="mb-1"><strong>Nalubega Ruth</strong></p>
                    </div>
                </div>
                <p class="mt-2">The instructors were amazing, and the other trainees were so supportive. It felt like a real community. I learned so much, and I'm grateful for the experience.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="testimonial-card p-3">
                <div class="testimonial-header">
                    <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Student" class="testimonial-img">
                    <div>
                        <h5>Accountant</h5>
                        <p class="mb-1"><strong>Dolly Atukunda</strong></p>
                    </div>
                </div>
                <p class="mt-2">came in feeling so unsure, but the training was incredibly practical. I'm leaving with actual skills I can use! Thank you.</p>
            </div>
        </div>
    </div>
</div>



<section style=" background: linear-gradient(to right, #007bff, #6610f2);"  class="unique-faq-section">
    <div class="faq-container">
      <h2>You Ask, We Answer!
    </h2>
      <div class="faq-accordion">
        <details>
          <summary>
            <span> What is the goal of the Women in Tech program?</span>
            <i class="bi b"></i>
          </summary>
          <div class="faq-content">
            <p>The program aims to empower women with tech skills, mentorship, and career opportunities, bridging the gender gap in the industry.

            </p>
          </div>
        </details>
        <details>
          <summary>
            <span>  Who can apply for the program?</span>
            <i class="bi bi-chev"></i>
          </summary>
          <div class="faq-content">
            <p>Any woman passionate about technology, regardless of background, can apply. No prior experience is required, just enthusiasm to learn.</p>
          </div>
        </details>
        <details>
          <summary>
            <span> What skills will I gain from this program?</span>
            <i class="bi bi-chevro"></i>
          </summary>
          <div class="faq-content">
            <p>You'll learn coding, UI/UX design, data science, and soft skills like teamwork and problem-solving, preparing you for tech careers.

            </p>
          </div>
        </details>
        <details>
          <summary>
            <span> Is there any financial support or scholarship available?  </span>
            <i class="bi bi-chevr"></i>
          </summary>
          <div class="faq-content">
            <p>Yes, we offer scholarships and financial aid for eligible applicants to ensure accessibility and inclusion in the program.</p>
          </div>
        </details>
      </div>
    </div>
  </section>










<section class="partner-section ">
    <div class="container">
        <h1 class="animate-heading">Your ideas can change the world</h1>
        <p class="animate-paragraph">Tech needs your voice. We empower women to thrive in tech through online classes,<br> mentorship, and community. Join us to innovate and shape the future.</p>

        <a class="btn-join-talent" href="{{ route('contactus') }}">
            join us in tech <i id="arrow" class="fa fa-arrow-right arrow"></i>
        </a>
    </div>
</section>






























@endsection
