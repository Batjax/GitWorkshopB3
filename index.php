<!doctype html>
<html>
    <?php include"header.html" ?>    
    <!--<script src="js/pleaserotate.min.js?ver=0.2" type="text/javascript"></script>-->
    <style>
        /* style the elements with CSS */
        #pleaserotate-graphic{
            fill: rgb(10,83,124);
        }

        #pleaserotate-backdrop {
            color: #000;
            background-color: #fff;
        }
        /*            body { 
                        background: url(images/Campus-exterieur-.jpg) no-repeat center center fixed; 
                        background-position: center;  Center the image 
                        background-repeat: no-repeat;  Do not repeat the image 
                        background-size: 100% auto;  Resize the background image to cover the entire container 
                    }*/
    </style>
</head>
<body>
    <?php include"navbar.html" ?>
    <div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div>
                        <div style="text-align: center;" class="heading">
                            <h2>Bienvenu dans HEP Explore</h2>
                        </div>
                        <br>
                        <div>
                            <div style="text-align: center;">
                                <a href="visite.php" class="btn btn-primary reverse py-2 px-3">Explorez le campus</a>
                            </div>
                            <br>
                            <p>Ici vous pourrez explorer de manière interactive le campus Renée-Cassin et ses environs accompagné par Hep l’étudiant.</p> 
                            <br>
                            <div style="text-align: center;">
                                <a href="info.html" class="btn btn-primary reverse py-2 px-3">Informations sur le campus</a>
                            </div>                                
                            <br>
                            <p>Là vous trouverez toutes les informations liées au campus HEP René-Cassin : écoles et centres de formation, espace dédié aux incubateurs, événements culturels, conférence et bien d’autres ...</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include"footer.html" ?> 
</body>
</html>

