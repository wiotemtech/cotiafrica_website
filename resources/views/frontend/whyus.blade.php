@extends('layouts.app')

@section('content')



<section style="background-image: url('{{ asset('assets/images/test.png') }}'); margin-top: 120px;" class="landing-section">
    <div class="overlay"></div>
    <div class="landing-content">
        <h1>We're CodeToInnovate<span style="color: #1E88E5"> Africa</span></h1>
        <p style="font-family:'poppins',sanserif; font-size: 16px;">"Trusted Partner of the Technology Innovation Support Centre (TISC) UTC-Lira."</p>
    </div>
</section>




 <!-- Section Start -->
 <section style="margin-top:20px"  class="ctia-unique-section container" data-aos="fade-up">
    <div class="ctia-unique-left" data-aos="fade-right">
        <h1  class="ctia-unique-header" data-aos="fade-up">Why Choose Us?</h1>
        <p class="ctia-unique-text" data-aos="fade-up">Decisions you will never forget.</p>
    </div>

    <div class="ctia-unique-right" data-aos="fade-left">
        <p class="ctia-unique-text" data-aos="fade-up">
            At CodeToInnovate Africa, we deliver innovative, tailored solutions with a focus on excellence. Our experienced team blends technical expertise and industry insight to provide services that meet your unique needs. We prioritize customer satisfaction, offer reliable support, and foster continuous learning to keep you ahead in the digital world. Choose us as your trusted partner for efficient and effective solutions.
        </p>
    </div>
</section>

   <!--mision,vission sectio-->
   <div  style="
   background-image: url('{{ asset('assets/images/test.png') }}');
    margin-top:120px; margin-top: 25px;"   class="card-container">
    <!-- Title inside the container -->
    <h2 class="title">Our Vision, Mission & Goal</h2>

    <!-- Vision Card -->
    <div class="glass-card-1">
        <i class="fas fa-eye icon"></i>
        <h1>Vision</h1>
        <p class="vision">Establish CodeToInnovate Africa as the leading technology innovation hub,
            fostering a culture of creativity ,entreprenuership and progress across
             Africa</p>
    </div>

    <!-- Mission Card -->
    <div class="glass-card-1">
        <i class="fas fa-bullseye icon"></i>
        <h1>Mission</h1>
        <p class="vision">Empowering African Communities through Inovative technology<br>
             solutions, 
           education,collaboration,
           driving socio-economic growth and transformation</p>
    </div>

    <!-- Goal Card -->
    <div class="glass-card-1">
        <i class="fas fa-flag-checkered icon"></i>
        <h1>Goal</h1>
        <p class="vision">Transform Africa through technology innovation,<br>education and
             entreprenuership impacting 0ne million lives by 2035

        </p>
    </div>
</div>

   


      <!-- TEAM PHOTO SECTION -->


      <div style="margin: 0"   class="container-1  ">
        <h1 class="team-head" data-aos="fade-up">CodeToInnovate Africa Execution Team!</h1>
        <p class="team-p1" data-aos="fade-up" data-aos-delay="200">An inclusive assembly of creative minds.</p>
        <div class="row">
            <!-- Left Card with Expertise Content -->
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="left-card" data-aos="fade-right">
                    <h5 class="card-title text-center">Our Team's Talent</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center">
                            <i class="bi bi-code-slash"></i> Developers
                        </li>
                        <p>Digital solutions are built upon the foundation of skilled developers.</p>

                        <li class="d-flex align-items-center">
                            <i class="bi bi-palette"></i> Designers
                        </li>
                        <p>Designers craft the visual experiences that shape user interaction</p>

                        <li class="d-flex align-items-center">
                            <i class="bi bi-laptop"></i>Customer Support Experts
                        </li>
                        <p>Creators generate unique solutions by integrating diverse knowledge.</p>
                    </ul>
                </div>
            </div>

            <!-- Right Card with Expertise Content -->
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="right-card" data-aos="fade-left">
                    <h5 class="card-title text-center">Our Signature Style</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center">
                            <i class="bi bi-gear-wide-connected"></i> Innovation & excellence
                        </li>
                        <p>We drive innovation to deliver products defined by excellence.</p>

                        <li class="d-flex align-items-center">
                            <i class="bi bi-people"></i> Diversity, Equity & Inclusion
                        </li>
                        <p>Diversity is our reality, equity is our commitment, and inclusion is our practice.</p>

                        <li class="d-flex align-items-center">
                            <i class="bi bi-shield-check"></i> Integrity & Accountability
                        </li>
                        <p>Integrity guides our actions; accountability ensures our results.</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   

   <!-- CEO Section -->
   <div class="ctia-ceo">
      <img class="img" src="{{ asset('assets/images/emma.jpeg') }}"" alt="Co-Founder">
      <p style="color: white;"> <br> Co-Founder</p>
      <p class="ctia-ceo-quote" style="color: white;">""CodeToInnovate Africa is dedicated to the action of making innovative ideas a reality, for a better future."

        </p>
   </div>

   <!-- Core Values Section -->
   <section class="container ctia-core-values-section">
    <h1 class="ctia-core-value-heading">Core Values</h1>
    <div class="row g-4">
        <div class="col-md-4 mb-4" data-aos="fade-right">
            <div class="ctia-core-value">
                <i class="fas fa-lightbulb"></i>
                <strong>Innovation & Excellence</strong>
                <p>At CodeToInnovate Africa, innovation and excellence drive everything we do. We embrace creativity and encourage out-of-the-box thinking to develop cutting-edge solutions.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="ctia-core-value">
                <i class="fas fa-users"></i>
                <strong>Collaboration & Teamwork</strong>
                <p>Collaboration and teamwork are at the heart of CodeToInnovate Africa. We believe that great ideas are born from diverse perspectives and open communication.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-left">
            <div class="ctia-core-value">
                <i class="fas fa-handshake"></i>
                <strong>Customer-Centricity</strong>
                <p>Customer centricity drives our decisions and actions. We prioritize understanding and meeting our clients' needs, ensuring tailored solutions and exceptional service.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-right">
            <div class="ctia-core-value">
                <i class="fas fa-balance-scale"></i>
                <strong>Integrity & Accountability</strong>
                <p>At CodeToInnovate Africa, integrity and accountability are fundamental to our operations. We prioritize transparency and ethical standards, ensuring responsibility for our actions.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="ctia-core-value">
                <i class="fas fa-globe"></i>
                <strong>Diversity, Equity & Inclusion</strong>
                <p>We celebrate diversity as a source of strength. We believe in creating an inclusive environment where everyone feels valued and empowered, regardless of their background.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-left">
            <div class="ctia-core-value">
                <i class="fas fa-shield-alt"></i>
                <strong>Trust</strong>
                <p>Trust is at the heart of everything we do at CodeToInnovate Africa. We are committed to delivering on our promises, building strong relationships through reliability and consistency.</p>
            </div>
        </div>
    </div>
</section>





 
     
       




    

@endsection