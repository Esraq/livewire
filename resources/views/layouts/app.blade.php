<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Khwaja Yunus Ali University. Explore programmes, admission, research, notices, news and campus life.">
  <title>Khwaja Yunus Ali University</title>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="stylesheet" href="css/style.css">











  
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to content</a>

  <!-- KYAU GREEN UTILITY HEADER -->
  <div class="topbar" id="home">
    <div class="header-container topbar__inner">
      <a class="topbar__brand" href="#home" aria-label="Khwaja Yunus Ali University home">
        <strong>Khwaja Yunus Ali University</strong>
      </a>
      <nav class="topbar__links" aria-label="Utility links">
        <a href="#notices">Notice</a>
        <a href="https://newsletter.kyau.edu.bd/" target="_blank" rel="noopener">Newsletter</a>
        <a href="#alumni">Alumni</a>
        <a href="#news">Convocation</a>
        <a href="mailto:info@kyau.edu.bd">Web Mail</a>
        <a href="#contact">Contact</a>
        <a href="#portal">Portal</a>
      </nav>
    </div>
  </div>

  <!-- TEMPLATE-STYLE MAIN NAVIGATION -->

<header class="site-header">
  <style>
    .has-mega, .has-dropdown { position: relative; }

    /* True mega-menu: wide, multi-column (Administration, Academic, Admission, Research, Campus Life) */
    .mega-menu {
      opacity: 0;
      visibility: hidden;
      transform: translateY(8px);
      transition: opacity .2s ease, transform .2s ease, visibility .2s;
      pointer-events: none;
      transition-delay: .1s;
      position: absolute;
      top: 100%;
      left: 0;
      display: flex;
      gap: 2rem;
      background: #fff;
      border: 1px solid #e2e2e2;
      border-radius: 6px;
      box-shadow: 0 10px 30px rgba(0,0,0,.08);
      padding: 1.25rem;
      z-index: 50;
    }
    .has-mega:hover .mega-menu,
    .has-mega:focus-within .mega-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
      pointer-events: auto;
      transition-delay: 0s;
    }

    /* Simple single-column dropdown (About only) */
    .dropdown-menu {
      opacity: 0;
      visibility: hidden;
      transform: translateY(8px);
      transition: opacity .2s ease, transform .2s ease, visibility .2s;
      pointer-events: none;
      transition-delay: .1s;
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 210px;
      background: #fff;
      border: 1px solid #e2e2e2;
      border-radius: 6px;
      box-shadow: 0 10px 30px rgba(0,0,0,.08);
      padding: 0.5rem;
      z-index: 50;
    }
    .has-dropdown:hover .dropdown-menu,
    .has-dropdown:focus-within .dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
      pointer-events: auto;
      transition-delay: 0s;
    }
    .dropdown-menu a:hover {
      background: #f5f5f5;
    }

    @media (max-width: 900px) {
      .primary-nav { max-height: 0; overflow: hidden; transition: max-height .35s ease; }
      .nav-toggle:checked ~ .primary-nav { max-height: 100vh; }
      .mega-menu, .dropdown-menu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        display: none;
        box-shadow: none;
      }
      .nav-item:hover .mega-menu, .nav-item:focus-within .mega-menu,
      .nav-item:hover .dropdown-menu, .nav-item:focus-within .dropdown-menu { display: block; }
      .nav-item--cta { margin-left: 0 !important; }
    }
  </style>

  <div class="nav-surface">
    <div class="header-container navbar" style="display:flex; align-items:center; justify-content:space-between; padding:0.75rem 1.25rem;">
      <span class="mobile-nav-title" style="display:none; font-weight:700;">Explore KYAU</span>

      <input class="nav-toggle" type="checkbox" id="nav-toggle" aria-label="Toggle navigation" style="display:none;">
      <label class="nav-toggle-label" for="nav-toggle" aria-hidden="true" style="display:none; cursor:pointer;">
        <span style="display:block; width:22px; height:2px; background:#333; margin:4px 0;"></span>
        <span style="display:block; width:22px; height:2px; background:#333; margin:4px 0;"></span>
        <span style="display:block; width:22px; height:2px; background:#333; margin:4px 0;"></span>
      </label>

      <nav class="primary-nav" aria-label="Primary navigation">
        <ul class="main-nav" style="display:flex; align-items:center; gap:1.5rem; list-style:none; margin:0; padding:0;">

          <li class="nav-brand-item">
            <a href="/" aria-label="Khwaja Yunus Ali University home" style="display:block;">
              <img src="assets/images/logo.png" alt="Khwaja Yunus Ali University logo" style="height:44px; width:auto; display:block;">
            </a>
          </li>

          <!-- About: simple single-column dropdown, not a mega-menu -->
          <li class="nav-item has-dropdown" style="position:relative;">
            <label class="nav-link" tabindex="0" style="cursor:pointer; font-weight:600; color:#1a1a1a;">About</label>
            <div class="dropdown-menu">
              <a href="/overview" style="display:block; padding:0.5rem 0.75rem; color:#333; text-decoration:none; border-radius:4px;">Overview</a>
              <a href="/vision-mission" style="display:block; padding:0.5rem 0.75rem; color:#333; text-decoration:none; border-radius:4px;">Vision and Mission</a>
              <a href="/founder" style="display:block; padding:0.5rem 0.75rem; color:#333; text-decoration:none; border-radius:4px;">The Founder</a>
              <a href="/study" style="display:block; padding:0.5rem 0.75rem; color:#333; text-decoration:none; border-radius:4px;">Why Study Here</a>
              <a href="/resources" style="display:block; padding:0.5rem 0.75rem; color:#333; text-decoration:none; border-radius:4px;">Resource</a>
            </div>
          </li>

          <!-- Administration: true mega-menu, 3 columns -->
          <li class="nav-item has-mega" style="position:relative;">
            <label class="nav-link" tabindex="0" style="cursor:pointer; font-weight:600; color:#1a1a1a;">Administration</label>
            <div class="mega-menu">
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Governing Bodies</h3>
                <a href="#about" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Board of Trustees</a>
                <a href="#about" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Syndicate</a>
                <a href="#about" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Academic Council</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Leadership</h3>
                <a href="#about" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Chancellor</a>
                <a href="#about" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Chairman, BoT</a>
                <a href="#about" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Vice Chancellor</a>
                <a href="#about" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Treasurer</a>
                <a href="#about" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Registrar</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Offices</h3>
                <a href="#contact" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Controller of Examinations</a>
                <a href="#contact" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Registrar</a>
                <a href="#contact" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Proctor</a>
                <a href="#contact" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Information Technology</a>
                <a href="#contact" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Admission Office</a>
              </div>
            </div>
          </li>

          <!-- Academic: true mega-menu, 4 columns -->
          <li class="nav-item has-mega" style="position:relative;">
            <label class="nav-link" tabindex="0" style="cursor:pointer; font-weight:600; color:#1a1a1a;">Academic</label>
            <div class="mega-menu">
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Faculties</h3>
                <a href="#faculties" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Science &amp; Engineering</a>
                <a href="#faculties" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Business</a>
                <a href="#faculties" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Biomedical Science</a>
                <a href="#faculties" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Law</a>
                <a href="#faculties" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Human Science</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Programmes</h3>
                <a href="#programmes" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Undergraduate</a>
                <a href="#programmes" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Graduate</a>
                <a href="#programmes" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Post Graduate Diploma</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Quality &amp; Institute</h3>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Institutional Quality Assurance Cell (IQAC)</a>
                <a href="#learning" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Skill Development</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Information</h3>
                <a href="#programmes" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Academic Policy</a>
                <a href="#notices" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Academic Calendar</a>
                <a href="#notices" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Academic Notices</a>
              </div>
            </div>
          </li>

          <!-- Admission: true mega-menu, 3 columns -->
          <li class="nav-item has-mega" style="position:relative;">
            <label class="nav-link" tabindex="0" style="cursor:pointer; font-weight:600; color:#1a1a1a;">Admission</label>
            <div class="mega-menu">
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Information</h3>
                <a href="#admission" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Admission Overview</a>
                <a href="#programmes" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Undergraduate Admission</a>
                <a href="#programmes" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Graduate Admission</a>
                <a href="#programmes" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Post Graduate Diploma</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Guidelines</h3>
                <a href="#admission" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">How to Apply</a>
                <a href="#admission" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Admission Process</a>
                <a href="#admission" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Required Documents</a>
                <a href="#admission" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Credit Transfer</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Fees &amp; Support</h3>
                <a href="#admission" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Tuition Information</a>
                <a href="#admission" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Waiver &amp; Scholarship</a>
                <a href="#contact" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Admission Help Desk</a>
              </div>
            </div>
          </li>

          <!-- Research: true mega-menu, 3 columns -->
          <li class="nav-item has-mega" style="position:relative;">
            <label class="nav-link" tabindex="0" style="cursor:pointer; font-weight:600; color:#1a1a1a;">Research</label>
            <div class="mega-menu">
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Research Overview</h3>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Research Activities</a>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Research Groups</a>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Research Seminars</a>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Research Facilitation</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Publications</h3>
                <a href="https://journal.kyau.edu.bd/" target="_blank" rel="noopener" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">KYAU Journal</a>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Faculty Research</a>
                <a href="#news" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Conference Updates</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Research Network</h3>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Collaboration</a>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Laboratories</a>
                <a href="#research" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Innovation</a>
              </div>
            </div>
          </li>

          <!-- Campus Life: true mega-menu, 3 columns -->
          <li class="nav-item has-mega" style="position:relative;">
            <label class="nav-link" tabindex="0" style="cursor:pointer; font-weight:600; color:#1a1a1a;">Campus Life</label>
            <div class="mega-menu">
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Facilities</h3>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Classrooms</a>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Laboratories</a>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Library</a>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Medical Centre</a>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Transport</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Clubs &amp; Activities</h3>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Cultural Club</a>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Blood Donation Club</a>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Sports Club</a>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Debating Club</a>
              </div>
              <div>
                <h3 style="font-size:0.9rem; text-transform:uppercase; color:#999; margin:0 0 0.5rem;">Students</h3>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Future Students</a>
                <a href="#campus" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Current Students</a>
                <a href="#alumni" style="display:block; padding:0.3rem 0; color:#333; text-decoration:none;">Alumni</a>
              </div>
            </div>
          </li>

          <!-- Plain links: no dropdown, no mega-menu -->
          <li class="nav-item"><a href="#career" style="color:#1a1a1a; font-weight:600; text-decoration:none;">Career</a></li>
          <li class="nav-item"><a href="#news" style="color:#1a1a1a; font-weight:600; text-decoration:none;">News &amp; Events</a></li>

          <!-- Getting Admission: pushed fully to the right edge -->
          <li class="nav-item nav-item--cta" style="margin-left:auto;">
            <a href="#admission" style="background:#e8552e; color:#fff; padding:0.6rem 1.2rem; border-radius:4px; text-decoration:none; font-weight:600; white-space:nowrap;">Getting Admission →</a>
          </li>

        </ul>
      </nav>
    </div>
  </div>
</header>

  @yield('content')

   <!-- KYAU GREEN FOOTER -->
  <footer class="footer" id="contact">
    <div class="container footer__top">
      <div class="footer__brand">
        <a href="/"><img src="assets/images/logo.png" alt="Khwaja Yunus Ali University logo"><span><strong>Khwaja Yunus Ali University</strong></span></a>
        <p>Enayetpur, Chauhali, Sirajganj-6751, Bangladesh</p>
        <div class="footer-contact"><a href="tel:+8801404461555">+880 1404 461555</a><a href="tel:+8801404461556">+880 1404 461556</a><a href="mailto:info@kyau.edu.bd">info@kyau.edu.bd</a></div>
      </div>
      <div class="footer-column"><h3>Become a KYAU Student</h3><a href="#programmes">Find a Programme</a><a href="#admission">Admission</a><a href="#admission">How to Apply</a><a href="#admission">Scholarship &amp; Waiver</a><a href="#contact">Help Desk</a></div>
      <div class="footer-column"><h3>Academic</h3><a href="#faculties">Faculties</a><a href="#programmes">Programmes</a><a href="#research">Research</a><a href="#notices">Academic Notices</a><a href="#campus">Campus Life</a></div>
      <div class="footer-column"><h3>Quick Links</h3><a href="https://journal.kyau.edu.bd/" target="_blank" rel="noopener">Journal</a><a href="https://iqac.kyau.edu.bd/" target="_blank" rel="noopener">IQAC</a><a href="https://newsletter.kyau.edu.bd/" target="_blank" rel="noopener">News &amp; Events</a><a href="#career">Career</a><a href="#alumni">Alumni</a></div>
      <div class="footer-column" id="portal"><h3>Visit &amp; Contact</h3><p>Sunday–Thursday<br>8:00 AM – 5:00 PM</p><a href="https://www.kyau.edu.bd/" target="_blank" rel="noopener">Official KYAU Website ↗</a><a href="mailto:info@kyau.edu.bd">Email the University</a><a href="#home">Back to top ↑</a></div>
    </div>
    <div class="footer__bottom">
      <div class="container"><p>© 2012–2026 Khwaja Yunus Ali University. All rights reserved.</p><p>Responsive landing page prototype • HTML + CSS</p></div>
    </div>
  </footer>
</body>
</html>
