<!-- Topbar Section Start -->
<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6">
                <!-- Topbar Contact Information Start -->
                <div class="topbar-contact-info">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-envelope"></i>worklink.solution.site@gmail.com</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone"></i>+123 465 789</a></li>
                    </ul>
                </div>
                <!-- Topbar Contact Information End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Topbar Social Links Start -->
                <div class="topbar-social-links">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i>instagram</a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i>facebook</a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i>linkedin</a></li>
                    </ul>
                </div>
                <!-- Topbar Social Links End -->
            </div>
        </div>
    </div>
</div>
<!-- Topbar Section End -->

<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="./">
                    <img src="{{ asset('assets/home/images/final-logona.png') }}" alt="Logo" class="logo-img" style="max-height: 120px; width: auto; margin-top: 10px;">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#about">About Us</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="{{ route('home') }}#services">Services</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#designers">For Designers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#studios">For Studios</a></li>
                                </ul>
                            </li>

                            <li class="nav-item submenu"><a class="nav-link" href="#">Discover</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="#">Service Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#faqs">FAQs</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#contact">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="{{ route('inquire') }}" class="btn-default btn-highlighted"><i class="fa-solid fa-envelope me-2"></i>Inquire Now</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->

