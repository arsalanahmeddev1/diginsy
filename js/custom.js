const currentUrl = window.location.href,
  navLinks = document.querySelectorAll("#navbar-nav a");
navLinks.forEach((e) => {
  e.href === currentUrl && e.classList.add("active");
});
const video = document.getElementById("video");
if (video) {
  const e = document.getElementById("circle-play-b"),
    t = document.querySelector(".video-text"),
    i = document.querySelector(".video-wrapper .bg-black");
  function togglePlay() {
    video.paused || video.ended ? video.play() : video.pause();
  }
  i && i.addEventListener("click", togglePlay),
    video.addEventListener("playing", function () {
      e && ((e.style.opacity = 0), (i.style.opacity = 0)), t && (t.style.opacity = 0);
    }),
    video.addEventListener("pause", function () {
      e && ((e.style.opacity = 1), (i.style.opacity = 0.5)), t && (t.style.opacity = 1);
    });
}
let navs = document.querySelector(".secondry-navs"),
  menuIcon = document.querySelectorAll(".menu-toggle");
console.log(navs, menuIcon),
  menuIcon.forEach(function (e) {
    e.addEventListener("click", function () {
      navs.classList.toggle("active");
    });
  }),
  (window.onload = function () {
    var e = document.querySelectorAll(".porfolio-inner-banner-otherimg-wrap");
    e.length > 0 &&
      e.forEach(function (e) {
        e.style.opacity = "1";
      });
    var t = document.querySelector(".porfolio-inner-banner-centerimg-wrap");
    t && (t.style.opacity = "1");
  }),
  $(".partner_Slider").slick({
    arrows: !1,
    dots: !1,
    infinite: !0,
    speed: 1600,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: !0,
    autoplaySpeed: 0,
    cssEase: "linear",
    variableWidth: !0,
    pauseOnHover: !1,
    responsive: [
      { breakpoint: 1024, settings: { slidesToShow: 3 } },
      { breakpoint: 600, settings: { slidesToShow: 2 } },
      { breakpoint: 480, settings: { slidesToShow: 1 } },
    ],
  }),
  $(".partner_Slider2").slick({
    rtl: !0,
    arrows: !1,
    dots: !1,
    infinite: !0,
    speed: 1600,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: !0,
    autoplaySpeed: 0,
    cssEase: "linear",
    variableWidth: !0,
    pauseOnHover: !1,
    responsive: [
      { breakpoint: 1024, settings: { slidesToShow: 3 } },
      { breakpoint: 600, settings: { slidesToShow: 2 } },
      { breakpoint: 480, settings: { slidesToShow: 1 } },
    ],
  }),
  $('.we-are-diginsy-slider').slick({
    slidesToShow: 1,
    autoplay: true,
    speed: 2000,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      },
    ]
  });
  $(".portfolio_slider").owlCarousel({
    stagePadding: 50,
    loop: !0,
    margin: 10,
    nav: !0,
    smartSpeed: 4e3,
    dots: !1,
    navText: ['<img src="./images/home/testimonial/left.svg" class="w-25 pb-4 img-fluid" alt="image" />', '<img src="./images/home/testimonial/right.webp" class="w-25 pb-4 img-fluid" alt="image" />'],
    responsive: {
      0: { items: 1, stagePadding: 0, dots: !0, nav: !1 },
      360: { items: 1, stagePadding: 1, dots: !0, nav: !1, smartSpeed: 1e3 },
      768: { items: 1, stagePadding: 1, dots: !0, nav: !1 },
      1200: { items: 1, stagePadding: 0 },
      992: { items: 1, stagePadding: 0, dots: !0, nav: !1 },
      1335: { center: !1, items: 1.1, margin: 75 },
      1500: { items: 1.2, margin: 75 },
    },
  }),
  $(".main-portfolio-slider-wrap").owlCarousel({
    loop: !0,
    margin: 10,
    nav: !0,
    smartSpeed: 4e3,
    dots: !1,
    navText: ['<img src="./images/home/testimonial/left.svg" class="w-25 pb-4 img-fluid" alt="image" />', '<img src="./images/arrow-right-slider.svg" class="w-25 pb-4 img-fluid" alt="image" />'],
    responsive: {
      0: { items: 1, stagePadding: 0, dots: !0, nav: !1 },
      360: { items: 1, dots: !0, nav: !1, smartSpeed: 1e3 },
      768: { items: 1, dots: !0, nav: !1 },
      1200: { items: 1, stagePadding: 0 },
      992: { items: 1, stagePadding: 0, dots: !0, nav: !1 },
      1200: { items: 1.1, margin: 80 },
      1335: { center: !1, items: 1.1, margin: 110 },
      1500: { items: 1.1, margin: 75 },
    },
  }),
  document.addEventListener("DOMContentLoaded", function () {
    const e = document.getElementById("toggleMenu"),
      t = document.getElementById("menuContainer");
    e &&
      t &&
      e.addEventListener("click", function () {
        "none" === t.style.display || "" === t.style.display ? (t.style.display = "block") : (t.style.display = "none");
      });
  }),
  $(document).ready(function () {
    $(".accordion-item").on("click", function () {
      $(".accordion-item").not(this).removeClass("show"), $(".accordion-collapse").not($(this).find(".accordion-collapse")).removeClass("show");
    });
  }),
  $(".testimonial_slider.owl-carousel").owlCarousel({
    loop: !0,
    margin: 10,
    nav: !0,
    smartSpeed: 3e3,
    dots: !1,
    navText: ['<img src="./images/home/testimonial/left.svg" class="w-25 img-fluid" alt="image" />', '<img src="./images/home/testimonial/right.webp" class="w-25  img-fluid" alt="image" />'],
    responsive: { 0: { items: 1, nav: !1, dots: !0, autoplay: !0, autoplayTimeout: 4e3, autoplaySpeed: 4e3 }, 576: { autoplay: !1, items: 1, nav: !1 }, 1024: { nav: !1, items: 1 }, 1200: { nav: !0, items: 1 } },
  }),
  $(document).ready(function () {
    var e = $(".counter");
    e.each(function () {
      var e = $(this),
        t = parseInt(e.text()),
        i = 0,
        o = Math.ceil(t / 500),
        s = setInterval(function () {
          (i += o) > t && ((i = t), clearInterval(s)), e.text(i + "+");
        }, 10);
    });
  }),
  $("#country").select2({ placeholder: "Select a Country", minimumResultsForSearch: 1 / 0 });
