@extends('layouts.app')

@section('content')


<div class="container py-5" style="margin-top: 130px; ">
    <!-- Centered Contact Us Title -->
    <h2 style="font-size: 20px;" class="text-center text-app">Contact Us</h2>

    <div class="row mt-5">
        <!-- Left Section: Get in Touch -->
        <div class="col-md-6" >
            <h3 style="font-size: 18px;" class="text-center">Get in Touch</h3>
            <p><strong>Address:</strong> Maruzi Road,Lira City</p>
            <p><strong>Phone:</strong> +256-779-512-100</p>
            <p><strong>Email:</strong>info@codetoinnivateafrica.com</p>

            <h5 style="font-size: 16px  ;">Follow Us</h5>
            <div class="share-section">

                <div class="social-icons" >
                    <a  style="color: #1e88e5;" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                     <a style="color: #1e88e5;" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a style="color: #1e88e5;" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a style="color: #1e88e5;" href="#" target="_blank"><i class="fab fa-instagram"></i></a>

                </div>
            </div>
        </div>



        <!-- Right Section: Contact Form -->

        <div class="col-md-6 bg-white" style="margin-top: -8px; padding: 16px;">
            <h3 style="font-size: 18px; margin-bottom: 8px;" class="text-center">Send Us a Message</h3>
            <form class="contact-form" style=" padding: 20px; border-radius: 8px;">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>




@endsection
