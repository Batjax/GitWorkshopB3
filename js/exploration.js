function changerImage(id_fleche){
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

    switch(balise.src){
        case "http://web-epsi-lyon.com/beydant/WorkshopB3/images/exploration/berthet-facade.jpg":
        switch(id_fleche) {
            case "fleche1":
                balise.src = "images/exploration/berthet-hall.jpg";
                // Infothèque
                fleche1.top = "60%";
                fleche1.left = "61%";
                // Façade B
                fleche2.top = "78%";
                fleche2.left = "60%";
                fleche2.visibility = "visible";
                fleche2.transform = "rotate(180deg)";
                // Administration
                fleche3.top = "48%";
                fleche3.left = "30%";
                fleche3.visibility = "visible";
                // Salle de repos
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
            case "pointeur_vis2":
                break;
        }
        break;
        case "http://web-epsi-lyon.com/beydant/WorkshopB3/images/exploration/berthet-hall.jpg":
        switch(id_fleche) {
            case "fleche1":
            //Infotheque
                balise.src = "images/exploration/berthet-infotheque.jpg";
                fleche2.visibility = "hidden";
                fleche3.visibility = "hidden";
                fleche4.visibility = "hidden";
                // Retour hall ?
                fleche1.top = "80%";
                fleche1.left = "95%";

                pointeur_vis1.top = "30%";
                pointeur_vis1.left = "2%";
                pointeur_vis2.top = "56%";
                pointeur_vis2.left = "19%";
                break;
            case "fleche2":
                balise.src = "images/exploration/berthet-facade.jpg";
                fleche2.visibility = "hidden";
                fleche3.visibility = "hidden";
                fleche4.visibility = "hidden";
                //Hall
                fleche1.top = "86%";
                fleche1.left = "67%";

                pointeur_vis1.top = "30%";
                pointeur_vis1.left = "15%";
                pointeur_vis2.top = "62%";
                pointeur_vis2.left = "75%";
                break;
            case "fleche3":
            //admin
                balise.src = "images/exploration/berthet-administration.jpg";
                fleche3.visibility = "hidden";
                fleche4.visibility = "hidden";
                pointeur_vis2.visibility = "hidden";
                //
                fleche1.top = "70%";
                fleche1.left = "5%";
                fleche1.transform = "rotate(180deg)";
                //
                fleche2.top = "70%";
                fleche2.left = "85%";
                fleche2.transform = "rotate(90deg)";

                pointeur_vis1.top = "40%";
                pointeur_vis1.left = "55%";
                break;
            case "fleche4":
                balise.src = "images/exploration/berthet-ZPR.jpg";
                pointeur_vis2.visibility = "hidden";
                //
                fleche1.top = "50%";
                fleche1.left = "20%";
                fleche1.transform = "rotate(180deg)";
                //
                fleche2.top = "55%";
                fleche2.left = "40%";
                fleche2.transform = "";
                //
                fleche3.top = "55%";
                fleche3.left = "70%";
                fleche3.transform = "rotate(180deg)";
                //
                fleche4.top = "60%";
                fleche4.left = "85%";
                fleche4.transform = "rotate(90deg)";

                pointeur_vis1.top = "63%";
                pointeur_vis1.left = "52%";
                break;
        }
        break;
    }
}

function afficherBulle(id_pointeur){

}

function changerNavbar(id_btn){

}

function chargerScore(){

}

function chargerBatiment(){

}