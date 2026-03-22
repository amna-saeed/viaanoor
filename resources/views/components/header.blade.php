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
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('courses') }}" class="nav-link {{ request()->routeIs('courses') ? 'active' : '' }}">
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('teams') }}" class="nav-link {{ request()->routeIs('teams') ? 'active' : '' }}">
                                Our Team
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about-us') }}" class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact-us') }}" class="nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="others-option position-relative d-flex align-items-center gap-2">
                        @auth
                            <div class="option-item">
                                <a href="{{ route('student.dashboard') }}" class="header-nav-btn">
                                    <i class="bi bi-grid-1x2 me-1"></i> Dashboard
                                </a>
                            </div>
                            @if(auth()->user()->isAdmin())
                                <div class="option-item">
                                    <a href="{{ route('admin.dashboard') }}" class="header-nav-btn header-nav-btn-outline">Admin</a>
                                </div>
                            @endif
                            <div class="option-item">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="header-nav-btn header-nav-btn-outline">Sign out</button>
                                </form>
                            </div>
                        @else
                            <div class="option-item">
                                <a href="{{ route('login') }}" class="header-nav-btn"> <i class="bi bi-person-fill ml-2"></i>Sign in</a>
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
                                <a href="{{ route('student.dashboard') }}" class="header-nav-btn">Dashboard</a>
                            </div>
                            <div class="option-item">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="header-nav-btn header-nav-btn-outline">Sign out</button>
                                </form>
                            </div>
                        @else
                            <div class="option-item">
                                <a href="{{ route('login') }}" class="header-nav-btn">Sign in <i class="bi bi-person-fill ml-2"></i></a>
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
/* Active nav link - green color + underline */
.navbar-nav .nav-link.active {
    color: #322f89 !important;
    font-weight: 600;
    text-decoration: underline !important;
    text-underline-offset: 6px;
    text-decoration-thickness: 2px;
}
.navbar-nav .nav-link:hover {
    color: var(--mainColor, #b2cd34) !important;
}

.loader-logo{
    width: 290px;
}

/* Header-only auth buttons – unique class, baaki site ke buttons par apply nahi hoga */
.header-nav-btn {
    z-index: 1;
    position: relative;
    padding: 8px 15px;
    border-radius: 6px;
    display: inline-block;
    color: #fff;
    background: #322f89;
    font-size: 15px;
    font-weight: 500;
    font-family: var(--fontFamily);
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    border: 2px solid #322f89;
    cursor: pointer;
    display: inline-flex;
    gap: 5px;
}
.header-nav-btn:hover {
    color: #fff;
    background: #2a276e;
    border-color: #2a276e;
}
.header-nav-btn-outline {
    background: transparent;
    color: #322f89;
    border: 2px solid #322f89;
}
.header-nav-btn-outline:hover {
    background: #322f89;
    color: #fff;
}
form .header-nav-btn-outline {
    font-size: 14px;
    padding: 6px 14px;
}
</style>