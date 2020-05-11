<?php 
 //   include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require_once "functions/head.php";
        require_once "functions/functions.php";
        require_once "template/template-article.php";
        require_once "template/template-carousel.php";
        require_once "template/template-footer.php";
        require_once "template/template-header.php";
    ?>
</head>

<body>
    <?php
        echo getHeader();
    ?>
    <main>
        <section class="main-screen">
            <div class="main-screen__container">
                <img src="./assets/hero-image-1.png" alt="Hero image" class="main-screen__container__hero-image">
                <ul>
                    <li class="main-screen__container__category">
                        <a href="#" id="painting">Painting</a>
                    </li>
                    <li class="main-screen__container__category">
                        <a href="#" id="architecture">architecture</a>
                    </li>
                    <li class="main-screen__container__category">
                        <a href="#" id="theatre">Choreography</a>
                    </li>
                    <li class="main-screen__container__category">
                        <a href="#" id="music">Music</a>
                    </li>
                    <li class="main-screen__container__category">
                        <a href="#" id="cinema">Cinema</a>
                    </li>
                    <li class="main-screen__container__category">
                        <a href="#" id="literature">Literature</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="second-screen">
            <div class="main-article">
                <h3 class="container__name">Новое</h3>
                <?php
                    $articles = getTable('article', 1);
                    echo getArticleFullPreview($articles);
                ?>
                <button class="btn" autofocus name="read">Читать</button>
            </div>
            <div class="catalog">
                <h3 class="container__name">Каталог</h3>
                <aside>
                    <?php
                        $catalog = getTable('article', 6);
                        echo getCatalogPreview($catalog);
                    ?>
                </aside>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $quote = getTable('quote', 3);
                            echo getCarousel($quote);
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
        </section>
        <section class="popular-articles">
            <h3 class="container__name">Популярное</h3>
            <div class="container_hor">
                <?php
                    $articles = getTable('article', 3);
                    echo getArticlePreview($articles);
                ?>
            </div>
        </section>
        <section class="contact_area section_gap">
            <h2 class="name_section">Карта гид</h2>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adbfa58ce282caaab8d0d174f36c10e9b9295fdc896664ec69c87ab5b6e34ac58&amp;source=constructor" width="100%" height="450px" frameborder="0"></iframe>
        </section>
        <section class="latest-articles container-aside">
            <div class="main-article container-aside__article">
                <h3 class="container__name">Новое</h3>
                <?php
                    $articles = getTable('article', 1);
                    echo getArticleFullPreview($articles);
                ?>
                <button class="btn" autofocus name="read">Читать</button>
            </div>
            <div class="container-ver container-aside__aside">
                <h3 class="container__name">Выбор редактора</h3>
                <aside>
                    <?php
                        $articles = getTable('article', 3);
                        echo getArticlePreview($articles);
                    ?>
                </aside>
            </div>
        </section>
        <section class="popular-articles">
            <h3 class="container__name">Последнее</h3>
            <div class="container_hor">
                <?php
                    $articles = getTable('article', 6);
                    echo getArticlePreview($articles);
                ?>
            </div>
        </section>
        <section class="popular-articles">
            <h3 class="container__name">Популярное</h3>
            <div class="container_hor">
                <?php
                    $articles = getTable('article', 3);
                    echo getArticlePreview($articles);
                ?>
            </div>
        </section>
    </main>   
    <?php
        echo getFooter();
    ?>
    <script src="scripts/menu_controller.js"></script>
</body>

</html>