

@extends('layouts.app')

@section('content')
<div style="background-image: url('{{ asset('assets/images/clo.jpeg') }}');"  class="web-container">
    <div class="web-card">
        <h2>Building in the Cloud, Collaboratively</h2>
        <p>We drive innovation and scalability through cutting-edge cloud computing technologies.</p>
        <a href="{{ route('contactus') }}">Talk to Us</a>
    </div>
</div>

<section class="photo-text-section1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 tttyd-program-card-2" data-aos="fade-right">
                <img src="{{ asset('assets/images/clo.avif') }}" class="img-fluid">
            </div>
            <div class="col-md-6 text-content tttyd-program-card-2" data-aos="fade-left" style="margin-top: 16px;">
                <h2 id="h12">   About Cloud Computing</h2>
                <p id="p12" >
                    

                  We leverage the latest cloud advancements to build scalable and agile solutions that empower your business to innovate and adapt. From serverless computing to AI-powered cloud services, we help you unlock the full potential of the cloud.
                </p>
                
            </div>
        </div>
    </div>
</section>




<h1 class="ercdv-why-choose-us-title">Cloud computing deployments</h1>

<div class="ercdv-why-choose-us-section mt-4">
  <div class="row ercdv-row">
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-check-circle"></i>  Business Applications (CRM, ERP)</div>
    </div>
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-person-lines-fill"></i> Data Storage and Backup</div>
    </div>
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-chat-square-text-fill"></i> Big Data Analytics</div>
    </div>
  </div>
  <div class="row ercdv-row mt-2">
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-phone"></i> AI and Machine Learning (AI/ML)</div>
    </div>
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-clock"></i> Internet of Things (IoT)</div>
    </div>
    <div class="col-md-4">
      <div class="ercdv-why-choose-us-item"><i class="bi bi-graph-up"></i> DevOps:</div>
    </div>
  </div>
</div>








<div style="margin: 0"   class="container-1  ">
    <h1 class="team-head" data-aos="fade-up">Cloud Deployment & Service Models</h1>
    <p class="team-p1" data-aos="fade-up" data-aos-delay="200">An inclusive assembly of creative minds.</p>
    <div class="row">
        <!-- Left Card with Expertise Content -->
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="left-card" data-aos="fade-right">
                <h5 class="card-title text-center">Cloud Service Models</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="bi bi-code-slash"></i> Infrastructure as a Service (IaaS)
                    </li>
                    <p>IaaS provides fundamental computing infrastructure—virtual servers, storage, networks, and operating systems—over the internet. It offers the highest level of flexibility and control.</p>

                    <li class="d-flex align-items-center">
                        <i class="bi bi-palette"></i> Platform as a Service (PaaS)
                    </li>
                    <p>PaaS provides a platform allowing customers to develop, run, and manage web applications without the complexity of building and maintaining the infrastructure associated with developing and launching an app.

                    </p>




                    <li class="d-flex align-items-center">
                        <i class="bi bi-laptop"></i>Software as a Service (SaaS)
                    </li>
                    <p>SaaS delivers software applications over the internet, typically on a subscription basis. Users access these applications through a web browser or mobile app.</p>
                </ul>
            </div>
        </div>

        <!-- Right Card with Expertise Content -->
        <div class="col-md-6 col-sm-12 mb-4">
            <div class="right-card" data-aos="fade-left">
                <h5 class="card-title text-center">Cloud Deployment Models</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <i class="bi bi-gear-wide-connected"></i> Public Cloud
                    </li>
                    <p>Services are offered over the public internet and available to anyone who wants to purchase them.</p>

                    <li class="d-flex align-items-center">
                        <i class="bi bi-people"></i> Private Cloud
                    </li>
                    <p>Services are dedicated to a single organization and are typically hosted on-premises or in a dedicated data center.</p>

                    <li class="d-flex align-items-center">
                      <i class="bi bi-people"></i> Multi-Cloud
                  </li>
                  <p>Using multiple public cloud providers to leverage the best features of each</p>

                    <li class="d-flex align-items-center">
                        <i class="bi bi-shield-check"></i> Hybrid Cloud
                    </li>
                    <p>A combination of public and private clouds, allowing data and applications to be shared between them..</p>
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
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/AWS_Simple_Icons_Compute_Amazon_EC2_Instances.svg/512px-AWS_Simple_Icons_Compute_Amazon_EC2_Instances.svg.png" alt="Amazon EC2">
            <span>Amazon EC2</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Microsoft_Azure.svg/150px-Microsoft_Azure.svg.png?20211008202712" alt="Azure">
            <span>Azure</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Google_Cloud_logo.svg/512px-Google_Cloud_logo.svg.png" alt="Google Cloud Storage">
            <span>Google Cloud Storage</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Kubernetes_logo_without_workmark.svg/617px-Kubernetes_logo_without_workmark.svg.png" alt="Kubernetes">
            <span>Kubernetes</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Terraform_Logo.svg/512px-Terraform_Logo.svg.png?20181016201549" alt="Terraform">
            <span>Terraform</span>
        </div>
        <div class="tech-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Docker_%28container_engine%29_logo.svg/610px-Docker_%28container_engine%29_logo.svg.png" alt="Docker">
            <span>Docker</span>
        </div>
    </div>
    </div>
  </section>




  <section style="background-image: url('{{ asset('assets/images/test.png') }}');" class="unique-faq-section">
    <div class="faq-container">
      <h2>Frequently Asked Questions</h2>
      <div class="faq-accordion">
        <details>
          <summary>
            <span>Is cloud computing secure?</span>
            <i class="bi bi-chevron-down faq-icon"></i>
          </summary>
          <div class="faq-content">
            <p>Yes, with robust security measures like encryption and access control. We implement best practices and work with you to ensure data protection. Cloud providers often have stronger security than on-premises setups. Security is a shared responsibility.</p>
          </div>
        </details>
        <details>
          <summary>
            <span>How will moving to the cloud affect my systems?</span>
            <i class="bi bi-chevron-down faq-icon"></i>
          </summary>
          <div class="faq-content">
            <p>We assess, plan, and execute migrations with minimal disruption. Options include lift-and-shift or re-architecting for cloud-native benefits. We help modernize applications for optimal cloud performance. A smooth transition is our goal.</p>
          </div>
        </details>
        <details>
          <summary>
            <span>How much will cloud migration cost?</span>
            <i class="bi bi-chevron-down faq-icon"></i>
          </summary>
          <div class="faq-content">
            <p>Costs vary; we optimize spending with analysis and recommendations. Pay-as-you-go models and cost-control tools help manage expenses. Transparent pricing and resource scaling ensure you only pay for what you use.</p>
          </div>
        </details>
        <details>
          <summary>
            <span>What are the benefits of cloud computing?</span>
            <i class="bi bi-chevron-down faq-icon"></i>
          </summary>
          <div class="faq-content">
            <p>Scalability, cost savings, accessibility, and improved reliability. Automatic updates and enhanced collaboration boost productivity. Cloud fosters innovation and faster time-to-market. It's a modern, efficient solution..</p>
          </div>
        </details>
      </div>
    </div>
  </section>






  <section  class="partner-section ">
    <div class="container">
        <h1 class="animate-heading">Cloud vision? We'll build the infrastructure.</h1>
        <p class="animate-paragraph">Your cloud vision, our infrastructure expertise. We'll build<br> the foundation for your digital success</p>

        <a class="btn-join-talent" href="{{ route('contactus') }}">
            Let's Connect<i id="arrow" class="fa fa-arrow-right arrow"></i>
        </a>
    </div>
</section>














@endsection
