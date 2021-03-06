
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>رامین آکادمی|آموزش و نوآوری </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/client/styles/fontiran.css">

    <link rel="stylesheet" href="/client/fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/client/styles/bootstrap.css" />
    <link rel="stylesheet" href="/client/styles/main.css" />
  </head>

  <body>

    <!-- Preloader -->
    <div id="js-preloader" class="js-preloader">
      <div class="content">
        <img src="/client/images/logo-icon.png" alt="">
      </div>
      <div class="preloader-inner">
      </div>
    </div>

    <!-- Mobile Menu -->

@include('client.layouts.mobile-menu')


    <!-- Header -->

@include('client.layouts.menu')

    <!-- Search -->
    <div id="search">
      <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Type to search..." required="">
            <button type="submit" class="primary-button"><i class="fa fa-search"></i></button>
        </form>
    </div>


    <div class="main-content">

      <!-- Main Banner -->
      <div class="parallax-banner">
        <!--Content before waves-->
        <div class="inner-header">
          <div class="inner-content">
            <h4>با رامین آکادمی به هرآنچه که هدف گذاری کرده اید برسید</h4>
            <h1>آکادمی رامین<br>نو آوری شکوفایی و رشد</h1>

            <form action="#">
              <input type="text" placeholder="http://yoursite.com" required="">
              <button>Analyze!</button>
            </form>
            <div class="main-decoration">
              <img src="/client/images/baner-main-decoration.png" alt="">
            </div>
          </div>
        </div>

        <!--Waves Container-->
        <div>
          <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
          </svg>
        </div>
        <!--Waves end-->
      </div>


      <!-- Features -->
      <section class="features">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="feature-item">
                <div class="icon">
                  <img src="/client/images/features-icon-01.png" alt="">
                </div>
                <h4>Actual Real Results</h4>
                <p>Shaman synth retro slow-carb vape dermy, put and a bird jean shorts franzen unicorn knausgaard coloring book.</p>
              </div>
              <div class="main-purple-button">
                <a href="#">Continue Reading</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="feature-item">
                <div class="icon">
                  <img src="/client/images/features-icon-02.png" alt="">
                </div>
                <h4>Daily Tack Records</h4>
                <p>Shaman synth retro slow-carb vape dermy, put and a bird jean shorts franzen unicorn knausgaard coloring book.</p>
              </div>
              <div class="main-purple-button">
                <a href="#">Continue Reading</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="feature-item">
                <div class="icon">
                  <img src="/client/images/features-icon-03.png" alt="">
                </div>
                <h4>Easy Useful Dashboard</h4>
                <p>Shaman synth retro slow-carb vape dermy, put and a bird jean shorts franzen unicorn knausgaard coloring book.</p>
              </div>
              <div class="main-purple-button">
                <a href="#">Continue Reading</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Good Tips -->
      <section class="good-tips">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="section-heading">
                <h6>Tips For You!</h6>
                <h2>Get Tips &amp; Tricks About How To Grow Your Business!</h2>
              </div>
              <div class="tips-content">
                <ul>
                  <li>
                    <div class="icon">
                      <img src="/client/images/features-icon-01.png" alt="">
                    </div>
                    <div class="right-content">
                      <h4>Actual Real Results</h4>
                      <p>Shaman synth retro slow-carb vape dermy, put and a bird jean shorts franzen unicorn knausgaard coloring book.</p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="/client/images/features-icon-02.png" alt="">
                    </div>
                    <div class="right-content">
                      <h4>Daily Tack Records</h4>
                      <p>Shaman synth retro slow-carb vape dermy, put and a bird jean shorts franzen unicorn knausgaard coloring book.</p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <img src="/client/images/features-icon-03.png" alt="">
                    </div>
                    <div class="right-content">
                      <h4>Easy Useful Dashboard</h4>
                      <p>Shaman synth retro slow-carb vape dermy, put and a bird jean shorts franzen unicorn knausgaard coloring book.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="right-image">
                <img src="/client/images/good-tips-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Seo Courses -->
      <section class="seo-courses">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="section-heading">
                <h6>Seo Courses</h6>
                <h2>Popular Courses</h2>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="main-purple-button">
                <a href="our-shop.html">View All Courses</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="owl-courses owl-carousel">
                <div class="item">
                  <div class="course-item">
                    <a href="single-product.html">
                      <div class="course-thumb">
                        <div class="ribon">
                          <h6>sale</h6>
                        </div>
                        <img src="/client/images/course-item-01.jpg" alt="">
                      </div>
                      <div class="down-content">
                        <h4>AI &amp; SEO Analysis e-Book</h4>
                        <span><em>$49.99</em>$29.99</span>
                        <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="course-item">
                    <a href="single-product.html">
                      <div class="course-thumb">
                        <img src="/client/images/course-item-02.jpg" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Best 2020 Keywords Hits</h4>
                        <span>$49.99</span>
                        <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="course-item">
                    <a href="single-product.html">
                      <div class="course-thumb">
                        <div class="ribon">
                          <h6>new</h6>
                        </div>
                        <img src="/client/images/course-item-03.jpg" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Best &amp; Useful SEO Tricks</h4>
                        <span>$39.99</span>
                        <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="course-item">
                    <a href="single-product.html">
                      <div class="course-thumb">
                        <div class="ribon">
                          <h6>sale</h6>
                        </div>
                        <img src="/client/images/course-item-01.jpg" alt="">
                      </div>
                      <div class="down-content">
                        <h4>AI &amp; SEO Analysis e-Book</h4>
                        <span><em>$49.99</em>$29.99</span>
                        <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="course-item">
                    <a href="single-product.html">
                      <div class="course-thumb">
                        <img src="/client/images/course-item-02.jpg" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Best 2020 Keywords Hits</h4>
                        <span>$49.99</span>
                        <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="course-item">
                    <a href="single-product.html">
                      <div class="course-thumb">
                        <div class="ribon">
                          <h6>new</h6>
                        </div>
                        <img src="/client/images/course-item-03.jpg" alt="">
                      </div>
                      <div class="down-content">
                        <h4>Best &amp; Useful SEO Tricks</h4>
                        <span>$39.99</span>
                        <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="course-item">
                    <a href="single-product.html">
                      <div class="course-thumb">
                        <div class="ribon">
                          <h6>sale</h6>
                        </div>
                        <img src="/client/images/course-item-01.jpg" alt="">
                      </div>
                      <div class="down-content">
                        <h4>AI &amp; SEO Analysis e-Book</h4>
                        <span><em>$49.99</em>$29.99</span>
                        <p>Shaman synth retro slow-carb vape and dermy twee, put a jean shorts franzen.</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Our Services -->
      <section class="our-services">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h6>Our Services</h6>
                <h2>What we offer?</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="service-item border-bottom border-right">
                <div class="icon">
                  <img src="/client/images/service-icon-01.png" alt="">
                </div>
                <h4>Actual Real Results</h4>
                <p>Shaman synth retro slow-carb an vaporlings twee, put a bird jean shorts unicorn knausgaard coloring.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-item border-bottom border-right">
                <div class="icon">
                  <img src="/client/images/service-icon-02.png" alt="">
                </div>
                <h4>Daily Tack Records</h4>
                <p>Shaman synth retro slow-carb an vaporlings twee, put a bird jean shorts unicorn knausgaard coloring.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-item border-bottom">
                <div class="icon">
                  <img src="/client/images/service-icon-03.png" alt="">
                </div>
                <h4>Easy Useful Dashboard</h4>
                <p>Shaman synth retro slow-carb an vaporlings twee, put a bird jean shorts unicorn knausgaard coloring.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-item border-right">
                <div class="icon">
                  <img src="/client/images/service-icon-04.png" alt="">
                </div>
                <h4>Organic Reach Audience</h4>
                <p>Shaman synth retro slow-carb an vaporlings twee, put a bird jean shorts unicorn knausgaard coloring.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-item border-right">
                <div class="icon">
                  <img src="/client/images/service-icon-05.png" alt="">
                </div>
                <h4>Organize Huge Campaigns</h4>
                <p>Shaman synth retro slow-carb an vaporlings twee, put a bird jean shorts unicorn knausgaard coloring.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="service-item">
                <div class="icon">
                  <img src="/client/images/service-icon-06.png" alt="">
                </div>
                <h4>Awesome Support Team</h4>
                <p>Shaman synth retro slow-carb an vaporlings twee, put a bird jean shorts unicorn knausgaard coloring.</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Recent Cases -->
      <section class="recent-cases">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="section-heading">
                <h6>Case Studies</h6>
                <h2>Recent Cases</h2>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="portfolio-filters">
                <ul>
                    <li class="active" data-filter="*">Show All</li>
                    <li data-filter=".category-analysis">Analysis</li>
                    <li data-filter=".category-digital">Digital Marketing</li>
                    <li data-filter=".category-seo">SEO Optimization</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row masonry-layout filters-content normal-col-gap">
                <div class="col-lg-4 masonry-item all category-analysis">
                  <div class="case-item">
                    <a href="single-project.html">
                    <div class="case-thumb">
                      <img src="/client/images/case-item-01.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <h4>Get Faster &amp; Better Results</h4>
                      <span>Analysis, Digital Marketing</span>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 masonry-item all category-seo">
                  <div class="case-item">
                    <a href="single-project.html">
                    <div class="case-thumb">
                      <img src="/client/images/case-item-02.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <h4>Get Faster &amp; Better Results</h4>
                      <span>Analysis, Digital Marketing</span>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 masonry-item all category-digital">
                  <div class="case-item">
                    <a href="single-project.html">
                    <div class="case-thumb">
                      <img src="/client/images/case-item-03.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <h4>Get Faster &amp; Better Results</h4>
                      <span>Analysis, Digital Marketing</span>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 masonry-item all category-digital">
                  <div class="case-item">
                    <a href="single-project.html">
                    <div class="case-thumb">
                      <img src="/client/images/case-item-04.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <h4>Get Faster &amp; Better Results</h4>
                      <span>Analysis, Digital Marketing</span>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 masonry-item all category-analysis">
                  <div class="case-item">
                    <a href="single-project.html">
                    <div class="case-thumb">
                      <img src="/client/images/case-item-05.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <h4>Get Faster &amp; Better Results</h4>
                      <span>Analysis, Digital Marketing</span>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-4 masonry-item all category-seo">
                  <div class="case-item">
                    <a href="single-project.html">
                    <div class="case-thumb">
                      <img src="/client/images/case-item-06.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <h4>Get Faster &amp; Better Results</h4>
                      <span>Analysis, Digital Marketing</span>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-purple-button">
                <a href="portfolio-v1.html">View All Cases</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Free Quote -->
      <section class="free-quote">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-image">
                <img src="/client/images/free-quote-left-image.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="section-heading">
                <h6>Get Free Quote</h6>
                <h2>Let’s Boosts Your Website Traffic With Few Easy Steps!</h2>
              </div>
              <form action="#">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" id="name" placeholder="Your name..." required="">
                  </div>
                  <div class="col-lg-6">
                    <input type="text" id="email" placeholder="Your email address..." required="">
                  </div>
                  <div class="col-lg-6">
                    <input type="text" id="phone" placeholder="Your phone number..." required="">
                  </div>
                  <div class="col-lg-6">
                    <input type="text" id="site" placeholder="http://yoursite.com" required="">
                  </div>
                  <div class="col-lg-12">
                    <button>Get Start Now</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


      <!-- Clients Love -->
      <section class="clients-love">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h6>Clients Love</h6>
                <h2>Love from clients</h2>
              </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
              <div class="owl-testimonials owl-carousel">
                <div class="item">
                  <div class="testimonial-item">
                    <div class="image">
                      <img src="http://placehold.it/90x90" alt="">
                    </div>
                    <h4>James D. Lapierre</h4>
                    <span>Full-stack Designer</span>
                    <p>“Shaman synth retro slowcarbvape taxiderm twee, put a bird on it jean shorts franzen knausgaard coloring book.”</p>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="image">
                      <img src="http://placehold.it/90x90" alt="">
                    </div>
                    <h4>Kevin L. Phipps</h4>
                    <span>General Manager</span>
                    <p>“Shaman synth retro slowcarbvape taxiderm twee, put a bird on it jean shorts franzen knausgaard coloring book.”</p>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="image">
                      <img src="http://placehold.it/90x90" alt="">
                    </div>
                    <h4>Virgilio J. Dumas</h4>
                    <span>Full-stack Developer</span>
                    <p>“Shaman synth retro slowcarbvape taxiderm twee, put a bird on it jean shorts franzen knausgaard coloring book.”</p>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="image">
                      <img src="http://placehold.it/90x90" alt="">
                    </div>
                    <h4>Charles K. Duckett</h4>
                    <span>Creative Director</span>
                    <p>“Shaman synth retro slowcarbvape taxiderm twee, put a bird on it jean shorts franzen knausgaard coloring book.”</p>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="image">
                      <img src="http://placehold.it/90x90" alt="">
                    </div>
                    <h4>Nicholas S. Rodriguez</h4>
                    <span>Sale Agent</span>
                    <p>“Shaman synth retro slowcarbvape taxiderm twee, put a bird on it jean shorts franzen knausgaard coloring book.”</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>


    <section class="footer-content">
      <div class="cta-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h2>Interested to get<br>our full <em>featured</em> services?</h2>
            </div>
            <div class="col-lg-4">
              <div class="main-white-button">
                <a href="#">Get Started Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Oxana</h4>
              </div>
              <p class="about-oxana">Shaman synth retro slow-carb. Vape taxidermy twee, put a bird on it fran xezen celiac unicorn gerstache coloring book.</p>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Useful Links</h4>
              </div>
              <ul class="useful-links">
                <li><a href="#">About Oxana</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
              <ul class="useful-links">
                <li><a href="#">Recent Posts</a></li>
                <li><a href="#">Case Studies</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">FAQ’s</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Get In Touch!</h4>
              </div>
              <ul class="more-info">
                <li>Email: <a href="#">contact@oxana.com</a></li>
                <li>Phone: <a href="#">+1 547 6877 534</a></li>
                <li>Address: <a href="#">342 Better Street Peculiar, KS 64078</a></li>
              </ul>
            </div>
            <div class="col-lg-3">
              <div class="footer-heading">
                <h4>Find Us</h4>
              </div>
              <p>Shaman synth retro slow-carb. Vape taxidermy twee, put a bird.</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-12">
              <div class="sub-footer">
                <p>Copyright © 2020 <a href="#">Robert Imeri</a>. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Go To Top -->
    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


    <!-- Scripts -->
    <script src="/client/scripts/vendors/jquery-3.4.1.min.js"></script>
    <script src="/client/scripts/vendors/jquery.hoverIntent.min.js"></script>
    <script src="/client/scripts/vendors/perfect-scrollbar.min.js"></script>
    <script src="/client/scripts/vendors/jquery.easing.min.js"></script>
    <script src="/client/scripts/vendors/wow.min.js"></script>
    <script src="/client/scripts/vendors/parallax.min.js"></script>
    <script src="/client/scripts/vendors/isotope.min.js"></script>
    <script src="/client/scripts/vendors/imagesloaded.pkgd.min.js"></script>
    <script src="/client/scripts/vendors/packery-mode.pkgd.min.js"></script>
    <script src="/client/scripts/vendors/owl-carousel.min.js"></script>
    <script src="/client/scripts/vendors/jquery.appear.js"></script>
    <script src="/client/scripts/vendors/jquery.countTo.js"></script>
    <script src="/client/scripts/vendors/slide-nav.min.js"></script>
    <script src="/client/scripts/vendors/accordions.js"></script>
    <script src="/client/scripts/main.js"></script>


  </body>
</html>
