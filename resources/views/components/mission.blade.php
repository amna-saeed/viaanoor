<!-- Start Choose Area -->
    <section class="target">
        <div class="container">
          <div class="sec-title text-center bg-fill">
            <span class="title">Why Choose Us</span>
            <h2 class="text-white">Ethics Behind Success</h2>
            <div class="divider">
              <i class="bi bi-mortarboard caps-clrs"></i>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="target-block text-white custom-padding">
                    <div class="border-line"></div>
                    <i class="bi bi-check-circle icons-bx"></i>
                    <h4 class="fw-bold head-11">Mission</h4>
                    <p class="ethics-cutom read-more-text">
                       ViAaNur Tutoring empowers every learner through personalized, high-quality instruction that nurtures academic mastery, personal growth, and the illumination of their inner light.
                    </p>
                    <a href="javascript:void(0)" class="read-more-btn">Read More 
                    </a>
                </div>
            </div>
            <div class="col-md-4">
              <div class="target-block text-white custom-padding">
                <div class="border-line icons-bx"></div>
                <i class="bi bi-eye icons-bx"></i>
                <h4 class="fw-bold head-11">Vision</h4>
                <p class="ethics-cutom read-more-text">
                  ViAaNur Tutoring strives to inspire and develop future leaders by creating an empowering learning journey that strengthens each student’s inner light and aligns with our commitment to Empowered Minds, Proven Results, Exceptional Futures.
                </p>
                <a href="javascript:void(0)" class="read-more-btn">Read More 
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="target-block text-white custom-padding">
                <div class="border-line icons-bx"></div>
                <i class="bi bi-eye icons-bx"></i>
                <h4 class="fw-bold head-11">Vision</h4>
                <p class="ethics-cutom read-more-text">
                 ViAaNur Tutoring is proudly recognised for exemplary personalised teaching, exceptional student mastery and achievement, and its meaningful contribution to developing empowered, confident future leaders equipped to thrive in an evolving world.
                </p>
                <a href="javascript:void(0)" class="read-more-btn">Read More 
                </a>
              </div>
            </div>
          </div>
        </div>
    </section>
<!-- End Choose Area -->

<style>
.custom-padding {
    padding: 35px 9px 35px 25px;
}
.read-more-text {
    max-height: 50px;
    overflow: hidden;
    position: relative;
    transition: max-height 0.4s ease;
}

/* expanded state */
.read-more-text.expanded {
    max-height: 500px;
}

.read-more-text.expanded::after {
    display: none;
}

.read-more-btn {
    cursor: pointer;
    display: inline-block;
    margin-top: 6px;
    position: absolute;
}


</style>
<script>
document.querySelectorAll('.read-more-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        const text = this.previousElementSibling;
        text.classList.toggle('expanded');

        this.textContent = text.classList.contains('expanded')
            ? 'Read Less'
            : 'Read More';
    });
});
</script>




