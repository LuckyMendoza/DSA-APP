
   

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