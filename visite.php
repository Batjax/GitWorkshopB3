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
        $check = 0;
        if (isset($_POST['mail'])) {
            $check = 1;
        }
        if (isset($_POST['reco'])) {
            $check = 1;
        }
        if ($check == 0) {
            echo "Pour continuer merci de compléter les champs ci-dessous.";
            echo "<br>Les données collectées par HEP Explore le sont à des fins de statistiques et de sauvegade du score.";
            ?>
            <div>
                <form method="POST" action="visite.php" name="infos">
                    <fieldset>
                        <legend>Qui êtes vous ?</legend>
                        <div>
                            <input type="radio" id="etudiant" 
                                   name="radio" value="etudiant" checked/>
                            <label for="etudiant">Futur étudiant</label>
                        </div>
                        <div>
                            <input type="radio" id="entreprise" 
                                   name="radio" value="entreprise" />
                            <label for="entreprise">Entreprise</label>
                        </div>
                        <div>
                            <input type="radio" id="autre" 
                                   name="radio" value="autre"/>
                            <label for="autre">Autre</label>
                        </div>
                    </fieldset>
                    <table>
                        <tr id="all_prenom">
                            <td>Prénom</td>
                            <td>
                                <input type="text" id="prenom" name="prenom"/>
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
                <p><b>Vous avez déjà une progression ?</b></p>
                <form method="POST" action="visite.php" name="reconex">
                    <p>E-mail <input type="text" id="reco" name="reco" required/></p>
                    <p><input type="submit" name="subReco" value="Récupérer la progression"></p>
                </form>
            </table>
        </div>
        <?php
    } else {
        if (isset($_POST['prenom'])) {
            $_SESSION['type'] = $_POST['radio'];
            $type = $_SESSION['type'];
            if (isset($_POST['prenom'])) {
                $_SESSION['prenom'] = $_POST['prenom'];
                $prenom = $_SESSION['prenom'];
            } else {
                $prenom = null;
            }
            $_SESSION['nom'] = $_POST['nom'];
            $nom = $_SESSION['nom'];
            if (isset($_POST['tel'])) {
                $_SESSION['tel'] = $_POST['tel'];
                $tel = $_SESSION['tel'];
            } else {
                $tel = null;
            }
            $_SESSION['mail'] = $_POST['mail'];
            $mail = $_SESSION['mail'];

            $sql = "INSERT INTO workshop VALUES (\"$mail\", \"$type\", \"$prenom\", \"$nom\", \"$tel\", 0)";
            $req = $bdd->query($sql);

            echo "Tu peux maintenant commencer à explorer le campus. Cette exploration est composée de différents
                    points de vues pour découvrir toutes les salles importantes. Vous pourrez progresser en appuyant sur les flèches pour avancer.
                    Votre score augmente en fonction de votre progression et il sera sauvegardé dans un tableau des scores.<br>";
            echo "<form action='exploration.php' method='post' name='rtr'><input type='submit' name='start' value='Commencer la visite'/></form>";
        } elseif (isset($_POST['reco'])) {
            $mail = $_POST['reco'];
            $sql = "SELECT * FROM workshop WHERE mail=\"$mail\"";
            $req = $bdd->query($sql);
            $res = $req->fetch_assoc();
            if (!empty($res)) {
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

                echo "Bonjour " . $_SESSION['prenom'] . ", tu peux maintenant commencer à explorer le campus. Cette exploration est composée de différents
                    points de vues pour découvrir toutes les salles importantes. Vous pourrez progresser en appuyant sur les flèches pour avancer.
                    Votre score augmente en fonction de votre progression et il sera sauvegardé dans un tableau des scores.<br>";
                echo "<br>Ton score actuel est de " . $_SESSION['score'] . " points";
                echo "<form action='exploration.php' method='post' name='rtr'><input type='submit' name='start' value='Commencer la visite'/></form>";
            } else {
                echo "Aucune correspondance avec l'adresse mail inscrite.";
                echo "<form action='visite.php' method='post' name='rtr'><input type='submit' name='retour' value='Retour'/></form>";
                session_destroy();
            }
        } else {
            
        }
    }
    ?>
</body>
<script>
    document.getElementById("entreprise").addEventListener('change', function () {
        if (this.checked) {
            document.getElementById("all_prenom").style.visibility = "hidden";
        }
    });
    document.getElementById("etudiant").addEventListener('change', function () {
        if (this.checked) {
            document.getElementById("all_prenom").style.visibility = "visible";
        }
    });
    document.getElementById("autre").addEventListener('change', function () {
        if (this.checked) {
            document.getElementById("all_prenom").style.visibility = "visible";
        }
    });
</script>
</html>
