<?php 
session_start();
include("path.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aizone Labs | Software Company </title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/extra.css" rel="stylesheet">

</head>
<style>
 #hero .btn-get-started1 {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 30px 10px 30px;
    border-radius: 4px;
    transition: 0.5s;
    color: #fff;
    background: #005f97;
    box-shadow: 0 8px 28px rgb(6 62 139 / 45%);
}

a {
    color: #14c871;
    text-decoration: none;
}
a {
    color: #0d6efd;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
a:-webkit-any-link {
    color: -webkit-link;
    cursor: pointer;
    text-decoration: underline;
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
}
</style>
<body>
 <?php include(ROOT_PATH . "/app/helpers/messages.php"); ?> 


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo1.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#goal">Goal</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          <?php if (isset($_SESSION['id'])): ?>
          <li><a class="getstarted scrollto" data-toggle="modal" data-target="#user"><?php echo $_SESSION['username']; ?></a></li>
          <?php else: ?>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
          <?php endif;?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Perfection Beyond Promise</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Promise is what holds us together but we like to break the rule to deliver beyond our promise, beyond your expectations.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start mb-2">
            <a href="#about" class="btn-get-started1 scrollto mt-3">Get Started
             
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/bg.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="about">

    <div class="available-app-area">
      <div class="container">
          <div class="row d-flex justify-content-between">
              <div class="col-xl-5 col-lg-6">
                  <div class="app-caption">
                      <div class="section-tittle section-tittle3">
                         <strong><h2>About Us</h2></strong> 
                          <p>We are Young talents who have been immersed in technology for many years, now held together by the passion to sculpt new ideas into reality. We don't promise perfection but we deliver it.</p>
                          <div class="app-btn">
                              <a href="#" class="app-btn1"><img src="assets/img/sha.png" alt=""></a>
                              <a href="#" class="app-btn2"><img src="assets/img/shape/app_btn2.png" alt=""></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                  <div class="app-img">
                      <img src="assets/img/features-2.png" width="95%" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!-- ======= About Section ======= -->
    <section  class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>Who We Are</h2>
              
              <p>
                We have travelled the world of innovation having experienced every change in technology, from the very beginning to the upcoming. We are the technology workers equipped with every tool required to fulfil your need. Whole world believe every problem will have a solution, but we believe the solution to be apt and unique.
              </p>
              <div class="text-center text-lg-start">
                <!-- <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/values-2.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>
    <!-- End About Section -->
    

    <!-- ======= Services Section ======= -->
    <section id="services" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>What We Do </p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200" data-toggle="modal" data-target="#m1">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-code-slash"></i>
                  <h3>Ecommerce and web applications</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300" data-toggle="modal" data-target="#m2">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-phone"></i>
                  <h3>Enterprise mobility solutions
                  </h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400" data-toggle="modal" data-target="#m3">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-hourglass-bottom"></i> 
                 <h3>AI, Big Data and Machine learning
                  </h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500" data-toggle="modal" data-target="#m4">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-laptop"></i>
                  <h3>ASIC/FPGA design and verification
                  </h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600" data-toggle="modal" data-target="#m5">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-cpu"></i>
                  <h3>Embedded Hardware design, development and testing
                  </h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700" data-toggle="modal" data-target="#m6">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-file-earmark-code"></i>
                  <h3>Embedded software development
                  </h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

      </div>

    </section><!-- End services Section -->
    

   <!-- ======= Team Section ======= -->
   <section id="team" class="testimonials">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Team</h2>
        <p>Our hard working team</p>
      </header>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="assets/img/team/jaisal.png" width="90%" class="testimonial-img" alt="">
                <h3>Jaisal Ashraf</h3>
                <h4>CEO, Co-Founder</h4>
              </div>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                A Tech Savvy | Entrepreneur with 5 years industrial experience working for tech giants including Intel, Nokia, Ericsson and Broadcom. Jaisal holds a Dual Master degree Majoring in Embedded Systems and Minoring in Entrepreneurship from KTH Royal Institute of Technology, Sweden and Aalto University, Finland.
              </p>
              
            </div>
          </div>
          <!-- End testimonial item -->


          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="assets/img/team/sanif.png" class="testimonial-img" alt="">
                <h3>Sanif SS</h3>
                <h4>CTO, Co-Founder</h4>
              </div>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                Programming enthusiast having 6+ years of industry experience with a Bachelor's degree in Computer Science. Sanif has worked for multiple startups and was a former employee of Mercedes-Benz R&D bangalore as a software developer. He finds passion in coding and always love to explore and learn new things.
              </p>
            
            </div>
          </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End team Section -->



  <div class="available-app-area" id="goal">
    <div class="container">
      
        <div class="row d-flex justify-content-between">

          <div class="col-xl-6 col-lg-6">
            <div class="app-img">
                <img src="assets/img/features-3.png" width="65%" alt="">
            </div>
        </div>
            <div class="col-xl-5 col-lg-6">
                <div class="app-caption">
                    <div class="section-tittle section-tittle3">
                       <strong><h2>Our goal</h2></strong> 
                        <p>The whole world believes every problem will have a solution, but we believe the solution to be apt and unique. We aim in fulfilling your goals and making you climb higher on the ladder of achievement. We will prove to make you prove that success is no more a story or just a dream.</p>
                        <div class="app-btn">
                            <a href="#" class="app-btn1"><img src="assets/img/sha.png" alt=""></a>
                            <a href="#" class="app-btn2"><img src="assets/img/shape/app_btn2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@aizonlabs.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p><b>India: </b>(+91) 91429 09651<br><b>Finland: </b>(+35) 84018 82545</p>
                </div>
              </div>
            
            </div>

          </div>

          <div class="col-lg-6">
            <form action="process.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="UName" class="form-control"

                  <?php if (isset($_SESSION['id'])): ?>
                   value="<?php echo $_SESSION['username']; ?>" 
                   <?php endif;?>
                   
                   placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="Email"

                  <?php if (isset($_SESSION['id'])): ?>
                   value="<?php echo $_SESSION['email']; ?>" 
                   <?php endif;?>

                  placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="Subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="msg" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit" name="btn-send">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our Newsletter.</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo1.png" alt="">
            </a>
            <p>Thank you for your interest in AIzonLabs. Please contact us using the information below. To get the latest updates from AIzonLabs, subscribe to a newsletter or connect with us on social media.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Ecommerce and web applications</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Enterprise mobility solutions</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">AI, Big Data and Machine learning</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">ASIC/FPGA design and verification</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Embedded Hardware design, development and testing </a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Embedded software development<a></li>

            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>AIZon Labs.</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!--=========================================== Modals ============================================-->

<!-- Modal Ecommerce and web applications -->
<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ecommerce and web applications</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Have you ever dreamt of an Ecommerce or Web application? Don't worry Our dedicated development team will take care of your beautiful dream. We offer highly scalable ECommerce/Web application which can be used to simplify or leverage the workflow. Explicit Domain knowledge of our team assures to fulfill your dream by delivering it with an attractive user interface along with the ease in user experience.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Enterprise mobility solutions -->
<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Enterprise mobility solutions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        When it comes to business mobilization we got you covered. Our service in enterprise mobility solutions is praiseworthy, we empower an enterprise to offer flexibility and choice for their employees or customers to get more productivity for the business. Our enterprise mobility services and solutions cover all major mobile platforms including Android, iOS and cross-platform which is compatible with multiple mobile operating systems.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal AI, Big Data and Machine learning -->
<div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AI, Big Data and Machine learning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data is no more a hidden factor, it's everywhere, technology is breathing data. Haven't you heard "Data is the new oil"? We have already entered the data era. When data becomes too large or complex, it steps in the world of Big data. The more the complexity more we push you higher. From the large sets of information gathered, our Big data team will help your firm to understand, analyze, learn or visualize to move few steps ahead in this competitive advancement by taking better decisions and strategic business moves. But when we speak the future we can't miss out on AI and Machine Learning. AI is going to rule every industry and business function, as the data collected can be enhanced through AI. Machine Learning will analyze the data faster and thoroughly, it enables algorithms to learn, enlighten or predict the gathered data set. Our expertise in Ai, Machine Learning and Big data services will make you feed your needs through your own data.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal ASIC/FPGA design and verification -->
<div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ASIC/FPGA design and verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        We offer ASIC and FPGA design, development and verification services. We are blessed with engineers that have experience in designing ASICs/FPGAs and can undergo ASIC/FPGA development services. Their knowledge in various aspects of RTL Design flow on chips that are extensively used in networking, mobile, automotive, multimedia and processor sectors will boost your outcome immensely and also help you in the verification of ASIC/FPGA chips.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Embedded Hardware design, development and testing -->
<div class="modal fade" id="m5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Embedded Hardware design, development and testing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Electronic Devices are not even close to the way they were 10 years before, the way we look at hardware have changed drastically. These changes are the output of designing knowledge and creative thinking. Hardware design is one of the important factors which can take a product to its success. Years of experience in embedded hardware designing will keep us ahead of competitions worldwide. We provide our service of hardware designing in various domains such as Networking, Storage & Telecom, Computing, IoT Devices, Industrial Automation, Wearables and more. We design, develop and test while you rest.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Embedded software development -->
<div class="modal fade" id="m6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Embedded software development</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        When it comes to the handling of the architecture, prototyping, manufacturing or testing of the embedded software solutions, we assure our skilled team to please you with their brilliance. And their expertise in the field of embedded software development will deliver that which your business is looking for. Be it any programming languages C, C++, JavaScript, Python, Ada, Rust, C#, etc we are skilled enough, with good knowledge of common embedded standards.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal user details -->
<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="form-group">
    <label for="">Username</label>
    <p class="form-control" id="first_name" type="text" placeholder="Enter your first name" required><?php echo $_SESSION['username']; ?></p>    </div>  

    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <p class="form-control" id="last_name" type="text" placeholder="Also your last name" required><?php echo $_SESSION['email']; ?></p>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <a href="logout.php" type="button" class="btn btn-danger" >Logout</a>
      </div>
    </div>
  </div>
</div>




  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>