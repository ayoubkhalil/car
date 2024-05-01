
<!doctype html>
<html lang="en">

  <head>
    <title>Car Rent &mdash; </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php">Location-voiture</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index.php" class="nav-link">Accueil</a></li>
                  <li><a href="services.php" class="nav-link">Services</a></li>
                  <li><a href="cars.php" class="nav-link">voitures</a></li>
                  <li><a href="about.php" class="nav-link">À Propos</a></li>
                  <li><a href="tarif.php" class="nav-link">Tarifs</a></li>
                  
                  <li><a href="contact.php" class="nav-link">Contact</a></li>

                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Connectez-vous
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                         <a class="dropdown-item" href="usr/index2.php">Client </a>
                         <a class="dropdown-item" href="admin/index3.php">Admin </a>
                     </div>
                 </li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="feature-car-rent-box-1">
                <h2>Prêt à rendre vos trajets aussi mémorables avec nous,
                   Découvrez chaque coin de ce magnifique pays à votre rythme
                   Réservez maintenant et commencez votre escapade tunisienne en toute facilité et confort!</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    



    


    <div class="container mt-5">
    <h2 class="mb-4">Devis de Reservation</h2>

    <form id="reservationForm">
        <!-- ... (unchanged form fields) ... -->
        <div class="container mt-5">
      
      <form>
          <div class="form-row">
              <div class="form-group col-md-6">
                <div class="form-group">
                  <label for="pickupLocation">Lieu de prise de véhicule</label>
                  <select class="form-control" id="pickupLocation">
                    <option value="tunis-airport">Aéroport de Tunis-Carthage</option>
                    <option value="monastir-airport">Aéroport de Monastir</option>
                    <option value="sfax-airport">Aéroport de Sfax-Thyna</option>
                    <option value="tabarka-airport">Aéroport de Tabarka-Aïn Draham</option>
                    <option value="djerba-airport">Aéroport de Djerba-Zarzis</option>
                    <option value="enfidha-airport">Aéroport d'Enfidha-Hammamet</option>
                    <option value="hotel-laico">Hôtel Laico Tunis</option>
                    <option value="hotel-marhaba">Hôtel Marhaba Palace - Sousse</option>
                    <option value="hotel-ribat">Hôtel Le Royal Hammamet</option>
                    <!-- Ajoutez d'autres options selon vos besoins -->
                </select>
              </div>
              </div>
              <div class="form-group col-md-6">
                  <label for="dropoffLocation">Remise du véhicule</label>
                  <select class="form-control" id="pickupLocation">
                    <option value="tunis">Tunis</option>
                    <option value="nabeul">Nabeul</option>
                    <option value="sousse">Sousse</option>
                    <option value="monastir">Monastir</option>
                    <option value="sfax">Sfax</option>
                    <!-- Ajoutez d'autres options selon vos besoins -->
                </select>
              </div>
          </div>
  
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="startDate">Date début</label>
                  <input type="date" class="form-control" id="startDate">
              </div>
              <div class="form-group col-md-6">
                  <label for="startTime">Heure de prise</label>
                  <input type="time" class="form-control" id="startTime">
              </div>
          </div>
  
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="endDate">Date fin</label>
                  <input type="date" class="form-control" id="endDate">
              </div>
              <div class="form-group col-md-6">
                  <label for="endTime">Heure de remise</label>
                  <input type="time" class="form-control" id="endTime">
              </div>
          </div>
  
          <button type="button" class="btn btn-primary" onclick="submitForm()">Devis de Reservation</button>
    </form>
  </div>



       

    <script>
        function submitForm() {
            var pickupLocation = document.getElementById("pickupLocation").value;
            var dropoffLocation = document.getElementById("dropoffLocation").value;
            var startDate = document.getElementById("startDate").value;
            var startTime = document.getElementById("startTime").value;
            var endDate = document.getElementById("endDate").value;
            var endTime = document.getElementById("endTime").value;

            // Construct the URL with form data as parameters
            var queryParams = [
                "pickupLocation=" + encodeURIComponent(pickupLocation),
                "dropoffLocation=" + encodeURIComponent(dropoffLocation),
                "startDate=" + encodeURIComponent(startDate),
                "startTime=" + encodeURIComponent(startTime),
                "endDate=" + encodeURIComponent(endDate),
                "endTime=" + encodeURIComponent(endTime)
            ];

            var queryString = queryParams.join("&");
            var destinationPage = "../carrent-master/devis.php"; // Replace with the actual page

            // Redirect to the new page with form data as parameters
            window.location.href = destinationPage + "?" + queryString;
        }
    </script>
</div>

  

   
    

   



              
              





             

  <div class="site-section bg-light">
    
    <div class="container">
    <div class="row justify-content-center text-center mb-5">
    <div class="col-10 text-center my-5">
    <h1 class="display-3">Nos voiture</h1>
    <p class="lead">les plus populaire</p>
</div>
        </div> 
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          
          <div class="item-1">
              <a href="#"><img src="images/83823_max.jpg" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                <h3><a href="#">CUPRA FORMENTOR HIGHT-GRADE 2L</a></h3>
                <div class="rating">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>200 dt / </span>Day</div>
                </div>
                <ul class="specs">
                    <li>
                      <span>Portes</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Places</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Âge minimum</span>
                      <span class="spec">18 years</span>
                    </li>
                  </ul>
                <div class="d-flex action">
                  <a  href="usr/index2.php" class="btn btn-primary">LOUER MAINTENANT</a>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="item-1">
              <a href="#"><img src="images/97687_max.jpg" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                <h3><a href="#">RENAULT CLIO DYNAMIQUE</a></h3>
                <div class="rating">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>120 dt /</span>Day</div>
                </div>
                <ul class="specs">
                    <li>
                      <span>Portes</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Places</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Âge minimum</span>
                      <span class="spec">18 years</span>
                    </li>
                  </ul>
                <div class="d-flex action">
                  <a  href="usr/index2.php" class="btn btn-primary">LOUER MAINTENANT</a>
                </div>
              </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6 mb-4">
          <div class="item-1">
              <a href="#"><img src="images/98626_max.jpg" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                <h3><a href="#">VOLKSWAGEN GOLF 6 STYLE</a></h3>
                <div class="rating">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>130 dt /</span>Day</div>
                </div>
                <ul class="specs">
                    <li>
                      <span>Portes</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Places</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Âge minimum</span>
                      <span class="spec">18 years</span>
                    </li>
                  </ul>
                <div class="d-flex action">
                  <a  href="usr/index2.php" class="btn btn-primary">LOUER MAINTENANT</a>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="item-1">
              <a href="#"><img src="images/98701_max.jpg" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                <h3><a href="#">BMW SÉRIE 4 GRAN COUPÉ</a></h3>
                <div class="rating">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>250 d /</span>day</div>
                </div>
                <ul class="specs">
                    <li>
                      <span>Portes</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Places</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Âge minimum</span>
                      <span class="spec">18 years</span>
                    </li>
                  </ul>
                <div class="d-flex action">
                  <a  href="usr/index2.php" class="btn btn-primary">LOUER MAINTENANT</a>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="item-1">
              <a href="#"><img src="images/97406_max.jpg" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                <h3><a href="#">MERCEDES-BENZ CLASSE E 220</a></h3>
                <div class="rating">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>170 dt /</span>day</div>
                </div>
                <ul class="specs">
                    <li>
                      <span>Portes</span>
                      <span class="spec">4</span>
                    </li>
                    <li>
                      <span>Places</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Transmission</span>
                      <span class="spec">Automatic</span>
                    </li>
                    <li>
                      <span>Âge minimum</span>
                      <span class="spec">18 years</span>
                    </li>
                  </ul>
                <div class="d-flex action">
                  <a  href="usr/index2.php" class="btn btn-primary">LOUER MAINTENANT</a>
                </div>
              </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6 mb-4">
          <div class="item-1">
              <a href="#"><img src="images/98029_max.jpg" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                <h3><a href="#">KIA PICANTO GT-LINE</a></h3>
                <div class="rating">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <div class="rent-price"><span>80 dt /</span>day</div>
                </div>
                <ul class="specs">
                  <li>
                    <span>Doors</span>
                    <span class="spec">4</span>
                  </li>
                  <li>
                    <span>Seats</span>
                    <span class="spec">5</span>
                  </li>
                  <li>
                    <span>Transmission</span>
                    <span class="spec">manuelle</span>
                  </li>
                  <li>
                    <span>Minium age</span>
                    <span class="spec">18 years</span>
                  </li>
                </ul>
                <div class="d-flex action">
                  <a  href="usr/index2.php" class="btn btn-primary">LOUER MAINTENANT</a>
                </div>
              </div>
            </div>
        </div>

    <div class="site-section section-3" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h1 class="text-white">Nos services</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-car-1"></span>
              </span>
              <div class="service-1-contents">
                <h3>Réparation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-traffic"></span>
              </span>
              <div class="service-1-contents">
                <h3>Accessoires voiture</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-valet"></span>
              </span>
              <div class="service-1-contents">
                <h3>Posséder une voiture</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container site-section mb-5">
      <div class="row justify-content-center text-center">
          <<div class="col-10 text-center my-5">
    <h1 class="display-3">Comment ca marche</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
</div>
      </div>
      <div class="how-it-works d-flex">
          <div class="step">
              <span class="number"><span>01</span></span>
              <span class="caption">Temps  &amp; lieu</span>
              <p>Choisissez le temps et le lieu qui vous conviennent le mieux pour votre service.</p>
          </div>
          <div class="step">
              <span class="number"><span>02</span></span>
              <span class="caption">Voiture</span>
              <p>Sélectionnez le type de voiture que vous préférez pour votre déplacement.</p>
          </div>
          <div class="step">
              <span class="number"><span>03</span></span>
              <span class="caption">Détails</span>
              <p>Fournissez les détails nécessaires pour personnaliser votre expérience.</p>
          </div>
          <div class="step">
              <span class="number"><span>04</span></span>
              <span class="caption">Paiement</span>
              <p>Effectuez le paiement de manière sécurisée et pratique.</p>
          </div>
          <div class="step">
              <span class="number"><span>05</span></span>
              <span class="caption">Terminé</span>
              <p>Vous avez terminé! Profitez de votre service et n'hésitez pas à nous donner votre avis.</p>
          </div>
      </div>
  </div>












  
  
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
        <div class="col-10 text-center my-5">
    <h1 class="display-3">Avis des clients</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
</div>


        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Une expérience de location exceptionnelle avec [Nom  Agence] ,
                  j'ai été très satisfait du service. Le personnel a été très accommodant,
                   les formalités de location ont été rapides,
                   et le véhicule était en excellent état. 
                   Les tarifs étaient également très raisonnables.
                   Une expérience globale positive que je recommande à tous ceux qui ont besoin d'une voiture de location de qualité</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Mike Fisher</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Je suis une cliente régulière de [Nom Agence] et je continue à être impressionnée par leur excellent service.
                   Leur flotte de véhicules est diversifiée, les réservations sont faciles à effectuer en ligne, 
                   et le personnel est toujours prêt à aider. Les tarifs sont transparents,
                   sans frais cachés. Je ne peux que recommander
                    [Nom de Votre Agence] pour une expérience de location sans stress"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Jean Stanley</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"J'ai loué une voiture chez [Nom de Votre Agence] et j'ai été très satisfait du service.
                   Le personnel a été très accommodant, 
                  les formalités de location ont été rapides,
                   et le véhicule était en excellent état. Les tarifs étaient également très raisonnables.
                   Une expérience globale positive que je recommande à tous ceux qui ont besoin d'une voiture de location de qualité"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Katie Rose</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    

  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">À Propos de Nous</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Liens Rapides</h2>
                <ul class="list-unstyled">
                  <li><a href="#">À Propos de Nous</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Conditions de Service</a></li>
                  <li><a href="#">Confidentialité</a></li>
                  <li><a href="#">Nous Contacter</a></li>
                </ul>
              </div>
              
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Information</h2>
                <ul class="list-unstyled">
                  <li><a href="#">À propos</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">TTermes et conditions</a></li>
                  <li><a href="#">Garantie du meilleur prix</a></li>
                  <li><a href="#">Politique de confidentialité</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Service client</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Faq</a></li>
                  <li><a href="#">Options de paiement</a></li>
                  <li><a href="#">Conseils de réservation</a></li>
                  <li><a href="#">Comment ça fonctionne</a></li>
                  <li><a href="#">Contactez-nous</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
  
    </div>    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

