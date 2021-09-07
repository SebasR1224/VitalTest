<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
  <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>vitaltest - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.gif" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>
    <body>

        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-flex align-items-center">
          <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
              <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:vitaltest@gmail.com">vitaltest@gmail.com</a></i>
              <i class="bi bi-phone d-flex align-items-center ms-4"><span>+57 548 12 67</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
          </div>
        </section>

        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center">
          <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo">
              <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>
              <a href="index.html">vital<span>test</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->


            <nav id="navbar" class="navbar">
              <ul>
                <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                <li><a class="nav-link scrollto" href="#about">Acerca de</a></li>
                <li><a class="nav-link scrollto" href="#modules">Módulos</a></li>
                <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
                <li><a class="nav-link scrollto" href="#ventajas">Ventajas</a></li>
                <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/home') }}" class="nav-link scrollto">Acceder</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="nav-link scrollto">Iniciar Sesión</a></li>
                        @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}" class="nav-link scrollto">Registrarse</a></li>
                        @endif
                    @endauth
                @endif
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
          </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
          <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Bienvenido a
              <span class="vital">vital</span><span class="test">test</span>
            </h1>
            <h2>La nueva tecnología que proteje  tu salud</h2>
            <div class="d-flex">
              <a href="#about" class="btn-get-started scrollto">Empezar</a>
              <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Ver video</span></a>
            </div>
          </div>
        </section>
        <!-- End Hero -->
        <div class="espacio">

        </div>
        <main id="main">
          <!-- ======= About Section ======= -->
          <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Acerca de</h2>
                <h3>Descubre más sobre <span>nosotros</span></h3>
                <p>Vitaltest aplicativo que piensa en la comodidad de todos sus clientes y en las necesidades de cada uno en el area de la salud.</p>
              </div>

              <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                  <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                  <h3>Soluciones para tu malestar, rápido seguro y sin salir de casa.</h3>
                  <p class="fst-italic">
                    Durante la pandemia del COVID 19 se identificaron algunas falencias en el sector se la salud a nivel mundial y una de ellas
                    es la que ataca vitaltest, pues muchas personas no saben que medicamentos o medidas adicionales se deben tomar cuando presentan
                    algún malestar general y en vista de esto entró en etapa de desarrollo vitaltest.
                  </p>
                  <p>
                    Para asegurar la mejor experiencia para los clientes de pensó en las características que identifican este sistema son:
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-puzzle"></i>
                      <div>
                        <h5>Fácil</h5>
                        <p>La interfaz del aplicativo es muy intuitiva y fácil de usar.</p>
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-stopwatch"></i>
                      <div>
                        <h5>Rápido</h5>
                        <p>La velocidad de respuesta tanto del test medico como de los demás módulos no superan los 5 segundos.</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </section>
          <!-- End About Section -->
          <section id="modules" class="services">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Módulos</h2>
                <h3>Revisa los módulos del <span>Aplicativo</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
              </div>

              <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Test médico</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Usuarios</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Medicamentos</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <!-- ======= Services Section ======= -->
          <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Services</h2>
                <h3>Check our <span>Services</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">Test médico</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Chat con profesionales</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Consulta de médicamentos</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4><a href="">Reporte de enfermedades</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                  </div>
                </div>

              </div>

            </div>
          </section>

                <!-- ======= Featured Services Section ======= -->
                <section id="ventajas" class="featured-services">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>Ventajas</h2>
                            <h3>Check our <span>Services</span></h3>
                            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                          </div>

                      <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-shield-check"></i></div>
                            <h4 class="title"><a href="">Confiabilidad</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                          </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-stars"></i></div>
                            <h4 class="title"><a href="">Eficacia</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                          </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-speedometer"></i></div>
                            <h4 class="title"><a href="">Rapidez</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                          </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-lock"></i></div>
                            <h4 class="title"><a href="">Privacidad</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                          </div>
                        </div>

                      </div>

                    </div>
                  </section>
                  <!-- End Featured Services Section -->

              <!-- ======= Counts Section ======= -->
              <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">

                  <div class="row">

                    <div class="col-lg-3 col-md-6">
                      <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clientes satisfechos</p>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                      <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="89" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Semanas de trabajo</p>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                      <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Horas de soporte</p>
                      </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                      <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="122" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Trabajadores</p>
                      </div>
                    </div>

                  </div>

                </div>
              </section>
              <!-- End Counts Section -->

          <!-- ======= Team Section ======= -->
          <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hardworking <span>Team</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
              </div>

              <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Sebastián Rodríguez</h4>
                      <span>Lider de proyecto</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Sara Ariza</h4>
                      <span>Programador frontend</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Brandon Smith</h4>
                      <span>Diseñador web</span>
                    </div>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                  <div class="member">
                    <div class="member-img">
                      <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>Samuel Esteban</h4>
                      <span>Modelador de SQL</span>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Team Section -->

          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

              <div class="section-title">
                <h2>Contact</h2>
                <h3><span>Contact Us</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
              </div>

              <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                  <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>contact@example.com</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                  </div>
                </div>

              </div>

              <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                  <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>

              </div>

            </div>
          </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">

          <div class="footer-newsletter">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <h4>Join Our Newsletter</h4>
                  <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="footer-top">
            <div class="container">
              <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                  <h3>BizLand<span>.</span></h3>
                  <p>
                    A108 Adam Street <br>
                    New York, NY 535022<br>
                    United States <br><br>
                    <strong>Phone:</strong> +1 5589 55488 55<br>
                    <strong>Email:</strong> info@example.com<br>
                  </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                  </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                  </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Our Social Networks</h4>
                  <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                  <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

      </body>
</html>
