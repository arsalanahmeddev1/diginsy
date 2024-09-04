<footer class="container">
  <div class="row gap-lg-2 justify-content-between">
    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-3">
      <img src="./images/logo.webp" class="w-25 pb-4 img-fluid" alt="image" />

      <p>
        We are a full-service, high-end design agency providing holistic and transformative digital design services. Curating delightful user experiences, we work with global clients and deliver customized products.
      </p>
      <div class="d-flex align-items-center gap-2 mt-3">
        <a href="https://www.linkedin.com/company/diginsy"><img width="35" height="35" src="./images/home/footer/linkedin.svg" alt="image" /></a>
        <a href="https://www.facebook.com/diginsy"><img width="35" height="35" src="./images/home/footer/facebook.svg" alt="image" /></a>
        <a href="https://www.instagram.com/diginsy"><img width="35" height="35" src="./images/home/footer/instagram.svg" alt="image" /></a>
        <a href="https://twitter.com/diginsy_agency"><img width="35" height="35" src="./images/home/footer/twitter.svg" alt="image" /></a>
      </div>
      <div class="d-flex mt-3 mb-3 gap-4 align-items-center">
        <img width="20" height="20" src="./images/home/footer/address.svg" alt="image" />
        <p class="m-0 ws-nowrap">
          <a href="https://maps.app.goo.gl/aWea8EH3xFf1zXQv8" class="text-decoration-none dim-black theme-hover">
            8870 Business Park, Ste 500 <br />
            Austin, TX 78759
          </a>
        </p>
      </div>
      <div class="d-flex mb-3 gap-4 align-items-center">
        <img width="20" height="20" src="./images/home/footer/email.svg" alt="image" />
        <p class="m-0"><a href="mailto:support@diginsy.com" class="dim-black theme-hover text-decoration-none">support@diginsy.com</a></p>
      </div>
      <div class="d-flex gap-4 align-items-center">
        <img width="20" height="20" src="./images/home/footer/call.svg" alt="image" />
        <p class="m-0"><a href="tel:(512) 354-4525" class="text-decoration-none theme-hover dim-black">(512) 354-4525</a></p>
      </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-5">
      <div>
        <h4 class="footer_head">Our Company</h4>
        <ul class="footer_list p-0 mt-3">
          <li><a href="./about-us">About Us</a></li>
          <li><a href="./portfolio">Portfolio</a></li>
        </ul>
      </div>
      <div class="mt-4">
        <h4 class="footer_head">Solutions</h4>
        <ul class="footer_list p-0 mt-3">
          <li><a href="#">Chat Bot</a></li>
          <li><a href="#">Messenger</a></li>
          <li><a href="#">Diginsy Shop</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-3">
      <div>
        <h4 class="footer_head">Services</h4>
        <ul class="footer_list p-0 mt-3">
          <li><a href="./mobile-app-development">Mobile Application</a></li>
          <li><a href="./game-development">Game Development</a></li>
          <li><a href="./blockchain-development">Blockchain Development</a></li>
          <li><a href="./augmented-reality">Augmented Reality</a></li>
          <li><a href="./web-development">Web Development</a></li>
          <li><a href="./digital-marketing">Digital Marketing</a></li>
          <li><a href="./creative-branding">Creative Branding</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-2 col-sm-6 mt-lg-0 mt-3">
      <div>
        <h4 class="footer_head">Sitemap</h4>
        <ul class="footer_list p-0 mt-3">
          <li><a href="https://diginsy.com/blog/">Blog</a></li>
          <li><a href="./contact">Contact</a></li>
          <li><a href="./terms-conditions">Terms Conditions</a></li>
          <li><a href="./privacy-policy">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<div class="orange_bg py-4 mt-4 text-center footer_bottom">
  <p class="text-light m-0">© 2024 Diginsy. All Rights Reserved.</p>
</div>
<link rel="stylesheet" href="./vendor/vendor.css">
<link rel="stylesheet" href="./css/style.css">
<script src="./vendor/vendor.js"></script>
<script async defer src="./js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js" integrity="sha512-SvgzybymTn9KvnNGu0HxXiGoNeOi0TTK7viiG0EGn2Qbeu/NFi3JdWrJs2JHiGA1Lph+dxiDv5F9gDlcgBzjfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/44217527.js"></script>
<script>
  var phoneFields = document.getElementsByClassName("only-number");
  for (var i = 0; i < phoneFields.length; i++) {
    phoneFields[i].addEventListener("input", function(e) {
      var inputValue = e.target.value;
      var regex = /^\d+$/; // Regular expression to allow only numbers

      if (!regex.test(inputValue)) {
        e.target.value = inputValue.replace(/\D/g, ""); // Remove non-numeric characters
      }
    });
  }
  var alphaFields = document.getElementsByClassName("only-alpha");
  for (var i = 0; i < alphaFields.length; i++) {
    alphaFields[i].addEventListener("input", function(e) {
      var inputValue = e.target.value;
      var regex = /^[a-zA-Z\s]*$/; // Regular expression to allow only alphabets and spaces

      if (!regex.test(inputValue)) {
        e.target.value = inputValue.replace(/[^a-zA-Z\s]/g,
          ''); // Remove non-alphabetic characters
      } else {
        return false;
      }
    });
  }
  var cleaveBlocks;
  document.querySelector("#phone-number") &&
    (cleaveBlocks = new Cleave("#phone-number", {
      delimiters: ["(", ") ", "-"],
      blocks: [0, 3, 3, 4],
    }));
    
    
    
    window.addEventListener('DOMContentLoaded', (event) => {

  
});
</script>
<script src="./js/script.js"></script>
</body>
</html>