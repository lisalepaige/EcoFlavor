<?php

spl_autoload_register(function($class) {
    include_once("classes/" . $class . ".class.php");
});

$winkelmand = User::getWinkelmandje();

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body>

    <header>
        <a href="index.php"><img src="images/arrow.png" alt="back"></a>
        <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
        <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

<h3 class="best__h3">Winkelmandje</h3>

<div class="ecokoerier">
       <div class="eco__flex">
        <h3 class="eco__h3">Mijn boodschappen thuis laten leveren via ecokoeriers</h3>
        <a href="ecokoeriers.php" class="btn btn--eco">Leveren<span class="border border--eco"></span></a>
       </div>
</div>

<main class="winkelmand">

        <?php foreach($winkelmand as $w): ?>

        <div class="searchP__list winkelmand__list">
            <img src="images/<?php echo $w['product_img']; ?>" alt="product" class="searchP__img winkelmand__img" >
            <div class="searchP__grid winkelmand__grid">
                <h4 class="searchP__pnaam" data-groep="<?php echo $w['groep_naam']; ?>"><?php echo $w['product_naam']; ?></h4>
                <p class="searchP__hnaam" data-id="<?php echo $w['handelaar_id']; ?>"><?php echo $w['handelaar_naam']; ?>
                <?php if ($w['verificatie'] == 1): ?>
                    <img src="images/verificatie.png" alt="verificatie" class="searchP__v"></p>
                <?php endif; ?>
                <p class="searchP__prijs">Totaalprijs: € <?php echo $w['totaalprijs']; ?></p>

        <?php endforeach; ?>

    </main>

    </div>  
            <a href="#" class="btn--bestelling afrekenen">Afrekenen<span class="border"></span></a>
    </div>

   <?php include_once("nav.inc.php"); ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>