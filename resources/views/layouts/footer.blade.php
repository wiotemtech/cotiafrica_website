
<footer class="bg-app text-white pt-5">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-md-4 mb-4">
                <h5>Code ToInnovate Africa</h5>
                <p>Innovating technology to meet your business needs and drive success.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
                    <li><a href="{{ route('home') }}" class="text-white">Services</a></li>
                    <li><a href="{{ route('whyus') }}" class="text-white">Why Us</a></li>
                    <li><a href="{{ route('blogs') }}" class="text-white">Blog</a></li>
                    <li><a href="{{ route('contactus') }}" class="text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-3 mb-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope"></i> <a href="mailto:info@cotiafrica.com" class="text-white">infor@cotiafrica.com</a></li>
                    <li><i class="fas fa-phone"></i> +256-779-512-100 / +256-759-512-100</li>
                    <li><i class="fas fa-map-marker-alt"></i>Maruzi Road,
                        Lira City, Uganda</li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="col-md-3 mb-4">
                <h5>Follow Us</h5>
                <div class="d-flex">
                    <a href="#" class="btn btn-outline-light btn-sm mr-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm mr-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm mr-2"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="text-center pt-4 border-top border-light">
            <p class="mb-0">&copy; <?php echo(date('Y')) ?> CodeToInnovate Africa. All Rights Reserved.</p>
        </div>
    </div>
</footer>
