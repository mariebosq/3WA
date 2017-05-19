<!DOCTYPE html>
<html>
    <head>
        <title>TITRE DU PROJET</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSS Vendor -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
        <!-- CSS Perso -->
        <link rel="stylesheet" type="text/css" href="css/base.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    </head>

    <body>
        <?php include("header.php"); ?>

        <!--MAIN CONTENT-->
        <main id="product">

            <section id="product-intro">
                    <a href="#" class="rating">
                        <i class="fa fa-star yellow" aria-hidden="true"></i>
                        <i class="fa fa-star yellow" aria-hidden="true"></i>
                        <i class="fa fa-star yellow" aria-hidden="true"></i>
                        <i class="fa fa-star yellow" aria-hidden="true"></i>
                        <i class="fa fa-star grey" aria-hidden="true"></i>
                        <p id="avis">Voir les 56 avis clients</p>
                    </a>

                    <h2>Blue of London</h2>
                    <p class="strong">Thé noir à la bergamote</p>
                    <p class="em">Ref: 133742</p>
            </section>

            <section id="product-detail">
                <article class="product-detail">
                    <img src="img/product/product3_big.jpg">
                </article>

                <article class="product-detail" id="product-detail2">
                    <form>
                        <select>
                            <option>Pochette de 100g</option>
                            <option>Pochette de 500g</option>
                        </select>
                    </form>

                    <p id="neuf-euros">9,00$</p>

                    <p class="bouton">Ajouter au panier</p>

                    <a href="#" id="envie">
                        <i class="fa fa-heart red" aria-hidden="true"></i>
                        Ajouter à ma liste d'envie
                    </a>
                </article>
            </section>

            <section>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="remise">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </p>
                <p class="remise">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </p>
            </section>



        </main>
        <!-- END OF MAIN CONTENT -->

        <?php include("footer.php"); ?>
    </body>
</html>