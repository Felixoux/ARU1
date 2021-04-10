<?php $pageTitle = "Menu du restaurant" ?>
 <!-- head -->
 <?php require '../php/libs/header.php'; ?>
<body>
    <!-- nav  -->
    <?php require '../php/libs/header-navbar.php'; ?>
    <!-- main  -->
    <main>
        <section class="menu">
            <h1 class="title">Menu du <span>05/10</span> au <span>09/10</span></h1>
            <article class="menu-grid">
                <div class="menu-grid__time flex">
                    <div class="flex-center w100"><h3>Lundi 5/10</h3></div>
                    <div class="flex-center w100"><h3>Mardi 6/10</h3></div>
                    <div class="flex-center w100"><h3>Jeudi 8/10</h3></div>
                    <div class="flex-center w100"><h3>Vendredi 9/10</h3></div>
                </div>
                <div class="menu-grid__topic flex">
                    <div class="flex-center"><h3>Potage</h3></div>
                    <div class="flex-center"><h3>Plat principal</h3></div>
                    <div class="flex-center border-clear"><h3>Dessert</h3></div>
                </div>
                <div class="menu-grid__meal flex stretch">
                    <div>
                        <div><p>Chocolat chaud bien servi avec amour</p></div>
                        <div><p>Chocolat chaud bien servi avec amour</p></div>
                        <div class="border-clear"><p>Chocolat chaud bien servi avec amour</p></div>
                    </div>
                    <div>
                        <div><p>Chocolat chaud bien servi avec amour</p></div>
                        <div><p>Chocolat chaud bien servi avec amour</p></div>
                        <div class="border-clear"><p>Chocolat chaud bien servi avec amour</p></div>
                    </div>
                    <div>
                        <div><p>Chocolat chaud bien servi avec amour</p></div>
                        <div><p>Chocolat chaud bien servi avec amour</p></div>
                        <div class="border-clear"><p>Chocolat chaud bien servi avec amour</p></div>
                    </div>
                    <div class="border-clear">
                        <div><p>Chocolat chaud bien servi avec amour</p></div>
                        <div><p>Chocolat chaud bien servi avec amour</p></div>
                        <div class="border-clear"><p>Chocolat chaud bien servi avec amour</p></div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- footer  -->
    <?php require '../php/libs/footer.php'; ?>
    <!-- script  -->
    <script type="text/javascript" src="../js/app.js"></script>
</body>
</html>