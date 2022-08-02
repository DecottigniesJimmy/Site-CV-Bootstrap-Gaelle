<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/cv.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    <!----------------            FONT               ---------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Parisienne&display=swap" rel="stylesheet">
    <!---------------------------------------------------------------------->
    <title>Bio Gaelle</title>
</head>

<body>
    <!-----------------------HEADER BOX1----------------------------->
    <header>
        <div class="container1">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="box1">
                    <div class="imgbox1"><img class="img1" src="/assets/img/gaelle-profil.jpg" alt=""></div>
                    <div class="name1">
                        <h1 class="name">Gaëlle</h1>
                    </div>
                    <div class="prof">
                        <h1 class="prof1">"Conseillère en insertion professionnelle"</h1>
                    </div>
                    <div class="chevron"><img src="/assets/img/Chevron-left.png" alt="" class="chevronleft1">
                        <img src="/assets/img/Chevron-right.png" alt="" class="chevronright1">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!---------------------------FIN HEADER-------------------------->

    <!-------------------------2eme Entête BOX2--------------------------->
    <div class="container2">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="box2">
                <h1 class="about1">A propos</h1>
            </div>
        </div>
    </div>
    </div>
    <!-------------------------Fin Entête--------------------------->

    <!--------------------------BUTTON BOX3------------------------->
    <div class="container3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="box3">
                <a id="btnCV" class="btn" target="_blank" href="/assets/Cv_pdf/albericogaelle.pdf" role="button">Mon
                    CV</a>
                <!-- REMPLIR LE HREF EN INTEGRANT LE CV DANS ASSETS> REDIRECTION CV -->
            </div>
        </div>
    </div>
    <!---------------------------FIN BUTTON--------------------------->

    <!------------------------PRESENTATION BOX4----------------------->
    <div class="container4">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" id="box4-4">
                <h3 class="biotitle">Mon Parcours</h3>
                <p class="bio">Ouverte, souriante et à l'écoute, j'ai à cœur de révéler le positif
                    chez chaque personne. Suite à un parcours construit au fil des rencontres, qui m'a permis d'aborder
                    plusieurs secteurs professionnels, j'ai décidé de m'orienter vers l'insertion professionnelle,
                    afin d'accompagner les personnes à trouver leurs solutions car "il n'y a pas de problème,
                    il n'y a que des solutions, s'il n'y a pas de solutions, c'est qu'il n'y a pas de problème."</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" id="box4-5">
                <h3 class="biotitle">Aujourd'hui</h3>
                <p class="bio">Le respect de l'autre tel qu'il est, le partage, et l'écoute sont des valeurs qui me 
                    guident dans mes choix professionnels. Aujourd'hui, forte de mes expériences passées et d'une 
                    première expérience enrichissante dans le domaine de l'insertion professionnelle je souhaite 
                    poursuivre mon chemin afin de continuer à accompagner les personnes dans le développement de leur 
                    projet professionnel, l'identification et la valorisation de leurs compétences pour que chacun puisse 
                    mettre en lumière son potentiel.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" id="box4-6">
                <h3 class="biotitle">Ma Citation favorite</h3>
                <p class="bio">"Accompagner serait aller avec... Partir de l'autre et pas de soi... Aller avec évoque un
                    professionnel qui se déporte vers le chemin de l'autre. Il est là, présent, permettant qu'un autre
                    traverse
                    l'épreuve, le moment, l'événement".</p>
                <br>
                <p class="citation">Cifali et André, 2007</p>
            </div>
        </div>
    </div>
    <!---------------------------------FIN PRESENTATION------------------------------------>

    <!------------------------------FORMULAIRE CONTACT BOX 5---------------------------------->
    <div class="container5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="box5">
                <form method="post" onsubmit="return validateEmail()"  id="form1" class="form1" action="">
                    <!-- ENVOIE DU FORMULAIRE A FAIRE-->
                    <div class="strokes2">
                        <div class="stroke3"></div>
                        <h3 class="formtitle">CONTACT</h3>
                        <div class="stroke4"></div>
                    </div>
                    <a class="linkedin" target="_blank"
                        href="https://www.linkedin.com/in/gaelle-alberico-87375a225/"><img class="img-fluid"
                            id="linkedin" src="/assets/img/linkedin-removebg-preview.png" alt="">
                    </a>
                    <div class="inputs">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" >Nom :</span>
                            <input type="text" name="message01" id="fc1"  class="form-control" placeholder="Nom *" aria-label="Username"
                                aria-describedby="basic-addon1" required>
                            <small></small>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2">E-mail :</span>
                            <input type="email" name="message02" id="fc2"  class="form-control" placeholder="E-mail *"
                                aria-label="Username" aria-describedby="basic-addon1" required>
                            <small></small>
                        </div>
                        <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon3">Objet :</span>
                            <input type="text" name="message03" id="fc3" class="form-control" placeholder="Objet *" aria-label="Username"
                                aria-describedby="basic-addon1" required>
                            <small></small>                                
                        </div>
                        <div id="input-group" class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon4">Message :</span>
                            <textarea class="form-control" rows="10" name="message" id="message" required></textarea>
                        </div>
                    </div>
                    <input type="submit" id="btnSend" class="btn" value="Envoyer">
                </form>
            </div>
        </div>
    </div>
    <!---------------------------------------FIN FORMULAIRE DE CONTACT-------------------------------------------------->
    <!-------------------------------------CREDIT---------------------------------------------------->
    <div class="container6">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="box6">
                <div class="credit">
                    <p>Copyright © 2022 <a target="_blank"
                            href="https://www.linkedin.com/in/jimmy-decottignies-916401241/">Jimmy Decottignies /
                            Developpeur Web</a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------Fin Credit-------------------------------------->
    <?php
    $name = $_POST['message01'];
    $email = $_POST['message02'];
    $objet = $_POST['message03'];
    $message = $_POST['message'];
    $formcontent="De: $name \n Email: $email \n Objet: $objet \n Message: $message";
    $recipient = "decottignies.jimmy@hotmail.fr";
    $subject = "Contact site Cv-Gaelle";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    ?>
<script src="/assets/formValidation.js"></script>
</body>

</html>
<!--.col-	 à 576px
.col-sm-	 à 567px.
.col-md-	 à 768px
.col-lg-	 992px
.col-xl-	​​​​​​​ 1200px.-->