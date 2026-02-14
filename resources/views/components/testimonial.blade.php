<section class="client-carousel-section pb-5">
    <section class="client-carousel-section">
        <div class="container">
            <div class="text-center mb-5">
            <h2 class="fw-bold thead-client">What Our Clients Say</h2>
            <span class="title-new">Real experiences from learners at ViAaNur</span>
            </div>
                
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
                <div class="carousel-inner">

                    <!-- Slide Group 1 -->
                    <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="testimonial-card text-center">
                                <p class="testimonial-text">"Viaanur Academy made learning so easy and interactive. Highly recommended!"</p>
                                <h5 class="testimonial-name mt-3">Sarah Ali</h5>
                                <p class="testimonial-role text-muted">Web Developer</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card text-center">
                                <p class="testimonial-text">"Excellent instructors and well-structured courses. Learned at my own pace."</p>
                                <h5 class="testimonial-name mt-3">Ahsan Raza</h5>
                                <p class="testimonial-role text-muted">Graphic Designer</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card text-center">
                                <p class="testimonial-text">"Professional environment and supportive staff. Loved the experience!"</p>
                                <h5 class="testimonial-name mt-3">Fatima Noor</h5>
                                <p class="testimonial-role text-muted">Digital Marketer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Group 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                        <div class="testimonial-card text-center">
                            <p class="testimonial-text">"Best online learning experience I’ve had so far!"</p>
                            <h5 class="testimonial-name mt-3">Usman Tariq</h5>
                            <p class="testimonial-role text-muted">UI/UX Designer</p>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="testimonial-card text-center">
                            <p class="testimonial-text">"Courses are detailed, engaging, and easy to follow."</p>
                            <h5 class="testimonial-name mt-3">Areeba Khan</h5>
                            <p class="testimonial-role text-muted">SEO Specialist</p>
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="testimonial-card text-center">
                            <p class="testimonial-text">"Learned real-world skills that helped me land a new job!"</p>
                            <h5 class="testimonial-name mt-3">Bilal Ahmed</h5>
                            <p class="testimonial-role text-muted">Frontend Developer</p>
                        </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            </div>
        </div>
    </section>
</section>

<style>
.testimonial-card {
  border-radius: 12px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.12); /* even shadow on all sides */
  padding: 30px 25px;
  height: 100%;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.row.justify-content-center {
    padding: 19px 8px;
}
.testimonial-card:hover {
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.18); /* slightly stronger on hover */
}
.testimonial-text {
  font-size: 1rem;
  color: #555;
  font-style: italic;
  line-height: 1.6;
}

.testimonial-name {
  color: #0d6efd;
  font-weight: 600;
}

.testimonial-role {
  font-size: 0.9rem;
  color: #777;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: #aeca37;
  border-radius: 50%;
  padding: 10px;
}

.carousel-control-prev,
.carousel-control-next {
  width: 5%;
}

/* Responsive - Show 1 slide per row on mobile */
@media (max-width: 767px) {
  .testimonial-card {
    margin-bottom: 20px;
  }
}
</style>