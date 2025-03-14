@extends('layouts.app')

@section('content')

<section style="background-image: url('{{ asset('assets/images/she.avif') }}');" class="software-intern-section">
    <h1 class="typed-text" id="typedText">Software Development Intern</h1>
    <p class="intro-paragraph">Who can apply? <br> <strong>university|collges/institutions|Graduates</strong></p>
    <button class="ctx-button" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSdy_uIywrsqinOgqRpBgYFWz65de5ysU-b1vCJKIk667cNtsQ/formResponse'">Apply Now</button>
  </section>

<div class="program-section">
<h1>Program Details</h1>
<table>
<tr>
<th>Program</th>
<td>Software Development Intern</td>
</tr>
<tr>
<th>Certificate</th>
<td>Awaits Upon Complettion</td>
</tr>
<tr>
<th>Internship Fee</th>
<td>UGX 93,000</td>
</tr>
<tr>
<th>Program Length</th>
<td>3 Months</td>
</tr>
<tr>
<th>Start Date</th>
<td>May</td>
</tr>
<tr>
<th>Location</th>
<td>Technology Innovation Surppot Centre (TISC) UTC-Lira</td>
</tr></table>
</div>


   <!-- Internship Section -->
   <div class="internship-section-2">

<p>
    "Code and innovate in emerging tech, developing leadership skills to become a future tech leader."
</p>
</div>



    <!-- Eligibility Section -->
    <div style="background-image: url('{{ asset('assets/images/test.png') }}');" class="eligibility-section">
        <h2>Eligibility Criteria</h2>
        <ul class="eligibility-list">
        <li><i class="bi bi-check-circle-fill"></i> Currently enrolled in an undergraduate or graduate degree program in a relevant field. </li>
        <li><i class="bi bi-check-circle-fill"></i>Recent graduate (within the past 12 months) from a relevant academic program.</li>
        <li><i class="bi bi-check-circle-fill"></i>Strong academic standing (minimum GPA of 3.0 or equivalent).</li>
        <li><i class="bi bi-check-circle-fill"></i>Demonstrated interest in technology and social impact.</li>
        <li><i class="bi bi-check-circle-fill"></i>Specific technical skills as outlined in individual track descriptions.</li>
        <li><i class="bi bi-check-circle-fill"></i>Legal authorization to work in the program location.</li>
        </ul>
        </div>
        











 <!-- Section with a title -->
 <div style="background: linear-gradient(to top, #ffffff, #6daee8);" class="qualifications-section">
<h1>Qualifications</h1>
<div class="qualification-cards-container">
<!-- Left Card: Required Qualifications -->
<div class="qualification-card qualification-left-card">
<div class="qualification-card-image">
<img src="{{ asset('assets/images/a.jpg') }}" alt="Left Card Image">
</div>
<div class="qualification-card-content">
<h2>Key Responsibility</h2>
<ul>
<li>Contribute to the development of web and mobile applications using modern frameworks and libraries</li>
<li>Write clean, efficient, and well-documented code following organizational standards</li>
<li>Participate in code reviews and implement feedback</li>
<li>Collaborate with cross-functional teams to understand requirements and translate them into technical solutions</li>
<li>Assist in debugging and resolving software defects</li>
<li>Create and maintain technical documentation</li>
 </ul>

</div>
</div>
                                                                                            
<!-- Right Card: Preferred Qualifications -->
<div class="qualification-card qualification-right-card">
<div class="qualification-card-image">
<img src="{{ asset('assets/images/a.jpg') }}" alt="Right Card Image">
</div>
<div class="qualification-card-content">
<h2>Preferred Qualifications</h2>
<ul>
<li>Experience with modern web frameworks (React, Angular, Vue.js, Django, or similar)</li>
<li>Familiarity with mobile development platforms (React Native, Flutter, or native Android/iOS)</li>
<li>Understanding of API design and RESTful services</li>
<li>Knowledge of cloud services (AWS, Azure, or GCP)</li>
<li>Prior project experience (academic, open-source, or professional)</li>
<li>Participation in hackathons or coding competitions</li>
</ul>

</div>
</div>
</div>
 </div>
                                                                                            


















    <!-- Learning Outcomes Section -->
    <div style="margin-top: -50px" class="learning-outcomes-section-3">
<!-- Left Section with Title and Outcome Card -->
<div class="learning-outcomes-left-3">
<h1>Learning Outcomes</h1>
<!-- Outcome Card -->
<div class="outcome-card-3">
<ul>
<li><strong>Industry Exposure:</strong> Gain hands-on experience working on live projects with industry professionals.</li>
<li><strong>Skill Development:</strong> Enhance technical expertise with modern technologies and frameworks.</li>
<li><strong>Networking Opportunities:</strong> Connect with experienced professionals and peers in the industry.</li>
<li><strong>Real-World Problem Solving:</strong> Develop problem-solving skills by addressing real-life challenges.</li>
<li><strong>Agile Development Knowledge:</strong> Gain experience with agile practices, including sprints and retrospectives.</li>
</ul>
</div>
</div>
                                                                                            
<!-- Right Section with Image -->
<div class="learning-outcomes-right-3">
<img src="{{ asset('assets/images/software intern.jpg') }}">
</div>
</div>


<section style="margin-top: -50px" class="partner-section ">
<div class="container">
<h1 class="animate-heading">Get practical skills. Apply today!</h1>
<p class="animate-paragraph">Make a real impact with our dynamic internship. You'll contribute to meaningful <br> projects and gain industry insights. Apply now to launch your career.</p>
                                                                                                
<a class="btn-join-talent" href="https://docs.google.com/forms/d/e/1FAIpQLSdy_uIywrsqinOgqRpBgYFWz65de5ysU-b1vCJKIk667cNtsQ/formResponse">
Apply Now <i id="arrow" class="fa fa-arrow-right arrow"></i>
</a>
</div>
</section>



                                                                                            
                                                                                                


@endsection
