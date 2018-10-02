<?php
    session_start();
    require "connexion.php";
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>HEP Explore</title>
        <script type="text/javascript" src="js/exploration.js"></script>
    </head>
    <body>
        <?php
            $score = $_SESSION['score'];
            $mail = $_SESSION['mail'];
            $prenom = $_SESSION['prenom'];
            $nom = $_SESSION['nom'];
        ?>
    </body>
</html>