<!-- Preloader -->
<div class="preloader-area position-fixed start-0 top-0 end-0 bottom-0 text-center">
    <div class="preloader">
        <img src="assets/images/banner/logo-new.webp" alt="preloader" class="loader-logo">
        <div class="waviy fw-bold">
            <span class="position-relative d-inline-block">V</span>
            <span class="position-relative d-inline-block">I</span>
            <span class="position-relative d-inline-block special">A</span>
            <span class="position-relative d-inline-block special">a</span>
            <span class="position-relative d-inline-block">N</span>
            <span class="position-relative d-inline-block">U</span>
            <span class="position-relative d-inline-block">R</span>
        </div>

    </div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area --> 
<div class="navbar-area fixed-top">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/banner/logo-new.webp" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand me-0" href="/">
                    <img src="assets/images/banner/logo-new.webp" alt="logo" class="header-logo" >
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Home
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('courses') }}" class="nav-link">
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('teams') }}" class="nav-link">
                                Our Team
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about-us') }}" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact-us') }}" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="others-option position-relative d-flex align-items-center">
                        <div class="option-item">
                            <a href="courses-details.html" class="default-btn2">
                                Book Now
                                <i class="bi bi-telephone ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="option-inner">
                    <div class="others-options justify-content-center d-flex align-items-center">
                        <div class="option-item">
                            <a href="#" class="default-btn2">
                                Contact Us
                                <img src="assets/images/icon/left-small.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<style>
.loader-logo{
    width: 290px;
}
</style>