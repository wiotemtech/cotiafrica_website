@extends('layouts.app')

@section('content')

<section style="background-image: url('{{ asset('assets/images/dataA.jpg') }}');" class="software-intern-section">
    <h1 class="typed-text" id="typedText">Data Analysis Track</h1>
    <p class="intro-paragraph">Who can apply? <br> <strong>university|collges/institutions|Graduates</strong></p>
    <button class="ctx-button" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSdy_uIywrsqinOgqRpBgYFWz65de5ysU-b1vCJKIk667cNtsQ/formResponse'">Apply Now</button>
  </section>

<div class="program-section">
<h1>Program Details</h1>
<table>
<tr>
<th>Program</th>
<td>Data Analysis intern</td>
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
                                                                                                    "Analyze and innovate with data, developing leadership skills to become a future data analytics leader."
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
<li>Assist in collecting, cleaning, and preprocessing datasets</li>
<li>Apply statistical methods and machine learning algorithms to analyze data</li>
<li>Develop and refine predictive models</li>
<li>Create data visualizations to communicate insights effectively</li>
<li>Contribute to data-driven decision-making processes</li>
<li>Document methodologies, findings, and recommendations</li>
<li>Collaborate with cross-functional teams to understand data needs</li>
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
<li>Experience with machine learning libraries (Scikit-learn, TensorFlow, or PyTorch)</li>
<li>Knowledge of data visualization tools (Matplotlib, Seaborn, Tableau, or Power BI)</li>
<li>Familiarity with SQL and database concepts</li>
<li>Understanding of experimental design and A/B testing</li>
<li>Experience with big data technologies (Hadoop, Spark)</li>
<li>Domain knowledge in development economics, public health, or education</li>
</ul>

</div>
</div>
</div>
 </div>
                                                                                            


















    <!-- Learning Outcomes Section -->
    <div class="learning-outcomes-section-3">
<!-- Left Section with Title and Outcome Card -->
<div class="learning-outcomes-left-3">
<h1>Learning Outcomes</h1>
<!-- Outcome Card -->
<div class="outcome-card-3">
<ul>
<li><strong>Industry Exposure:</strong> Practical experience in the full data science workflow</li>
<li><strong>Skill Development:</strong> Skills in applying appropriate statistical methods to business problems.</li>
<li><strong>Networking Opportunities:</strong> Ability to develop and evaluate machine learning models</li>
<li><strong>Real-World Problem Solving:</strong> Experience communicating data insights to technical and non-technical audiences.</li>
<li><strong>Agile Development Knowledge:</strong> Understanding of data ethics and responsible AI practices.</li>
</ul>
</div>
</div>
                                                                                            
<!-- Right Section with Image -->
<div class="learning-outcomes-right-3">
<img src="{{ asset('assets/images/software intern.jpg') }}">
</div>
</div>


<section class="partner-section mt-3">
<div class="container">
<h1 class="animate-heading">Get practical skills. Apply today!</h1>
<p class="animate-paragraph">Drive real impact through data analysis. Gain industry insights on meaningful<br> projects. Apply now to launch your career in data.</p>
                                                                                                
<a class="btn-join-talent" href="https://docs.google.com/forms/d/e/1FAIpQLSdy_uIywrsqinOgqRpBgYFWz65de5ysU-b1vCJKIk667cNtsQ/formResponse">
Apply Now <i id="arrow" class="fa fa-arrow-right arrow"></i>
</a>
</div>
</section>



                                                                                            
                                                                                                


@endsection
