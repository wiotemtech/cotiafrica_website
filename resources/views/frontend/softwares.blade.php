

@extends('layouts.app')

@section('content')
<div style="background-image: url('{{ asset('assets/images/sst.png') }}');" class="web-container">
    <div class="web-card">
        <h2>Building Software,Together We Innovate.</h2>
        <p>We build software solutions that deliver measurable results and enhance your brand's impact.
        </p>
        <a href="{{ route('contactus') }}">Talk to Us</a>
    </div>
</div>

<section class="photo-text-section1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 tttyd-program-card-2" data-aos="fade-right">
                <img src="{{ asset('assets/images/ssst.avif') }}" class="img-fluid">
            </div>
            <div class="col-md-6 text-content tttyd-program-card-2" data-aos="fade-left" style="margin-top: 16px;">
                <h2 id="h12">About Software Development</h2>
                <p id="p12" >
                    

                    CodeToInnovate Africa delivers practical software solutions for real-world problems. We focus on building scalable and maintainable applications. We equip individuals with the skills to contribute to Africa's tech growth.
                </p>
                
            </div>
        </div>
    </div>
</section>




<h1 class="ercdv-why-choose-us-title">What Sets Us Apart</h1>

<div class="ercdv-why-choose-us-section mt-4">
  <div class="row ercdv-row">
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-check-circle"></i> Proven Track Record</div>
    </div>
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-person-lines-fill"></i> Expert Team</div>
    </div>
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-chat-square-text-fill"></i> Transparent Communication</div>
    </div>
  </div>
  <div class="row ercdv-row mt-2">
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-phone"></i> Responsive and Mobile-Friendly</div>
    </div>
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-clock"></i> Timely Delivery & Budget-Friendly</div>
    </div>
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-graph-up"></i> Results-Driven Development</div>
    </div>
  </div>
</div>








<div style="margin: 0"   class="container-1  ">
    <h1 class="team-head" data-aos="fade-up">Software Development services</h1>
    <p class="team-p1" data-aos="fade-up" data-aos-delay="200">Unique Design Reflecting your brand's identity and vision.</p>
    <div class="row">
        <!-- Left Card with Expertise Content -->
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="left-card" data-aos="fade-right">
                <h5 class="card-title text-center"></h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="bi bi-code-slash"></i> API Development & System Integration
                    </li>
                    <p>RESTful & GraphQL API design and implementation.</p>

                    <li class="d-flex align-items-center">
                        <i class="bi bi-palette"></i> Software Testing & Quality Assurance
                    </li>
                    <p>Automated and manual testing for bug-free software.</p>

                    <li class="d-flex align-items-center">
                      <i class="bi bi-palette"></i> IT Consulting & Technical Support
                  </li>
                  <p> Expert advice on software architecture and digital transformation.</p>


            </div>
        </div>

        <!-- Right Card with Expertise Content -->
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="right-card" data-aos="fade-left">
              
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="bi bi-gear-wide-connected"></i> Custom Software Development
                    </li>
                    <p>Tailor-made solutions to meet specific business needs.</p>

                    <li class="d-flex align-items-center">
                        <i class="bi bi-people"></i> Software Maintenance & Support
                    </li>
                    <p>Performance optimization and security patches.</p>

                    <li class="d-flex align-items-center">
                      <i class="bi bi-people"></i> UI/UX Design & Prototyping
                  </li>
                  <p>Wireframing and user testing for best experience.</p>


                  
            </div>
        </div>
    </div>
</div>




<section class="programming-tech">
    <div class="tech-container">
      <h2 class="tech-title">Our Technology Stack</h2>
      
      <div class="tech-list">
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/1200px-Python-logo-notext.svg.png" alt="Python">
            <span>Python</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/it/2/2e/Java_Logo.svg" alt="Java">
            <span>Java</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/1200px-Angular_full_color_logo.svg.png" alt="Angular">
            <span>Angular</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/FastAPI_logo.svg/512px-FastAPI_logo.svg.png?20240902201856" alt="fastapi">
            <span>FastAPI</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/MySQL_textlogo.svg/800px-MySQL_textlogo.svg.png?20210508081050" alt="mysql">
            <span>Mysql</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="Laravel">
            <span>Laravel</span>
        </div>
    </div>
    </div>
  </section>




  <section style="background-image: url('{{ asset('assets/images/test.png') }}');"  class="unique-faq-section">
    <div class="faq-container">
      <h2>Your Questions,Answered</h2>
      <div class="faq-accordion">
        <details>
          <summary>
            <span> How much will it cost to develop my software?</span>
            <i class="bi b"></i>
          </summary>
          <div class="faq-content">
            <p>Costs vary by project complexity. We provide detailed estimates after requirement analysis. We prioritize transparent, cost-effective solutions.

            </p>
          </div>
        </details>
        <details>
          <summary>
            <span> How long will it take to develop my software?</span>
            <i class="bi bi-chev"></i>
          </summary>
          <div class="faq-content">
            <p>Timelines depend on project scope. Agile methods ensure efficient delivery. We provide realistic, adaptable timelines.</p>
          </div>
        </details>
        <details>
          <summary>
            <span> What technologies do you use for software development?</span>
            <i class="bi bi-chevro"></i>
          </summary>
          <div class="faq-content">
            <p>We use modern technologies like Python, Java, and JavaScript. Frameworks include React and Angular. We select technologies based on project needs.

            </p>
          </div>
        </details>
        <details>
          <summary>
            <span>How do you ensure the quality of the software you develop?     </span>
            <i class="bi bi-chevr"></i>
          </summary>
          <div class="faq-content">
            <p>Rigorous testing is implemented throughout development. We follow best practices and coding standards. Ongoing maintenance ensures reliability.</p>
          </div>
        </details>
      </div>
    </div>
  </section>




  <section  class="partner-section ">
    <div class="container">
        <h1 class="animate-heading">Let's Get Started!</h1>
        <p class="animate-paragraph">Your idea is the beginning. We'll turn it into a digital reality. Collaborate with us,<br> and let's build something remarkable together."</p>

        <a class="btn-join-talent" href="{{ route('contactus') }}">
            Let's Connect<i id="arrow" class="fa fa-arrow-right arrow"></i>
        </a>
    </div>
</section>





















@endsection
