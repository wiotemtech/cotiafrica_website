@extends('layouts.app')

@section('content')

<div class="section">
    <h1 style="font-size: 5vw;color:white;font-family:'poppins',sans-serif" >Backend Engineering</h1>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
</div>


<div class="program-section">
    <h1>Program Details</h1>
    <table>
      <tr>
        <th>School</th>
        <td>School of Engineering</td>
      </tr>
      <tr>
        <th>Certificate</th>
        <td>Diploma</td>
      </tr>
      <tr>
        <th>Application Fee</th>
        <td>UGX 30,000 (25,000 Early Bird)</td>
      </tr>
      <tr>
        <th>Program Length</th>
        <td>12 Months / 4 Semesters</td>
      </tr>
      <tr>
        <th>Start Date</th>
        <td>June 2025</td>
      </tr>
      <tr>
        <th>Location</th>
        <td>Online</td>
      </tr>
    </table>
  </div>

  <section  class="admission-requirements-section">
    <div class="container">
        <div class="admission-card">
            <h2>Admission Criteria</h2>
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
                    Application fee: UGX 30,000 (non-refundable), Tuition fee: UGX 89,000 (per month).
                </li>
            </ul>
        </div>
        <div class="small-card">Course Duration: 12 Months</div>
    </div>
</section>



    <!-- COURSE OUTLINE SECTION -->
    <section id="tttyd-course-outline-section">
        <div class="tttyd-container">
            <h2  class="tttyd-section-title">Course Outline</h2>

            <div class="tttyd-course-content">
                <!-- Card 1 -->
                <div class="tttyd-card">
                    <ul class="tttyd-course-outline">
                        <li>Understand the fundamentals of deploying front-end projects on various platforms.</li>
                        <li>Implement real-time updates and dynamic features using websockets.</li>
                        <li>Build mobile-responsive websites for a seamless user experience.</li>
                        <li>Hands-on experience with Vue.js and React for modern web applications.</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="tttyd-card">
                    <ul class="tttyd-course-outline">
                        <li>Master API interactions to retrieve and display data effectively.</li>
                        <li>Follow coding standards and conduct peer code reviews.</li>
                        <li>Optimize site performance to enhance speed and user engagement.</li>
                        <li>Build a project portfolio and polish interview skills for job applications.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


   
       


    <h1 class="payment-plan-h1">Our Payment Plans</h1>

    <div class="payment-plan">
        <!-- Quarterly Payment Plan -->
        <div class="payment-plan-card">
            <div class="payment-plan-header payment-plan-quarterly-header">Quarterly</div>
            <div class="payment-plan-content">
                <h3 class="payment-plan-title">Pay Partially</h3>
                <p class="payment-plan-price">UGX 445,000 per quarter</p>
                <p class="payment-plan-description">By choosing to pay in quarterly installments, you'll receive a significant UGX 89,000 discount on your total tuition.</p>
            </div>
        </div>

        <!-- Best Choice (Upfront Payment) - Styled Uniquely -->
        <div class="payment-plan-card payment-plan-upfront">
            <div class="payment-plan-header best-choice-header">Best Choice</div>
            <div class="payment-plan-content">
                <h3 class="payment-plan-title">Pay in Full</h3>
                <p style="color:#1E88E5" class="payment-plan-price">UGX 890,000</p>
                <p class="payment-plan-description">Simplify your education and save big! Pay your tuition in full and instantly receive a discount of up to UGX 178,000. No more monthly payments, just immediate savings and peace of mind.</p>
            </div>
        </div>

        <!-- Monthly Payment Plan -->
        <div class="payment-plan-card">
            <div class="payment-plan-header payment-plan-monthly-header">Monthly</div>
            <div class="payment-plan-content">
                <h3 class="payment-plan-title">Pay Partially</h3>
                <p class="payment-plan-price">UGX 89,000 per month</p>
                <p class="payment-plan-description">Opt for monthly payments and manage your budget with ease. You'll still pay the same total amount, but in smaller, manageable installments.</p>
            </div>
        </div>
    </div>


    <h1 class="erc-header">Learning Outcomes</h1>

    <div class="erc-container">
        <!-- Outcome 1 -->
        <div class="erc-card">
            <h3 class="erc-card-title">Train to Become a Backend Engineer</h3>
            <p class="erc-card-text">Master essential backend technologies like Node.js, PHP, Python, and databases. Build real-world projects and develop the expertise needed to solve complex challenges in the industry.</p>
        </div>

        <!-- Outcome 2 -->
        <div class="erc-card">
            <h3 class="erc-card-title">Showcase Your Expertise</h3>
            <p class="erc-card-text">Create impressive portfolio projects that highlight your skills, including building RESTful APIs and integrating third-party services. Employers will recognize your capabilities instantly.</p>
        </div>

        <!-- Outcome 3 -->
        <div class="erc-card">
            <h3 class="erc-card-title">Receive Your Diploma Certificate</h3>
            <p class="erc-card-text">Successfully completing the program will earn you a distinguished diploma, recognizing your expertise and dedication to mastering Backend Engineering.</p>
        </div>

        <!-- Outcome 4 -->
        <div class="erc-card">
            <h3 class="erc-card-title">Unlock High-Demand Career Opportunities</h3>
            <p class="erc-card-text">Your newly acquired skills will open doors to exciting backend engineering roles in leading tech companies. Whether at innovative startups or major enterprises, backend engineers are more sought after than ever.</p>
        </div>
    </div>
















    
    
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








