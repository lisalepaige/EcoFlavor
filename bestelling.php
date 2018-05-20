<?php

    include_once("classes/Product.class.php");
    include_once("classes/Handelaar.class.php");

$id = $_GET['id'];
$oneProduct = Product::ShowOne($id);

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body class="bestellingpage">

<header>
    <a href="detail.php?id=<?php echo $f['id']; ?>"><img src="images/arrow.png" alt="back"></a>
    <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
    <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

<main class="main__best">
<?php foreach($oneProduct as $p): ?>
    <h4 class="best__h4"><?php echo $p['handelaar_naam']; ?></h4>
    <h3 class="best__h3"><?php echo $p['product_naam']; ?></h3>
    <img class="best__img" src="images/<?php echo $p['product_img']; ?>" alt="product">
<?php endforeach; ?>
</main>

<h3 class="best__h3">Bestelling</h4>

<section class="section__best">
<div class="bestelling">
<?php foreach($oneProduct as $p): ?>
    <p class="best__stukprijs">Stukprijs (€)<span class="best__span"><?php echo $p['product_prijs']; ?></span></p>

    <div class="best_aantal">
    <p>Aantal</p>

        <div class="controls">
            <a href="#" class="min">-</a>
            <p class="qty">1</p>
            <a href="#" class="plus">+</a>
        </div>
    </div>
   

    <p>Totaal (€) <span class="best__span span--totaal"></span</p>
    

        <div class="bestelling">
            <a href="winkelmand.php" class="btn--bestelling">In Winkelmand<span class="border-bestelling"></span></a>
        </div> 
<?php endforeach; ?>
</div>
</section>

 <?php include_once("nav.inc.php"); ?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="script/getPrice.js"></script>

</body>
</html>