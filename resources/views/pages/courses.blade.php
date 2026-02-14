@extends('layout.main')
@section('content')

    <div id="wrapper-box">
        <div class="viaanur-banner-container position-relative z-1">
            <img src="{{ asset('assets/images/banner/courses.webp') }}" alt="About Banner" class="viaanur-banner-image">
        </div>
    </div>
    <!-- Start Courses Grid Area -->
    <div class="courses-grid-area pt-136 pb-110">
        <div class="container">
            <div class="row process">
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-card">
                        <div class="image position-relative">
                            <a href="courses-details.html">
                                <img src="{{asset('assets/images/banner/socialmedia (1).webp')}}" alt="courses-image" class="img-cource">
                            </a>
                            <span class="price">$27.00</span>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="courses-details.html">Introduction to Social Media Concepts</a>
                            </h3>
                            <div class="user-info d-flex align-items-center">
                                <div class="image me-2">
                                    <img src="{{asset('assets/images/banner/WhatsApp Image 2026-02-11 at 2.50.14 PM.jpeg')}}" 
                                        alt="courses-image" 
                                        class="rounded-circle"
                                        width="50">
                                </div>
                                <div>
                                    <h6 class="mb-1 d-flex align-items-center">
                                        Prof. Aftab Anwar
                                        <span class="ms-12 rating-stars">
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                        </span>
                                    </h6>
                                </div>
                            </div>
                            <div class="list-info d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('assets/images/banner/user-icon2.png')}}" class="users-course" alt="icon">
                                    </div>
                                    <span>70+ students</span>
                                </div>
                                <div class="button">
                                    <a href="courses-details.html">
                                        ENROLL NOW
                                         <i class="bi bi-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-card">
                        <div class="image position-relative">
                            <a href="courses-details.html">
                                <img src="{{asset('assets/images/banner/wi.webp')}}" alt="courses-image" class="img-cource">
                            </a>
                            <span class="price">$27.00</span>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="courses-details.html">Introduction to Mathematics</a>
                            </h3>
                              <div class="user-info d-flex align-items-center">
                                <div class="image me-2">
                                     <img src="{{asset('assets/images/banner/WhatsApp Image 2026-02-11 at 3.38.52 PM.jpeg')}}" alt="courses-image">
                                </div>
                                <div>
                                    <h6 class="mb-1 d-flex align-items-center">
                                        Prof. Hani Hassan
                                        <span class="ms-12 rating-stars">
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star-half"></i>

                                        </span>
                                    </h6>
                                </div>
                            </div>
                            <div class="list-info d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('assets/images/banner/user-icon2.png')}}" class="users-course" alt="icon">
                                    </div>
                                    <span>70+ students</span>
                                </div>
                                <div class="button">
                                    <a href="courses-details.html">
                                        ENROLL NOW
                                        <i class="bi bi-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-card">
                        <div class="image position-relative">
                            <a href="courses-details.html">
                                <img src="{{asset('assets/images/banner/esol (2).webp')}}" alt="courses-image" class="img-cource">
                            </a>
                            <span class="price">$27.00</span>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="courses-details.html">Introduction to ESOL </a>
                            </h3>
                              <div class="user-info d-flex align-items-center">
                                <div class="image me-2">
                                     <img src="{{asset('assets/images/banner/WhatsApp Image 2026-02-11 at 2.51.11 PM.jpeg')}}" alt="courses-image">
                                </div>
                                <div>
                                    <h6 class="mb-1 d-flex align-items-center">
                                        Prof. Nargis Jamadar
                                        <span class="ms-12 rating-stars">
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star-half"></i>

                                        </span>
                                    </h6>
                                </div>
                            </div>
                            <div class="list-info d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('assets/images/banner/user-icon2.png')}}" class="users-course" alt="icon">
                                    </div>
                                    <span>70+ students</span>
                                </div>
                                <div class="button">
                                    <a href="courses-details.html">
                                        ENROLL NOW
                                        <i class="bi bi-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6">
                    <div class="single-courses-card">
                        <div class="image position-relative">
                            <a href="courses-details.html">
                                <img src="assets/images/banner/quran (1).webp" alt="courses-image" class="img-cource">
                            </a>
                            <span class="price">$27.00</span>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="courses-details.html">Introduction to Qur’an Reading & Memorisation</a>
                            </h3>
                            <div class="user-info d-flex align-items-center">
                                <div class="image me-2">
                                    <img src="{{asset('assets/images/banner/WhatsApp Image 2026-02-11 at 3.36.58 PM.jpeg')}}" alt="courses-image">
                                </div>
                                <div>
                                    <h6 class="mb-1 d-flex align-items-center">
                                        Prof. Amina Begum
                                        <span class="ms-12 rating-stars">
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star-half"></i>

                                        </span>
                                    </h6>
                                </div>
                            </div>
                            <div class="list-info d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('assets/images/banner/user-icon2.png')}}" class="users-course" alt="icon">
                                    </div>
                                    <span>70+ students</span>
                                </div>
                                <div class="button">
                                    <a href="courses-details.html">
                                        ENROLL NOW
                                        <i class="ph ph-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-courses-card">
                        <div class="image position-relative">
                            <a href="courses-details.html">
                                <img src="{{asset('assets/images/banner/online-English-teacher-skills.jpg')}}" alt="courses-image" class="img-cource">
                            </a>
                            <span class="price">$27.00</span>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="courses-details.html">Introduction to English </a>
                            </h3>
                              <div class="user-info d-flex align-items-center">
                                <div class="image me-2">
                                     <img src="{{asset('assets/images/banner/WhatsApp Image 2026-02-11 at 2.51.11 PM.jpeg')}}" alt="courses-image">
                                </div>
                                <div>
                                    <h6 class="mb-1 d-flex align-items-center">
                                        Prof. Nargis Jamadar
                                        <span class="ms-12 rating-stars">
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star-half"></i>

                                        </span>
                                    </h6>
                                </div>
                            </div>
                            <div class="list-info d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('assets/images/banner/user-icon2.png')}}" class="users-course" alt="icon">
                                    </div>
                                    <span>70+ students</span>
                                </div>
                                <div class="button">
                                    <a href="courses-details.html">
                                        ENROLL NOW
                                        <i class="bi bi-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-6">
                    <div class="single-courses-card">
                        <div class="image position-relative">
                            <a href="courses-details.html">
                                <img src="{{asset('assets/images/banner/istockphoto-1305999733-612x612.jpg')}}" alt="courses-image" class="img-cource">
                            </a>
                            <span class="price">$27.00</span>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="courses-details.html">Introduction to Website/Webpage Design </a>
                            </h3>
                              <div class="user-info d-flex align-items-center">
                                <div class="image me-2">
                                     <img src="{{asset('assets/images/banner/WhatsApp Image 2026-02-11 at 2.50.14 PM.jpeg')}}" alt="courses-image">
                                </div>
                                <div>
                                    <h6 class="mb-1 d-flex align-items-center">
                                        Prof. Aftab Anwar
                                        <span class="ms-12 rating-stars">
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star"></i>
                                            <i class="ph-fill ph-star-half"></i>

                                        </span>
                                    </h6>
                                </div>
                            </div>
                            <div class="list-info d-flex align-items-center justify-content-between">
                                <div class="title d-flex align-items-center">
                                    <div class="icon">
                                        <img src="{{asset('assets/images/banner/user-icon2.png')}}" class="users-course" alt="icon">
                                    </div>
                                    <span>70+ students</span>
                                </div>
                                <div class="button">
                                    <a href="courses-details.html">
                                        ENROLL NOW
                                        <i class="bi bi-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Courses Grid Area -->

@stop
@section('js')
@endsection     