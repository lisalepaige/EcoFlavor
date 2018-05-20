<?php

    include_once("classes/Product.class.php");
    include_once("classes/Handelaar.class.php");

$id = $_GET['id'];
$oneProduct = Product::ShowOne($id);

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body>

<header>
    <a href="#"><img src="images/arrow.png" alt="back"></a>
    <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
    <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

<main>
<?php foreach($oneProduct as $p): ?>
    <h4><?php echo $p['handelaar_naam']; ?></h4>
    <h3><?php echo $p['product_naam']; ?></h3>
    <img src="images/<?php echo $p['product_img']; ?>" alt="product">
<?php endforeach; ?>
</main>

<h4>Bestelling</h4>

<section>
<?php foreach($oneProduct as $p): ?>
    <p>Stukprijs</p>
    <p><?php echo $p['product_prijs']; ?></p>

    <p>Aantal</p>

    <p>Totaal (excl. BTW)</p>
    <p></p>

    <p>BTW 6%</p>
    <p></p>

    <p>Totaal</p>
    <p></p>

        <div class="bestelling">
            <a href="winkelmand.php" class="btn--bestelling">In Winkelmand<span class="border-bestelling"></span></a>
        </div> 
<?php endforeach; ?>
</section>

</body>
</html>