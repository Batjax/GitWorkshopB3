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
        <script>
            $(document).ready(function () {
                $('button .btn').on('click touchstart', function () {
                    changerImage(this.id)
                });
            });
        </script>
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
        .btn { 
            background-color: Transparent;
            width: 12%;
            cursor: pointer; 
            overflow: hidden;
            outline:none;
        }

        .logo {
            position: relative;
            width: 100%;
        }

        .onglet {
            font-size: 15px;
            padding: -2px;
            margin: -1px;
            border-top-left-radius : 18px;
            border-top-right-radius : 18px;
            float: left;
            background-color:  rgb(10,83,124) ;
            color : white;
        }
        .changer_bat{
            background-color:  rgb(10,83,124) ;
            color : white;
        }
        
        .fleche1{
            position: absolute;
            transform: rotate(45deg);
            top: 85%;
            left: 65%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
        .fleche2{
            position: absolute;
            top: 65%;
            left: 65%;
            visibility: hidden;
        }
        .fleche3{
            position: absolute;
            top: 65%;
            left: 65%;
            visibility: hidden;
        }
        .fleche4{
            position: absolute;
            top: 65%;
            left: 65%;
            visibility: hidden;
        }

        .pointeur_vis1{
            position: absolute;
            top: 30%;
            left: 15%;
            visibility: visible;
        }
        .pointeur_vis2{
            position: absolute;
            top: 65%;
            left: 80%;
            visibility: visible;
        }
        .pointeur_vis3{
            position: absolute;
            top: 65%;
            left: 65%;
            visibility: hidden;
        }

        .rotateD{
            transform: rotate(90deg);
        }
        .rotateG{
            transform: rotate(270deg);
        }
        .rotateB{
            transform: rotate(180deg);
        }
    </style>
    <body>
        <?php include"navbar_game.html" ?>
        <?php
        $score = $_SESSION['score'];
        $mail = $_SESSION['mail'];
        $nom = $_SESSION['nom'];
        ?>
        <div class="container_2">
            <img id="img_explo" src="images/exploration/berthet-facade.jpg" alt=""/>
            <button id="fleche1" onclick="changerImage(this.id)" class="fleche1 btn"><img class="img_icon rotateD" src="images/exploration/pictos/direction.png" alt=""/></button>
            <button id="fleche2" onclick="changerImage(this.id)" class="fleche2 btn"><img class="img_icon" src="images/exploration/pictos/direction.png" alt=""/></button>
            <button id="fleche3" onclick="changerImage(this.id)" class="fleche3 btn"><img class="img_icon" src="images/exploration/pictos/direction.png" alt=""/></button>
            <button id="fleche4" onclick="changerImage(this.id)" class="fleche4 btn"><img class="img_icon" src="images/exploration/pictos/direction.png" alt=""/></button>

            <button id="pointeur_vis1" class="pointeur_vis1 btn"><img class="img_icon" src="images/exploration/pictos/emplacement.png" alt=""/></button>
            <button id="pointeur_vis2" class="pointeur_vis2 btn"><img class="img_icon" src="images/exploration/pictos/emplacement.png" alt=""/></button>
            <button id="pointeur_vis3" class="pointeur_vis3 btn"><img class="img_icon" src="images/exploration/pictos/emplacement.png" alt=""/></button>
        </div>
    </body>
    <p>
        <button type="button" class="changer_bat" id="changer_bat">Changer de bâtiment</button>       
    </p>
</html>