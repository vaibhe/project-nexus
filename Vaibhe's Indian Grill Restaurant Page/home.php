<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vaibhe's Indian Grill</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="styles/style.css" />
  <meta name="theme-color" content="#dcca87">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/ff3d11f0ca.js" crossorigin="anonymous"></script>
  <meta name="description"
    content=" To bring together everyone who says no to ordinary food by using familiar ingredients in surprising ways.">
  <meta name="keywords" content="Kebab, Vaibhe's Indian Grill">
  <meta name="author" content="Habibur Rahman">
</head>

<body>
  <nav>
    <div class="nav-inner">

    <h1>Vaibhe's Indian Grill</h1>
     
      <ul class="items">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="index.php">Logout</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <div class="burger">
        <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="45">
          <path class="line top"
            d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
          <path class="line middle" d="m 70,50 h -40" />
          <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
      </div>
    </div>
  </nav>

  <div class="swiper mySwiper" id="home">
    <div class="slider swiper-wrapper">
      <section class="swiper-slide">
        <div class="hero slide-inner">
          <div class="hero-l">
            <p class="h-sub">Chase the new Flavour</p>
            <h1 class="h-main">Kebabs for the soul</h1>
            <p class="para">
              To bring together everyone who says no to ordinary food by using familiar ingredients in surprising ways.
            </p>
            <a href="#menu" class="btn btn-sm animated-button victoria-one">Explore Menu</a>
          </div>
          <div class="hero-r">
            <div class="hero-img">
              <img src="img/hero1.jpg" alt="hero image">
            </div>
          </div>
        </div>
      </section>
      <section class="swiper-slide">
        <div class="hero slide-inner">
          <div class="hero-l">
            <p class="h-sub">Chase the new Flavour</p>
            <h1 class="h-main">Taste the flavors of life</h1>
            <p class="para">
              To bring together everyone who says no to ordinary food by using familiar ingredients in surprising ways.
            </p>
            <a href="#menu" class="btn btn-sm animated-button victoria-one">Explore Menu</a>
          </div>
          <div class="hero-r">
            <div class="hero-img">
              <img src="img/hero2.jpg" alt="hero image">
            </div>
          </div>
        </div>
      </section>
      <section class="swiper-slide">
        <div class="hero slide-inner">
          <div class="hero-l">
            <p class="h-sub">Chase the new Flavour</p>
            <h1 class="h-main">Find happiness in every stick!</h1>
            <p class="para">
              To bring together everyone who says no to ordinary food by using familiar ingredients in surprising ways.
            </p>
            <a href="#menu" class="btn btn-sm animated-button victoria-one">Explore Menu</a>
          </div>
          <div class="hero-r">
            <div class="hero-img">
              <img src="img/hero3.jpg" alt="hero image">
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <section class="about" id="about">
    <div class="about-l">
      <div class="about-grid">
        <div>
          <img src="img/about1.jpg" alt="shawarma machine">
        </div>
        <div>
          <div>
            <img src="img/about2.jpg" alt="smokey grill">
          </div>
          <div>
            <img src="img/about3.jpg" alt="kebab stick">
          </div>
        </div>
      </div>
    </div>
    <div class="about-r">
      <h2 class="h-main h-main-s">About us</h2>
      <p class="para">
        Wherever the kebab was invented, it is without a doubt popular all over the world. Different flavours and
        recipes determine where the kebab originates from Turkey, the Middle East and Asia are known for the most famous
        recipes…
      </p>
      <p class="para">
        <b>The Turk Kavaci</b> is a blend of all three destinations bringing you the finest delectable of kebabs from
        across
        the
        globe. A casual restaurant with defining colors, <b>The Turk Kavaci</b> is a unique brand that is taking the
        Western
        Asia
        by storm!!
      </p>
      <p class="para">
        At <b>The Turk Kavaci</b> all of our dishes are prepared by top class chefs, using freshly ground spices and
        aromatic
        herbs. We prepare all of our dishes using only quality fresh meats and fresh poultry, keeping that home cooked
        taste that you will savour and will keep you coming back for more.
      </p>
      <p class="para">
        We are constantly working on bringing you new recipes from across the globe.
      </p>
      <p class="para">
        Enjoy Your Meal!
      </p>
    </div>
  </section>

  <section class="menu" id="menu">
    <div class="menu-header">
      <h1 class="h-main h-main-s">Our Menu</h1>
    </div>
    <div class="img-card-con">
      <div class="img-card">
        <img src="img/item1.jpg" alt="food item">
        <div class="card-info">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <div>
            <h3 class="img-card-title">Spicey meatballs</h3>
            <span>$99</span>
          </div>
          <p class="img-card-desc">
            Aenean commodo ligula eget dolor aenean massa. Cum sociis
            natoque
          </p>
        </div>
      </div>
      <div class="img-card">
        <img src="img/item2.jpg" alt="food item">
        <div class="card-info">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <div>
            <h3 class="img-card-title">Spicey meatballs</h3>
            <span>$99</span>
          </div>
          <p class="img-card-desc">
            Aenean commodo ligula eget dolor aenean massa. Cum sociis
            natoque
          </p>
        </div>
      </div>
      <div class="img-card">
        <img src="img/item3.jpg" alt="food item">
        <div class="card-info">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <div>
            <h3 class="img-card-title">Spicey meatballs</h3>
            <span>$99</span>
          </div>
          <p class="img-card-desc">
            Aenean commodo ligula eget dolor aenean massa. Cum sociis
            natoque
          </p>
        </div>
      </div>
      <div class="img-card">
        <img src="img/item4.jpg" alt="food item">
        <div class="card-info">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <div>
            <h3 class="img-card-title">Spicey meatballs</h3>
            <span>$99</span>
          </div>
          <p class="img-card-desc">
            Aenean commodo ligula eget dolor aenean massa. Cum sociis
            natoque
          </p>
        </div>
      </div>
      <div class="img-card">
        <img src="img/item5.jpg" alt="food item">
        <div class="card-info">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <div>
            <h3 class="img-card-title">Spicey meatballs</h3>
            <span>$99</span>
          </div>
          <p class="img-card-desc">
            Aenean commodo ligula eget dolor aenean massa. Cum sociis
            natoque
          </p>
        </div>
      </div>
      <div class="img-card">
        <img src="img/item6.jpg" alt="food item">
        <div class="card-info">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <div>
            <h3 class="img-card-title">Spicey meatballs</h3>
            <span>$99</span>
          </div>
          <p class="img-card-desc">
            Aenean commodo ligula eget dolor aenean massa. Cum sociis
            natoque
          </p>
        </div>
      </div>
      <div class="img-card">
        <img src="img/item7.jpg" alt="food item">
        <div class="card-info">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <div>
            <h3 class="img-card-title">Spicey meatballs</h3>
            <span>$99</span>
          </div>
          <p class="img-card-desc">
            Aenean commodo ligula eget dolor aenean massa. Cum sociis
            natoque
          </p>
        </div>
      </div>
      <div class="img-card">
        <img src="img/item8.jpg" alt="food item">
        <div class="card-info">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <div>
            <h3 class="img-card-title">Spicey meatballs</h3>
            <span>$99</span>
          </div>
          <p class="img-card-desc">
            Aenean commodo ligula eget dolor aenean massa. Cum sociis
            natoque
          </p>
        </div>
      </div>
    </div>
  </section>
 


  <section class="subscribe">
    <div class="subscribe-header">
      <h4>Newsletter</h4>
      <h1 class="h-main h-main-s">Subscribe To Our Newsletter</h1>
      <p>And never miss latest Updates!</p>
    </div>
    <div class="subscribe-input-box">
      <input placeholder="Email Address" type="email" required />
      <a href="#" class="btn btn-sm animated-button victoria-one">Submit</a>
    </div>
  </section>

  <footer id="contact">
    <div class="footer-container">
      <div class="footer-l">
        <h3 class="h-sub">Contact Us</h3>
        <a href="#">45/1, New Prabhadevi Road</a>
        <a href="#">Mumbai - 400025</a>
        <a href="#">+1 212-555-1230</a>
      </div>
      <div class="footer-m">
        <h3 class="h-sub">Vaibhav Ambati</h3>
        <p>
          "The best way to find yourself is to lose yourself in the service
          of others.”
        </p>
        <ul class="icon">
          <li><i class="fab fa-facebook-f"><a href="https://www.facebook.com/hrsshainik/"></a></i></li>
          <li><i class="fab fa-twitter"><a href="https://twitter.com/hrsshainik/"></a></i></li>
          <li><i class="fab fa-instagram"><a href="https://www.instagram.com/traveloperhabib/"></a></i></li>
        </ul>
      </div>
      <div class="footer-r">
        <h3 class="h-sub">Working Hours</h3>
        <p>Monday-Friday</p>
        <p>08:00 am -12:00 am</p>
        <p>Saturday-Sunday</p>
        <p>07:00am -11:00 pm</p>
      </div>
    </div>
    <p class="copyright">Copyright ©2024 Vaibhav Ambati</p>
  </footer>

  <!-- SCROLL UP -->
  <a href="#" class="scrollup" id="scroll-up" aria-label="scroll up">
    <svg width="32" height="32" viewBox="0 0 32 32" class="scrollup__icon" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <rect width="32" height="32" fill="#DCCA87" />
      <path
        d="M22.2578 16.5889L16.4236 9.86523C16.3709 9.80439 16.3057 9.7556 16.2324 9.72216C16.1592 9.68872 16.0796 9.67141 15.9991 9.67141C15.9186 9.67141 15.839 9.68872 15.7657 9.72216C15.6925 9.7556 15.6273 9.80439 15.5746 9.86523L9.74215 16.5889C9.72452 16.6091 9.7131 16.634 9.70923 16.6606C9.70536 16.6872 9.70921 16.7143 9.72032 16.7388C9.73144 16.7632 9.74934 16.784 9.77191 16.7985C9.79448 16.8131 9.82076 16.8208 9.84762 16.8209H11.2714C11.3523 16.8209 11.4296 16.7857 11.4841 16.7242L15.332 12.2893V22.1875C15.332 22.2648 15.3953 22.3281 15.4726 22.3281H16.5273C16.6046 22.3281 16.6679 22.2648 16.6679 22.1875V12.2893L20.5158 16.7242C20.5685 16.7857 20.6459 16.8209 20.7285 16.8209H22.1523C22.2718 16.8209 22.3369 16.6803 22.2578 16.5889Z"
        fill="white" />
    </svg>

  </a>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="js/home.js"></script>
</body>

</html>