@extends('layouts.app')

@section('content')

<section style="
background-image: url('{{ asset('assets/images/test.png') }}');
 margin-top:120px;"  class="landing-section ">
    <div class="overlay"></div>
    <div class="landing-content">
        <h1>Contact <span style="color: #1E88E5">Us</span></h1>
        <p style="font-weight: bold; color: ;">"Please contact us if you need any further information or support"</p>
    </div>
</section>


<div style="background-color: #d0e9e9;">
  <!-- Contact Us Section -->
  <div class="container py-5 animate" style="margin-top: 0px;">
    
    <!-- Centered Contact Us Title -->
    

    <div class="row mt-4">
        <!-- Left Section: Get in Touch -->
        <div class="col-md-6 animate">
            <h3 class="text-center fw-bold">Get in Touch</h3>
            <p><strong>Address:</strong> Maruzi Road, Lira City</p>
            <p><strong>Phone:</strong> +256-779-512-100 / +256-759-512-100</p>
            <p><strong>Email:</strong> info@codetoinnovateafrica.com</p>

            <h5 class="fw-bold mt-3">Follow Us</h5>
            <div class="social-icons mt-3">
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Right Section: Contact Form -->
        <div class="col-md-6 animate">
            <div class="contact-box">
                <h3 class="text-center fw-bold">Send Us a Message</h3>
                <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input style="background: #e9ecef; box-shadow: none;" type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input style="background: #e9ecef; box-shadow: none;" type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea style="background: #e9ecef; box-shadow: none;" class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
