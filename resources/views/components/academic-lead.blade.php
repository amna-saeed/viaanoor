<section class="academic-lead-section">
    <div class="academic-lead-bg">
        <div class="academic-lead-bg-shape academic-lead-bg-1"></div>
        <div class="academic-lead-bg-shape academic-lead-bg-2"></div>
    </div>
    <div class="container">
        <div class="academic-lead-inner">
            <div class="academic-lead-media">
                <div class="academic-lead-image-frame">
                    <div class="academic-lead-image-accent"></div>
                    <img src="{{ asset('assets/images/banner/WhatsApp Image 2026-02-11 at 2.50.39 PM.jpeg') }}" alt="Founder & Academic Lead" class="academic-lead-img">
                </div>
            </div>
            <div class="academic-lead-content">
                <div class="academic-lead-gradient-line">
                    <span class="academic-lead-line academic-lead-line-main"></span>
                    <span class="academic-lead-line academic-lead-line-glow"></span>
                </div>
                <h2 class="academic-lead-heading">Founder & Academic Lead</h2>
                <div class="academic-lead-quote">
                <p class="academic-lead-message">
At ViAaNur Tutoring, we believe that exceptional education is never accidental — it is intentional, structured, and rooted in high standards.<br>

As Academic Lead, my vision is simple: to ensure that every learner receives teaching that is academically rigorous, carefully personalised, and delivered with clarity and care. Whether a child is building foundational skills, closing gaps, or striving for the highest grades, our approach is always purposeful and aspirational.<br>

With over a decade of experience across both secondary and primary education, and having led whole-school mathematics improvement, I understand the importance of curriculum coherence, expert instruction, and consistent expectations. These principles underpin everything we do at ViAaNur.<br>

We do not believe in shortcuts. We believe in strong foundations, precise teaching, and developing confident, independent learners who truly understand what they are learning. Every tutor at ViAaNur is trained and supported to deliver this same standard of excellence, ensuring consistency across our provision.<br>

Education shapes futures — and we consider it a privilege to play a role in that journey.
</p>
                </div>
                <div class="academic-lead-meta">
                    <div>
                        <span class="academic-lead-name">R. Quraishi</span>
                        <span class="academic-lead-role">Founder & Academic Lead(ViAaNur Tutoring)</span>
                    </div>
                    <span class="academic-lead-signature">Ruheena Quraishi</span>
                </div>
                <!-- <a href="{{ route('about-us') }}" class="academic-lead-cta">Read More</a> -->
            </div>
        </div>
    </div>
</section>

<style>
.academic-lead-section {
    padding: 40px 0;
    background: linear-gradient(165deg, #faf9fc 0%, #f3f5f8 35%, #eef4ea 70%, #f6f4fa 100%);
    position: relative;
    overflow: hidden;
    margin-top: 12px;
    margin-bottom: 50px;
}

.academic-lead-bg {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 0;
}
.academic-lead-bg-shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.4;
}
.academic-lead-bg-1 {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(178, 205, 52, 0.25) 0%, transparent 70%);
    top: -100px;
    right: 10%;
}
.academic-lead-bg-2 {
    width: 320px;
    height: 320px;
    background: radial-gradient(circle, rgba(50, 47, 137, 0.2) 0%, transparent 70%);
    bottom: -80px;
    left: 5%;
}

.academic-lead-inner {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 0.5fr 1.5fr;
    gap: 4rem;
    align-items: center;
    max-width: 1250px;
    margin: 0 auto;
}

@media (max-width: 991px) {
    .academic-lead-section { padding: 70px 0; }
    .academic-lead-inner {
        grid-template-columns: 1fr;
        gap: 2.5rem;
    }
    .academic-lead-media { order: 1; }
    .academic-lead-content { order: 2; }
}

.academic-lead-image-frame {
    position: relative;
    overflow: visible;
}
.academic-lead-image-accent {
    position: absolute;
    bottom: -12px;
    right: -12px;
    width: 120px;
    height: 120px;
    background: linear-gradient(135deg, var(--mainColor, #b2cd34) 0%, #322f89 100%);
    z-index: 0;
    opacity: 0.9;
    border-radius: 4px;
}
.academic-lead-img {
    position: relative;
    z-index: 1;
    width: 100%;
    height: auto;
    max-height: 520px;
    object-fit: cover;
    object-position: center top;
    display: block;
    box-shadow: 0 24px 48px -12px rgba(50, 47, 137, 0.15), 0 12px 24px -8px rgba(0, 0, 0, 0.08);
}

.academic-lead-content {
    padding-left: 0;
    position: relative;
}

/* Gradient line - premium, thick, glow */
.academic-lead-gradient-line {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 2rem;
    width: 8px;
    border-radius: 4px;
    overflow: visible;
}
.academic-lead-line {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 6px;
    border-radius: 4px;
}
.academic-lead-line-main {
    background: linear-gradient(180deg,
        var(--mainColor, #b2cd34) 0%,
        #9ab84a 25%,
        #7a9e4a 50%,
        #5c7a8a 75%,
        #322f89 100%
    );
    box-shadow: 0 0 20px rgba(178, 205, 52, 0.35), 0 0 40px rgba(50, 47, 137, 0.2);
}
.academic-lead-line-glow {
    width: 20px;
    left: -6px;
    background: linear-gradient(90deg, rgba(178, 205, 52, 0.15) 0%, rgba(50, 47, 137, 0.08) 100%);
    filter: blur(8px);
}

@media (max-width: 991px) {
    .academic-lead-gradient-line { bottom: 1.5rem; }
}

.academic-lead-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #322f89;
    margin: 0 0 12px 32px;
    position: relative;
}
.academic-lead-label::after {
    content: '';
    position: absolute;
    left: 32px;
    bottom: -6px;
    width: 28px;
    height: 2px;
    background: linear-gradient(90deg, var(--mainColor, #b2cd34), #322f89);
    border-radius: 1px;
}

.academic-lead-heading {
    font-size: 30px;
    font-weight: 800;
    color: #1a1a2e;
    margin: 0 0 24px 32px;
    line-height: 1.2;
    font-family: var(--headingFontFamily, 'Poppins', sans-serif);
    letter-spacing: -0.02em;
}

.academic-lead-quote {
    margin-bottom: 28px;
    padding-left: 32px;
    position: relative;
}
.academic-lead-quote-mark {
    position: absolute;
    left: 32px;
    top: -8px;
    font-size: 56px;
    line-height: 1;
    font-family: Georgia, serif;
    font-weight: 700;
    background: linear-gradient(180deg, rgba(178, 205, 52, 0.4) 0%, rgba(50, 47, 137, 0.25) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.academic-lead-message {
    font-size: 16px;
    line-height: 30px;
    color: #444;
    margin: 0;
    position: relative;
    z-index: 1;
    text-align: justify;
}

.academic-lead-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 28px;
    padding-left: 32px;
}
.academic-lead-name {
    display: block;
    font-size: 18px;
    font-weight: 700;
    color: #1a1a2e;
}
.academic-lead-role {
    display: block;
    font-size: 13px;
    color: #666;
    margin-top: 2px;
}
.academic-lead-signature {
    font-family: 'Segoe Script', 'Brush Script MT', cursive;
    font-size: 22px;
    background: linear-gradient(135deg, #322f89, #4a4699);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-style: italic;
}

.academic-lead-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-left: 32px;
    padding: 14px 32px;
    background: linear-gradient(135deg, var(--mainColor, #b2cd34) 0%, #8fa83a 50%, #322f89 100%);
    background-size: 200% 200%;
    color: #fff !important;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 6px;
    box-shadow: 0 8px 24px rgba(50, 47, 137, 0.3);
    transition: background-position 0.4s ease, transform 0.2s ease, box-shadow 0.2s ease;
}
.academic-lead-cta:hover {
    background-position: 100% 50%;
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(50, 47, 137, 0.4);
    color: #fff !important;
}

@media (min-width: 320px) and (max-width: 525px){
.academic-lead-heading{
    font-size: 23px;
    font-weight: 700;
}
}
</style>
