<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@yield('meta_description', 'Khwaja Yunus Ali University. Explore programmes, admission, research, notices, news and campus life.')">
  <title>@yield('title', 'Khwaja Yunus Ali University')</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @stack('styles')
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to content</a>

  <!-- KYAU GREEN UTILITY HEADER -->
  <div class="topbar" id="home">
    <div class="header-container topbar__inner">
      <a class="topbar__brand" href="{{ url('/#home') }}" aria-label="Khwaja Yunus Ali University home">
        <strong>Khwaja Yunus Ali University</strong>
      </a>
      <nav class="topbar__links" aria-label="Utility links">
        <a href="{{ url('/notice') }}">Notice</a>
        <a href="https://newsletter.kyau.edu.bd/" target="_blank" rel="noopener">Newsletter</a>
        <a href="{{ url('/alumnis') }}">Alumni</a>
        <a href="{{ url('/convocation') }}">Convocation</a>
        <a href="https://accounts.google.com/v3/signin/accountchooser?continue=http://support.google.com/mail/answer/56256?hl%3Den&ec=GAZAdQ&hl=en&passive=true&sjid=9115533832547649868-NC&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1423199799:1790056478420886
">Web Mail</a>
        <a href="{{ url('/contact-us') }}">Contact</a>
        <a href="https://student.kyau.edu.bd/">Portal</a>
      </nav>
    </div>
  </div>

  <!-- MAIN NAVIGATION -->
  <header class="site-header">
    <style>
      /* =========================================================
         KYAU MEGA MENU — single source of truth
         ========================================================= */

      :root {
        --nav-green: #0f6b46;
        --nav-green-dark: #095236;
        --nav-green-soft: #eef8f3;
        --nav-text: #1f2937;
        --nav-line: #e6ebe8;
        --nav-accent: #e8552e;
        --nav-shadow: 0 24px 60px rgba(9, 82, 54, .16);
        --nav-radius: 16px;
      }

      .site-header { position: sticky; top: 0; z-index: 1000; }

      .nav-surface {
        background: rgba(255, 255, 255, .97);
        border-bottom: 1px solid rgba(15, 107, 70, .10);
        box-shadow: 0 6px 24px rgba(17, 24, 39, .06);
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
      }

      .navbar {
        min-height: 72px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        padding: .75rem 1.25rem;
        box-sizing: border-box;
        width: 100%;
      }

      .primary-nav { width: 100%; }

      .main-nav {
        width: 100%;
        display: flex;
        align-items: center;
        gap: .2rem;
        list-style: none;
        margin: 0;
        padding: 0;
      }

      /* ---------- Brand (desktop, inside the nav list) ---------- */

      .nav-brand-item { margin-right: 1rem; flex: 0 0 auto; }
      .nav-brand-item a { display: block; }
      .nav-brand-item img { height: 52px; width: auto; display: block; object-fit: contain; transition: transform .2s ease; }
      .nav-brand-item a:hover img { transform: scale(1.04); }

      /* ---------- Brand (mobile-only, always visible in the bar) ---------- */

      .mobile-brand {
        display: none;
        align-items: center;
        gap: .55rem;
        text-decoration: none;
      }
      .mobile-brand img { height: 36px; width: auto; display: block; }
      .mobile-brand span { font-weight: 750; color: var(--nav-green-dark); font-size: .95rem; }

      /* ---------- Nav items / links ---------- */

      .nav-item { position: relative; }

      .nav-link,
      .nav-item > a:not(.admission-btn) {
        appearance: none;
        border: 0;
        background: transparent;
        display: inline-flex;
        align-items: center;
        gap: .4rem;
        padding: .78rem .8rem;
        border-radius: 10px;
        color: var(--nav-text);
        font: inherit;
        font-size: .92rem;
        font-weight: 650;
        line-height: 1;
        text-decoration: none;
        cursor: pointer;
        white-space: nowrap;
        transition: background .18s ease, color .18s ease;
      }

      .nav-link::after {
        content: '';
        width: 6px;
        height: 6px;
        border-right: 1.6px solid currentColor;
        border-bottom: 1.6px solid currentColor;
        transform: rotate(45deg) translateY(-2px);
        opacity: .6;
        transition: transform .2s ease;
      }

      .nav-item:hover > .nav-link,
      .nav-item:focus-within > .nav-link,
      .nav-item > a:not(.admission-btn):hover,
      .nav-item.is-open > .nav-link {
        background: var(--nav-green-soft);
        color: var(--nav-green-dark);
      }

      .nav-item:hover > .nav-link::after,
      .nav-item:focus-within > .nav-link::after,
      .nav-item.is-open > .nav-link::after {
        transform: rotate(225deg) translate(-1px, -1px);
      }

      .nav-item.is-active > .nav-link,
      .nav-item.is-active > a:not(.admission-btn) { color: var(--nav-green-dark); }
      .nav-item.is-active > .nav-link::before,
      .nav-item.is-active > a:not(.admission-btn)::before {
        content: '';
        position: absolute;
        left: .8rem; right: .8rem; bottom: .32rem;
        height: 2px; border-radius: 2px;
        background: var(--nav-accent);
      }

      .has-mega, .has-dropdown { position: relative; }

      /* ---------- Dropdown / mega panels ----------
         Horizontal position defaults to the item's own left edge;
         JS (positionPanel) measures the viewport and overrides
         `left` in pixels so a panel never runs off either side.
         Only vertical opacity/scale is driven by CSS. */

      .mega-menu,
      .dropdown-menu {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        position: absolute;
        top: calc(100% + 12px);
        left: 0;
        transform: translateY(8px) scale(.98);
        transform-origin: top center;
        transition: opacity .16s ease, transform .16s ease, visibility .16s ease;
        background: linear-gradient(180deg, #ffffff 0%, #fcfefd 100%);
        border: 1px solid var(--nav-line);
        border-radius: var(--nav-radius);
        box-shadow: var(--nav-shadow);
        z-index: 100;
        overflow: hidden;
      }

      .mega-menu::before,
      .dropdown-menu::before {
        content: '';
        position: absolute;
        top: -12px; left: 0; right: 0; height: 12px;
      }

      .mega-menu::after,
      .dropdown-menu::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; height: 3px;
        background: linear-gradient(90deg, var(--nav-green) 0%, #35a172 100%);
      }

      .mega-menu {
        width: min(780px, calc(100vw - 32px));
        max-width: 980px;
        display: grid;
        grid-template-columns: repeat(3, minmax(160px, 1fr));
        gap: 0;
        padding: .5rem;
      }

      .mega-menu > div { min-width: 0; padding: 1.05rem 1.15rem 1.1rem; }
      .mega-menu > div + div { border-left: 1px solid var(--nav-line); }

      .mega-menu h3 {
        display: flex; align-items: center; gap: .45rem;
        margin: 0 0 .75rem;
        font-size: .72rem; letter-spacing: .07em; text-transform: uppercase;
        color: var(--nav-green); font-weight: 800; line-height: 1.3;
      }
      .mega-menu h3::before { content: ''; width: 7px; height: 7px; border-radius: 2px; background: var(--nav-accent); flex: 0 0 auto; }

      .mega-menu a,
      .dropdown-menu a {
        position: relative;
        display: flex; align-items: center;
        min-height: 37px;
        padding: .5rem .65rem;
        margin: .06rem 0;
        border-radius: 9px;
        color: #3d4a55;
        text-decoration: none;
        font-size: .88rem; line-height: 1.35;
        transition: background .15s ease, color .15s ease, padding-left .15s ease;
      }

      .mega-menu a::before,
      .dropdown-menu a::before {
        content: '';
        width: 5px; height: 5px; margin-right: .55rem; border-radius: 50%;
        background: #c3d9cd; flex: 0 0 auto;
        transition: background .15s ease, transform .15s ease;
      }

      .mega-menu a:hover, .mega-menu a:focus-visible,
      .dropdown-menu a:hover, .dropdown-menu a:focus-visible {
        background: var(--nav-green-soft); color: var(--nav-green-dark);
        padding-left: .85rem; outline: none;
      }
      .mega-menu a:hover::before, .mega-menu a:focus-visible::before,
      .dropdown-menu a:hover::before, .dropdown-menu a:focus-visible::before {
        background: var(--nav-green); transform: scale(1.3);
      }

      .dropdown-menu { width: 235px; padding: .5rem; }

      .has-mega:hover .mega-menu, .has-mega:focus-within .mega-menu, .has-mega.is-open .mega-menu,
      .has-dropdown:hover .dropdown-menu, .has-dropdown:focus-within .dropdown-menu, .has-dropdown.is-open .dropdown-menu {
        opacity: 1; visibility: visible; pointer-events: auto;
        transform: translateY(0) scale(1);
      }

      @media (min-width: 901px) {
        .has-mega:nth-of-type(4) .mega-menu {
          grid-template-columns: repeat(4, minmax(150px, 1fr));
          width: min(900px, calc(100vw - 32px));
        }
      }

      /* ---------- CTA ---------- */

      .nav-item--cta { margin-left: auto; padding-left: .5rem; }
      .admission-btn {
        display: inline-flex; align-items: center; gap: .45rem;
        background: linear-gradient(135deg, var(--nav-accent), #d84723);
        color: #fff; padding: .72rem 1.05rem; border-radius: 9px;
        text-decoration: none; font-weight: 750; font-size: .88rem; white-space: nowrap;
        box-shadow: 0 8px 20px rgba(232, 85, 46, .24);
        transition: transform .18s ease, box-shadow .18s ease;
      }
      .admission-btn:hover { transform: translateY(-1px); box-shadow: 0 12px 24px rgba(232, 85, 46, .30); }

      .nav-link:focus-visible, .nav-item > a:focus-visible, .admission-btn:focus-visible {
        outline: 3px solid rgba(15, 107, 70, .22); outline-offset: 3px;
      }

      /* ---------- Mobile toggle ---------- */

      .nav-toggle { display: none; }
      .nav-toggle-label {
        display: none; flex-direction: column; align-items: center; justify-content: center;
        gap: 5px; width: 42px; height: 42px; margin-left: auto;
        border: 1px solid #dce8e2; border-radius: 10px; cursor: pointer;
        box-sizing: border-box; background: #fff;
      }
      .nav-toggle-label:hover { background: var(--nav-green-soft); }
      .nav-toggle-label span { display: block; width: 20px; height: 2px; background: var(--nav-green); border-radius: 10px; }

      /* =========================================================
         RESPONSIVE BREAKPOINTS
         ========================================================= */

      @media (max-width: 1200px) and (min-width: 901px) {
        .main-nav { gap: 0; }
        .nav-link, .nav-item > a:not(.admission-btn) { padding-inline: .58rem; font-size: .86rem; }
        .nav-brand-item { margin-right: .6rem; }
        .nav-brand-item img { height: 42px; }
        .admission-btn { padding: .6rem .85rem; font-size: .82rem; }
      }

      @media (max-width: 900px) {
        .navbar { min-height: 62px; padding: .65rem 1rem; flex-wrap: wrap; }
        .mobile-brand { display: flex; }
        .nav-toggle-label { display: flex; }

        .primary-nav {
          width: 100%; max-height: 0; overflow: hidden;
          transition: max-height .35s ease; order: 3;
        }
        .nav-toggle:checked ~ .primary-nav { max-height: 80vh; overflow-y: auto; }

        .main-nav { display: flex; flex-direction: column; align-items: stretch; gap: .2rem; padding: .7rem 0 .5rem; }

        .nav-brand-item { display: none; }
        .nav-item { width: 100%; }
        .nav-link, .nav-item > a:not(.admission-btn) {
          width: 100%; justify-content: space-between; padding: .85rem .9rem; border-radius: 10px;
        }
        .nav-item.is-active > .nav-link::before,
        .nav-item.is-active > a:not(.admission-btn)::before { display: none; }

        .mega-menu, .dropdown-menu {
          position: static; display: none;
          width: 100%; max-width: none;
          margin: .3rem 0 .4rem;
          opacity: 1; visibility: visible; pointer-events: auto;
          transform: none;
          border-radius: 12px; box-shadow: none; background: #f8fbf9;
        }
        .mega-menu::before, .dropdown-menu::before,
        .mega-menu::after, .dropdown-menu::after { content: none; }

        .has-mega:hover .mega-menu, .has-mega:focus-within .mega-menu,
        .has-dropdown:hover .dropdown-menu, .has-dropdown:focus-within .dropdown-menu { display: none; }
        .has-mega.is-open .mega-menu { display: grid; grid-template-columns: 1fr; padding: .3rem; }
        .has-dropdown.is-open .dropdown-menu { display: block; }

        .mega-menu > div { padding: .8rem; }
        .mega-menu > div + div { border-left: 0; border-top: 1px solid var(--nav-line); }
        .dropdown-menu { padding: .3rem; }

        .nav-item--cta { margin-left: 0; padding: .4rem 0 0; order: 2; }
        .admission-btn { width: 100%; justify-content: center; padding: .85rem 1rem; }
      }

      @media (max-width: 480px) {
        .navbar { padding: .55rem .8rem; }
        .mobile-brand span { font-size: .85rem; }
        .mobile-brand img { height: 30px; }
        .nav-toggle-label { width: 38px; height: 38px; }
        .nav-link, .nav-item > a:not(.admission-btn) { font-size: .88rem; }
        .mega-menu h3 { font-size: .68rem; }
        .mega-menu a, .dropdown-menu a { font-size: .85rem; }
      }

      @media (prefers-reduced-motion: reduce) {
        .mega-menu, .dropdown-menu, .nav-link, .admission-btn, .primary-nav { transition: none; }
      }
    </style>

    <div class="nav-surface">
      <div class="header-container navbar">

        <a class="mobile-brand" href="{{ url('/') }}" aria-label="Khwaja Yunus Ali University home">
          <img src="{{ asset('assets/images/logo.png') }}" alt="Khwaja Yunus Ali University logo">
          <span>Explore KYAU</span>
        </a>

        <input class="nav-toggle" type="checkbox" id="nav-toggle" aria-label="Toggle navigation">
        <label class="nav-toggle-label" for="nav-toggle" aria-hidden="true">
          <span></span><span></span><span></span>
        </label>

        <nav class="primary-nav" aria-label="Primary navigation">
          <ul class="main-nav">

            <li class="nav-brand-item">
              <a href="{{ url('/') }}" aria-label="Khwaja Yunus Ali University home">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Khwaja Yunus Ali University logo">
              </a>
            </li>

            <li class="nav-item has-dropdown">
              <button class="nav-link" type="button" aria-haspopup="true" aria-expanded="false">About</button>
              <div class="dropdown-menu">
                <a href="{{ url('/overview') }}">Overview</a>
                <a href="{{ url('/vision-mission') }}">Vision and Mission</a>
                <a href="{{ url('/founder') }}">The Founder</a>
                <a href="{{ url('/study') }}">Why Study Here</a>
                <a href="{{ url('/resources') }}">Resource</a>
              </div>
            </li>

            <li class="nav-item has-mega">
              <button class="nav-link" type="button" aria-haspopup="true" aria-expanded="false">Administration</button>
              <div class="mega-menu">
                <div>
                  <h3>Governing Bodies</h3>
                  <a href="{{ url('/board-of-trustees') }}">Board of Trustees</a>
                  <a href="{{ url('/syndicate') }}">Syndicate</a>
                  <a href="{{ url('/academic-council') }}">Academic Council</a>
                </div>
                <div>
                  <h3>Leadership</h3>
                  <a href="{{ url('/chancellor') }}">Chancellor</a>
                  <a href="{{ url('/chairman') }}">Chairman, BoT</a>
                  <a href="{{ url('/vc') }}">Vice Chancellor</a>
                  <a href="{{ url('/tressurer') }}">Treasurer</a>
                  <a href="{{ url('/registrar') }}">Registrar</a>
                </div>
                <div>
                  <h3>Offices</h3>
                  <a href="{{ url('/controller_of_examinations') }}">Controller of Examinations</a>
                  <a href="{{ url('/registrar_office') }}">Registrar</a>
                  <a href="{{ url('/proctor') }}">Proctor</a>
                  <a href="{{ url('/information_technology') }}">Information Technology</a>
                  <a href="{{ url('/contact-us') }}">Admission Office</a>
                </div>
              </div>
            </li>

            <li class="nav-item has-mega">
              <button class="nav-link" type="button" aria-haspopup="true" aria-expanded="false">Academic</button>
              <div class="mega-menu">
                <div>
                  <h3>Faculties</h3>
                  <a href="{{ url('/school-of-business-and-social-science') }}">School of Business And Social Science</a>
                  <a href="{{ url('/school-biomedical-life-science') }}">School of Bio Medical And Life Science</a>
                  <a href="{{ url('/school_of_science_and_engineering') }}">School of Science And Engineering</a>
                  
                </div>
                <div>
                  <h3>Programmes</h3>
                  <a href="{{ url('/undergraduate-programmes') }}">Undergraduate</a>
                  <a href="{{ url('/postgraduate-programmes') }}">Graduate</a>
                 
                </div>
                <div>
                  <h3>Quality &amp; Institute</h3>
                  <a href="{{ url('/iqac') }}">Institutional Quality Assurance Cell (IQAC)</a>
                  <a href="{{ url('/Khwaja Enayetpuri Sufism and Skill Development Institute') }}">Skill Development</a>
                </div>
                <div>
                  <h3>Information</h3>
                  <a href="{{ url('/academic_policy') }}">Academic Policy</a>
                  <a href="{{ url('/academic_calender') }}">Academic Calendar</a>
                  
                </div>
              </div>
            </li>

            <li class="nav-item has-mega">
              <button class="nav-link" type="button" aria-haspopup="true" aria-expanded="false">Admission</button>
              <div class="mega-menu">
                <div>
                  <h3>Information</h3>
                  <a href="{{ url('/admission_information') }}">Admission Overview</a>
                  <a href="{{ url('/admission-checklist') }}">Undergraduate Admission</a>
                  <a href="{{ url('/admission-checklist') }}">Graduate Admission</a>
                  <a href="{{ url('/admission-checklist') }}">Post Graduate Diploma</a>
                </div>
                <div>
                  <h3>Guidelines</h3>
                  <a href="{{ url('/admission_requirement') }}">How to Apply</a>
                  <a href="{{ url('/admission_process') }}">Admission Process</a>
                  <a href="{{ url('/admission_eligibility') }}">Required Documents</a>
                  <a href="{{ url('/credit_transfer') }}">Credit Transfer</a>
                </div>
                <div>
                  <h3>Fees &amp; Support</h3>
                  <a href="{{ url('/tution_fees') }}">Tuition Information</a>
                  <a href="{{ url('/tuition-fee-waiver') }}">Waiver &amp; Scholarship</a>
                  <a href="{{ url('/payment-guideline') }}">Admission Help Desk</a>
                </div>
              </div>
            </li>

            <li class="nav-item has-mega">
              <button class="nav-link" type="button" aria-haspopup="true" aria-expanded="false">Research</button>
              <div class="mega-menu">
                <div>
                  <h3>Research Overview</h3>
                  <a href="{{ url('/research_division') }}">Research Divisions</a>
                  <a href="{{ url('/research_group') }}">Research Groups</a>
                  <a href="{{ url('/research-project') }}">Research Project</a>
                  <a href="{{ url('/research_facilation') }}">Research Facilitation</a>
                </div>
                <div>
                  <h3>Publications</h3>
                  <a href="https://journal.kyau.edu.bd/" target="_blank" rel="noopener">KYAU Journal</a>
                  <a href="{{ url('/scopus_journal') }}">Faculty Research</a>
                  <a href="{{ url('/research_facilation') }}">Research Facilation</a>
                </div>
                <div>
                  <h3>Research Network</h3>
                  <a href="{{ url('/research-collaboration') }}">Collaboration</a>
                  <a href="{{ url('/research-lab') }}">Laboratories</a>
                  <a href="{{ url('/source-of-funding') }}">Funding</a>
                </div>
              </div>
            </li>

            <li class="nav-item has-mega">
              <button class="nav-link" type="button" aria-haspopup="true" aria-expanded="false">Campus Life</button>
              <div class="mega-menu">
                <div>
                  <h3>Facilities</h3>
                  <a href="{{ url('/cafeteria') }}">Cafeteria</a>
                  <a href="{{ url('/library') }}">Library</a>
                  <a href="{{ url('/transport') }}">Transport</a>
                  <a href="{{ url('/medical_center') }}">Medical Centre</a>
                  <a href="{{ url('/prayer_room') }}">Prayer Room</a>
                </div>
                <div>
                  <h3>Clubs &amp; Activities</h3>
                  <a href="{{ url('/culture') }}">Cultural Club</a>
                  <a href="{{ url('/#campus') }}">Blood Donation Club</a>
                  <a href="{{ url('/sports') }}">Sports Club</a>
                  <a href="{{ url('/#campus') }}">Debating Club</a>
                </div>
                <div>
                  <h3>Students</h3>
                  <a href="{{ url('/#campus') }}">Future Students</a>
                  <a href="{{ url('/#campus') }}">Current Students</a>
                  <a href="{{ url('/#alumni') }}">Alumni</a>
                </div>
              </div>
            </li>

            <li class="nav-item"><a href="{{ url('/career') }}">Career</a></li>
            <li class="nav-item"><a href="{{ url('/news') }}">News &amp; Events</a></li>

            <li class="nav-item nav-item--cta">
              <a class="admission-btn" href="{{ url('/#admission') }}">Apply Now</a>
            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main id="main-content">
    @yield('content')
  </main>

  <!-- KYAU GREEN FOOTER -->
  <footer class="footer" id="contact">
    <div class="container footer__top">
      <div class="footer__brand">
        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Khwaja Yunus Ali University logo"><span><strong>Khwaja Yunus Ali University</strong></span></a>
        <p>Enayetpur, Chauhali, Sirajganj-6751, Bangladesh</p>
        <div class="footer-contact"><a href="tel:+8801404461555">+880 1404 461555</a><a href="tel:+8801404461556">+880 1404 461556</a><a href="mailto:info@kyau.edu.bd">info@kyau.edu.bd</a></div>
      </div>
      <div class="footer-column"><h3>Become a KYAU Student</h3><a href="{{ url('/#programmes') }}">Find a Programme</a><a href="{{ url('/#admission') }}">Admission</a><a href="{{ url('/#admission') }}">How to Apply</a><a href="{{ url('/#admission') }}">Scholarship &amp; Waiver</a><a href="{{ url('/#contact') }}">Help Desk</a></div>
      <div class="footer-column"><h3>Academic</h3><a href="{{ url('/#faculties') }}">Faculties</a><a href="{{ url('/#programmes') }}">Programmes</a><a href="{{ url('/#research') }}">Research</a><a href="{{ url('/#notices') }}">Academic Notices</a><a href="{{ url('/#campus') }}">Campus Life</a></div>
      <div class="footer-column"><h3>Quick Links</h3><a href="https://journal.kyau.edu.bd/" target="_blank" rel="noopener">Journal</a><a href="https://iqac.kyau.edu.bd/" target="_blank" rel="noopener">IQAC</a><a href="https://newsletter.kyau.edu.bd/" target="_blank" rel="noopener">News &amp; Events</a><a href="{{ url('/#career') }}">Career</a><a href="{{ url('/#alumni') }}">Alumni</a></div>
      <div class="footer-column" id="portal"><h3>Visit &amp; Contact</h3><p>Sunday–Thursday<br>8:00 AM – 5:00 PM</p><a href="https://www.kyau.edu.bd/" target="_blank" rel="noopener">Official KYAU Website ↗</a><a href="mailto:info@kyau.edu.bd">Email the University</a><a href="{{ url('/#home') }}">Back to top ↑</a></div>
    </div>
    <div class="footer__bottom">
      <div class="container"><p>© 2012–{{ date('Y') }} Khwaja Yunus Ali University. All rights reserved.</p><p>Khwaja Yunus Ali University</p></div>
    </div>
  </footer>

  @stack('before-scripts')

  <script>
    (function () {
      const nav = document.querySelector('.primary-nav');
      const items = document.querySelectorAll('.has-mega, .has-dropdown');
      const mobileQuery = window.matchMedia('(max-width: 900px)');
      const EDGE_MARGIN = 16;

      function closeAll(except = null) {
        items.forEach(item => {
          if (item !== except) {
            item.classList.remove('is-open');
            const trigger = item.querySelector(':scope > .nav-link');
            if (trigger) trigger.setAttribute('aria-expanded', 'false');
          }
        });
      }

      // Keep every dropdown/mega panel inside the viewport by measuring
      // its actual width and clamping the horizontal offset in pixels,
      // instead of guessing based on menu order.
      function positionPanel(item) {
        if (mobileQuery.matches) return;
        const panel = item.querySelector(':scope > .mega-menu, :scope > .dropdown-menu');
        if (!panel) return;

        const itemRect = item.getBoundingClientRect();
        const panelWidth = panel.offsetWidth;

        let left = (itemRect.width - panelWidth) / 2;
        let viewportLeft = itemRect.left + left;
        const viewportRight = viewportLeft + panelWidth;

        if (viewportLeft < EDGE_MARGIN) {
          left += EDGE_MARGIN - viewportLeft;
        } else if (viewportRight > window.innerWidth - EDGE_MARGIN) {
          left -= viewportRight - (window.innerWidth - EDGE_MARGIN);
        }

        panel.style.left = left + 'px';
      }

      items.forEach(item => {
        const trigger = item.querySelector(':scope > .nav-link');
        if (!trigger) return;

        item.addEventListener('mouseenter', () => positionPanel(item));
        item.addEventListener('focusin', () => positionPanel(item));

        trigger.addEventListener('click', function (event) {
          event.preventDefault();
          const willOpen = !item.classList.contains('is-open');
          closeAll(item);
          item.classList.toggle('is-open', willOpen);
          trigger.setAttribute('aria-expanded', String(willOpen));
          if (willOpen) positionPanel(item);
        });
      });

      document.addEventListener('click', function (event) {
        if (!event.target.closest('.site-header')) closeAll();
      });

      document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
          closeAll();
          const toggle = document.getElementById('nav-toggle');
          if (toggle) toggle.checked = false;
        }
      });

      if (nav) {
        nav.addEventListener('click', function (event) {
          const link = event.target.closest('a');
          if (link && mobileQuery.matches) {
            const toggle = document.getElementById('nav-toggle');
            if (toggle) toggle.checked = false;
            closeAll();
          }
        });
      }

      // A resize can change which items would overflow, so just close
      // any open panel rather than trying to reposition mid-transition.
      window.addEventListener('resize', () => closeAll());
      mobileQuery.addEventListener?.('change', () => closeAll());
    })();
  </script>
  @stack('scripts')
</body>
</html>
