<section class="client-carousel-section py-5">
  <div class="container">
    
    <div class="text-center mb-4">
      <h2 class="fw-bold client">What Our Clients Say</h2>
      <span>Real experiences from learners at ViAaNur</span>
    </div>

    <div class="owl-carousel testimonial-slider">

      <div class="testimonial-card text-center">
        <p>"ViaANur Academy made learning so easy and interactive. Highly recommended!"</p>
        <h5 class="mt-3 blue-txt">Sarah Ali</h5>
        <small class="text-muted">Web Developer</small>
      </div>

      <div class="testimonial-card text-center">
        <p>"Excellent instructors and well-structured courses. Learned at my own pace."</p>
        <h5 class="mt-3 blue-txt">Ahsan Raza</h5>
        <small class="text-muted">Graphic Designer</small>
      </div>

      <div class="testimonial-card text-center">
        <p>"Professional environment and supportive staff. Loved the experience!"</p>
        <h5 class="mt-3 blue-txt">Fatima Noor</h5>
        <small class="text-muted">Digital Marketer</small>
      </div>

      <div class="testimonial-card text-center">
        <p>"Best online learning experience I’ve had so far!"</p>
        <h5 class="mt-3 blue-txt">Usman Tariq</h5>
        <small class="text-muted">UI/UX Designer</small>
      </div>

      <div class="testimonial-card text-center">
        <p>"Courses are detailed, engaging, and easy to follow."</p>
        <h5 class="mt-3 blue-txt">Areeba Khan</h5>
        <small class="text-muted">SEO Specialist</small>
      </div>

    </div>

  </div>
</section>

<script>
$(document).ready(function(){
  $(".testimonial-slider").owlCarousel({
      loop: true,
      margin: 25,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      navText: [
        '<i class="bi bi-arrow-left"></i>',
        '<i class="bi bi-arrow-right"></i>'
      ],
      responsive:{
          0:{
              items:1   // Mobile → 1 card
          },
          768:{
              items:2   // Tablet → 2 cards
          },
          992:{
              items:3   // Desktop → 3 cards
          }
      }
  });
});

</script>
<style>
.testimonial-card {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* ensures content spreads evenly */
    min-height: 196px;
    border: 1px solid #cccccc82;
} /* minimum height for all cards */
.bi-arrow-left::before {
    color: #afcb39;
}
.bi-arrow-right::before{
    color: #afcb39;
}
h2.client
 {
    font-size: 27px;
    font-weight: 600;
    color: black;
}
/* Optional: Make text same size */
.testimonial-card p {
  font-size: 16px;
  line-height: 1.5;
}
.blue-txt {
    color: #322f89;
    font-size: 18px;
    font-weight: 700
}
/* Adjust small screens */
@media (max-width: 767px) {
  .testimonial-card {
    min-height: auto; /* cards auto-height on mobile */
  }
}

</style>
