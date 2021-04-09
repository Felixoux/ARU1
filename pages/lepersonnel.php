<?php $pageTitle = "Le personnel" ?>
 <!-- head -->
 <?php require '../php/libs/header.php'; ?>
<body id="staff">
    <!-- nav  -->
    <?php require '../php/libs/header-navbar.php'; ?>
    <!-- main  -->
    <header>
        <h1 class="pt-3">Le personnel</h1>
    </header>
    <main>
        <div class="container">
            <ul class="tabs">
                <li class="active"><a href="#direction">La direction</a></li>
                <li><a href="#adminStaff">Personnel administratif</a></li>
                <li><a href="#educators">Educateurs</a></li>
                <li class="border-clear"><a href="#teachers">Les enseignants</a></li>
            </ul>
            <div id="linkSearch" class="tabs-content linkSearch">
                <section class="direction tab-content active" id="direction">
                    <ul class="title">
                        <li>Nom</li>
                        <li>Fonction</li>
                        <li>Adresse éléctronique</li>
                    </ul>
                    <ul>
                        <li>Claire Jouve</li>
                        <li>Directrice / Préfète des Etudes</li>
                        <li><a href="mailto:prefet@aru1.be">prefet@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Viviane Schaul</li>
                        <li>Directrice adjointe / Proviseure</li>
                        <li><a href="mailto:proviseur@aru1.be">proviseur@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Christian De Weerdt</li>
                        <li>Directeur de la section fondamentale</li>
                        <li><a href="mailto:fondamental@aru1.be">fondamental@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li> Corinne Chevalier</li>
                        <li>Administratrice de l'internat annexé</li>
                        <li><a href="mailto:internat@aru1.be">internat@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Valéry Zydron</li>
                        <li>Secrétaire de direction</li>
                        <li><a href="mailto:secretariat@aru1.be">secretariat@aru1.be</a></li>
                    </ul>
                </section>
                <section class="adminStaff tab-content" id="adminStaff">
                    <ul class="title">
                        <li>Nom</li>
                        <li>Fonction</li>
                        <li>Adresse éléctronique</li>
                    </ul>
                    <ul>
                        <li>Si Mohamed Remont</li>
                        <li>Econome/Comptable</li>
                        <li><a class="pink" href="mailto:economat@aru1.be">economat@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Anne De Witte</li>
                        <li>Responsable de la gestion des dossiers élèves</li>
                        <li><a href="mailto:redacteur@aru1.be">redacteur@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Etienne Henry</li>
                        <li>Préparateur</li>
                    </ul>
                </section>
                <section class="educators tab-content" id="educators">
                    <ul class="title">
                        <li>Nom</li>
                        <li>Classe en charge</li>
                        <li>Téléphone</li>
                    </ul>
                    <ul>
                        <li>Si Mohamed Remont</li>
                        <li>Econome/Comptable</li>
                        <li>economat@aru1.be</li>
                    </ul>
                    <ul>
                        <li>Anne De Witte</li>
                        <li>Responsable de la gestion des dossiers élèves</li>
                        <li>redacteur@aru1.be</li>
                    </ul>
                    <ul>
                        <li>Etienne Henry</li>
                        <li>Préparateur</li>
                    </ul>
                </section>
                <section class="teachers tab-content" id="teachers">
                    <ul class="title">
                        <li>Nom</li>
                        <li>Branche</li>
                        <li>Adresse éléctronique</li>
                    </ul>
                    <ul>
                        <li>Abitbol Yona</li>
                        <li>Religion israélite</li>
                        <li><a href="mailto:yabitbol@aru1.be">yabitbol@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Aharrou Samira</li>
                        <li>Géographie</li>
                        <li><a href="mailto:saharrou@aru1.be">saharrou@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Angenot Eléonore</li>
                        <li>Histoire</li>
                        <li><a href="mailto:eangenot@aru1.be">eangenot@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Art Katharina</li>
                        <li>Néerlandais</li>
                        <li><a href="mailto:kart@aru1.be">kart@aru1.be</a></li>
                    </ul>
                    <ul>
                        <li>Bas Talip</li>
                        <li>Géographie</li>
                        <li><a href="mailto:tbas@aru1.be">tbas@aru1.be</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </main>
    <!-- footer  -->
    <!-- <?php require '../php/libs/footer.php'; ?> -->
    <!-- script  -->
    <script type="text/javascript" src="../js/app.js"></script>
    <script src="../js/tabs.js"></script>
    <!-- linkPink  -->
    <script>
        (function() {
            var linkPink = function(dom) {
            var links = document.querySelectorAll(dom);
            for(var i = 0; i < links.length; i++) {
            links[i].classList.add('pink');
                }
            }

            linkPink(".linkSearch a")
        })()
    </script>
</body>
</html>