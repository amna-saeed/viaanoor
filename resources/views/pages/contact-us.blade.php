@extends('layout.main')
@section('content')

    <div id="wrapper-box">
        <div class="viaanur-banner-container position-relative z-1">
            <img src="{{ asset('assets/images/banner/contect-banner.webp') }}" alt="About Banner" class="viaanur-banner-image">
        </div>
    </div>

    <!-- Start Contact Area -->
    <div class="contact-area pt-136 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-contact-content">
                        <div class="section-title">
                            <h2>
                                Get In Touch
                            </h2>
                        </div>
                        <div class="contact-list d-flex align-items-center">
                            <div class="icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="content">
                                <a href="mailto:edugenmail@email.com">
                                    edugenmail@email.com
                                </a>
                            </div>
                        </div>
                        <div class="contact-list d-flex align-items-center">
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="content">
                                <a href="tel:+1234568900">
                                    +123 456 8900
                                </a>
                            </div>
                        </div>
                        <div class="contact-list d-flex align-items-center">
                            <div class="icon">
                                 <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="content">
                                <span>Mountain Green Road 2389, NY, USA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single-contact-form style-2">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email*">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Website Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea" placeholder="Your Message*"></textarea>
                            </div>
                            <button class="default-btn2 style-3 border-0">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Contact Map -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24196.22093656893!2d-111.91936604612816!3d40.70640020197386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87528ace2b0246f5%3A0x492b0c437e9cceb8!2sSouth%20Salt%20Lake%2C%20UT%2C%20USA!5e0!3m2!1sen!2sbd!4v1724093902757!5m2!1sen!2sbd"></iframe>
    </div>
    <!-- End Contact Map -->
       
@stop
@section('js')
@endsection