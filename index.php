<?php
$pageTitle = "Custom Application Development Company In USA - Diginsy";
$pageDescription = "Experience top-notch application development services in USA with Diginsy, that empower businesses with cutting-edge solutions to drive growth and success.";
include "include/head.php"; ?>

<body>
  <section class="pt-lg-3 pt-0 banner_bg_color">
    <?php include "include/header.php"; ?>
    <div class="mt-md-5 mt-0 pt-5  position-relative container mx-auto row g-0 flex-lg-row flex-column-reverse justify-content-between hero-banner banner_content">
      <img loading="lazy" src="./images/down.webp" class="arrow" alt="Down Arrow" />
      <div class="col-lg-7 text-lg-start text-center mt-lg-0 mt-0">
        <h1 class="banner_head fw-medium">
          Growing <br />
          <span>Brands</span> Online <br />
          With Revolutionary <span>Ideas</span>
        </h1>
        <p class="big_para fw-medium" style="max-width: 653px;">
          Innovation thrives here, where technology powers our purpose and
          propels us forward, defining our commitment to excellence.
        </p>
        <button onclick="location.href='./contact';" class="px-5 mb-5 black_btn_hover mt-4 py-3 black_bg text-light border-0">
          Schedule a Meeting
        </button>
      </div>
      <div class="col-lg-5 position-relative">
        <img src="./images/home/banner_ar.webp" width="867" height="522" class="flip_image position-relative z-3" alt="image" />
        <img src="./images/home/circle.webp" width="550" height="550" class="position-absolute z-1 circle_banner move-left-right" alt="image" />
        <img src="./images/home/orange_circle.webp" width="150" height="150" class="position-absolute z-2 orange_circle d-lg-block d-none zoom-in-out" alt="image" />
        <img src="./images/home/orange_box.webp" width="150" height="150" class="position-absolute z-2 orange_box d-lg-block d-none zoom-in-out" alt="image" />
      </div>
    </div>
  </section>
  <section class="about pt-5 container">
    <h2 class="orange_text big_para text-center text-md-start">About Diginsy?</h2>
    <h3 class="fw-medium  text-center text-md-start">
      Innovation thrives here, <br class="d-lg-none d-block" />
      <span>
        where technology powers
        <span class="border_orange d-md-inline d-none"></span></span>
      <br />
      our purpose and propels us forward, defining our commitment to
      excellence.
    </h3>
    <p class="pt-4 big_para black_text pb-4 text-center text-md-start">
      Diginsy is a disruptive mobile app development company
      <span class="orange_text fw-medium">
        creating cutting edge cross platform apps to solve everyday problems, simplify frustrating activities, </span>and bring endless enjoyment into the palm of your hand. Founded by a team of hardened tech veterans familiar with the twists and turns of cross platform app development, we stand out from the growing crowd of mobile app development companies with fierce pride in professionalism and perfectionism to design, program, and deploy top tier mobile apps.
    </p>
    <div class="position-relative my-md-5 my-1 video-wrapper">
      <video controls width="640" height="320" id="video" preload="metadata" poster="./images/home/video_tb.webp" style="max-width: 1294px;">
        <source src="./videos/diginsy.mp4" type="video/mp4">
      </video>
      <div class="opacity-75 bg-black position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" id="video-overlay">
        <div class="d-flex gap-1 align-items-center position-relative">
          <div class="vidtxt" id="circle-play-b">
            <svg class="Video play icon" width="92" height="92" loading="lazy" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="50" cy="50" r="25" fill="white" />
              <path d="M61 49.5L43.75 59.4593V39.5407L61 49.5Z" fill="black" />
            </svg>
            <div class="video-circle1" style="animation-delay: 0s"></div>
            <div class="video-circle2" style="animation-delay: 0.5s"></div>
            <div class="video-circle3" style="animation-delay: 1s"></div>
          </div>
          <p class="text-light big_para pt-2 video-text">Know more About Us</p>
        </div>
      </div>
    </div>
    <div class="counters_sec pt-md-5 pt-2 row g-0 justify-content-between flex-lg-row flex-column pb-70">
      <div class="col-lg-5">
        <h2 class="sec_head fw-medium text-center text-md-start">
          Your One-way Road To
          <span class="orange_text fw-semibold">Business Growth</span>
        </h2>
        <p class="pt-3 big_para lh-lg mb-3 mb-md-0 text-center text-md-start">
          Guided by an augmented global delivery model, an innovative software
          platforming approach, and industry expertise, Diginsy is committed
          to offering high-value IT services.
        </p>
      </div>
      <div class="col-lg-5">
        <div class="row row-gap-lg-5 justify-content-lg-between justify-content-center align-items-md-center align-items-start">
          <div class="mb-4 col-lg-7 col-6">
            <div class="ms-lg-auto counterBox">
              <h4 class="counter mb-0 fw-bolder">460+</h4>
              <p class="fw-medium big_para">Talent Pool Of Professionals</p>
            </div>
          </div>
          <div class="mb-4 col-lg-5 col-6">
            <div class="ms-lg-auto counterBox float-end">
              <h4 class="counter mb-0 fw-bolder">450+</h4>
              <p class="fw-medium big_para">Projects Delivered</p>
            </div>
          </div>
          <div class="mb-4 col-lg-7 col-6">
            <div class="ms-lg-auto counterBox">
              <h4 class="counter mb-0 fw-bolder">400+</h4>
              <p class="fw-medium big_para">Happy Client Testimonials</p>
            </div>
          </div>
          <div class="mb-4 col-lg-5 col-6">
            <div class="ms-lg-auto counterBox float-end">
              <h4 class="counter mb-0 fw-bolder">900+</h4>
              <p class="fw-medium big_para">Trusted Customers</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mad-portfolio-sec web-dev-portfolio-sec main-page-portfolio">
    <div class="container-fluid port-container">
      <h2 class="sec_head fw-medium text-center text-md-start">
        Our
        <span>Portfolio<span class="border_orange pr-1"></span></span>
        Showcase
      </h2>
      <div class="main-portfolio-slider-wrap owl-carousel owl-theme position-relative">
        <a href="./mobile-app-case-study" class="text-decoration-none">
          <div class="lazybg portfolio-slide-1 food-ninja-cover-img portfolio-slide-props position-relative">
            <div class="row position-relative z-2">
              <div class="offset-1 col-md-4">
                <div class="portfolio_box foodninja-cover custom foodninja-main-cover ">
                  <div class="food-ninja-logo d-flex justify-content-center d-md-block mb-2 mb-md-0 d-flex justify-content-center d-md-block mb-2 mb-md-0">
                    <img loading="lazy" width="100" height="79" src="./images/portfolio/inner/secondrry-logo.webp" alt="image" style="max-width: 100px;">
                  </div>
                  <h3 class="hd-gradiant">FoodNinja</h3>
                  <h6 class="hd-ssm mb-10">Deliever Favorite Food</h6>
                  <h4 class="fw-semibold fs-70">Food Ninja <br> Mobile App</h4>
                  <div class="d-flex gap-4 justify-content-md-start justify-content-center align-items-center portfolio_button mb-md-20 d-sm-flex">
                    <img loading="lazy" width="165" height="68" src="./images/home/gplay.svg" class="img-fluid" alt="image" />
                    <img loading="lazy" width="165" height="68" src="./images/home/iosplay.svg" class="img-fluid" alt="image" />
                  </div>
                </div>
              </div>
            </div>
            <div class="main-portfolio-overlay"></div>
          </div>
        </a>
        <a href="./finance-case-study" class="text-decoration-none">
          <div class="lazybg portfolio-slide-1 food-ninja-cover-img finance-cover-img portfolio-slide-props position-relative">
            <div class="row position-relative z-2">
              <div class="offset-1 col-md-4">
                <div class="portfolio_box foodninja-cover custom">
                  <div class="food-ninja-logo d-flex justify-content-center d-md-block mb-2 mb-md-0 d-flex justify-content-center d-md-block mb-2 mb-md-0">
                    <img loading="lazy" weight="100" height="100" src="./images/finance-case-study/finance-logo.webp" alt="image" style="max-width: 100px;">
                  </div>
                  <h4 class="fw-semibold fs-70">Finance <br> Mobile App</h4>
                  <div class="d-flex gap-4 justify-content-md-start justify-content-center align-items-center portfolio_button mb-md-20 d-sm-flex">
                    <img loading="lazy" width="165" height="68" src="./images/home/gplay.svg" class="img-fluid" alt="image" />
                    <img loading="lazy" width="165" height="68" src="./images/home/iosplay.svg" class="img-fluid" alt="image" />
                  </div>
                </div>
              </div>
            </div>
            <div class="main-portfolio-overlay"></div>
          </div>
        </a>
        <a href="./ecommerce-mobile-app-case-study" class="text-decoration-none">
          <div class="lazybg portfolio-slide-1 food-ninja-cover-img ecommerce-cover-img portfolio-slide-props position-relative">
            <div class="row position-relative z-2">
              <div class="offset-1 col-md-4">
                <div class="portfolio_box foodninja-cover custom">
                  <div class="food-ninja-logo d-flex justify-content-center d-md-block mb-2 mb-md-0 d-flex justify-content-center d-md-block mb-2 mb-md-0">
                    <img loading="lazy" width="100" height="67" src="./images/ecommerce-case-study/shop-logo.webp" alt="image" style="max-width: 100px;">
                  </div>
                  <h4 class="fw-semibold fs-70">Ecommerce <br> Mobile App</h4>
                  <div class="d-flex gap-4 justify-content-md-start justify-content-center align-items-center portfolio_button mb-md-20 d-sm-flex">
                    <img loading="lazy" width="165" height="68" src="./images/home/gplay.svg" class="img-fluid" alt="image" />
                    <img loading="lazy" width="165" height="68" src="./images/home/iosplay.svg" class="img-fluid" alt="image" />
                  </div>
                </div>
              </div>
            </div>
            <div class="main-portfolio-overlay"></div>
          </div>
        </a>
        <a href="./coffeeBeen-mobile-app-case-study" class="text-decoration-none">
          <div class="lazybg portfolio-slide-1 food-ninja-cover-img coffeebeen-cover-img portfolio-slide-props position-relative">
            <div class="row position-relative z-2">
              <div class="offset-1 col-md-4">
                <div class="portfolio_box foodninja-cover custom">
                  <div class="coffee-been-logo-wrap coffee-been-main-logo d-flex justify-content-center d-md-block mb-2 mb-md-0">
                    <img loading="lazy" src="./images/coffeebeen-case-study/coffee-been-logo.webp" alt="image" style="max-width: 200px;">
                  </div>
                  <h4 class="fw-semibold fs-70">Coffee Shop <br> Mobile App</h4>
                  <div class="d-flex gap-4 justify-content-md-start justify-content-center align-items-center portfolio_button mb-md-20 d-sm-flex">
                    <img loading="lazy" width="165" height="68" src="./images/home/gplay.svg" class="img-fluid" alt="image" />
                    <img loading="lazy" width="165" height="68" src="./images/home/iosplay.svg" class="img-fluid" alt="image" />
                  </div>
                </div>
              </div>
            </div>
            <div class="main-portfolio-overlay"></div>
          </div>
        </a>
        <div class="lazybg portfolio-slide-1 bg-dark-brown  portfolio-slide-props position-relative">
          <div class="row">
            <div class="offset-1 col-md-5 position-relative">
              <div class="slide-content-2 slide-content-all">
                <h4 class="fs-70 fw-800 text-white mb-24">
                  California Pizza <br>
                  Kitchen <span class="light-yellow">CPK</span>
                </h4>
                <button class="portfolio_btn mt-0 justify-content-start d-flex gap-2 w-100 align-items-center sm-j-center">
                  <p class="m-0 text-white hover-underline-animation pe-4 fs-24">
                    View Case Study
                  </p>
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="59" height="60" rx="29.5" transform="matrix(-1 0 0 1 60 0)" fill="#EDEDED" />
                    <path d="M43 30H18M43 30L32.2857 19M43 30L32.2857 41" stroke="#222222" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
              </div>
              <img loading="lazy" width="548" height="548" src="./images/web-dev/wd-slide-1-pizza.webp" class="position-absolute pizza-img" alt="image">
            </div>
            <img loading="lazy" width="590" height="806" src="./images/web-dev/wd-slide-1-img-1.webp" class="position-absolute left-img d-none d-md-block" alt="image">
            <img loading="lazy" width="590" height="803" src="./images/web-dev/wd-slide-1-img-2.webp" class="position-absolute right-img d-none d-md-block" alt="image">
          </div>
          <div class="row align-items-end position-absolute w-100 slide-content-2-right-wrap">
            <div class="offset-1 col-md-4 position-relative z-2">
              <div class="d-flex gap-4 justify-content-md-start justify-content-center align-items-center portfolio_button mb-md-20 d-sm-flex">
                <div>
                  <img loading="lazy" width="230" height="65" src="./images/web-dev/california-pizza.webp" class="img-fluid mb-30 california-pizza-img sm-flex sm-m-auto  " alt="image">
                  <button class="portfolio_btn mt-0 mt-30 justify-content-start d-flex gap-2 w-100 align-items-center">
                    <p class="m-0 text-white hover-underline-animation pe-4 fs-24">
                      Visit Live Website
                    </p>
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="59" height="60" rx="29.5" transform="matrix(-1 0 0 1 60 0)" fill="#EDEDED" />
                      <path d="M43 30H18M43 30L32.2857 19M43 30L32.2857 41" stroke="#222222" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="main-portfolio-overlay height-100"></div>
        </div>
      </div>
  </section>
  <section class="services faq_sec container mb-5">
    <div class="content">
      <h2 class="sec_head fw-medium text-center text-md-start">
        Best
        <span>
          Services We Can
          <span class="border_orange d-md-inline d-none"></span></span>
        <br />
        Offer For You
      </h2>
      <p style="max-width: 710px" class="pt-3 pb-5 big_para mb-3 mb-lg-0 text-center text-md-start">
        Consumers today predominantly use digital methods to research
        products. Before engaging with a brand or product, we often
        investigate it online. Meanwhile, 51% of consumers admit to using
        google as their primary tool for product research before making a
        purchase.
      </p>
    </div>
    <div class="container accordion-tab-section home-accordion">
      <div class="row justify-content-between flex-lg-row flex-column-reverse">
        <div class="col-lg-6">
          <div id="accordionExample" class="d-block accordion nav nav-tabs" role="tablist">
            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-one" type="button" role="tab" aria-controls="accordion-one" aria-selected="true">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <span class="black_text">01. </span><span class="acc-head">Mobile Application</span>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="transition: 1.2s">
                <div class="accordion-body">
                  <div class="d-flex align-items-center gap-2 justify-content-between">
                    <p class="fw-bold faq_head orange_text m-0">
                      Mobile Application
                    </p>
                    <p class="faqNumber">01</p>
                  </div>
                  <div class="additional-content">
                    If you’re looking for a company that can develop the perfect
                    mobile application for your brand, then Diginsy is your way
                    to go. Our cutting-edge software development firm emphasizes
                    strategic collaboration, crafting intuitive applications
                    that complement your enterprise aspirations and boost your
                    business.
                  </div>
                  <!-- <button style="padding-left: 0px" class="read-more bg-transparent fw-semibold pt-3 border-0">
                    Read more...
                  </button> -->
                </div>
              </div>
            </div>
            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-two" type="button" role="tab" aria-controls="accordion-two" aria-selected="false">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span class="black_text">02.</span> <span class="acc-head">Game Development</span>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="transition: 1.2s">
                <div class="accordion-body">
                  <div class="d-flex align-items-center gap-2 justify-content-between">
                    <p class="fw-bold faq_head orange_text m-0">
                      Game Development
                    </p>
                    <p class="faqNumber">02</p>
                  </div>
                  <div class="additional-content">
                    If you’re looking for a company that can develop the perfect
                    mobile application for your brand, then Diginsy is your way
                    to go. Our cutting-edge software development firm emphasizes
                    strategic collaboration, crafting intuitive applications
                    that complement your enterprise aspirations and boost your
                    business.
                  </div>
                  <!-- <button style="padding-left: 0px" class="read-more bg-transparent fw-semibold pt-3 border-0">
                    Read more...
                  </button> -->
                </div>
              </div>
            </div>
            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-three" type="button" role="tab" aria-controls="accordion-three" aria-selected="false">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <span class="black_text">03.</span> <span class="acc-head">Blockchain Development</span>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="transition: 1.2s">
                <div class="accordion-body">
                  <div class="d-flex align-items-center gap-2 justify-content-between">
                    <p class="fw-bold faq_head orange_text m-0">
                      Blockchain Development
                    </p>
                    <p class="faqNumber">03</p>
                  </div>
                  <div class="additional-content">
                    If you’re looking for a company that can develop the perfect
                    mobile application for your brand, then Diginsy is your way
                    to go. Our cutting-edge software development firm emphasizes
                    strategic collaboration, crafting intuitive applications
                    that complement your enterprise aspirations and boost your
                    business.
                  </div>
                  <!-- <button style="padding-left: 0px" class="read-more bg-transparent fw-semibold pt-3 border-0">
                    Read more...
                  </button> -->
                </div>
              </div>

            </div>
            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-four" type="button" role="tab" aria-controls="accordion-four" aria-selected="false">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <span class="black_text">04.</span> <span class="acc-head">Augmented Reality</span>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample" style="transition: 1.2s">
                <div class="accordion-body">
                  <div class="d-flex align-items-center gap-2 justify-content-between">
                    <p class="fw-bold faq_head orange_text m-0">
                      Augmented Reality
                    </p>
                    <p class="faqNumber">04</p>
                  </div>
                  <div class="additional-content">
                    If you’re looking for a company that can develop the perfect
                    mobile application for your brand, then Diginsy is your way
                    to go. Our cutting-edge software development firm emphasizes
                    strategic collaboration, crafting intuitive applications
                    that complement your enterprise aspirations and boost your
                    business.
                  </div>
                  <!-- <button style="padding-left: 0px" class="read-more bg-transparent fw-semibold pt-3 border-0">
                    Read more...
                  </button> -->
                </div>
              </div>

            </div>
            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-five" type="button" role="tab" aria-controls="accordion-five" aria-selected="false">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <span class="black_text">05.</span> <span class="acc-head">Web Development</span>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample" style="transition: 1.2s">
                <div class="accordion-body">
                  <div class="d-flex align-items-center gap-2 justify-content-between">
                    <p class="fw-bold faq_head orange_text m-0">
                      Web Development
                    </p>
                    <p class="faqNumber">05</p>
                  </div>
                  <div class="additional-content">
                    If you’re looking for a company that can develop the perfect
                    mobile application for your brand, then Diginsy is your way
                    to go. Our cutting-edge software development firm emphasizes
                    strategic collaboration, crafting intuitive applications
                    that complement your enterprise aspirations and boost your
                    business.
                  </div>
                  <!-- <button style="padding-left: 0px" class="read-more bg-transparent fw-semibold pt-3 border-0">
                    Read more...
                  </button> -->
                </div>
              </div>

            </div>
            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-six" type="button" role="tab" aria-controls="accordion-six" aria-selected="false">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <span class="black_text">06.</span> <span class="acc-head">Digital Marketing</span>
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample" style="transition: 1.2s">
                <div class="accordion-body">
                  <div class="d-flex align-items-center gap-2 justify-content-between">
                    <p class="fw-bold faq_head orange_text m-0">
                      Digital Marketing
                    </p>
                    <p class="faqNumber">06</p>
                  </div>
                  <div class="additional-content">
                    If you’re looking for a company that can develop the perfect
                    mobile application for your brand, then Diginsy is your way
                    to go. Our cutting-edge software development firm emphasizes
                    strategic collaboration, crafting intuitive applications
                    that complement your enterprise aspirations and boost your
                    business.
                  </div>
                  <!-- <button style="padding-left: 0px" class="read-more bg-transparent fw-semibold pt-3 border-0">
                    Read more...
                  </button> -->
                </div>
              </div>

            </div>
            <div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-seven" type="button" role="tab" aria-controls="accordion-seven" aria-selected="false">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  <span class="black_text">07.</span> <span class="acc-head">Creative Branding</span>
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample" style="transition: 1.2s">
                <div class="accordion-body">
                  <div class="d-flex align-items-center gap-2 justify-content-between">
                    <p class="fw-bold faq_head orange_text m-0">
                      Creative Branding
                    </p>
                    <p class="faqNumber">07</p>
                  </div>
                  <div class="additional-content">
                    If you’re looking for a company that can develop the perfect
                    mobile application for your brand, then Diginsy is your way
                    to go. Our cutting-edge software development firm emphasizes
                    strategic collaboration, crafting intuitive applications
                    that complement your enterprise aspirations and boost your
                    business.
                  </div>
                  <!-- <button style="padding-left: 0px" class="read-more bg-transparent fw-semibold pt-3 border-0">
                    Read more...
                  </button> -->
                </div>
              </div>

            </div>

          </div>
        </div>
        <div class="col-lg-5 mb-lg-0 pb-5">
          <div class="tab-content d-flex justify-content-lg-between justify-content-center align-items-center h-100 position-relative" id="nav-tabContent">
            <div class="w-100 tab-pane fade show active" id="accordion-one" role="tabpanel" aria-labelledby="accordion-one-tab">
              <div class="w-100 d-flex justify-content-center gap-md-2 gap-5">
                <div class="col-lg-5 col-md-3 d-flex flex-column">
                  <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out img_1" />
                  <img loading="lazy" src="./images/home/faq/faq1/circle.webp" width="80" height="107" alt="image" class="zoom-in-out my-2 circle_img" />
                  <div class="rightAlign_img">
                    <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out my-2 img_2" />
                  </div>
                </div>
                <div class="col-lg-7 col-md-5 ">
                  <div style="max-width: max-content;" class="position-relative">
                    <img loading="lazy" src="./images/home/faq/faq1/2.webp" class="acc_main_img" width="250" height="340" alt="image" />
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_1 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_2 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_3 zoom-in-out-circle" width="20" height="20" alt="image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade w-100" id="accordion-two" role="tabpanel" aria-labelledby="accordion-two-tab">
              <div class="w-100 d-flex justify-content-center gap-2">
                <div class="col-lg-5 col-md-3 d-flex flex-column">
                  <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out img_1" />
                  <img loading="lazy" src="./images/home/faq/faq1/circle.webp" width="80" height="107" alt="image" class="zoom-in-out my-2 circle_img" />
                  <div class="rightAlign_img">
                    <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out my-2 img_2" />
                  </div>
                </div>
                <div class="col-lg-7 col-md-5 ">
                  <div style="max-width: max-content;" class="position-relative">
                    <img loading="lazy" src="./images/home/faq/faq1/2.webp" class="acc_main_img" width="250" height="340" alt="image" />
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_1 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_2 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_3 zoom-in-out-circle" width="20" height="20" alt="image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade w-100" id="accordion-three" role="tabpanel" aria-labelledby="accordion-three-tab">
              <div class="w-100 d-flex justify-content-center gap-2">
                <div class="col-lg-5 col-md-3 d-flex flex-column">
                  <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out img_1" />
                  <img loading="lazy" src="./images/home/faq/faq1/circle.webp" width="80" height="107" alt="image" class="zoom-in-out my-2 circle_img" />
                  <div class="rightAlign_img">
                    <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out my-2 img_2" />
                  </div>
                </div>
                <div class="col-lg-7 col-md-5 ">
                  <div style="max-width: max-content;" class="position-relative">
                    <img loading="lazy" src="./images/home/faq/faq1/2.webp" class="acc_main_img" width="250" height="340" alt="image" />
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_1 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_2 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_3 zoom-in-out-circle" width="20" height="20" alt="image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade w-100" id="accordion-four" role="tabpanel" aria-labelledby="accordion-four-tab">
              <div class="w-100 d-flex justify-content-center gap-2">
                <div class="col-lg-5 col-md-3 d-flex flex-column">
                  <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out img_1" />
                  <img loading="lazy" src="./images/home/faq/faq1/circle.webp" width="80" height="107" alt="image" class="zoom-in-out my-2 circle_img" />
                  <div class="rightAlign_img">
                    <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out my-2 img_2" />
                  </div>
                </div>
                <div class="col-lg-7 col-md-5 ">
                  <div style="max-width: max-content;" class="position-relative">
                    <img loading="lazy" src="./images/home/faq/faq1/2.webp" class="acc_main_img" width="250" height="340" alt="image" />
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_1 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_2 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_3 zoom-in-out-circle" width="20" height="20" alt="image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade w-100" id="accordion-five" role="tabpanel" aria-labelledby="accordion-five-tab">
              <div class="w-100 d-flex justify-content-center gap-2">
                <div class="col-lg-5 col-md-3 d-flex flex-column">
                  <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out img_1" />
                  <img loading="lazy" src="./images/home/faq/faq1/circle.webp" width="80" height="107" alt="image" class="zoom-in-out my-2 circle_img" />
                  <div class="rightAlign_img">
                    <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out my-2 img_2" />
                  </div>
                </div>
                <div class="col-lg-7 col-md-5 ">
                  <div style="max-width: max-content;" class="position-relative">
                    <img loading="lazy" src="./images/home/faq/faq1/2.webp" class="acc_main_img" width="250" height="340" alt="image" />
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_1 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_2 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_3 zoom-in-out-circle" width="20" height="20" alt="image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade w-100" id="accordion-six" role="tabpanel" aria-labelledby="accordion-six-tab">
              <div class="w-100 d-flex justify-content-center gap-2">
                <div class="col-lg-5 col-md-3 d-flex flex-column">
                  <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out img_1" />
                  <img loading="lazy" src="./images/home/faq/faq1/circle.webp" width="80" height="107" alt="image" class="zoom-in-out my-2 circle_img" />
                  <div class="rightAlign_img">
                    <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out my-2 img_2" />
                  </div>
                </div>
                <div class="col-lg-7 col-md-5 ">
                  <div style="max-width: max-content;" class="position-relative">
                    <img loading="lazy" src="./images/home/faq/faq1/2.webp" class="acc_main_img" width="250" height="340" alt="image" />
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_1 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_2 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_3 zoom-in-out-circle" width="20" height="20" alt="image">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade w-100" id="accordion-seven" role="tabpanel" aria-labelledby="accordion-seven-tab">
              <div class="w-100 d-flex justify-content-center gap-2">
                <div class="col-lg-5 col-md-3 d-flex flex-column">
                  <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out img_1" />
                  <img loading="lazy" src="./images/home/faq/faq1/circle.webp" width="80" height="107" alt="image" class="zoom-in-out my-2 circle_img" />
                  <div class="rightAlign_img">
                    <img loading="lazy" src="./images/home/faq/faq1/1.webp" width="100" height="165" alt="image" class="zoom-in-out my-2 img_2" />
                  </div>
                </div>
                <div class="col-lg-7 col-md-5 ">
                  <div style="max-width: max-content;" class="position-relative">
                    <img loading="lazy" src="./images/home/faq/faq1/2.webp" class="acc_main_img" width="250" height="340" alt="image" />
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_1 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_2 zoom-in-out-circle" width="20" height="20" alt="image">
                    <img loading="lazy" src="./images/home/orange_circle.webp" class="right_circle_3 zoom-in-out-circle" width="20" height="20" alt="image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "include/testimonials.php"; ?>
  <section class="partner_sec container">
    <h2 class="fw-semibold sec_head text-center text-md-start">
      Why Companies <br />
      <span class="display-4 orange_text fw-bold">Partner With Us</span>
    </h2>
    <p class="big_para pt-4 text-center text-md-start">
      At diginsy, we are proud to be one of the top software development firms
      in the united states, boasting a diverse portfolio of satisfied local
      and international clients. Our collaborative approach to project
      management allows us to seamlessly integrate with our clients throughout
      every phase of their software application development journey. By
      leveraging cutting-edge technologies and agile methodologies, our
      skilled team delivers innovative solutions tailored to meet each
      client’s unique needs.
    </p>
    <div class="mx-auto row gap-xxl-5 gap-md-4 gap-2 justify-content-lg-center align-items-center partner_box_row" style="max-width: 1000px">
      <div class="col-md-5 col-12 d-flex partner_box justify-content-start align-items-start gap-2">
        <img loading="lazy" src="./images/home/stack.svg" width="50" height="50" class="img-fluid" style="max-width: 50px" alt="image" />
        <div class="">
          <p class="big_para fw-medium mb-2">Strategic Partnership</p>
          <p class="fs-6">
            Collaborate with us to transform your vision into reality. Our expertise in software development combined with strategic planning ensures that your project aligns with your business goals, driving growth and success.
          </p>
        </div>
      </div>
      <div class="col-md-5 col-12 d-flex partner_box justify-content-start align-items-start gap-2">
        <img loading="lazy" src="./images/home/ribbon.svg" width="50" height="50" class="img-fluid" style="max-width: 50px" alt="image" />
        <div class="">
          <p class="big_para fw-medium mb-2">Technical Excellence</p>
          <p class="fs-6">
            Benefit from our proficiency in the latest technologies and best practices. Our team of seasoned developers delivers high-quality, scalable solutions that empower your business to stay ahead in a rapidly evolving digital landscape.
          </p>
        </div>
      </div>
      <div class="col-md-5 col-12 d-flex partner_box justify-content-start align-items-start gap-2">
        <img loading="lazy" src="./images/home/cycle.svg" width="50" height="50" class="img-fluid" style="max-width: 50px" alt="image" />
        <div class="">
          <p class="big_para fw-medium mb-2">Client-Centric Approach</p>
          <p class="fs-6">
            Experience unmatched dedication to your project's success. We prioritize open communication and responsiveness, ensuring that your unique requirements are met with tailor-made solutions that exceed expectations.
          </p>
        </div>
      </div>
      <div class="col-md-5 col-12 d-flex partner_box justify-content-start align-items-start gap-2">
        <img loading="lazy" src="./images/home/dolar.svg" width="50" height="50" class="img-fluid" style="max-width: 50px" alt="image" />
        <div class="">
          <p class="big_para fw-medium mb-2">Innovation and Agility</p>
          <p class="fs-6">
            Embrace innovation with our agile development process. Partnering with us means staying adaptable in a dynamic market. From concept to deployment, we iterate swiftly to deliver cutting-edge solutions that drive your business forward.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="business_sec text-center container overflow-x-hidden">
    <h2 class="sec_head fw-medium">
      Diginsy Joint effort with Big business <br />
      <span>Innovation Pioneers <span class="border_orange"></span></span>
    </h2>
    <p class="business_main_para mx-auto pt-md-5 pt-2 pb-3 big_para">
      We've created organizations with driving tech ventures to offer the best
      versatile application advancement administrations. At the point when you
      work with us, it's Diginsy as well as our accomplice Networks' joined
      impact and believability.
    </p>
    <div class="partner_Slider mt-md-5 mt-3 gap-4 d-flex justify-content-lg-between justify-content-center align-items-center">
      <div>
        <img loading="lazy" width="178" height="81" src="./images/home/business/ios-developers.webp" alt="image" />
      </div>
      <div>
        <img loading="lazy" width="178" height="81" src="./images/home/business/roku.webp" alt="image" />
      </div>
      <div>
        <img loading="lazy" width="178" height="81" src="./images/home/business/google-developers.webp" alt="image" />
      </div>
      <div>
        <img loading="lazy" width="178" height="81" src="./images/home/business/microsoft.webp" alt="image" />
      </div>
      <div>
        <img loading="lazy" width="178" height="81" src="./images/home/business/aws.webp" alt="image" />
      </div>
    </div>
  </section>
  <div class="serve">
    <?php include "include/busniess-we-serve.php"; ?>
  </div>
  <?php include "include/faqs.php"; ?>
  <?php include "include/blogs-sec.php"; ?>
  <?php include "include/contact-form.php"; ?>
  <?php include "include/adversity.php"; ?>
  <!-- <section class="example" style="background: #eeeeee" class="pb-5">
    <div class="container">
      <h2 class="sec_head fw-medium">
        Make Your Example of <span class="position-relative z-3 example_span">overcoming adversity <span class="border_orange2 sm-height-reduce"></span></span> <br> With Our Development Company
      </h2>
      <p style class="big_para pt-1">
        At Diginsy, we are proud to be one of the top software development
        firms in the United States, boasting a diverse portfolio of satisfied
        local and international clients. Our collaborative approach to project
        management allows us to seamlessly integrate with our clients
        throughout every phase of their software application development
        journey. By leveraging cutting-edge technologies and agile
        methodologies, our skilled team delivers innovative solutions tailored
        to meet each client’s unique needs.
      </p>
    </div>
  </section> -->
  <?php include "include/footer.php"; ?>