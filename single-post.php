<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Colombia Review - Reseña</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.2.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onLoad="loadDataPost(),loadComments()">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Review Colombia</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="single-post.html">Publicaciones</a></li>
          <li class="dropdown"><a href="category.php"><span>Categorias</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="search-result.php">Busqueda</a></li>
              <li><a href="#">opcion 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>

          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contacto</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.php" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date">Viajes</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
              <h1 class="mb-5" id="titulo">13 Increibles lugares que debes visitar si viajas a la Guajira-Colombia</h1>
              <div id="contentPost"></div>
              
            </div><!-- End Single Post Content -->

            <!-- ======= Comments ======= -->
            <div class="comments" id="comentarios">
            

            </div>
              <!-- End Comments -->

            <!-- ======= Comments Form ======= -->
            <div class="row justify-content-center mt-5">

              <div class="col-lg-12">
                <h5 class="comment-title">Deja un Comentario</h5>
                <div class="row">
                  <div class="col-lg-6 mb-3">
                    <label for="comment-name">Nombre</label>
                    <input type="text" class="form-control" id="comment-name" placeholder="Escribe tu nombre">
                  </div>
                  <div class="col-lg-6 mb-3">
                    <label for="comment-email">Email</label>
                    <input type="text" class="form-control" id="comment-email" placeholder="Escribe tu email">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="comment-message">Mensaje</label>

                    <textarea class="form-control" id="comment-message" placeholder="Escribe tu comentario" cols="30" rows="10"></textarea>
                  </div>
                  <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Postea tu comentario">
                  </div>
                </div>
              </div>
            </div><!-- End Comments Form -->

          </div>
          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Populares</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Mas reciente</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">

                <!-- Popular -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Viajes</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">Tour de 1 día al Peñol y Guatapé desde Medellín.</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Experiencias</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">¿Cómo evitar distracciones y mantener la concentración durante las videollamadas?</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">La Guajira, una raza cuya cultura es su orgullo</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Emprendimientos</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">¿Cómo sobreviven los Wayúu de La Guajira?                    </a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>
                </div> <!-- End Popular -->

                <!-- Trending -->
                <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Experiencias</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">¿Cómo evitar distracciones y mantener la concentración durante las videollamadas?</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">La Guajira, una raza cuya cultura es su orgullo</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Viajes</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">Tour de 1 día al Peñol y Guatapé desde Medellín.</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Emprendimientos</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">¿Cómo sobreviven los Wayúu de La Guajira?                    </a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>
                </div> <!-- End Trending -->

                <!-- Latest -->
                <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Experiencias</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">¿Cómo evitar distracciones y mantener la concentración durante las videollamadas?</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Emprendimientos</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">¿Cómo sobreviven los Wayúu de La Guajira?                    </a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Viajes</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">Tour de 1 día al Peñol y Guatapé desde Medellín.</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <h2 class="mb-2"><a href="#">La Guajira, una raza cuya cultura es su orgullo</a></h2>
                    <span class="author mb-3 d-block">Camilo Torres</span>
                  </div>

                </div> <!-- End Latest -->

              </div>
            </div>

            <div class="aside-block">
              <h3 class="aside-title">Video</h3>
              <div class="video-post">
                <a href="https://www.youtube.com/watch?v=ixs4Hroh2MI" class="glightbox link-video">
                  <span class="bi-play-fill"></span>
                  <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div><!-- End Video -->

            <div class="aside-block">
              <h3 class="aside-title">Categorias</h3>
              <ul class="aside-links list-unstyled">
                <li><a href="category.php"><i class="bi bi-chevron-right"></i> Servicios</a></li>
                <li><a href="category.php"><i class="bi bi-chevron-right"></i> Cultura</a></li>
                <li><a href="category.php"><i class="bi bi-chevron-right"></i> Experiencias</a></li>
                <li><a href="category.php"><i class="bi bi-chevron-right"></i> Comida</a></li>
                <li><a href="category.php"><i class="bi bi-chevron-right"></i> Emprendimientos</a></li>
                <li><a href="category.php"><i class="bi bi-chevron-right"></i> Viajes</a></li>
              </ul>
            </div><!-- End Categories -->

            <div class="aside-block">
              <h3 class="aside-title">Etiquetas</h3>
              <ul class="aside-tags list-unstyled">
                <li><a href="category.php">Servicios</a></li>
                <li><a href="category.php">Cultura</a></li>
                <li><a href="category.php">Experiencias</a></li>
                <li><a href="category.php">Comida</a></li>
                <li><a href="category.php">Emprendimientos</a></li>
                <li><a href="category.php">Viajes</a></li>
              </ul>
            </div><!-- End Tags -->

          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">About Colombia Review</h3>
            <p>Colombia Review nace para cubrir la necesidad que representa elegir tu proximo destino de viaje y que lugares debes visitar.</p>
            <p><a href="about.php" class="footer-link-more">Leer mas</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navegar</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="index.php"><i class="bi bi-chevron-right"></i> Inicio</a></li>
              <li><a href="index.php"><i class="bi bi-chevron-right"></i> Reseñas</a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i> Categories</a></li>
              <li><a href="single-post.html"><i class="bi bi-chevron-right"></i> Publicaciones</a></li>
              <li><a href="about.php"><i class="bi bi-chevron-right"></i> About Us</a></li>
              <li><a href="contact.php"><i class="bi bi-chevron-right"></i> Contacto</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Categorias</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="category.php"><i class="bi bi-chevron-right"></i> Servicios</a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i> Cultura</a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i> Experiencias</a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i> Comida</a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i> Emprendimientos</a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i> Viajes</a></li>
            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Publicaciones Recientes</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <li>
                <a href="single-post.html" class="d-flex align-items-center">
                  <img src="post-landscape-1.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Cultura</span> <span class="mx-1">&bullet;</span> <span>Agosto 5 '22</span></div>
                    <span>La Guajira, una raza cuya cultura es su orgullo</span>
                  </div>
                </a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            <div class="copyright">
              © Copyright <strong><span>Colombia Review</span></strong>. All Rights Reserved
            </div>

            <div class="credits">
              Designed by <a>Rances & Romero</a>
            </div>

          </div>

          <div class="col-md-6">
            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-3.6.1.min.js"></script>
  <script src="assets/js/ajaxFunctions.js"></script>

</body>

</html>