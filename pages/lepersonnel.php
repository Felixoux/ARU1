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
                <li class="active"><a href="#home">La direction</a></li>
                <li><a href="#mentions">Personnel administratif</a></li>
                <li><a href="#about">Educateurs</a></li>
                <li><a href="#about">Les enseignants</a></li>
            </ul>
            <div class="tabs-content">
                <section class="direction tab-content active" id="direction">
                    <ul class="title">
                        <li>Nom</li>
                        <li>Fonction</li>
                        <li>Adresse éléctronique</li>
                    </ul>
                    <ul>
                        <li>Claire Jouve</li>
                        <li>Directrice / Préfète des Etudes</li>
                        <li>prefet@aru1.be</li>
                    </ul>
                    <ul>
                        <li>Viviane Schaul</li>
                        <li>Directrice adjointe / Proviseure</li>
                        <li>proviseur@aru1.be</li>
                    </ul>
                    <ul>
                        <li>Christian De Weerdt</li>
                        <li>Directeur de la section fondamentale</li>
                        <li>fondamental@aru1.be</li>
                    </ul>
                    <ul>
                        <li> Corinne Chevalier</li>
                        <li>Administratrice de l'internat annexé</li>
                        <li>internat@aru1.be</li>
                    </ul>
                    <ul>
                        <li>Valéry Zydron</li>
                        <li>Secrétaire de direction</li>
                        <li>secretariat@aru1.be</li>
                    </ul>
                </section>
                <section class="adminStaff tab-content" id="adminStaff"></section>
                <section class="educators tab-content" id="educators"></section>
                <section class="teachers tab-content" id="teachers"></section>
            </div>
        </div>
    </main>



    <!-- footer  -->
    <!-- <?php require '../php/libs/footer.php'; ?> -->
    <!-- script  -->
    <!-- <script type="text/javascript" src="../js/app.js"></script> -->
    <script src="../js/tabs.js"></script>
</body>
</html>