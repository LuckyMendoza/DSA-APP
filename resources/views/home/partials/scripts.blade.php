
    <!-- Jquery Library File -->
    <script src="{{ asset('assets/home/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('assets/home/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('assets/home/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('assets/home/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('assets/home/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('assets/home/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('assets/home/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('assets/home/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('assets/home/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('assets/home/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('assets/home/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/home/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('assets/home/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('assets/home/js/wow.min.js') }}"></script>   
    <!-- Particles js file -->
    <script src="{{ asset('assets/home/js/particles.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('assets/home/js/function.js') }}"></script>
    <!-- Navbar Scroll Effect js -->
    <script src="{{ asset('assets/home/js/navbar-scroll.js') }}"></script>
    <script src="{{ asset('assets/home/js/particles-animation.js') }}"></script>

    <!-- Smooth Scrolling for Anchor Links -->
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links with hash
            $('a[href^="#"]').on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100 // Offset for fixed header
                    }, 800, function() {
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>

    <!-- Back to Top Button Script -->
    <script>
        $(document).ready(function() {
            // Initially hide the button
            $('.back-to-top').css({
                'opacity': '0',
                'visibility': 'hidden'
            });

            // Show or hide the back-to-top button based on scroll position
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').css({
                        'opacity': '1',
                        'visibility': 'visible'
                    });
                } else {
                    $('.back-to-top').css({
                        'opacity': '0',
                        'visibility': 'hidden'
                    });
                }
            });

            // Smooth scroll to top when button is clicked
            $('.back-to-top').click(function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 800);
                return false;
            });
        });
    </script>

    <!-- Contact Form Script -->
    <script>
        $(document).ready(function() {
            // Contact form validation and submission
            $('#contactForm').submit(function(e) {
                e.preventDefault();
                
                // Basic validation
                let isValid = true;
                const subject = $('#subject').val();
                const fullName = $('#fullName').val();
                const email = $('#email').val();
                const phone = $('#phone').val();
                const message = $('#message').val();
                const privacyCheck = $('#privacyCheck').is(':checked');
                
                // Reset previous error states
                $('.is-invalid').removeClass('is-invalid');
                
                // Validate each field
                if (!subject || subject === '---Please choose an option---') {
                    $('#subject').addClass('is-invalid');
                    isValid = false;
                }
                
                if (!fullName) {
                    $('#fullName').addClass('is-invalid');
                    isValid = false;
                }
                
                if (!email || !isValidEmail(email)) {
                    $('#email').addClass('is-invalid');
                    isValid = false;
                }
                
                if (!phone || !isValidPhone(phone)) {
                    $('#phone').addClass('is-invalid');
                    isValid = false;
                }
                
                if (!message) {
                    $('#message').addClass('is-invalid');
                    isValid = false;
                }
                
                if (!privacyCheck) {
                    $('#privacyCheck').addClass('is-invalid');
                    isValid = false;
                }
                
                // If valid, submit the form
                if (isValid) {
                    // Here you would normally send an AJAX request to your backend
                    // For now, we'll just show a success message
                    
                    // Show loading state
                    const submitBtn = $(this).find('button[type="submit"]');
                    const originalText = submitBtn.text();
                    const originalHtml = submitBtn.html();
                    submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');
                    
                    // Simulate AJAX request
                    setTimeout(function() {
                        // Reset form
                        $('#contactForm')[0].reset();
                        
                        // Show success message
                        alert('Thank you! Your message has been sent successfully.');
                        
                        // Reset button
                        submitBtn.prop('disabled', false).html(originalHtml);
                    }, 1500);
                }
            });
            
            // Email validation helper
            function isValidEmail(email) {
                const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                return regex.test(email);
            }
            
            // Phone validation helper (Philippines format)
            function isValidPhone(phone) {
                // Allow +63 format or 09 format
                const regex = /^(\+63|09|\+639)\d{9,10}$/;
                return regex.test(phone.replace(/\s+/g, ''));
            }
        });
    </script>