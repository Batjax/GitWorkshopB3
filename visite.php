<?php
    session_start();
    require "connexion.php";
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>HEP Explore</title>
    </head>
    <body>
        <?php
        if(!isset($_POST['prenom'])){
            echo "Bienvenue sur notre jeu !";
        ?>
        <div>
            <form method="POST" action="visite.php" name="infos">
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
                            <input type="submit" id="submit" name="sub" value="Envoyer"/>
                        </td>
                    </tr>
                </table>
            </form>
            <br>
            <table>
                <tr>
                    <td><b>Vous avez déjà une progression ?</b></td>
                </tr>
                <form method="POST" action="visite.php" name="reconex">
                        <tr>
                            <td>E-mail</td>
                            <td><input type="text" id="reco" name="reco" required/></td>
                        </tr>
                        <tr><td><input type="submit" name="subReco" value="Récupérer la progression")</td></tr>
                </form>
            </table>
        </div>
        <?php }else{
            if(isset($_POST['prenom'])){
                $_SESSION['type'] = $_POST['radio'];
                $type = $_SESSION['type'];
                $_SESSION['prenom'] = $_POST['prenom'];
                $prenom = $_SESSION['prenom'];
                $_SESSION['nom'] = $_POST['nom'];
                $nom = $_SESSION['nom'];
                if(isset($_POST['prenom'])){
                    $_SESSION['tel'] = $_POST['tel'];
                    $tel = $_SESSION['tel'];
                }
                $_SESSION['mail'] = $_POST['mail'];
                $mail = $_SESSION['mail'];

                echo $sql = "INSERT INTO workshop VALUES (\"$mail\", \"$type\", \"$prenom\", \"$nom\", \"$tel\", 0)";
                $req = $bdd->query($sql);

                echo "Bonjour ".$_SESSION['prenom'].", tu peux maintenant commencer à explorer le campus. Cette exploration est composée de différents
                    points de vues pour découvrir toutes les salles importantes. Vous pourrez progresser en appuyant sur les flèches pour avancer.
                    Votre score augmente en fonction de votre progression et il sera sauvegardé dans un tableau des scores.<br>";

            }elseif(isset($_POST['reco'])){
                $mail = $_POST['reco'];
                $sql = "SELECT * FROM workshop WHERE mail=$mail";
                $req = $bdd->query($sql);
                $res = $req->fetch_assoc();
                $prenom = $res['prenom'];
                $_SESSION['prenom'] = $prenom;
                $nom = $res['nom'];
                $_SESSION['nom'] = $nom;
                $tel = $res['tel'];
                $_SESSION['tel'] = $tel;
                $score = $res['score'];
                $_SESSION['score'] = $score;
                $type = $res['type'];
                $_SESSION['type'] = $type;

                echo "Bonjour ".$_SESSION['prenom'].", tu peux maintenant commencer à explorer le campus. Cette exploration est composée de différents
                points de vues pour découvrir toutes les salles importantes. Vous pourrez progresser en appuyant sur les flèches pour avancer.
                Votre score augmente en fonction de votre progression et il sera sauvegardé dans un tableau des scores.<br>";
                echo "<br>Ton score actuel est de ".$_SESSION['score']." pts";

            }else{
            
            }
        }?>
    </body>
</html>