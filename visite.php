<?php session_start(); ?>
<html>
    <head>
        <title>HEP Explore</title>
    </head>
    <body>
        <?php
        echo "Bienvenue sur notre jeu !";
        if(!isset($_POST['prenom'])){
        ?>
        <div>
            <form method="POST" action="visite.php">
                <fieldset>
                    <legend>Qui êtes vous ?</legend>
                    <div>
                        <input type="radio" id="etudiant" 
                            name="radio" value="etudiant" />
                        <label for="etudiant">Futur étudiant</label>
                    </div>
                    <div>
                        <input type="radio" id="entreprise" 
                            name="radio" value="entreprise" />
                        <label for="entreprise">Entreprise</label>
                    </div>
                    <div>
                        <input type="radio" id="autre" 
                            name="radio" value="autre" checked/>
                        <label for="autre">Autre</label>
                    </div>
                </fieldset>
                <table>
                    <tr>
                        <td>Prénom</td>
                        <td>
                            <input type="text" id="prenom" name="prenom" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td>
                            <input type="text" id="nom" name="nom" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Téléphone</td>
                        <td>
                            <input type="text" id="tel" name="tel"/>
                        </td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>
                            <input type="text" id="mail" name="mail" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" id="submit" value="Envoyer"/>
                        </td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td><b>Vous avez déjà une progression ?</b></td>
                    </tr>
                    <form method="POST" action="visite.php">
                        <tr>
                            <td>E-mail</td>
                            <td><input type="text" id="reco" name="reco"/></td>
                        </tr>
                    </form>
            </form>
        </div>
        <?php }else{
            if(isset($_POST['prenom'])){
                $_SESSION['type'] = $_POST['radio'];
                $_SESSION['prenom'] = $_POST['prenom'];
                $_SESSION['nom'] = $_POST['nom'];
                if(isset($_POST['prenom'])){
                    $_SESSION['tel'] = $_POST['tel'];
                }
                $_SESSION['mail'] = $_POST['mail'];
            }elseif(isset($_POST['reco'])){
                
            }else{
            /*echo "Bonjour ".$_SESSION['prenom'].", tu peux maintenant commencer à explorer le campus. Cette exploration est composée de différents
            points de vues pour découvrir toutes les salles importantes. Vous pourrez progresser en appuyant sur les flèches pour avancer.
            Votre score augmente en fonction de votre progression et il sera sauvegardé dans un tableau des scores.<br>";*/
            }
        }?>
    </body>
</html>