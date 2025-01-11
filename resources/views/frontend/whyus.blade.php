@extends('layouts.app')

@section('content')


<section class="ctia-section container" style="margin-top: 150px;">
    <div class="ctia-left" style="margin-left: 10px;">
        <h1 class="ctia-header">Why Choose Us?</h1>
        <p class="ctia-text">Decisions you will never forget.</p>
    </div>

    <div class="ctia-right" style="margin-right: 40px; text-align:justify">
        <p class="ctia-text">
            At CodeToInnovate Africa, we stand out for our commitment to excellence, 
            innovation, and personalized solutions. Our team of experienced professionals
            combines technical expertise with a deep understanding of industry trends,
            ensuring that we deliver cutting-edge services tailored to your unique needs.
            We prioritize customer satisfaction, offer reliable support,and provide 
            continuous learning opportunities to keep you ahead in the fast-evolving
            tech landscape. Choose us for a trusted partner that empowers you to achieve
            your digital goals efficiently and effectively.


        </p>
    </div>
   </section>
      <!-- TEAM PHOTO SECTION -->


   <section class="photo-text-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/team3.jpeg') }}" alt="Image" class="photo">
            </div>
            <div class="col-md-6 text-content">
                <h2 style="color: #ffc107;">The Team</h2>
                <p style="color: white; font-size: 18px; text-align: justify;">
                    Our team at CodeToInnovate Africa is a diverse group of passionate
                    professionals dedicated to driving innovation through technology. 
                    With expertise in software development,ICT training,and digital 
                    transformation,we bring together years of experience to solve complex
                    challenges and deliver impactful solutions.Our collaborative approach
                    fosters creativity and ensures that we stay at the forefront of the 
                    tech industry,while our commitment to growth empowers us to support
                    both clients and communities. Together,we strive to build a more 
                    connected and innovative Africa.</p>
            </div>
        </div>
    </div>
</section>

   <!-- TEAM PHOTO SECTION -->
    <!--
   <section class="py-5" id="ctia-team">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="ctia-team-photos">
                    <div class="ctia-team-photo">
                        <img src="/img/eric.jpg" alt="Team Member 1">
                    </div>
                    <div class="ctia-team-photo">
                        <img src="/img/eric.jpg" alt="Team Member 2">
                    </div>
                    <div class="ctia-team-photo">
                        <img src="/img/eric.jpg" alt="Team Member 3">
                    </div>
                    <div class="ctia-team-photo">
                        <img src="/img/eric.jpg" alt="Team Member 4">
                    </div>
                    <div class="ctia-team-photo">
                        <img src="/img/eric.jpg" alt="Team Member 5">
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <h2 style="color: #FFC107;">The Team</h2>
                <p style="color: white; font-size: 16px;">
                
                    
                    "Our team at CodeToInnovate Africa is a diverse group of passionate professionals
                     dedicated to driving innovation through technology. With expertise in software 
                     development, ICT training, and digital transformation, we bring together years 
                     of experience to solve complex challenges and deliver impactful solutions. 
                     Our collaborative approach fosters creativity and ensures that we stay at the 
                     forefront of the tech industry, while our commitment to growth empowers us to 
                     support both clients and communities. Together, we strive to build a more connected
                      and innovative Africa."</p>
                
            </div>
        </div>
    </div>
   </section>
-->

   <!-- CEO Section -->
   <div class="ctia-ceo">
      <img src="img/eric.jpg" alt="Co-Founder">
      <p style="color: white;"> <br></p>
      <p class="ctia-ceo-quote" style="color: white;">"At CodeToInnovate Africa, we believe that every idea 
        has the potential to shape the future. Our role is to bring those ideas to life."

        </p>
   </div>

   <!-- Core Values Section -->
   <section class="container ctia-core-values-section">
    <h1 class="ctia-core-value-heading" style="font-size: 30px;">Core Values</h1>
    <div class="row">
        <div class="col-md-4 ctia-core-value">
        
            <img src="{{ asset('assets/images/inn.jpg') }}" alt="intergity" style="height: 50px; width: 50px;">

            <strong style="font-size: 20px; color: black;">Innovation & excellence</strong>
            <p>
                
                At CodeToInnovate Africa, innovation and excellence drive everything we do. 
                We embrace creativity and encourage out-of-the-box thinking to develop cutting-edge
                solutions.</p>
        </div>
        <div class="col-md-4 ctia-core-value">
            <img src="{{ asset('assets/images/teamwork.jpg') }}" alt="Quality" style="height: 50px; width: 50px;" >
            <strong style="font-size: 20px; color: black;">Collaboration & Teamwork</strong>
            <p>
                
                Collaboration and teamwork are at the heart of CodeToInnovate Africa. 
                We believe that great ideas are born from diverse perspectives and open
                 communication. 
                </p>
        </div>
        <div class="col-md-4 ctia-core-value">
            
            <img src="{{ asset('assets/images/Customer-Centricity.jpg') }}" alt="innovation" style="height: 50px; width: 50px;">

            <strong style="font-size: 20px; color: black;">Customer-Centricity
            </strong>
            <p>Customer centricity drives our decisions and actions. We prioritize 
                understanding and meeting our clients' needs, ensuring tailored 
                solutions and exceptional service.</p>
        </div>
        <div class="col-md-4 ctia-core-value">
            
            <img src="{{ asset('assets/images/Integrity-Accountability-Values.png') }}" alt="customer focus" style="height: 50px; width: 50px;">

            <strong style="font-size: 20px; color: black;">Integrity & Accountability
            </strong>
            <p>At CodeToInnovate Africa, integrity and accountability are fundamental 
                to our operations. We prioritize transparency and ethical standards,
                 ensuring responsibility for our actions.
            </p>


        </div>
        <div class="col-md-4 ctia-core-value">
            
            <img src="{{ asset('assets/images/diversity.png') }}" alt="teamwork" style="height: 50px; width: 50px;">

            <strong style="font-size: 20px; color: black;">Diversity, Equity & Inclusion
            </strong>
            <p>
                
                At CodeToInnovate Africa, we celebrate diversity as a source of strength.
                 We believe in creating an inclusive environment where everyone feels valued
                  and empowered, regardless of their background. 
                    
                     </p>
        </div>
        <div class="col-md-4 ctia-core-value">
            
            <img src="{{ asset('assets/images/trust.png') }}" alt="respect" style="height: 50px; width: 50px;">

            <strong style="font-size: 20px; color: black;">Trust</strong>
            <p>
            
                Trust is at the heart of everything we do at CodeToInnovate Africa.
                 We are committed to delivering on our promises, building strong 
                 relationships through reliability and consistency.</p>
        </div>
    </div>
</section>




    
</div>
@endsection