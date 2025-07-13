<!-- Footer Area Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-section">
                <div class="footer-logo">{{ $company_name ?? '' }}</div>
                <p class="footer-about">We are dedicated to providing the best service to our customers. Our
                    mission
                    is to create innovative solutions that make a difference in people's lives.</p>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-section">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-section">
                <h5>Support</h5>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact Support</a></li>
                </ul>
            </div>

            <div class="col-lg-4 footer-section">
                <img src="{{ $logo ?? '' }}" class="" width="250" alt="footer-logo">
            </div>
        </div>

        <div class="footer-bottom">
            <ul class="footer-bottom-links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Cookie Policy</a></li>
            </ul>
            <p>© 2025. GENIus Technology All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- Footer Area End -->