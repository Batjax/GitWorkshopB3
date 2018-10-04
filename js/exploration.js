function changerImage(id_fleche) {
    var balise = document.getElementById("img_explo");
    var fleche1 = document.getElementById("fleche1").style;
    var fleche2 = document.getElementById("fleche2").style;
    var fleche3 = document.getElementById("fleche3").style;
    var fleche4 = document.getElementById("fleche4").style;
    var pointeur_vis1 = document.getElementById("pointeur_vis1").style;
    var pointeur_vis2 = document.getElementById("pointeur_vis2").style;
    var pointeur_vis3 = document.getElementById("pointeur_vis3").style;
    var pointeur_inv1 = document.getElementById("pointeur_inv1");
    var pointeur_inv2 = document.getElementById("pointeur_inv2");
    switch (balise.src) {
        case "http://web-epsi-lyon.com/beydant/WorkshopB3/images/exploration/berthet-facade.jpg":
            switch (id_fleche) {
                case "fleche1":
                    balise.src = "images/exploration/berthet-hall.jpg";
                    fleche1.top = "60%";
                    fleche1.left = "61%";
                    //fleche1.transform = "rotate(180deg)";
                    fleche2.top = "78%";
                    fleche2.left = "60%";
                    fleche2.visibility = "visible";
                    fleche2.transform = "rotate(180deg)";
                    fleche3.top = "48%";
                    fleche3.left = "30%";
                    fleche3.visibility = "visible";
                    fleche4.top = "48%";
                    fleche4.left = "0";
                    fleche4.visibility = "visible";
                    fleche4.transform = "rotate(270deg)";
                    pointeur_vis1.top = "75%";
                    pointeur_vis1.left = "30%";
                    pointeur_vis2.top = "60%";
                    pointeur_vis2.left = "82%";
                    break;
                case "pointeur_vis1":

                    break;
            }
            break;
        case "http://web-epsi-lyon.com/beydant/WorkshopB3/images/exploration/berthet-hall.jpg":
            switch (id_fleche) {
                case "fleche1":
                    balise.src = "images/exploration/Leclair---etage-1.jpg";
                    fleche1.top = "20%";
                    fleche1.left = "60%";
                    pointeur_vis1 = "70%";
                    pointeur_vis1 = "5%";
                    break;
                case "fleche2":
                    balise.src = "images/exploration/Leclair---Incubateur.jpg";
                    break;
            }
            break;
    }
}

function afficherBulle(id_pointeur) {

}

function changerNavbar(id_btn) {

}

function chargerScore() {

}

function chargerBatiment() {
    if ($_SESSION["batiment"] = "berthet") {
        $_SESSION["batiment"] = "leclair";
    }
    if ($_SESSION["batiment"] = "leclair") {
        $_SESSION["batiment"] = "berthet";
    }
}