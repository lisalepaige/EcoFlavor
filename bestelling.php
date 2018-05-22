<?php

spl_autoload_register(function($class) {
    include_once("classes/" . $class . ".class.php");
});

$id = $_GET['product_id'];
$oneProduct = Product::ShowOne($id);

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body class="bestellingpage">

<header>
    <a href="detail.php?id=<?php echo $f['id']; ?>"><img src="images/arrow.png" alt="back" class="arrow"></a>
    <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
    <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

<main class="main__best">
<?php foreach($oneProduct as $p): ?>
    <h4 class="best__h4" data-id="<?php echo $p['handelaar_id']; ?>"><?php echo $p['handelaar_naam']; ?></h4>
    <h3 class="best__h3 best__id" data-id="<?php echo $p['product_id']; ?>"><?php echo $p['product_naam']; ?></h3>
    <img class="best__img" src="images/<?php echo $p['product_img']; ?>" alt="product">
<?php endforeach; ?>
</main>

<h3 class="best__h3">Bestelling</h4>

<section class="section__best">
<div class="bestelling">
<?php foreach($oneProduct as $p): ?>
    <p class="best__stukprijs">Stukprijs (&euro;)<span class="best__span"><?php echo $p['product_prijs']; ?></span></p>

    <div class="best_aantal">
    <p>Aantal</p>

        <div class="controls">
            <a href="#" class="min">-</a>
            <p class="qty">1</p>
            <a href="#" class="plus">+</a>
        </div>
    </div>
   

    <p>Totaal (&euro;) <span class="best__span span--totaal"></span</p>
    

        <div class="bestelling">
            <a href="winkelmandje.php" id="bestellen" class="btn btn--bestelling btn--winkelmand">In Winkelmand<span class="border-bestelling"></span></a>
        </div> 
<?php endforeach; ?>
</div>
</section>

 <?php include_once("nav.inc.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script/getPrice.js"></script>
    <script src="script/getOrder.js"></script>

</body>
</html>