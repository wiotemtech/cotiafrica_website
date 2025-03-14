

@extends('layouts.app')

@section('content')
<div style="background-image: url('{{ asset('assets/images/webD.jpeg') }}');" class="web-container">
    <div class="web-card">
        <h2>Developing the Web, Together</h2>
        <p>We create websites that make your brand stand out online.</p>
        <a href="{{ route('contactus') }}">Talk to Us</a>
    </div>
</div>

<section class="photo-text-section1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 tttyd-program-card-2" data-aos="fade-right">
                <img src="{{ asset('assets/images/software development.jpeg') }}" class="img-fluid">
            </div>
            <div class="col-md-6 text-content tttyd-program-card-2" data-aos="fade-left" style="margin-top: 16px;">
                <h2 id="h12">About website Development</h2>
                <p id="p12" >
                    

                  Code to Innovate Africa specializes in website development tailored for African impact. We build more than just sites; we create digital platforms that amplify your message and reach.From sleek designs to robust functionality,we empower organizations and businesses to thrive online.Partner with us to turn your vision into a powerful web presence.
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
    <h1 class="team-head" data-aos="fade-up">Custom Website Creation</h1>
    <p class="team-p1" data-aos="fade-up" data-aos-delay="200">Unique Design Reflecting your brand's identity and vision.</p>
    <div class="row">
        <!-- Left Card with Expertise Content -->
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="left-card" data-aos="fade-right">
                <h5 class="card-title text-center"></h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="bi bi-code-slash"></i> Custom Website Design
                    </li>
                    <p>Tailored designs t match your brand and vision..</p>

                    <li class="d-flex align-items-center">
                        <i class="bi bi-palette"></i> Responsive Web Development
                    </li>
                    <p>Websites that adapt seamlessly to all devices (desktops, tablets, mobiles).</p>

                    <li class="d-flex align-items-center">
                      <i class="bi bi-palette"></i> Search Engine Optimization (SEO)
                  </li>
                  <p>Optimizing websites for search engine visibility.
                    .</p>


                    <li class="d-flex align-items-center">
                        <i class="bi bi-laptop"></i> E-commerce Website Development
                    </li>
                    <p> Online stores with secure payment gateways and product management.</p>
                </ul>
            </div>
        </div>

        <!-- Right Card with Expertise Content -->
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="right-card" data-aos="fade-left">
              
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="bi bi-gear-wide-connected"></i> Website Maintenance & Updates
                    </li>
                    <p>Regular updates, security patches, and content management.</p>

                    <li class="d-flex align-items-center">
                        <i class="bi bi-people"></i> Website Performance Optimization
                    </li>
                    <p>Improving website speed and loading times.</p>

                    <li class="d-flex align-items-center">
                      <i class="bi bi-people"></i> Web Analytics & Reporting
                  </li>
                  <p>Tracking website traffic and user behavior.</p>


                    <li class="d-flex align-items-center">
                        <i class="bi bi-shield-check"></i> Website Hosting & Domain Management
                    </li>
                    <p> Providing reliable hosting and domain registration services.</p>
                </ul>
            </div>
        </div>
    </div>
</div>




<section class="programming-tech">
    <div class="tech-container">
      <h2 class="tech-title">Our Technology Stack</h2>
      
      <div class="tech-list">
        <div class="tech-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML5">
          <span>HTML5</span>
        </div>
        <div class="tech-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS3">
          <span>CSS3</span>
        </div>

        <div class="tech-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg" alt="JavaScript">
          <span>JavaScript</span>
        </div>

        <div class="tech-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" alt="React">
          <span>React</span>
        </div>
        <div class="tech-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg" alt="Node.js">
          <span>Node.js</span>
        </div>
        <div class="tech-item">
          <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Postgresql_elephant.svg" alt="PostgreSQL">
          <span>PostgreSQL</span>
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
            <span> Question: How much will my website cost?</span>
            <i class="bi b"></i>
          </summary>
          <div class="faq-content">
            <p>Website costs vary significantly depending on the complexity of your project. Factors like design, functionality, and the number of pages all play a role. We offer a free consultation to discuss your specific needs and provide a detailed, customized quote. This ensures you get an accurate price based on exactly what you require.

            </p>
          </div>
        </details>
        <details>
          <summary>
            <span> How long will it take to build my website?</span>
            <i class="bi bi-chev"></i>
          </summary>
          <div class="faq-content">
            <p>The timeline for website development depends on the project's scope. A simple website might take a few weeks, while a complex e-commerce platform could take several months. We'll provide you with a detailed project timeline during our initial consultation, outlining key milestones and expected completion dates. We prioritize clear communication and timely delivery.</p>
          </div>
        </details>
        <details>
          <summary>
            <span> Will my website be mobile-friendly?</span>
            <i class="bi bi-chevro"></i>
          </summary>
          <div class="faq-content">
            <p>Absolutely! All websites we develop are fully responsive, meaning they will adapt seamlessly to all devices, including desktops, tablets, and smartphones. This ensures a consistent and positive user experience for all your visitors, regardless of how they access your site.

            </p>
          </div>
        </details>
        <details>
          <summary>
            <span>Will you help with SEO (Search Engine Optimization)?      </span>
            <i class="bi bi-chevr"></i>
          </summary>
          <div class="faq-content">
            <p>Yes, we integrate SEO best practices into every website we build. We'll optimize your website's structure, content, and code to improve its visibility in search engine results. We can also provide ongoing SEO services to further enhance your website's ranking and drive organic traffic.</p>
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
