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
                    <h5 class="fw-bold exp-custom text-uppercase">10+ years of experience</h5>
                    <p class="p-17">
                        At ViAaNur Tutoring, we believe that every learner carries unique potential waiting to be cultivated. Our approach combines personalised, high-quality instruction with structured academic strategy to ensure each student achieves measurable mastery and lasting confidence.
                    </p>
                    <p class="p-17">
                        We are a team of highly skilled and dedicated tutors committed to delivering tailored learning experiences that align with each student’s strengths, goals, and pace. Through precision teaching, ongoing assessment, and supportive mentorship, we create an environment where students feel both challenged and empowered.
                    </p>
                    <p class="p-17">
                        Our work extends beyond improving grades. We nurture resilience, independent thinking, and leadership qualities—equipping students with the clarity, discipline, and confidence needed to thrive in an evolving world. Grounded in our commitment to Empowered Minds, Proven Results, Exceptional Futures, we partner with families to transform potential into performance and aspiration into achievement.
                    </p>
                    <p class="p-17">
                        At ViAaNur Tutoring, excellence is not a destination—it is a journey of growth, mastery, and purpose.
                    </p>
                </div>
                <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0">
                    <div class="about-img">
                        <div class="img_1 aos-init aos-animate" data-aos="zoom-in" data-aos-duration="550">
                            <div class="border-line"></div>
                            <img src="{{asset('assets/images/banner/OnlineClass.webp')}}" class="img-fluid" alt="About" />
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- courses -->
    <div class="container pading-top-1001">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title-about-course">
                    <span class="title">Online Learning Excellence</span>
                    <h2>Flexible Learning. Proven Progress.</h2>
                </div>
                <p class="p-17">
                   Experience the freedom to advance your knowledge through expertly designed online programmes tailored to support meaningful growth. Whether you are strengthening academic foundations, pursuing advanced mastery, or expanding your skill set, our online learning pathways provide structured, high-quality education—accessible wherever and whenever you choose.
                </p>
                <p class="p-17">
                    <ul class="custom-bullets">
                        <li>Access course materials 24/7 across desktop, tablet, or mobile devices, allowing learning to fit seamlessly into your schedule.</li>
                        <li>Benefit from guidance developed by experienced educators committed to academic excellence</li>
                        <li>Focus on high-impact subject areas designed to build confidence, competence, and measurable results.</li>
                        <li>Engage with interactive assessments, structured activities, and applied learning tasks that reinforce mastery.</li>
                        <li>Monitor your progress through clear benchmarks and earn recognised certificates that reflect your achievement.</li>
                    </ul>  

                    <p class="p-17">
                        At ViAaNur Tutoring, online learning is not simply convenient—it is purposeful, structured, and designed to transform potential into performance.
                    </p>
                </p>
            </div>
            <!-- <div class="col-lg-6">
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
                                    <div class="counter-number">157</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!----- end ----->
        
    @include('components.testimonial')

@stop
@section('js')

@endsection