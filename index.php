<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="shortcut icon" href="/img/svg/logo-aru1-morgane.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="light">
    <header class="index-header my5"><img class="w100" src="img/big-photo.jpg" alt="L'école">
    </header>
    <main class="index-main mb5">
        <div>
            <h3 class="h3-medium mb2 text-center">Ecole fondamentale</h3>
            <div class="container-overflow">
                <a href="http://www.la-petite-ecole.be"><img  src="img/Fondamental-menu.jpg" alt="ecole fondamentale"></a>
            </div>
            <div class="container-spoiler">
                <div class="spoiler-content hidden">
                    <p>
                        La Petite Ecole dans la prairie EFA ARU1 <br>
                        72, avenue Paul Stroobant <br>
                        1180 - Uccle
                    </p>
                    <p>
                        Téléphone: 02/374.95.52<br>
                        Fax: 02/374.56.20
                    </p>
                </div>
                <button class="spoiler hidden">Afficher les contacts</button>
            </div>
        </div>
        <div>
            <h3 class="h3-medium mb2 text-center">Ecole secondaire</h3>
            <div class="container-overflow">
                <a href="pages/home.php"><img src="img/Secondaire-menu.jpg" alt="ecole secondaire"></a>
            </div>
            <div class="container-spoiler relative">
                <div class="spoiler-content hidden">
                    <p>
                        Athénée royal Uccle 1 <br>
                        87, avenue Houzeau <br>
                        1180 Bruxelles
                    </p>
                    <p>Téléphone : 02/ 374 05 84 <br>
                        Fax : 02/ 375 28 91 <br>
                        <a href="mailto:secretariat@aru1.be">secretariat@aru1.be</a>
                    </p>
                </div>
                <button class="spoiler hidden">Afficher les contacts</button>
            </div>
        </div>
        <div>
            <h3 class="h3-medium mb2 text-center">Internat</h3>
            <div class="container-overflow">
                <a href="pages/internat.php"> <img src="img/Internat-menu.jpg" alt="internat"></a>
            </div>
            <div class="container-spoiler">
                <div class="spoiler-content hidden">
                    <p>
                        Internat annexé pour jeunes filles <br>
                        66, Avenue du Vert Chasseur <br>
                        1180 Uccle
                    </p>
                    <p>Téléphone : 02/ 374 51 07 <br>
                        Fax : 02/ 372 38 42
                    </p>
                </div>
                <button class="spoiler hidden">Afficher les contacts</button>
            </div>
        </div>
    </main>
    <div class="slider-wrapper mb5">
            <h2 class="h3-medium mb3">Infos générale</h2>
            <div class="slider-container">
                <div>
                    <h5>Ecole fondamentale</h5>
                    <p>
                        Voici donc a quoi ressemblerait le slider d'infos comme demandé. Il est simple mais c'est déjà ca de fait, bien sur il n'est pas encore dynamique mais comme ca on a déjà une vue d'ensemble
                    </p>
                    <a href="#">Aller vers le site</a>
                </div>
                <div>
                    <h5>Ecole Secondaire</h5>
                    <p>
                        Voici donc a quoi ressemblerait le slider d'infos comme demandé. Il est simple mais c'est déjà ca de fait, bien sur il n'est pas encore dynamique mais comme ca on a déjà une vue d'ensemble
                    </p>
                    <a href="#">Aller vers le site</a>
                </div>
                <div>
                    <h5>Internat</h5>
                    <p>
                        Voici donc a quoi ressemblerait le slider d'infos comme demandé. Il est simple mais c'est déjà ca de fait, bien sur il n'est pas encore dynamique mais comme ca on a déjà une vue d'ensemble
                    </p>
                    <a href="#">Aller vers le site</a>
                </div>
                <div>
                    <h5>Ecole secondaire</h5>
                    <p>
                        Voici donc a quoi ressemblerait le slider d'infos comme demandé. Il est simple mais c'est déjà ca de fait, bien sur il n'est pas encore dynamique mais comme ca on a déjà une vue d'ensemble
                    </p>
                    <a href="#">Aller vers le site</a>
                </div>
            </div>
        </div>
    <footer class="index-footer text-center">
            <h3 class="h4-medium text-left my3">Contacts</h3>
            <div class="index-footer__container">
                <div class="contact-1 py1">
                    <h4>Section fondamentale</h4>
                    <p>
                        La Petite Ecole dans la prairie EFA ARU1 <br>
                        72, avenue Paul Stroobant <br>
                        1180 - Uccle
                    </p>
                    <p>Téléphone: 02/374.95.52 <br>
                        Fax: 02/374.56.20
                    </p>
                </div>
                <div class="contact-2 py1">
                    <h4>Section Secondaire</h4>
                    <p>
                        Athénée royal Uccle 1 <br>
                        87, avenue Houzeau <br>
                        1180 Bruxelles
                    </p>
                    <p>Téléphone : 02/ 374 05 84 <br>
                        Fax : 02/ 375 28 91 <br>
                        <a class="mail" href="mailto:secretariat@aru1.be">secretariat@aru1.be</a>
                    </p>
                </div>
                <div class="contact-3 py1">
                    <h4>Internat</h4>
                    <p>
                        Internat annexé pour jeunes filles <br>
                        66, Avenue du Vert Chasseur <br>
                        1180 Uccle
                    </p>
                    <p>Téléphone : 02/ 374 51 07 <br>
                        Fax : 02/ 372 38 42
                    </p>
                </div>
            </div>
    </footer> 
    <script>
        // Spoiler system
        var buttons = document.querySelectorAll('#index main .spoiler')

        var createSpoiler = function(button) {
            button.addEventListener('click', function () {
                button.previousElementSibling.classList.toggle('hidden');
                button.classList.toggle('change-text');
                button.innerHTML = (button.classList.contains("change-text") ? "Voir moins" : "Afficher les contacts" );
            })
        }

        for (var i = 0; i < buttons.length; i++) {
            createSpoiler(buttons[i])
        }
    </script>
</body>
</html>