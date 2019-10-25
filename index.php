<?php 
    include("./backend/user/functions/init.php");
    $loggedIn = logged_in();
    $celestaid=""; $access_token="";
    if(logged_in()){
      $celestaid = $_SESSION['celestaid'];
      $access_token=$_SESSION['access_token'];
    }
?>

<!DOCTYPE html>
<html lang="en" class="is-loading">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="google-site-verification" content="CFwZqO_hmY2DPIR13xESIkBHT2_aBi8DzFyv306yz8Q" />
  <link rel="apple-touch-icon" sizes="57x57" href="assets/meta-icons/apple-icon-57x57.html" />
  <link rel="apple-touch-icon" sizes="60x60" href="assets/meta-icons/apple-icon-60x60.html" />
  <link rel="apple-touch-icon" sizes="72x72" href="assets/meta-icons/apple-icon-72x72.html" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/meta-icons/apple-icon-76x76.html" />
  <link rel="apple-touch-icon" sizes="114x114" href="assets/meta-icons/apple-icon-114x114.html" />
  <link rel="apple-touch-icon" sizes="120x120" href="assets/meta-icons/apple-icon-120x120.html" />
  <link rel="apple-touch-icon" sizes="144x144" href="assets/meta-icons/apple-icon-144x144.html" />
  <link rel="apple-touch-icon" sizes="152x152" href="assets/meta-icons/apple-icon-152x152.html" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/meta-icons/apple-icon-180x180.html" />

  <link rel="icon" type="image/png" sizes="32x32" href="assets/meta-icons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="assets/meta-icons/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/meta-icons/favicon-16x16.png" />

  <meta name="msapplication-square70x70logo" content="msapplication-square70x70logo.html" />
  <meta name="msapplication-square150x150logo" content="msapplication-square150x150logo.html" />
  <meta name="msapplication-square310x310logo" content="msapplication-square310x310logo.html" />
  <meta name="msapplication-TileColor" content="#0b202b" />

  <title>Celesta 2k19</title>
  <link rel="canonical" href="./" />
  <meta property="og:locale" content="en_us" />

  <link rel="preload" href="assets/fonts/Neutraface2Text-Book.html" as="font" type="font/woff2" crossorigin="" />
  <link rel="preload" href="assets/fonts/Neutraface2Text-Demi.woff2" as="font" type="font/woff2" crossorigin="" />
  <link rel="preload" href="assets/fonts/Neutraface2Text-Light.html" as="font" type="font/woff2" crossorigin="" />

  <style>
    .nav_more_links{
      color:grey;
      font-size:15px;
    }
    @font-face {
      font-family: "Neutraface Book";
      src: url("assets/fonts/Neutraface2Text-Book.html") format("woff2"),
        url("assets/fonts/Neutraface2Text-Book-2.html") format("woff");
    }

    @font-face {
      font-family: "Neutraface Demi";
      src: url("assets/fonts/Neutraface2Text-Demi.woff2") format("woff2"),
        url("assets/fonts/Neutraface2Text-Demi.html") format("woff");
    }

    @font-face {
      font-family: "Neutraface Light";
      src: url("assets/fonts/Neutraface2Text-Light.html") format("woff2"),
        url("assets/fonts/Neutraface2Text-Light-2.html") format("woff");
    }
  </style>
  <link rel="stylesheet" href="_compiled/app.css" />
  <style>
      .caSpanStyle{
        font-size: 2.5em;
      }
      @media(max-width: 500px){
        .caSpanStyle{
          font-size: 2em;
        }
      }
    </style>
</head>

<body>
  <a class="sr" href="#barba-wrapper">Skip to Main Content</a>

  <header class="site--header js-header">
    <div href="#" class="menu-btn js-menu-btn o-media__icon no-barba">
      <span class="icon x is--inactive"></span>
      <span class="tx--caption">Menu</span>
    </div>

    <span class="logo-wrapper js-logo">
      <a href="./" class="c-logo">
        <svg class="c-logo__svg" width="48" height="41" viewBox="0 0 48 41" fill="none" xmlns="http://www.w3.org/2000/svg"></svg>
        <img src="logo.png" style="width: 100px; position: relative; transform: translateY(-3px)">

        <div class="c-logo__txt">
          <span>A </span><span>Stellar Trek</span>
        </div>
      </a>

      <div class="loading-content">
        <p>Get TechXited</p>
      </div>
    </span>

    <a href="./events.php" class="projects-btn o-media__icon tx--gray-light">
      <span class="tx--caption">Events</span>
      <svg class="icon icon-projects" width="19" height="18" fill="none">
        <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor" transform="translate(0 6)" />
        <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor" transform="translate(16 6)" />
        <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor" transform="translate(8 8)" />
        <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor" transform="translate(8)" />
        <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor" transform="translate(3 15)" />
        <circle cx="1.5" cy="1.5" r="1.5" fill="currentColor" transform="translate(13 15)" />
      </svg>
    </a>
  </header>

  <div class="site-nav js-nav">
    <div class="nav-container">
      <nav class="main-nav">
        <ul>
          <li>
            <a class="main-nav__link tx--title-3 active first" href="./" title="Home">Home</a>
          </li>

          <?php if(!$loggedIn) { ?>
            <li>
                <a class="main-nav__link tx--title-3" href="./backend/user/register.php" target="_blank" title="Register">Register</a>
            </li>
            <li>
                <a class="main-nav__link tx--title-3" href="./backend/user/login.php" target="_blank" title="Login">Login</a>
            </li>
          <?php } else { ?>
            <li>
                <a class="main-nav__link tx--title-3" href="./backend/user/profile.php" target="_blank" title="Profile">Profile</a>
            </li>
          <?php } ?>
          
          <li>
            <a class="main-nav__link tx--title-3" href="./ca/ca.php" target="_blank" title="Gallery">Campus Ambassador</a>
          </li>

          <li>
            <a class="main-nav__link tx--title-3" href="events.php" title="Events">Events</a>
          </li>

          <li>
            <a class="main-nav__link tx--title-3" href="sponsors.php" title="Our Sponsors">Our Sponsors</a>
          </li>

          <li>
            <a class="main-nav__link tx--title-3" href="gallery/gallery.php" target="_blank" title="Gallery">Gallery</a>
          </li>

          <li>
            <a class="main-nav__link tx--title-3" href="team.php" title="Our Team">Our Team</a>
          </li>

          <li>
            <a class="main-nav__link tx--title-3" href="connect.php" title="Contact Us">Contact Us</a>
          </li>

          <li>
            <a class="main-nav__link tx--title-3" href="stepstoreg.php" title="Steps to Register">Steps to Register</a>
          </li>

          <!-- <li>
            <a class="main-nav__link tx--title-3" href="careers.html" title="Careers">Careers</a>
          </li> -->
        </ul>
      </nav>

      <nav class="more-nav">
        <span class="more-nav__label tx--callout nav_more_links">MORE</span>

        <ul class="more-nav__list">
          <span>
            <li>
              <a class="no-barba tx--caption first" href="https://www.facebook.com/CelestaIITP/" title="Facebook"
                target="_blank">Facebook</a>
            </li>

            <li>
              <a class="no-barba tx--caption" href="https://twitter.com/celesta_iitp" title="Twitter"
                target="_blank">Twitter</a>
            </li>

            <li>
              <a class="no-barba tx--caption" href="https://www.instagram.com/celestaiitp_official/" title="Instagram"
                target="_blank">Instagram</a>
            </li>
            <li>
              <a class="no-barba tx--caption" href="https://www.youtube.com/channel/UCd8RpmJktBOwqT4OehcCjjg" title="Youtube"
                target="_blank">Youtube</a>
            </li>
            <li>
              <a class="no-barba tx--caption" href="https://www.linkedin.com/in/celesta-iit-patna-3722b6166/"
                title="Linkedin" target="_blank">Linkedin</a>
            </li>
          </span>

          <span>
            <li>
              <a class="main-nav__link" href="developers.php" title="Developers">Core Developers</a>
            </li>
            <!-- <li>
                <a class="no-barba tx--caption" href="#" title="Site Credits" target="_blank">Link</a>
            </li> -->
        </span>
        </ul>
      </nav>
    </div>
  </div>

  <main id="barba-wrapper" class="main">
    <div class="barba-container" data-namespace="prism">
      <div class="home-wrapper">
        <div class="landing-brands js-brands">

          <div class="brand brand-1" data-brand="Think" data-js-item="1"
            data-bg="assets/images/home/_800xAUTO_Fit_center-center_75/img-bd-1.jpg"
            data-bg-md="assets/images/home/_1000xAUTO_Fit_center-center_75/img-bd-1.jpg"
            data-bg-lg="assets/images/home/_1400xAUTO_Fit_center-center_75/img-bd-1.jpg">
            <h2 class="word-wrapper">
              <span class="word tx--title-1">About</span>
              <span class="icon x is--inactive"></span>
            </h2>
            <div class="word-intro">And Official Theme</div>
            <div aria-hidden class="word-content tx--gray-blue-1">
              <p class="tx--body-lead">
                Celesta is the annual Techno-Management Fest of IIT Patna. To promote technical and managerial enthusiasm amongst young and bright minds of our nation and to provide a platform to transform their innovative ideas into a meaningful reality.
                <iframe width="300" height="150" src="https://www.youtube.com/embed/0zq9wqsYZCw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </p>
            </div>
          </div>

          <div class="brand brand-2" data-brand="Design" data-js-item="2"
            data-bg="assets/images/home/_800xAUTO_Fit_center-center_75/img-bd-2.jpg"
            data-bg-md="assets/images/home/_1000xAUTO_Fit_center-center_75/img-bd-2.jpg"
            data-bg-lg="assets/images/home/_1400xAUTO_Fit_center-center_75/img-bd-2.jpg">
            <h2 class="word-wrapper">
              <span class="word tx--title-1">Register</span>
              <span class="icon x is--inactive"></span>
            </h2>
            <div class="word-intro">And Events Registration</div>
            <div aria-hidden class="word-content tx--gray-blue-1">
              <p class="tx--body-lead">
                Register for Celesta'19
              </p>
              <a href="./backend/user/register.php" target="_blank" class="btn btn--dark btn--hollow">Register</a>
              <a href="./stepstoreg.php" class="btn btn--dark btn--hollow">Steps to Register</a>
              <p>
                <a href="./events.php" class="btn btn--dark btn--hollow">Register for events</a>
              
              </p>
            </div>
          </div>

          <div class="brand brand-3" data-brand="Brand" data-js-item="3"
            data-bg="assets/images/home/_800xAUTO_Fit_center-center_75/img-bd-3.jpg"
            data-bg-md="assets/images/home/_1000xAUTO_Fit_center-center_75/img-bd-3.jpg"
            data-bg-lg="assets/images/home/_1400xAUTO_Fit_center-center_75/img-bd-3.jpg">
            <h2 class="word-wrapper">
              <span class="word tx--title-1 caSpanStyle">CA Program</span>
              <span class="icon x is--inactive"></span>
            </h2>
            <div class="word-intro"></div>
            <div aria-hidden class="word-content tx--gray-blue-1">
              <p class="tx--body-lead">
                <a href="./ca/ca.php" target="_blank" class="btn btn--dark btn--hollow">Register for CA</a>
              </p>
              <a href="./backend/user/login.php" target="_blank" class="btn btn--dark btn--hollow">CA Login</a>
            </div>
          </div>
        </div>

        <div class="brands-bgs">
          <div class="image poly-1"></div>
        </div>

        <ul class="viewport-links">
          <li class="left ">
            <a href="sponsors.php" title="Our Sponsors" class="tx--caption">Our Sponsors</a>
          </li>

          <li class="right mobile-hide">
            <a href="connect.php" title="Contact Us" class="tx--caption">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <div class="site-bg js-site-bg">
    <svg class="site-bg__base" width="391" height="443" viewBox="0 0 391 443" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path id="base-1"
        d="M263.271 0L38.182 14.4553L0.126221 74.5177L72.5441 122.478L17.699 193.746L57.9998 333.87L160.632 389.621L256.219 354.099L272.113 290.899L339.158 269.833L374.08 218.399L383.034 97.0412L263.271 0Z"
        fill="#061923" />
    </svg>

    <svg class="site-bg__prism" width="520" height="520" viewBox="0 0 520 520" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <g class="site-bg__prism-paths" fill="url(#prism-gradient)" stroke="url(#prism-stroke)">
        <path opacity="0.1"
          d="M514.866 109.292L438.382 14.8205L350.185 0.444092L288.748 14.7573L211.834 21.9358L127.705 19.2287L60.4896 58.5935L0.649414 171.596L6.45021 361.159L84.8981 469.475L180.303 502.738L312.331 475.688L385.241 432.514L449.25 354.119L494.213 260.279L521.272 162.775L514.866 109.292Z" />
        <path opacity="0.2"
          d="M455.868 255.512L464.687 152.614L448.838 96.1473L391.329 38.7099L197.838 37.3079L95.7332 54.7909L4.70752 210.801L27.3383 362.114C27.3383 362.114 109.838 457.628 107.337 456.479H296.338L434.338 314.114L455.868 255.512Z" />
        <path opacity="0.3"
          d="M402.586 295.972L409.891 151.972L366.586 83.9716L250.086 61.4716L123.586 61.4716L22.5864 193.972L77.0864 412.972L244.586 439.972L402.586 314.972V295.972Z" />
        <path opacity="0.4"
          d="M360.932 328.762L358.099 147.269L249.38 91.3844L153.889 77.351L37.5862 176.972L55.9904 384.147L195.667 422.738L348.275 345.182L360.932 328.762Z" />
        <path opacity="0.5"
          d="M323.95 304.021L304.092 148.712L206.901 110.288L125.052 106.567L43.7476 195.102L72.3455 378.019L193.851 398.916L323.95 314.972V304.021Z" />
        <path opacity="0.6"
          d="M297.338 299.114L279.613 165.114L185.392 131.765L116.586 127.101L49.8015 205.165L76.8651 369.824L179.267 390.602L279.613 321.005L297.338 299.114Z" />
        <path
          d="M271.338 263.472L246.113 168.411L174.338 138.972L118.586 144.972L66.0864 201.972L96.0864 346.472L174.338 373.472L271.338 306.972V263.472Z" />
      </g>

      <defs>
        <linearGradient id="prism-gradient" x1="521.272" y1="167" x2="15" y2="378" gradientUnits="userSpaceOnUse">
          <stop stop-color="#3850CF" />
          <stop offset="1" stop-color="#00FFEE" />
        </linearGradient>

        <linearGradient id="prism-stroke" x1="521.272" y1="167" x2="15" y2="378" gradientUnits="userSpaceOnUse">
          <stop stop-color="#3850CF" />
          <stop offset="1" stop-color="#00FFEE" />
        </linearGradient>
      </defs>
    </svg>
  </div>

  <script src="_compiled/vendor.js" async></script>
  <script src="_compiled/app.js" async></script>
</body>

</html>
