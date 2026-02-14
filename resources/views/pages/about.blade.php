@extends('layout.main')
@section('content')

    <div id="wrapper-box">
        <div class="viaanur-banner-container position-relative z-1">
            <img src="{{ asset('assets/images/banner/about.webp') }}" alt="About Banner" class="viaanur-banner-image">
        </div>
    </div>

    <!-- End About Area -->

    <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1 class="fw-bold about-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">15+</h1>
                    <h5 class="fw-bold exp-custom text-uppercase">YEARS OF EXPERIANCE</h5>
                    <p class="p-17">
                        ViAaNur is a leading institution dedicated to providing high-quality education and skill development. Our mission is to empower students with the knowledge, confidence, and creativity they need to excel academically and professionally.
                    </p>
                    <p class="p-17">
                      We believe education goes beyond memorizing facts — it’s about building a strong foundation for lifelong success. By combining expert instructors, modern teaching methods, and a supportive learning environment, we ensure every learner has the tools to reach their full potential.
                    </p>
                    <p class="p-17">
                       Our commitment is to make learning accessible, engaging, and effective for everyone, from beginners to advanced learners. At Study Academy, we inspire curiosity, foster creativity, and nurture a passion for continuous growth.
                    </p>
                </div>
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0">
                    <div class="about-img">
                        <div class="img_1 aos-init aos-animate" data-aos="zoom-in" data-aos-duration="550">
                            <div class="border-line"></div>
                            <img src="{{asset('assets/images/banner/event-1.webp')}}" class="img-fluid" alt="About" />
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- courses -->
    <div class="container pading-top-100">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title-about-course">
                    <span class="title">Online Courses</span>
                    <h2>Learn a new skills online on your time</h2>
                </div>
                <p class="p-17">
                   Discover the freedom to grow your skills on your schedule. Whether you’re looking to accelerate your career, pursue a passion, or launch a new venture, our expertly designed online courses empower you to learn efficiently, anytime and anywhere.
                </p>
                <p class="p-17">
                    <ul class="custom-bullets">
                        <li>Access courses 24/7 on your computer, tablet, or smartphone. Learn whenever it fits your schedule.</li>
                        <li>Gain knowledge from industry professionals with years of experience.</li>
                        <li>Focus on skills that matter—coding, design, marketing, languages, and more.</li>
                        <li>Participate in quizzes, projects, and discussion forums to reinforce learning.</li>
                        <li>Track your progress and earn certificates to showcase your achievements.</li>
                    </ul>  
                </p>
            </div>
            <div class="col-lg-6">
                <div class="counter-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-lg-12 mr-bx-100">
                                <div class="target-block-1 text-black text-center p-lg-5 p-md-3 p-sm-3 p-2 mb-lg-0 mb-mb-0 mb-xl-0 mb-sm-5 mb-4">
                                    <div class="border-line-1"></div>
                                    <div class="counter-icon mb-3">
                                        <img src="{{ asset('assets/images/banner/classroom.png') }}" alt="Classroom" class="icon-img">
                                    </div>
                                    <h5 class="counter-text mb-0">Teachers</h5>
                                    <!-- Number -->
                                    <div class="counter-number">300</div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-10-custom">
                                <div class="target-block-1 text-black text-center p-lg-5 p-md-3 p-sm-3 p-2 mb-lg-0 mb-mb-0 mb-xl-0 mb-sm-5 mb-4">
                                    <div class="border-line-1"></div>
                                    <div class="counter-icon mb-3">
                                        <img src="{{ asset('assets/images/banner/mentorship.png') }}" alt="Classroom" class="icon-img">
                                    </div>
                                    <h5 class="counter-text mb-0">Career</h5>
                                    <!-- Number -->
                                    <div class="counter-number">11,900</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mr-bx-100">
                            <div class="col-lg-12 mb-11-custom">
                                <div class="target-block-1 text-black text-center p-lg-5 p-md-3 p-sm-3 p-2 mb-lg-0 mb-mb-0 mb-xl-0 mb-sm-5 mb-4">
                                    <div class="border-line-1"></div>
                                    <div class="counter-icon mb-3">
                                        <img src="{{ asset('assets/images/banner/class.png') }}" alt="Classroom" class="icon-img">
                                    </div>
                                    <h5 class="counter-text mb-0">Classroom</h5>
                                    <!-- Number -->
                                    <div class="counter-number">1,700</div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-11-custom">
                                <div class="target-block-1 text-black text-center p-lg-5 p-md-3 p-sm-3 p-2 mb-lg-0 mb-mb-0 mb-xl-0 mb-sm-5 mb-4">
                                    <div class="border-line-1"></div>
                                    <div class="counter-icon mb-3">
                                        <img src="{{ asset('assets/images/banner/deadline.png') }}" alt="Classroom" class="icon-img">
                                    </div>
                                    <h5 class="counter-text mb-0">Activities</h5>
                                    <!-- Number -->
                                    <div class="counter-number">157</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----- end ----->
        
    @include('components.testimonial')

@stop
@section('js')

@endsection