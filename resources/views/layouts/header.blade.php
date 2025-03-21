<header class="bg-white shadow-sm fixed-top">
    <div class="row bg-app">
<div class="  marquee-text col-md-12" >
    <p class="text-center text-white" style="margin-top: 5px;"> <marquee behavior="0" direction="left">
        <span>Address:UTC-Lira</span>
        <span>Tel:+256-779-512-100 / +256-759-512-100</span>
        <span>Office-Time:8am-5pm</span>
        <span>Email:solutions@cotiafrica.com</span>

   </marquee> </p>
</div>
    </div>


    <div class="container d-flex justify-content-between align-items-center py-3">
        <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
            <img src="{{ asset('assets/images/logo.png') }}" width="40" class="mr-2" alt="Logo">
            <span class="font-weight-bold text-app">COTI-AFRICA</span>
        </a>

        <!-- For larger devices -->
        <nav  class="d-none d-md-flex">
            <a  href="{{ route('home') }}" class="nav-link text-app mx-2">Home</a>
            {{-- <a href="" class="nav-link text-app mx-2">Services</a> --}}

            <a href="{{ route('whyus')}}" class="nav-link text-app mx-2">Why Us</a>
            <a href="{{ route('events') }}" class="nav-link text-app mx-2">Events</a>
            <a href="{{ route('blogs') }}" class="nav-link text-app mx-2">Blogs</a>
            <a href="{{ route('contactus') }}" class="nav-link text-app mx-2">Contact Us</a>

        </nav>

        <!-- For small devices -->
        <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="collapse navbar-collapse bg-app">
        <div class="container py-3">
            <a href="{{ route('home') }}" class="nav-link text-white">Home</a>
            {{-- <a href="" class="nav-link text-white">Services</a> --}}
            <a href="{{ route('whyus') }}" class="nav-link text-white">Why Us</a>
            <a href="{{ route('events') }}" class="nav-link text-white">Events</a>
            <a href="{{ route('blogs') }}" class="nav-link text-white">Blogs</a>
            <a href="{{ route('contactus') }}" class="nav-link text-white">Contact us</a>


        </div>
    </div>
</header>
