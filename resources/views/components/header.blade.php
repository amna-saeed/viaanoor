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
                        <img src="{{ asset('assets/images/banner/logo-new.webp') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand me-0" href="/">
                    <img src="{{ asset('assets/images/banner/logo-new.webp') }}" alt="logo" class="header-logo" >
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
                    <div class="others-option position-relative d-flex align-items-center gap-2">
                        @auth
                            <div class="option-item">
                                <a href="{{ route('student.dashboard') }}" class="default-btn2">
                                    <i class="bi bi-grid-1x2 me-1"></i> Dashboard
                                </a>
                            </div>
                            @if(auth()->user()->isAdmin())
                                <div class="option-item">
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-light btn-sm">Admin</a>
                                </div>
                            @endif
                            <div class="option-item">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-light btn-sm">Sign out</button>
                                </form>
                            </div>
                        @else
                            <div class="option-item">
                                <a href="{{ route('login') }}" class="default-btn2 mini"> <i class="bi bi-person-fill ml-2"></i>Sign in</a>
                            </div>
                        @endauth
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
                    <div class="others-options justify-content-center d-flex align-items-center gap-2 flex-wrap">
                        @auth
                            <div class="option-item">
                                <a href="{{ route('student.dashboard') }}" class="default-btn2">Dashboard</a>
                            </div>
                            <div class="option-item">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf<button type="submit" class="btn btn-outline-light btn-sm">Sign out</button></form>
                            </div>
                        @else
                            <div class="option-item">
                                <a href="{{ route('login') }}" class="default-btn2">Sign in <i class="bi bi-person-fill ml-2"></i></a>
                            </div>
                        @endauth
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
button.btn.btn-outline-light.btn-sm{
    background: red;
    padding: 8px;
}
a.btn.btn-outline-light.btn-sm {
    background: #322f89;
    padding: 9px 14px;
    border-radius: 5px;
}
.default-btn2 {
    z-index: 1;
    position: relative;
    padding: 8px 13px;
    border-radius: 6px;
    display: inline-block;
    color: #fff;
    background: #322f89;
    font-size: 18px;
    font-weight: 500;
    font-family: var(--fontFamily);
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    border: none;
}
</style>