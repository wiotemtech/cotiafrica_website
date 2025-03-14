@extends('layouts.app')

@section('content')

<section style="background-image: url('{{ asset('assets/images/cyper.jpg') }}');" class="software-intern-section">
    <h1 class="typed-text" id="typedText">Cybersecurity Track</h1>
    <p class="intro-paragraph">Who can apply? <br> <strong>university|collges/institutions|Graduates</strong></p>
    <button class="ctx-button" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSdy_uIywrsqinOgqRpBgYFWz65de5ysU-b1vCJKIk667cNtsQ/formResponse'">Apply Now</button>
  </section>

<div class="program-section">
<h1>Program Details</h1>
<table>
<tr>
<th>Program</th>
<td>Cybersecurity Intern</td>
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
                                                                                                    "Identify threats and innovate in security, building leadership skills to become a future leader in cybersecurity."
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
<img src="{{ asset('assets/images/cyper.jpg') }}" alt="Left Card Image">
</div>
<div class="qualification-card-content">
<h2>Key Responsibility</h2>
<ul>
<li>Assist in monitoring security alerts and logs for potential threats</li>
<li>Support incident response procedures and documentation</li>
<li>Contribute to vulnerability scanning and remediation efforts</li>
<li>Assist in security awareness training and documentation</li>
<li>Participate in security testing and validation activities</li>
<li>Document security procedures and create technical guides</li>
 </ul>

</div>
</div>
                                                                                            
<!-- Right Card: Preferred Qualifications -->
<div class="qualification-card qualification-right-card">
<div class="qualification-card-image">
<img src="{{ asset('assets/images/cyper.jpg') }}" alt="Right Card Image">
</div>
<div class="qualification-card-content">
<h2>Preferred Qualifications</h2>
<ul>
<li>Experience with security information and event management (SIEM) tools</li>
<li>Knowledge of operating system security (Windows, Linux)</li>
<li>Familiarity with security frameworks (NIST, ISO 27001, CIS)</li>
<li>Understanding of network protocols and packet analysis</li>
<li>Basic scripting or programming skills (Python, PowerShell)</li>
<li>Relevant cybersecurity certifications or coursework (Security+, CYSA+)</li>
</ul>

</div>
</div>
</div>
 </div>
                                                                                            


















    <!-- Learning Outcomes Section -->
    <div style="margin-top: -50px"  class="learning-outcomes-section-3">
<!-- Left Section with Title and Outcome Card -->
<div class="learning-outcomes-left-3">
<h1>Learning Outcomes</h1>
<!-- Outcome Card -->
<div class="outcome-card-3">
<ul>
  <li><strong>Industry Exposure:</strong> Gain hands-on experience in cybersecurity operations and real-time threat monitoring.</li>
  <li><strong>Skill Development:</strong> Develop expertise in incident response and security protocols.</li>
  <li><strong>Networking Opportunities:</strong> Learn to implement and manage cutting-edge security tools effectively.</li>
  <li><strong>Real-World Problem Solving:</strong> Build skills in identifying, analyzing, and mitigating security threats.</li>
  <li><strong>Agile Development Knowledge:</strong> Understand and apply vulnerability management in dynamic environments.</li>
  
</ul>
</div>
</div>
                                                                                            
<!-- Right Section with Image -->
<div class="learning-outcomes-right-3">
<img src="{{ asset('assets/images/cyper.jpg') }}">
</div>
</div>


<section style="margin-top: -50px"  class="partner-section ">
<div class="container">
<h1 class="animate-heading">Get Cyber Skills. Apply Now!</h1>
<p class="animate-paragraph">Contribute to real-world security projects, gain industry insights,<br> and launch your cyber career. Apply today."</p>
                                                                                                
<a class="btn-join-talent" href="https://docs.google.com/forms/d/e/1FAIpQLSdy_uIywrsqinOgqRpBgYFWz65de5ysU-b1vCJKIk667cNtsQ/formResponse">
Apply Now <i id="arrow" class="fa fa-arrow-right arrow"></i>
</a>
</div>
</section>



                                                                                            
                                                                                                


@endsection
