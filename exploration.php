<?php
session_start();
require "connexion.php";
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>HEP Exploration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="js/pleaserotate.min.js?ver=0.2" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">

        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/exploration.js"></script>
    </head>
    <style>
        /* Container needed to position the button. Adjust the width as needed */
.container_2 {
  position: relative;
  width: 100%;
}

/* Make the image responsive */
.container_2 img {
  width: 100%;
  height: auto;
}

/* Style the button and place it in the middle of the container/image */
.container_2 .btn {
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.container_2 .btn:hover {
  background-color: black;
}
    </style>
    <body>
        <?php
        $score = $_SESSION['score'];
        $mail = $_SESSION['mail'];
        $prenom = $_SESSION['prenom'];
        $nom = $_SESSION['nom'];
        ?>
        <div class="container_2">
            <img src="images/exploration/Leclair---Incubateur.jpg">
            <button class="btn">Button</button>
        </div>
    </body>
    <!--<img style="width:100%; height:100%;" src="images/exploration/Leclair---Incubateur.jpg"/>-->
    <button type="button" id="changer_bat">Changer de bâtiment</button>
</html>