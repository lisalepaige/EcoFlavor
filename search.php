<?php

include_once("classes/Product.class.php");

if ( isset($_GET['search']) ){
    $search = $_GET['search'];
    $product = Product::searchProduct($search);
        echo $search;  

        
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 

    <title>EcoFlavor</title>
</head>
<body>

    <?php include_once("nav.inc.php"); ?>  
 
    <main class="searchP">
        <h2 class="searchP__titel">Appelen</h2>

        <?php foreach($product as $p): ?>

        <div class="searchP__list">
            <img src="images/<?php echo $p['product_img']; ?>" alt="product" class="searchP__img" >
            <div class="searchP__grid">
                <h4 class="searchP__pnaam"><?php echo $p['product_naam']; ?></h4>
                <p class="searchP__hnaam"><?php echo $p['naam']; ?>
                <img src="images/verificatie.png" alt="verificatie" class="searchP__v"></p>
                <p class="searchP__afstand">600m</p>
                <p class="searchP__prijs">€ <?php echo $p['product_prijs']; ?></p>
            </div>  
            <a href="#" class="btn btn--searchP">Lees Meer<span class="border"></span></a>
        </div>
        <?php endforeach; ?>

    </main>

</body>
</html>