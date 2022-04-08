<?php
require_once "script/Mobile_Detect.php";
$detect = new Mobile_Detect;
?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.3/examples/jumbotron/ -->
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143783182-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-143783182-1");
  </script>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <!-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" /> -->
  <!-- <meta name="generator" content="Jekyll v3.8.5" /> -->
  <title>Fela MarketPlace</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" />

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="./css/jumbotron.css" rel="stylesheet" />
  <link href="./css/custom.css" rel="stylesheet" />
</head>

<body>
  <?php if (!$detect->isMobile()) { ?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm navbar fixed-top" id="navHeader">
      <!-- <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5> -->
      <img src="./images/logo.png" class="img-fluid my-0 mr-md-auto" id="logo" alt="Responsive image" />
      <!-- my-2 my-md-0 mr-md-9 -->
      <nav class="navbar navbar-default navbar-fixed-top" style="margin:0px 30px">
        <a class="h4 text-dark mr-5" href="#">Hot Deals</a>
        <a class="h4 text-dark mr-5" href="#howitworks">How It Works</a>
        <a class="h4 text-dark mr-5" target='_blank' href="https://www.youtube.com/watch?v=W4R1Vxd84mg">Testimonials</a>
        <a class="h4 text-dark mr-5" href="#about">About Fela</a>
        <a class="btn mr-5 h1" href="#"><span class="h4"><strong>FAQ</strong></span></a>
      </nav>
    </div>
  <?php } else { ?>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Fela MarketPlace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" data-toggle="collapse" data-target=".navbar-collapse">
              <a class="nav-link" href="#">Hot Deals <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse">
              <a class="nav-link" href="#howitworks">How It Works</a>
            </li>
            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse">
              <a class="nav-link" target='_blank' href="https://www.youtube.com/watch?v=W4R1Vxd84mg" tabindex="-1">Testimonials</a>
            </li>
            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse">
              <a class="nav-link" href="#about" tabindex="-1">About Fela</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  <?php } ?>

  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="padding-left:16px; padding-right:16px; margin-top: 40px; background-color: white">
      <div class="container" id="landingScreen">
        <div class="row">
          <div class="col-md-7" style="padding-top:50px">
            <h1 class="display-3" style="font-family: 'Ubuntu';">
              <span class="title" style="font-weight:1000;"><strong>Welcome to the Fela Marketplace</strong></span>
            </h1>
            <p class="lead">
              <span style="font-size:1.8rem;">
                <strong>
                  Buy and get CashToken Rewards<br />
                  Every CashToken gets you Guaranteed CashBack<br />
                  And a Chance To Win Between <br><span class="wrapper">N5,000-N100,000,000</span> Weekly<br />
                </strong>
              </span>
            </p>

            <!-- Example split danger button -->
            <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:20px; background: #ff7448;">
                <span class="text-center h5" style="color:white; padding-left:5px; font-size:1.8rem;">
                  Get Started
                </span>
              </button>
              <a target='_blank' href="https://www.youtube.com/watch?v=W4R1Vxd84mg"><span class="m-3" style="color:#ff7448; text-decoration:underline; font-size:1.4rem">or watch
                  latest winners</span></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                <a class="dropdown-item" href="#" target="_blank"> <i class="fa fa-facebook"></i> facebook</a>
                <a class="dropdown-item" href="https://t.me/myfela_ngbot" target="_blank"><i class="fa fa-telegram"></i> Telegram</a>
                <a class="dropdown-item" href="https://wa.me/2349078888288" target="_blank"> <i class="fa fa-whatsapp"></i> WhatApp</a>
                <a class="dropdown-item" href="#" target="_blank"> <i class="fa fa-globe"></i> Web</a>
              </div>
            </div>

            <p style="font-size:1.4rem;">No sign up required</p>

          </div>
          <?php if (!$detect->isMobile()) { ?>
            <div class="col-md-5">
              <img src="./images/fela cropped.png" class="img-fluid my-0 mr-md-auto" alt="Responsive image" />
            </div>
          <?php } ?>
        </div>
      </div>
      <div id="howitworks"></div>
    </div>


    <div style="background-color: #f8f5f5; padding: 25px 0px 40px 0px; margin-bottom: 15px;">
      <div class="container ">
        <h1 class="text-center">How It Works</h1>
        <div class="row p-3">
          <div class="col-md-4" style="margin: 0px auto">
            <div class="card">
              <div class="card-body">
                <img src="./images/Icons/shop--icon.svg" class="card-img-top card-img-resize img-fluid mx-auto d-block filter-orange" alt="..." style="height:100px; width:100px;" />
                <div class="card-body">
                  <h5 class="card-title text-center filter-orange">
                    <strong>Buy and Pay Bills</strong>
                  </h5>
                  <p class="card-text text-center h-100">
                    Fela sells over 1,000,000 products, airtime & data for all networks and supports payment of utility bills like Electricity, Cable TV and Water.<br><br><br><br><br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin: 0px auto">
            <div class="card">
              <div class="card-body">
                <img src="./images/Icons/rewards-phone.svg" class="card-img-top card-img-resize img-fluid mx-auto d-block filter-orange" alt="..." style="height:100px; width:100px;" />
                <div class="card-body">
                  <h5 class="card-title text-center filter-orange">
                    <strong>Get Cashtokens</strong>
                  </h5>
                  <p class="card-text text-center">
                    Every purchase above the set thresholds from Fela is an opportunity to win between ₦5,000-₦100,000,000. <br>You also immediately receive your Guaranteed Cash for iSavings.<br><br><br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="margin: 0px auto;">
            <div class="card">
              <div class="card-body">
                <img src="./images/Icons/funds--money.svg" class="card-img-top card-img-resize img-fluid mx-auto d-block filter-orange" alt="..." style="height:100px; width:100px;" />
                <div class="card-body">
                  <h5 class="card-title text-center filter-orange">
                    <strong>Enter Weekly Draw</strong>
                  </h5>
                  <p class="card-text text-center">
                    The draws happen every Friday Night and all cash winners are immediately notified of their wins and how to redeem them. <br>If you didn’t win cash this week, remember you have a Guaranteed Cash Win and can always win at the next draws.
                  </p>
                  <div id="about"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="margin:25px 0px">
      <div class="container hideInMobileScreen">
        <h1 class="text-center">Why People Are Using Fela</h1>
        <div class="row p-5">
          <div class="col-md-8" style="margin:0px auto">
            <div class="main-timeline4">
              <div class="timeline">
                <a href="#" class="timeline-content">
                  <!-- <span class="year">2018</span> -->
                  <img src="./images/Testimonials/user1.png" class="year" />
                  <div class="inner-content">
                    <h3 class="title">GARBA IKECHUKWU</h3>
                    <p class="description">
                      Fela helps me load airtime really fast. I have never had
                      to sign in or remember passwords or PINs. I also enjoy
                      CashTokens when I do Jumia shopping via Fela.
                    </p>
                  </div>
                </a>
              </div>
              <div class="timeline">
                <a href="#" class="timeline-content">
                  <!-- <span class="year">2017</span> -->
                  <img src="./images/Testimonials/user2.png" class="year" />
                  <div class="inner-content">
                    <h3 class="title">YUSUF JAMES</h3>
                    <p class="description">
                      Fela helps me load airtime really fast. I have never had
                      to sign in or remember passwords or PINs. I also enjoy
                      CashTokens when I do Jumia shopping via Fela.
                    </p>
                  </div>
                </a>
              </div>
              <div class="timeline">
                <a href="#" class="timeline-content">
                  <!-- <span class="year">2016</span> -->
                  <img src="./images/Testimonials/user3.png" class="year" />
                  <div class="inner-content">
                    <h3 class="title">OGHENEKARO FAITH</h3>
                    <p class="description">
                      Fela helps me load airtime really fast. I have never had
                      to sign in or remember passwords or PINs. I also enjoy
                      CashTokens when I do Jumia shopping via Fela.
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="margin:25px 0px">
      <div class="container hideInMainScreen">
        <h1 class="text-center">Why People Are Using Fela</h1>
        <div class="row p-5">
          <div class="col-md-8" style="margin: 0px auto;">
            <div class="main-timeline5">
              <div class="timeline">
                <!-- <div class="timeline-icon"><span class="year">2018</span></div> -->
                <div class="timeline-icon">
                  <img src="./images/Testimonials/user1.png" class="year" />
                </div>
                <div class="timeline-content">
                  <h3 class="title">GARBA IKECHUKWU</h3>
                  <p class="description">
                    Fela helps me load airtime really fast. I have never had
                    to sign in or remember passwords or PINs. I also enjoy
                    CashTokens when I do Jumia shopping via Fela.
                  </p>
                </div>
              </div>
              <div class="timeline">
                <!-- <div class="timeline-icon"><span class="year">2017</span></div> -->
                <div class="timeline-icon">
                  <img src="./images/Testimonials/user2.png" class="year" />
                </div>
                <div class="timeline-content">
                  <h3 class="title">YUSUF JAMES</h3>
                  <p class="description">
                    Fela helps me load airtime really fast. I have never had
                    to sign in or remember passwords or PINs. I also enjoy
                    CashTokens when I do Jumia shopping via Fela.
                  </p>
                </div>
              </div>
              <div class="timeline">
                <!-- <div class="timeline-icon"><span class="year">2016</span></div> -->
                <div class="timeline-icon">
                  <img src="./images/Testimonials/user3.png" class="year" />
                </div>
                <div class="timeline-content">
                  <h3 class="title">OGHENEKARO FAITH</h3>
                  <p class="description">
                    Fela helps me load airtime really fast. I have never had
                    to sign in or remember passwords or PINs. I also enjoy
                    CashTokens when I do Jumia shopping via Fela.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="background-color: #f8f5f5; padding: 25px 0px 45px 0px;">
      <div class="container">
        <h2>Our Partners/ Our Clients</h2>
        <section class="customer-logos slider">
          <div class="slide">
            <img class="img-fluid" src="https://abatex.com.ng/wp-content/uploads/2018/12/Jumia-Logo.jpg" />
          </div>
          <div class="slide">
            <img class="my-4 img-fluid" src="https://www.shelflife.ie/wp-content/uploads/2019/08/1510088306-1509710112-spar-logo.jpg" />
          </div>

          <div class="slide">
            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTolqlKT-_nwqrjsxrJ8LdBZ3C2lKLbXAKOpXLM_CYAb8-Pzetnaw" />
          </div>
          <div class="slide">
            <img class="img-fluid" src="https://3.bp.blogspot.com/-DhFFgKdBn9o/UVoLkRkGBLI/AAAAAAAAAKs/yq_F3a0kbD0/s1600/Logo+Pizza+Hut.JPG" />
          </div>
          <div class="slide">
            <img class="img-fluid" src="https://itedgenews.ng/wp-content/uploads/2018/12/Wakanow.jpg" />
          </div>
        </section>
      </div>
    </div>
  </main>

  <footer id="footer" class="clearfix" style="margin-top:0px">
    <div id="footer-widgets" style="margin:0 auto; width:100%">
      <div class="container" id="footer" style="margin: 0px auto; padding:0px 15px 0px 15px;">
        <div id="footer-wrapper">
          <div class="row">
            <div class="col-md-4">
              <img src="./images/fela white.png" class="widgettitle" />
              <div id="meta-3" class="widget widgetFooter widget_meta">
                <p>
                  <br /><br />Suite 109, Block A6, Cluster A,<br />
                  1004 Housing Estate, Victoria Island, Lagos.<br />
                </p>
              </div>
            </div>
            <!-- end widget1 -->

            <div class="col-md-4">
              <div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                <h4 class="widgettitle">QUICK LINKS</h4>
                <ul>
                  <li>
                    Airtime & Data
                  </li>
                  <li>
                    Travel & Event Tickets
                  </li>
                  <li>
                    Fela USSD
                  </li>
                  <li>
                    Fela4Jumia
                  </li>
                  <li>
                    Fela4Konga
                  </li>
                </ul>
              </div>
            </div>
            <!-- end widget1 -->

            <div class="col-md-4">
              <div id="meta-4" class="widget widgetFooter widget_meta">
                <h4 class="widgettitle">COMPANY</h4>

                <ul>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">About</a></li>
                  <li>
                    <a href="https://www.youtube.com/user/sonsofye" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/user/sonsofye" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/user/sonsofye" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/user/sonsofye" target="_blank"><i class="fa fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- end widget1 -->
          </div>
          <!-- end .row -->
        </div>
        <!-- end #footer-wrapper -->
      </div>
      <!-- end .container -->
    </div>
    <!-- end #footer-widgets -->

    <!--
      <div id="sub-floor">
      <div class="container">
        <div class="row">
          <div class="col-md-4 copyright">
            Copy right for Faploo © 2015
          </div>
          <div class="col-md-4 col-md-offset-4 attribution">
            Developer by <a target="_blank" href="#">Faploo team</a> .
          </div>
      </div> end .row 
     </div>
    </div> 
    -->
  </footer>

  <script src="./css/jquery-3.3.1.slim.min.js.download"></script>
  <script>
    window.jQuery ||
      document.write(
        '<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>'
      );
  </script>
  <script src="./css/bootstrap.bundle.min.js.download"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="./script/scrpit.js"></script>
  <script>
    $(document).ready(function() {
      $(".customer-logos").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 4
            }
          },
          {
            breakpoint: 520,
            settings: {
              slidesToShow: 3
            }
          }
        ]
      });
    });
  </script>

  <script type="text/javascript">
    /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
    (function(d, m) {
      var kommunicateSettings = {
        "appId": "2ff6e8a8b01aae4dc08c9859296981c87",
        "conversationTitle": "Fela",
        "popupWidget": true,
        "automaticChatOpenOnNavigation": true
      };
      var s = document.createElement("script");
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
      var h = document.getElementsByTagName("head")[0];
      h.appendChild(s);
      window.kommunicate = m;
      m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
  </script>
</body>

</html>