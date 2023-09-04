<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DREFOP NORD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/tbl.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">DREFOP_NORD...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">CertiTrack</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
             <a href="index.php" class="nav-item nav-link active">ACCEUIL</a>
                   
                    <div class="nav-item dropdown">
                        <a href="index.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">DREFOP</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="presentation.php" class="dropdown-item">Presentation</a>
                            <a href="demande.php" class="dropdown-item">Demande d'Agrement </a>
                            <a href="concours.php" class="dropdown-item">Avis de concours</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">APROPOS</a>
                        
                    </div>
                    <a href="#pied" class="nav-item nav-link">Contact</a>
                </div>
          

        <form method="POST" action="agrement.php">

                    <div class="wrap">
   <div class="search">
      <input type="text"  name="terme" class="searchTerm" placeholder="Rechercher centre">
      <button type="submit" name="Recherche"  class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
</form>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/minfop.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Transparence en un clic:</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">trouvez les centres de formation agréés en utilisant<br>notre application intuitive et fiable</p>
                                    <a href="agrement.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">VERIFIEZ UNE CENTRE</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/minfop.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Demarquez-vous par la competition</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Explorez nos concours de formation professionnelle , </br>pour acceder aux meilleures opportunité educatives</p>
                                    <a href="concours.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">PARCOUREZ LES AVIS DE CONCOURS ET BOURSE</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->




        <!-- About Start -->
        <div class="container py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/about-1.jpg">
                            </div>
                          
                            
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">DREFOP NORD</h1>
                        <p class="mb-4">Met en votre disposition une base de donnee complete des centres de formation agréés en vous permettant de verifier facilement leurs acréditation. <br>En plus de cela vous pouvez egalement explorez Nos differents concours de formation qui vous donne la chance de vous demarquer et <br>saisir l'opportunite unique dans le domaine de l'education et la formation professionnelle <br>la cle de votre success commence ici </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Trouvez le centre de formation parfait pour vous</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Explorez les les Avis de concours</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Obtenir un agrement en ligne</p>

                         <a href="demande.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">DEMANDE AGREMENT</a><br>
        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


      
     
        

        <!-- Footer Start -->
        <div id="pied" class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">structure public</h5>
                        <a class="btn btn-link text-white-50" href="">Apropos</a>
                        <a class="btn btn-link text-white-50" href="">Contacts</a>
                        <a class="btn btn-link text-white-50" href="">Nos Services</a>
                      
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>garoua, Cameroun,</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+237 655 789 090</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>drefopnord@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>laissez nous votre adresse email.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">ENVOYER</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Drefop_nord</a>, All Right Reserved. 
						
							Designed By <a class="border-bottom" href="#">Abdoul aziz</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>