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

    <header>
    <a href="index.php"><img src="images/arrow.png" alt="back"></a>
        <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
        <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

   <div class="search">
       <form action="" method="get" class="searchNav">
        <input type="search" name="search" placeholder="zoek jouw product" class="search__input">
        <input type=image src=images/search.png alt="Submit">
    </form>
    </div>  
 
    <main class="searchP">
        <h2 class="searchP__titel"><?php echo $search; ?></h2>

        <?php foreach($product as $p): ?>

        <div class="searchP__list">
            <img src="images/<?php echo $p['product_img']; ?>" alt="product" class="searchP__img" >
            <div class="searchP__grid">
                <h4 class="searchP__pnaam"><?php echo $p['product_naam']; ?></h4>
                <p class="searchP__hnaam"><?php echo $p['handelaar_naam']; ?>
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

   <?php include_once("nav.inc.php"); ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>