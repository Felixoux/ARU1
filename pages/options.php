<?php 
$pageTitle = "Grilles d'options"; 
function createCardOption (string $imgTitle, string $cardTitle, int $length): string {
    for($i=0; $i <= $length ;$i++) {
        $text = <<<HTML
        <div>
            <img src="../img/grilles-options/$imgTitle.jpg" alt="$cardTitle">
            <h4 class="py1">$cardTitle année</h4>
            <button>
                <a href="../docs/pdf/Grilles_$imgTitle.pdf">
                    <p>Lire la suite</p>
                </a>
            </button>
        </div>
HTML;
    }
    return $text;
}

?>
<!-- header  -->
<?php require '../php/libs/header.php'; ?> 
<!-- body  -->
<body id="g_options">
    <div class="page-wrapper">
        <?php require '../php/libs/header-navbar.php'; ?>
        <header class="options-header my3">
            <h1 class="h1-big center-mg">Nos grilles d'options</h1>
        </header>
        <main class="main-options mb5">
        <?= createCardOption("1e", "1ère", 8) ?>
        </main>
        <?php require '../php/libs/footer.php'?>
    </div>
    <script type="text/javascript" src="../js/app.js"></script>
</body>
</html>
<!-- string $imgTitle, string $cardTitle, -->

<!-- return <<<HTML
        <div>
            <img src="../img/grilles-options/$imgTitle.jpg" alt="$cardTitle">
            <h4 class="py1">$cardTitle année</h4>
            <button>
                <a href="../docs/pdf/Grilles_$imgTitle.pdf">
                    <p>Lire la suite</p>
                </a>
            </button>
        </div>
        HTML; -->





<!-- 
            <div>
                <img src="../img/grilles-options/1e.jpg" alt="1ère">
                <h4 class="py1">1ère année</h4>
                <button>
                        <a href="../docs/pdf/Grilles_1e.pdf">
                            <p>Lire la suite</p>
                        </a>
                </button>
            </div>
            <div>
                <img src="../img/grilles-options/1e-immersion.jpg" alt="1ère">
                <h4 class="py1">1ère année immersion</h4>
                <button>
                        <a href="../docs/pdf/Grilles_1e.pdf">
                            <p>Lire la suite</p>
                        </a>
                </button>
            </div>
            <div>
                <img src="../img/grilles-options/2e.jpg" alt="1ère">
                <h4 class="py1">2ème année</h4>
                <button>
                        <a href="../docs/pdf/Grilles_1e.pdf">
                            <p>Lire la suite</p>
                        </a>
                </button>
            </div>
            <div>
                <img src="../img/grilles-options/2ecomplementaire.jpg" alt="1ère">
                <h4 class="py1">2ème année complémentaire</h4>
                <button>
                        <a href="../docs/pdf/Grilles_1e.pdf">
                            <p>Lire la suite</p>
                        </a>
                </button>
            </div>
            <div>
                <img src="../img/grilles-options/3e.jpg" alt="1ère">
                <h4 class="py1">3ème année</h4>
                <button>
                        <a href="../docs/pdf/Grilles_1e.pdf">
                            <p>Lire la suite</p>
                        </a>
                </button>
            </div>
            <div>
                <img src="../img/grilles-options/4e.jpg" alt="1ère">
                <h4 class="py1">4ème année</h4>
                <button>
                        <a href="../docs/pdf/Grilles_1e.pdf">
                            <p>Lire la suite</p>
                        </a>
                </button>
            </div>
            <div>
                <img src="../img/grilles-options/5e.jpg" alt="1ère">
                <h4 class="py1">5ème année</h4>
                <button>
                        <a href="../docs/pdf/Grilles_1e.pdf">
                            <p>Lire la suite</p>
                        </a>
                </button>
            </div>
            <div>
                <img src="../img/grilles-options/6e.jpg" alt="1ère">
                <h4 class="py1">6ère année</h4>
                <button>
                        <a href="../docs/pdf/Grilles_1e.pdf">
                            <p>Lire la suite</p>
                        </a>
                </button>
            </div> -->