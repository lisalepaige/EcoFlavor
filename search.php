<?php

include_once("classes/Product.class.php");
include_once("classes/Handelaar.class.php");

$verification = Handelaar::Verification();

if ( isset($_GET['search']) ){
    $search = $_GET['search'];
    $product = Product::searchProduct($search);        
}

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body>

    <?php include_once("nav.inc.php"); ?>  
 
    <main class="searchP">
        <h2 class="searchP__titel"><?php echo $search; ?></h2>

        <?php foreach($product as $p): ?>

        <div class="searchP__list">
            <img src="images/<?php echo $p['product_img']; ?>" alt="product" class="searchP__img" >
            <div class="searchP__grid">
                <h4 class="searchP__pnaam"><?php echo $p['product_naam']; ?></h4>
                <p class="searchP__hnaam"><?php echo $p['naam']; ?>
                <?php if ($p['verificatie'] == 1): ?>
                    <img src="images/verificatie.png" alt="verificatie" class="searchP__v"></p>
                <?php endif; ?>
                <p class="searchP__afstand">600m</p>
                <p class="searchP__prijs">€ <?php echo $p['product_prijs']; ?></p>
            </div>  
            <a href="detail.php?id=<?php echo $p['id']; ?>" class="btn btn--searchP">Lees Meer<span class="border"></span></a>
        </div>
        <?php endforeach; ?>

    </main>

</body>
</html>