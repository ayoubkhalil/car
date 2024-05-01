<?php
// devis.php

// Inclure le fichier de configuration de la base de données et tout autre fichier nécessaire
include('vendor/inc/config.php');

// Récupérer les informations sur les voitures disponibles pour le devis
$sql = "SELECT v_name, v_reg_no, v_status, tarif FROM tms_vehicle
        LEFT JOIN tarifs_location ON tms_vehicle.v_name = tarifs_location.modele";
$result = $mysqli->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    echo "<h2>Voitures disponibles avec tarifs pour le devis</h2>";
    echo "<table border='1'>
            <tr>
                <th>Modèle</th>
                <th>Immatriculation</th>
                <th>État</th>
                <th>Tarif (par jour)</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['v_name']}</td>
                <td>{$row['v_reg_no']}</td>
                <td>{$row['v_status']}</td>
                <td>{$row['tarif']} €</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Aucune voiture disponible pour le devis pour le moment.";
}

// Fermer la connexion à la base de données
$mysqli->close();
?>






















<header class="site-navbar site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center position-relative">

        <div class="col-3 ">
          <div class="site-logo">
            <a href="index.html">location-voiture</a>
          </div>
        </div>

        <div class="col-9  text-right">
          

          <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

          

          <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto ">
              <li class="active"><a href="index.html" class="nav-link">Accueil</a></li>
              <li><a href="services.html" class="nav-link">Services</a></li>
              <li><a href="cars.html" class="nav-link">voitures</a></li>
              <li><a href="about.html" class="nav-link">À Propos</a></li>
              <li><a href="blog.html" class="nav-link">Blog</a></li>
              <li><a href="contact.html" class="nav-link">Contact</a></li>
              <li><a href="index2.php" class="nav-link">Connectez-vous</a></li>
            </ul>
          </nav>
        </div>

        
      </div>
    </div>

  </header>


