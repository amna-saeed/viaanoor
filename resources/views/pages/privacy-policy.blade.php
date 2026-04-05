@extends('layout.main')
@section('content')

    <!-- Start Contact Area -->
    <section class="privacy-legal-page">
        <div class="container">
            <div class="privacy-legal-header">
                <span class="privacy-legal-badge">LEGAL</span>
                <h1 class="privacy-legal-title">
                    <span class="privacy-word"> Privacy </span> <span class="policy-word">Policy</span>
                </h1>
                <p class="privacy-legal-intro">ViAaNur Tutoring is committed to protecting your privacy and handling your data transparently in accordance with UK GDPR.</p>
            </div>

            <div class="privacy-two-col">
                <aside class="privacy-sidebar" aria-label="On this page">
                    <nav class="privacy-nav">
                        <a href="#privacy-section-1" class="privacy-nav-link active">1.Information We Collect</a>
                        <a href="#privacy-section-2" class="privacy-nav-link">2. How We Use Your Information</a>
                        <a href="#privacy-section-3" class="privacy-nav-link">3.  Cancellations & Refunds</a>
                        <a href="#privacy-section-4" class="privacy-nav-link">4. Sharing Your Data</a>
                        <a href="#privacy-section-5" class="privacy-nav-link">5. Your Rights</a>
                        <a href="#privacy-section-6" class="privacy-nav-link">6. Children’s Data</a>
                        <a href="#privacy-section-7" class="privacy-nav-link">7. Cookies & Website Use</a>
                        <a href="#privacy-section-11" class="privacy-nav-link">11. Contact Us</a>
                    </nav>
                </aside>


                <div class="privacy-main">
                    <div class="accordion privacy-accordion">
                        <div class="accordion-item" id="privacy-section-1">
                            <button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="privacy-content-1" id="privacy-trigger-1">
                                <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322f89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#322f89 !important;" class="lucide lucide-search w-4 h-4">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </span></span>
                                    <span class="privacy-accordion-title">1.Information We Collect</span>
                                </span>
                                <svg class="accordion-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </button>
                            
                            <div class="accordion-content" id="privacy-content-1" role="region" aria-labelledby="privacy-trigger-1">
                                <div class="accordion-content-inner">
                                    <p class="privacy-text">We may collect:</p>
                                    <ul class="privacy-list">
                                        <li>Parent/guardian name</li>
                                        <li>Student name and age</li>
                                        <li>Email address and phone number</li>
                                        <li>Academic information (progress, assessments, targets)</li>
                                        <li>Payment details (processed securely)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="privacy-section-2">
                            <button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="privacy-content-2" id="privacy-trigger-2">
                                <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4 text-primary">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                    </span></span>
                                    <span class="privacy-accordion-title">2. How We Use Your Information</span>
                                </span>
                                <svg class="accordion-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </button>
                            <div class="accordion-content" id="privacy-content-2" role="region" aria-labelledby="privacy-trigger-2">
                                <div class="accordion-content-inner">
                                     <p class="privacy-text">Your data is used to:</p>
                                    <ul class="privacy-list">
                                        <li>Deliver tutoring services</li>
                                        <li>Communicate about sessions and progress</li>
                                        <li>Manage bookings and payments</li>
                                        <li>Improve our services</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="privacy-section-3">
                            <button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="privacy-content-3" id="privacy-trigger-3">
                                <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322f89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#322f89 !important;" class="lucide lucide-database w-4 h-4">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                        <path d="M3 5v14c0 1.7 4 3 9 3s9-1.3 9-3V5"></path>
                                        <path d="M3 12c0 1.7 4 3 9 3s9-1.3 9-3"></path>
                                    </svg>
                                    </span></span>
                                    <span class="privacy-accordion-title">3. Data Storage & Security</span>
                                </span>
                                <svg class="accordion-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </button>
                            <div class="accordion-content" id="privacy-content-3" role="region" aria-labelledby="privacy-trigger-3">
                                <div class="accordion-content-inner">
                                    <ul class="privacy-list">
                                        <li>Data is stored securely using password-protected systems</li>
                                        <li>We take reasonable steps to prevent unauthorised access</li>
                                        <li>Information is only retained as long as necessary</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="privacy-section-4">
                            <button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="privacy-content-4" id="privacy-trigger-4">
                                <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322f89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#322f89 !important;" class="lucide lucide-share-2 w-4 h-4">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.6" y1="13.5" x2="15.4" y2="17.5"></line>
                                            <line x1="15.4" y1="6.5" x2="8.6" y2="10.5"></line>
                                        </svg>
                                </span></span>
                                    <span class="privacy-accordion-title">4. Sharing Your Data</span>
                                </span>
                                <svg class="accordion-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </button>
                            <div class="accordion-content" id="privacy-content-4" role="region" aria-labelledby="privacy-trigger-4">
                                <div class="accordion-content-inner">
                                    <p class="privacy-text">We do not sell or share your data with third parties except:</p>
                                    <ul class="privacy-list">
                                        <li>When required by law.</li>
                                        <li>When using secure platforms (e.g. Zoom, Google Classroom) to deliver services.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="privacy-section-5">
                            <button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="privacy-content-5" id="privacy-trigger-5">
                                <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322f89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#322f89 !important;" class="lucide lucide-user-check w-4 h-4">
                                            <path d="M16 21v-2a4 4 0 0 0-8 0v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                            <polyline points="16 11 17.5 12.5 20 10"></polyline>
                                        </svg>
                                    </span></span>
                                    <span class="privacy-accordion-title">5. Your Rights</span>
                                </span>
                                <svg class="accordion-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </button>
                            <div class="accordion-content" id="privacy-content-5" role="region" aria-labelledby="privacy-trigger-5">
                                <div class="accordion-content-inner">
                                    <p class="privacy-text">Under UK GDPR, you have the right to:</p>
                                     <ul class="privacy-list">
                                        <li>Access your data</li>
                                        <li>Request corrections</li>
                                        <li>Request deletion</li>
                                        <li>Withdraw consent</li>
                                    </ul>
                                    <p class="privacy-text">To exercise these rights, contact: admin@viaanur.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="privacy-section-6">
                            <button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="privacy-content-6" id="privacy-trigger-6">
                                <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322f89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#322f89 !important;" class="lucide lucide-user w-4 h-4">
                                        <circle cx="12" cy="8" r="4"></circle>
                                        <path d="M6 20c0-3.3 2.7-6 6-6s6 2.7 6 6"></path>
                                    </svg>
                                </span></span>
                                    <span class="privacy-accordion-title">6. Children’s Data</span>
                                </span>
                                <svg class="accordion-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </button>
                            <div class="accordion-content" id="privacy-content-6" role="region" aria-labelledby="privacy-trigger-6">
                                <div class="accordion-content-inner">
                                     <ul class="privacy-list">
                                        <li>We only collect data necessary for tutoring purposes</li>
                                        <li>Parents/guardians provide consent for students under 18.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="privacy-section-7">
                            <button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="privacy-content-7" id="privacy-trigger-7">
                                <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322f89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#322f89 !important;" class="lucide lucide-globe w-4 h-4">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15 15 0 0 1 0 20"></path>
                                        <path d="M12 2a15 15 0 0 0 0 20"></path>
                                    </svg>
                                    </span></span>
                                    <span class="privacy-accordion-title">7. Cookies & Website Use</span>
                                </span>
                                <svg class="accordion-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </button>
                            <div class="accordion-content" id="privacy-content-7" role="region" aria-labelledby="privacy-trigger-7">
                                <div class="accordion-content-inner">
                                    <p class="privacy-text">Our website may collect basic data (e.g. cookies) to improve user experience.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="privacy-section-8">
                            <button type="button" class="accordion-trigger" aria-expanded="false" aria-controls="privacy-content-8" id="privacy-trigger-8">
                                <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#322f89" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:#322f89 !important;" class="lucide lucide-file-pen-line w-4 h-4">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4Z"></path>
                                        <path d="M15 5l3 3"></path>
                                    </svg>
                                </span></span>
                                    <span class="privacy-accordion-title">8. Changes to This Policy</span>
                                </span>
                                <svg class="accordion-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                            </button>
                            <div class="accordion-content" id="privacy-content-8" role="region" aria-labelledby="privacy-trigger-8">
                                <div class="accordion-content-inner">
                                    <p class="privacy-text">We may update this policy periodically. Updated versions will be posted on our website.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="privacy-cta-box">
                        <div class="privacy-cta-icon" aria-hidden="true">
                        <span class="privacy-accordion-head">
                                    <span class="privacy-accordion-icon" aria-hidden="true"><span class="privacy-accordion-num">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 text-primary"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                                    </span></span>
                                </span>
                        </div>
                        <div class="privacy-cta-text">
                            <h3 class="privacy-cta-heading">Have Questions?</h3>
                           <a href="mailto:admin@viaanur.com" class="privacy-cta-btn">admin@viaanur.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
   
@stop

@section('js')
<script>
document.addEventListener("DOMContentLoaded", function () {
  const triggers = document.querySelectorAll(".accordion-trigger");

  triggers.forEach(trigger => {
    trigger.addEventListener("click", function () {
      const expanded = this.getAttribute("aria-expanded") === "true";

      // 👉 Close all accordions (optional – remove if multiple open allow krna ho)
      triggers.forEach(btn => {
        btn.setAttribute("aria-expanded", "false");
        const content = document.getElementById(btn.getAttribute("aria-controls"));
        content.style.maxHeight = null;
      });

      // 👉 Toggle current
      if (!expanded) {
        this.setAttribute("aria-expanded", "true");
        const content = document.getElementById(this.getAttribute("aria-controls"));
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  });

  // ✅ Nav link click → scroll + open accordion
  const navLinks = document.querySelectorAll(".privacy-nav-link");

  navLinks.forEach(link => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href").replace("#", "");
      const targetItem = document.getElementById(targetId);

      if (!targetItem) return;

      const trigger = targetItem.querySelector(".accordion-trigger");

      // 👉 Open the clicked section
      triggers.forEach(btn => {
        btn.setAttribute("aria-expanded", "false");
        const content = document.getElementById(btn.getAttribute("aria-controls"));
        content.style.maxHeight = null;
      });

      trigger.setAttribute("aria-expanded", "true");
      const content = document.getElementById(trigger.getAttribute("aria-controls"));
      content.style.maxHeight = content.scrollHeight + "px";

      // 👉 Scroll to section
      targetItem.scrollIntoView({
        behavior: "smooth",
        block: "start"
      });

      // 👉 Active class update
      navLinks.forEach(l => l.classList.remove("active"));
      this.classList.add("active");
    });
  });
});
    
</script>
  <script>
        (function() {
            var navLinks = document.querySelectorAll('.privacy-nav-link');
            var sections = document.querySelectorAll('.privacy-accordion .accordion-item');
            function updateActive() {
                var scrollY = window.scrollY;
                var headerOffset = 120;
                var activeId = null;
                sections.forEach(function(section) {
                    var id = section.id;
                    var el = document.getElementById(id);
                    if (!el) return;
                    var top = el.getBoundingClientRect().top + scrollY - headerOffset;
                    if (scrollY >= top - 80) activeId = id;
                });
                navLinks.forEach(function(link) {
                    var href = link.getAttribute('href');
                    if (href === '#' + activeId) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
            window.addEventListener('scroll', function() { requestAnimationFrame(updateActive); });
            window.addEventListener('load', updateActive);
        })();
    </script>
@endsection