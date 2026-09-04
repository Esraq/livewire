

@extends('layouts.app')

@section('content')


  <main id="main-content">
    <!-- CSS-ONLY HERO BANNER SLIDER -->
    <section class="hero-slider" aria-label="KYAU highlights">
      <input class="hero-radio" type="radio" name="hero-slider" id="hero-slide-1" checked>
      <input class="hero-radio" type="radio" name="hero-slider" id="hero-slide-2">
      <input class="hero-radio" type="radio" name="hero-slider" id="hero-slide-3">

      <div class="hero-slides">
        <article class="hero-slide hero-slide--1">
          <div class="container hero-slide__content">
            <span class="hero__badge">ADMISSIONS OPEN • 2026–2027</span>
            <h1>Where Knowledge<br><span>Meets Purpose.</span></h1>
            <p>Begin your university journey at Khwaja Yunus Ali University with career-focused programmes, supportive faculty and a learning environment built for growth.</p>
            <div class="hero__actions">
              <a class="btn btn--light" href="#admission">Apply for Admission</a>
              <a class="btn btn--outline-light" href="#programmes">Explore Programmes</a>
            </div>
            <div class="hero__chips" aria-label="University highlights">
              <span>Established 2012</span>
              <span>5 Faculties</span>
              <span>13 Departments</span>
              <span>UG + Graduate</span>
            </div>
          </div>
        </article>

        <article class="hero-slide hero-slide--2">
          <div class="container hero-slide__content">
            <span class="hero__badge">RESEARCH &amp; INNOVATION</span>
            <h1>Ideas That Move<br><span>Knowledge Forward.</span></h1>
            <p>Explore a growing culture of research, laboratory learning, collaboration and academic inquiry across science, engineering, business and the life sciences.</p>
            <div class="hero__actions">
              <a class="btn btn--light" href="#research">Explore Research</a>
              <a class="btn btn--outline-light" href="#faculties">Discover Faculties</a>
            </div>
            <div class="hero__chips" aria-label="Research highlights">
              <span>Research Culture</span>
              <span>Laboratories</span>
              <span>Innovation</span>
              <span>Collaboration</span>
            </div>
          </div>
        </article>

        <article class="hero-slide hero-slide--3">
          <div class="container hero-slide__content">
            <span class="hero__badge">CONVOCATION 2024</span>
            <h1>Celebrating Achievement,<br><span>Inspiring the Future.</span></h1>
            <p>Celebrating the hard work, growth and success of KYAU graduates as they step forward to make meaningful contributions in their professions and communities.</p>
            <div class="hero__actions">
              <a class="btn btn--light" href="#news">Convocation Highlights</a>
              <a class="btn btn--outline-light" href="#alumni">Explore Alumni</a>
            </div>
            <div class="hero__chips" aria-label="Convocation highlights">
              <span>Graduation</span>
              <span>Achievement</span>
              <span>Alumni</span>
              <span>KYAU Community</span>
            </div>
          </div>
        </article>
      </div>

      <div class="hero-slider__arrows" aria-label="Banner navigation">
        <div class="hero-nav-set hero-nav-set--1">
          <label class="hero-arrow hero-arrow--prev" for="hero-slide-3" title="Previous banner" aria-label="Previous banner">‹</label>
          <label class="hero-arrow hero-arrow--next" for="hero-slide-2" title="Next banner" aria-label="Next banner">›</label>
        </div>
        <div class="hero-nav-set hero-nav-set--2">
          <label class="hero-arrow hero-arrow--prev" for="hero-slide-1" title="Previous banner" aria-label="Previous banner">‹</label>
          <label class="hero-arrow hero-arrow--next" for="hero-slide-3" title="Next banner" aria-label="Next banner">›</label>
        </div>
        <div class="hero-nav-set hero-nav-set--3">
          <label class="hero-arrow hero-arrow--prev" for="hero-slide-2" title="Previous banner" aria-label="Previous banner">‹</label>
          <label class="hero-arrow hero-arrow--next" for="hero-slide-1" title="Next banner" aria-label="Next banner">›</label>
        </div>
      </div>

      <div class="hero-slider__dots" aria-label="Choose banner">
        <label for="hero-slide-1" title="Banner 1"><span class="sr-only">Banner 1</span></label>
        <label for="hero-slide-2" title="Banner 2"><span class="sr-only">Banner 2</span></label>
        <label for="hero-slide-3" title="Banner 3"><span class="sr-only">Banner 3</span></label>
      </div>
    </section>

    <!-- AIUB-INSPIRED QUICK LINKS -->
    <section class="quick-actions" aria-label="Quick links">
      <div class="container quick-actions__grid">
        <a class="quick-card" href="#programmes"><span class="quick-icon">⌕</span><span><strong>Find Your Programme</strong><small>Explore undergraduate and graduate study</small></span><b>→</b></a>
        <a class="quick-card" href="#admission"><span class="quick-icon">✓</span><span><strong>Admission</strong><small>Requirements, process and support</small></span><b>→</b></a>
        <a class="quick-card" href="#notices"><span class="quick-icon">!</span><span><strong>Notice Board</strong><small>Important university updates</small></span><b>→</b></a>
        <a class="quick-card" href="#contact"><span class="quick-icon">☎</span><span><strong>Contact &amp; Help Desk</strong><small>Talk to the KYAU team</small></span><b>→</b></a>
      </div>
    </section>

    <!-- ABOUT -->
    <section class="section about" id="about">
      <div class="container about-grid">
        <div class="about-media">
          <img src="assets/images/banner_3.jpg" alt="Khwaja Yunus Ali University administrative building">
          <div class="about-seal"><strong>2012</strong><span>Founded as a centre for higher education and research</span></div>
        </div>
        <div class="section-copy">
          <span class="eyebrow">About KYAU</span>
          <h2>A learning community built around knowledge, skills and service.</h2>
          <p>Khwaja Yunus Ali University was founded in 2012 with a vision to develop a centre of excellence in higher education. The university serves students through academic programmes spanning science, engineering, business, biomedical science, law and the humanities.</p>
          <p>The university emphasizes a knowledge-based society, professional competence, research and meaningful contribution to the wider community.</p>
          <div class="mini-features">
            <div><span>01</span><p><strong>Quality Education</strong><small>Academic foundations connected to contemporary professional needs.</small></p></div>
            <div><span>02</span><p><strong>Practical Learning</strong><small>Laboratory, project and activity-based learning across disciplines.</small></p></div>
            <div><span>03</span><p><strong>Research Culture</strong><small>Seminars, publications, collaboration and quality assurance initiatives.</small></p></div>
          </div>
          <a class="text-link" href="#facts">See KYAU at a glance <span>→</span></a>
        </div>
      </div>
    </section>

    <!-- FIND YOUR PROGRAM (AIUB CONTENT FLOW) -->
    <section class="section section--soft" id="programmes">
      <div class="container">
        <div class="section-heading heading-row">
          <div>
            <span class="eyebrow">Find Your Programme</span>
            <h2>Choose the academic path that fits your ambition.</h2>
            <p>Browse KYAU study options by level. The layout follows a fast programme-finder approach so prospective students can reach the right programme quickly.</p>
          </div>
          <a class="text-link" href="https://www.kyau.edu.bd/undergraduate" target="_blank" rel="noopener">Official programme list <span>↗</span></a>
        </div>

        <div class="program-tabs">
          <input type="radio" name="program-level" id="program-undergrad" checked>
          <input type="radio" name="program-level" id="program-grad">
          <input type="radio" name="program-level" id="program-pgd">
          <div class="program-tab-labels" role="tablist" aria-label="Programme level">
            <label for="program-undergrad">Undergraduate</label>
            <label for="program-grad">Graduate</label>
            <label for="program-pgd">Post Graduate Diploma</label>
          </div>

          <div class="program-panel program-panel--undergrad">
            <a href="#admission">B.Sc. in Computer Science &amp; Engineering <span>→</span></a>
            <a href="#admission">B.Sc. in Information &amp; Communications Technology <span>→</span></a>
            <a href="#admission">B.Sc. in Mechatronics &amp; Micromechatronics Engineering <span>→</span></a>
            <a href="#admission">Electronics &amp; Telecommunication Engineering <span>→</span></a>
            <a href="#admission">B.Sc. in Electrical &amp; Electronics Engineering <span>→</span></a>
            <a href="#admission">Bachelor of Science in Pharmacy <span>→</span></a>
            <a href="#admission">B.Sc. in Microbiology <span>→</span></a>
            <a href="#admission">B.Sc. in Biochemistry &amp; Biotechnology <span>→</span></a>
            <a href="#admission">Bachelor of Business Administration <span>→</span></a>
            <a href="#admission">Bachelor of Arts (Hons.) in English <span>→</span></a>
            <a href="#admission">Bachelor of Laws <span>→</span></a>
          </div>

          <div class="program-panel program-panel--grad">
            <a href="#admission">Master of Business Administration <span>→</span></a>
            <a href="#admission">M.Sc. in Mechatronic &amp; Micro-Mechatronics System Engineering <span>→</span></a>
            <a href="#admission">Master of Laws <span>→</span></a>
            <a href="#admission">Master of Arts in English ELT <span>→</span></a>
            <a href="#admission">Master of Arts in Islamic Studies (Preli) <span>→</span></a>
          </div>

          <div class="program-panel program-panel--pgd">
            <a href="#admission">Post Graduate Diploma in Library &amp; Information Science <span>→</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- NOTICE + NEWS -->
    <section class="section update-section" id="notices">
      <div class="container update-grid">
        <div class="notice-panel">
          <div class="panel-heading">
            <span class="eyebrow">Notice</span>
            <h2>Important Updates</h2>
            <a href="https://www.kyau.edu.bd/" target="_blank" rel="noopener">All notices ↗</a>
          </div>
          <div class="notice-list">
            <a href="#"><time datetime="2026-09-10"><b>10</b><span>SEP</span></time><p><strong>ICBA 2026 paper submission deadline</strong><small>International Conference on Biological Advancement — upcoming research deadline.</small></p><span class="arrow">→</span></a>
            <a href="#"><time datetime="2026-06-01"><b>01</b><span>JUN</span></time><p><strong>University notice and official announcement</strong><small>Visit the KYAU notice board for the latest official circulars and updates.</small></p><span class="arrow">→</span></a>
            <a href="#"><time datetime="2026-04-11"><b>11</b><span>APR</span></time><p><strong>Call for submissions to annual souvenir “Smaranika 2026”</strong><small>Student and university community submission notice.</small></p><span class="arrow">→</span></a>
            <a href="#admission"><time datetime="2026-01-01"><b>26</b><span>SPR</span></time><p><strong>Admission information for prospective students</strong><small>Check programmes, eligibility, application process and admission support.</small></p><span class="arrow">→</span></a>
          </div>
        </div>

        <div class="news-panel" id="news">
          <div class="panel-heading panel-heading--light">
            <span class="eyebrow eyebrow--light">News &amp; Events</span>
            <h2>What’s Happening at KYAU</h2>
            <a href="https://newsletter.kyau.edu.bd/" target="_blank" rel="noopener">All news ↗</a>
          </div>
          <article class="featured-news">
            <img src="assets/images/banner_2.jpg" alt="Khwaja Yunus Ali University campus">
            <div>
              <span>29 AUG 2026 • CSE</span>
              <h3>KYAU celebrates a patent milestone and national research recognition</h3>
              <p>Research achievement highlights the university’s growing culture of innovation and applied scholarship.</p>
            </div>
          </article>
          <div class="news-mini-grid">
            <a href="https://newsletter.kyau.edu.bd/" target="_blank" rel="noopener"><span>27 AUG 2026</span><strong>UGC inspection marks progress toward launch of M.Pharm programme</strong></a>
            <a href="https://newsletter.kyau.edu.bd/" target="_blank" rel="noopener"><span>25 AUG 2026</span><strong>IQAC advances digitalized self-assessment for accreditation readiness</strong></a>
          </div>
        </div>
      </div>
    </section>

    <!-- FACULTIES -->
    <section class="section section--soft" id="faculties">
      <div class="container">
        <div class="section-heading section-heading--center">
          <span class="eyebrow">Faculties</span>
          <h2>Five academic communities. One shared commitment to excellence.</h2>
          <p>KYAU’s academic structure brings together science, engineering, business, biomedical study, law and human sciences.</p>
        </div>
        <div class="faculty-grid">
          <article class="faculty-card"><span>01</span><h3>Science &amp; Engineering</h3><p>CSE, ICT, EEE, mechatronics and technology-focused learning.</p><a href="#programmes">Explore programmes →</a></article>
          <article class="faculty-card"><span>02</span><h3>Business</h3><p>Business administration and management learning for contemporary organizations.</p><a href="#programmes">Explore programmes →</a></article>
          <article class="faculty-card"><span>03</span><h3>Biomedical Science</h3><p>Pharmacy, microbiology, biochemistry and biotechnology education and research.</p><a href="#programmes">Explore programmes →</a></article>
          <article class="faculty-card"><span>04</span><h3>Law</h3><p>Legal education designed around knowledge, analysis and professional responsibility.</p><a href="#programmes">Explore programmes →</a></article>
          <article class="faculty-card"><span>05</span><h3>Human Science</h3><p>English, Islamic Studies and disciplines supporting language, culture and society.</p><a href="#programmes">Explore programmes →</a></article>
        </div>
      </div>
    </section>

    <!-- ACHIEVEMENT / TALENT FLOW -->
    <section class="section achievement-section">
      <div class="container">
        <div class="section-heading heading-row">
          <div><span class="eyebrow">KYAU Highlights</span><h2>Ideas, achievements and academic momentum.</h2></div>
          <a class="text-link" href="https://newsletter.kyau.edu.bd/" target="_blank" rel="noopener">Explore university news <span>↗</span></a>
        </div>
        <div class="achievement-grid">
          <article class="achievement-card achievement-card--image"><img src="assets/images/banner_1.jpg" alt="KYAU academic building"><div><span>RESEARCH</span><h3>Research seminars are bringing AI, quality assurance and interdisciplinary ideas into faculty development.</h3></div></article>
          <article class="achievement-card"><span class="achievement-number">01</span><small>Innovation</small><h3>Patent and national research recognition</h3><p>Student and faculty work demonstrates a growing applied-research culture.</p></article>
          <article class="achievement-card"><span class="achievement-number">02</span><small>Quality</small><h3>Accreditation readiness through IQAC</h3><p>Digital self-assessment and academic documentation support quality improvement.</p></article>
          <article class="achievement-card"><span class="achievement-number">03</span><small>Global Research</small><h3>ICBA 2026 international conference initiative</h3><p>Biological advancement conference activity connects research, healthcare and innovation.</p></article>
        </div>
      </div>
    </section>

    <!-- FACTS & FIGURES -->
    <section class="facts" id="facts">
      <div class="container facts__inner">
        <div class="facts__intro"><span>KYAU</span><h2>Facts <em>&amp;</em> Figures</h2><p>A compact view of the university’s academic scope.</p></div>
        <div class="fact"><strong>2012</strong><span>Established</span></div>
        <div class="fact"><strong>5</strong><span>Faculties</span></div>
        <div class="fact"><strong>13</strong><span>Departments</span></div>
        <div class="fact"><strong>17</strong><span>Listed Study Programmes</span></div>
      </div>
    </section>

    <!-- CAMPUS LIFE -->
    <section class="section campus" id="campus">
      <div class="container">
        <div class="section-heading heading-row">
          <div><span class="eyebrow">Campus Life</span><h2>Learn, connect and grow beyond the classroom.</h2><p>Facilities and student activities help make university life active, supportive and connected.</p></div>
          <a class="text-link" href="#contact">Explore student support <span>→</span></a>
        </div>
        <div class="campus-mosaic">
          <figure class="campus-main"><img src="assets/images/banner_2.jpg" alt="Aerial view of KYAU campus"><figcaption><span>Campus</span><strong>A green learning environment in Enayetpur</strong><a href="#contact">View campus information →</a></figcaption></figure>
          <article class="campus-tile"><span>01</span><h3>Library &amp; Learning</h3><p>Academic resources and quiet spaces for study and discovery.</p></article>
          <article class="campus-tile"><span>02</span><h3>Clubs &amp; Culture</h3><p>Cultural, debating, blood donation and student-led activities.</p></article>
          <article class="campus-tile"><span>03</span><h3>Sports &amp; Wellbeing</h3><p>Opportunities for recreation, community and a balanced student experience.</p></article>
          <article class="campus-tile campus-tile--green"><span>04</span><h3>Student Services</h3><p>Admission, academic, medical, transport and administrative support.</p></article>
        </div>
      </div>
    </section>

    <!-- RESEARCH -->
    <section class="section research-section" id="research">
      <div class="container research-layout">
        <div class="research-visual"><img src="assets/images/banner_1.jpg" alt="KYAU campus academic building"><div><strong>Research Activities</strong><span>Knowledge → Inquiry → Impact</span></div></div>
        <div class="section-copy section-copy--light">
          <span class="eyebrow eyebrow--light">Research &amp; Innovation</span>
          <h2>Building a research-friendly academic environment.</h2>
          <p>KYAU supports faculty and student research through seminars, laboratories, journal activity, quality assurance and interdisciplinary collaboration across its academic areas.</p>
          <div class="research-links">
            <a href="https://journal.kyau.edu.bd/" target="_blank" rel="noopener"><strong>KYAU Journal</strong><span>Publications and scholarly work →</span></a>
            <a href="https://iqac.kyau.edu.bd/" target="_blank" rel="noopener"><strong>IQAC</strong><span>Quality and academic development →</span></a>
            <a href="https://icba.kyau.edu.bd/" target="_blank" rel="noopener"><strong>Conference</strong><span>International research exchange →</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- PROFESSIONAL LEARNING -->
    <section class="section section--soft" id="learning">
      <div class="container">
        <div class="section-heading heading-row">
          <div><span class="eyebrow">Professional &amp; Continuing Learning</span><h2>Keep learning beyond a single degree.</h2><p>KYAU’s academic ecosystem includes postgraduate learning, skills development, workshops and research-focused professional activities.</p></div>
        </div>
        <div class="learning-grid">
          <article><span>PGD</span><h3>Library &amp; Information Science</h3><p>A postgraduate diploma option listed among KYAU’s academic programmes.</p><a href="#programmes">View programme →</a></article>
          <article><span>SKILL</span><h3>Skills &amp; Development</h3><p>Workshops and academic development activities can complement formal programmes.</p><a href="#news">See recent activities →</a></article>
          <article><span>IQAC</span><h3>Faculty &amp; Research Development</h3><p>Quality assurance, accreditation preparation and research seminars strengthen academic practice.</p><a href="#research">Explore research →</a></article>
        </div>
      </div>
    </section>

    <!-- ADMISSION -->
    <section class="section admission-section" id="admission">
      <div class="container admission-layout">
        <div>
          <span class="eyebrow eyebrow--light">Admission</span>
          <h2>Ready to begin your KYAU journey?</h2>
          <p>Students may apply through the university’s online or paper-based admission process. Start by selecting your programme, checking requirements and preparing the required academic documents.</p>
          <div class="admission-buttons">
            <a class="btn btn--light" href="https://www.kyau.edu.bd/admission" target="_blank" rel="noopener">Admission Information</a>
            <a class="btn btn--outline-light" href="https://www.kyau.edu.bd/admission-information" target="_blank" rel="noopener">How to Apply</a>
          </div>
        </div>
        <div class="admission-steps">
          <div><span>1</span><p><strong>Choose a programme</strong><small>Review undergraduate, graduate and PGD options.</small></p></div>
          <div><span>2</span><p><strong>Prepare documents</strong><small>Keep academic certificates, mark sheets and required identification ready.</small></p></div>
          <div><span>3</span><p><strong>Apply &amp; contact admission</strong><small>Use the official process and confirm details with the admission office.</small></p></div>
        </div>
      </div>
    </section>

    <!-- COMMUNITY / ALUMNI -->
    <section class="section community" id="alumni">
      <div class="container community-grid">
        <div class="community-copy"><span class="eyebrow">KYAU Community</span><h2>Students today. Alumni for life.</h2><p>University life continues through professional networks, academic collaboration, service and the achievements of KYAU graduates.</p><a class="btn btn--green" href="#contact">Connect with KYAU</a></div>
        <div class="community-cards">
          <article><strong>Students</strong><span>Learning, activities and support</span></article>
          <article><strong>Alumni</strong><span>Connection beyond graduation</span></article>
          <article id="career"><strong>Career</strong><span>Professional opportunities and recruitment</span></article>
          <article><strong>Partners</strong><span>Academic and research collaboration</span></article>
        </div>
      </div>
    </section>
  </main>

@endsection