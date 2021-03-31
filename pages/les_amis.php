<?php $pageTitle = "Les amis" ?> 
<!-- header  -->
<?php require '../php/libs/header.php'; ?> 
<!-- body  -->
<body id="les_amis">
    <div class="page-wrapper">
        <!-- header  -->
        <?php require '../php/libs/header-navbar.php'; ?>
        <!-- main  -->
        <main>
            <div class="container flex">
                <div class="container__content">
                    <h1 class="container__content__title">Les Amis en quelques mots...</h1>
                    <h5 class="container__content__subtitle">Les “Amis de l’Athénée Royal d’Uccle 1” </h4>
                    <p class="container_content__citation">L’Association <span class="italic">« Les Amis de l’Athénée Royal  d’Uccle 1 »</span> a été créée <br> en 1932</p>
                    <p>
                        Son conseil d’administration est composé d’anciens professeurs,
                        d’anciens élèves, de parents d’élèves, de professeurs en fonction et de la Direction de l’Athénée souhaitant tous continuer à contribuer et à participer au bon fonctionnement de l’école.
                    </p>
                    <p>Actuellement elle est présidée par <strong class="bold">Christine Vanhessen</strong>. </p>
                    <div class="hidden spoiler-text">
                        <p>Les objectifs poursuivis par les Amis sont multiples :
                        </p>
                        <ul>
                            <li><p>Les Amis apportent une aide sociale aux familles en difficultés financières (contribution aux frais scolaires, aux repas chauds mais aussi un soutien financier pour la participation aux voyages scolaires) ;</p></li>
                            <li><p>l’Association achète du matériel pédagogique dont des livres et du matériel sportif ;</p></li>
                            <li><p>elle organise le prêt du livre, chaque année et offre aussi les prix en fin d’année scolaire lors de la proclamation ;</p></li>
                            <li><p>elle soutient les évènements fédérateurs au sein de l’école tels que la Fête de l’école et le théâtre en intervenant par exemple, dans les frais de décor, de costumes et de matériels techniques.</p></li>
                        </ul>
                        <p>
                            Pour pouvoir atteindre ses objectifs, les Amis organisent notamment une tombola et le bar lors des activités festives.
                        </p>
                        <p> Votre soutien à ses activités nous est précieuse tant pour le geste de solidarité qu’il représente que pour l’intérêt que vous portez à notre école.</p>
                        <p>
                            Pour toute information : <a href="mailto:lesamisaru1@gmail.com">lesamisaru1@gmail.com</a> <br>
                            Retrouvez-nous aussi sur Facebook : <a href="https://www.facebook.com/pages/category/Nonprofit-Organization/Les-Amis-de-LAru1-104390721107594/" target="_blank" rel="noopener noreferrer">Les Amis de L'Aru1 </a>
                        </p>
                    </div>
                    <p class="container__content__spoiler btn--spoiler">Lire la suite</p>
                </div>
            </div>
        </main>
        <!-- footer  -->
        <?php require '../php/libs/footer.php'; ?> 
    </div>
    <script>
        // Spoiler system
        var spoiler = document.querySelector("#les_amis main .btn--spoiler")

        var createSpoilerparagraph = function(button) {
            button.addEventListener('click', function() {
                button.previousElementSibling.classList.toggle('hidden');
                button.classList.toggle('change-text');
                button.innerHTML = (button.classList.contains("change-text") ? "Retour à l'intro" :"Lire la suite" );
            })
        }

        createSpoilerparagraph(spoiler)
    </script>
    <script type="text/javascript" src="../js/app.js"></script>
</body>
</html>