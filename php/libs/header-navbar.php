<?php 
function dump($var) {
    echo('<pre>');
    var_dump($var);
    echo('</pre>');
}

$nav = [
    'Notre établissement' => ['Le personnel', 'R.O.I', 'Nos projets'], 
    'En pratique' => ['Photo', 'Agenda', 'Menu du restaurant', 'Grille d\'option', 'Cours en ligne', 'Insciptions', 'Ecole en ligne', 'Newsletter'], 
    'Activités' => [],
    'Nos partenaires' => ['P.M.S', 'L\'aparu1', 'Les amis'], 
    'Contact' => []
];

dump($_SERVER);
?>

<nav id="navbar" class="header flex relative">
    <ul class="header-nav">
        <li class="header__home">
            <a href="home.php">
                <svg>
                    <use xlink:href="../img/svg/svg-header-nav/sprite.svg#home"></use>
                </svg>
            </a>
        </li>
        <?php foreach($nav as $name => $links) : ?>
            <?php if(!empty($links)) : ?>
                <li class="relative dropdown">
                    <a class="line" href="#">
                        <svg>
                            <use xlink:href="../img/svg/svg-header-nav/sprite.svg#building"></use>
                        </svg>
                    <?= $name ?>
                    </a>
                    <ul class="sous">
                        <li class="invisible"></li>
                        <?php foreach($links as $link) : ?>
                            <li><a href="roi.php"><?= $link ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
            <?php else : ?>
                <li class="relative">
                    <a href="#">
                        <svg>
                            <use xlink:href="../img/svg/svg-header-nav/sprite.svg#happy"></use>
                        </svg>
                    <?= $name ?>
                    </a>
                </li> 
            <?php endif ?>
        <?php endforeach ?>    
    </ul>
    <ul class="header-side">
        <li>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12" id="search">
                <path d="M11.72 10.3L9.18 7.78a5 5 0 10-1.4 1.41l2.53 2.54a1 1 0 001.41-1.41zm-9.7-5.28a3 3 0 116 0 3 3 0 01-6 0z" fill="currentColor"></path>
                </svg>
            </a>
        </li>
        <li class="header__burger hidden">
            <button class="flex-center " id="js-burger">
                <span>Afficher le menu</span>
            </button>
        </li>
    </ul>
</nav>

<!-- On garde la version non dynamique ci dessous comme point d'appui au cas ou -->

<!-- <nav id="navbar" class="header flex relative">
    <ul class="header-nav">
        <li class="header__home">
            <a href="home.php">
                <svg>
                    <use xlink:href="../img/svg/svg-header-nav/sprite.svg#home"></use>
                </svg>
            </a>
        </li>
        <li class="relative dropdown">
            <a class="line" href="#">
                <svg>
                    <use xlink:href="../img/svg/svg-header-nav/sprite.svg#building"></use>
                </svg>
            Notre établissement
            </a>
            <ul class="sous">
                <li class="invisible"></li>
                <li><a href="staff.php">Le personnel</a></li>
                <li><a href="roi.php">R.O.I</a></li>
                <li><a href="projects.php">Nos projets</a></li>
            </ul>
        </li>
        <li class="relative dropdown">
            <a class="line line2" href="#">
                <svg>
                    <use xlink:href="../img/svg/svg-header-nav/sprite.svg#pen"></use>
                </svg>
            En pratique 
            </a>
            <ul class="sous drop2">
                <li class="invisible"></li>
                <li><a href="pictures.php">photo/com</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="menu.php">Menu du restaurant</a></li>
                <li><a href="options.php">Grille d'option</a></li>
                <li><a href="online-course.php">Cours en ligne</a></li>
                <li><a href="home.php#insciptions-ecole-en-ligne">Inscriptions</a></li>
                <li><a href="home.php#insciptions-ecole-en-ligne">Ecole en ligne</a></li>
                <li><a href="#footer">Newsletter</a></li>
            </ul>
        </li>
        <li class="relative">
            <a class="activity" href="#">
                <svg>
                    <use xlink:href="../img/svg/svg-header-nav/sprite.svg#happy"></use>
                </svg>
            Activités
            </a>
        </li>
        <li class="relative dropdown">
            <a class="line line3" href="#">
                <svg>
                    <use xlink:href="../img/svg/svg-header-nav/sprite.svg#partners"></use>
                </svg>
            Nos partenaires 
            </a>
            <ul class="sous drop3">
                <li class="invisible"></li>
                <li><a href="error404.php">P.M.S</a></li>
                <li><a href="http://www.aparu1.be/">L'aparu1</a></li>
                <li><a href="friends.php">Les amis</a></li>
            </ul>
        </li>
        <li class="relative">
            <a class="contacts" href="#">
                <svg>
                    <use xlink:href="../img/svg/svg-header-nav/sprite.svg#phone"></use>
                </svg>
            Contacts
            </a>
        </li>
    </ul>
    <ul class="header-side">
        <li>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 12" id="search">
                <path d="M11.72 10.3L9.18 7.78a5 5 0 10-1.4 1.41l2.53 2.54a1 1 0 001.41-1.41zm-9.7-5.28a3 3 0 116 0 3 3 0 01-6 0z" fill="currentColor"></path>
                </svg>
            </a>
        </li>
        <li class="header__burger hidden">
            <button class="flex-center " id="js-burger">
                <span>Afficher le menu</span>
            </button>
        </li>
    </ul>
</nav> -->