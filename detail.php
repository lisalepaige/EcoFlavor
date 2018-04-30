<?php
    include_once("classes/Product.class.php");

    $products = Product::ShowProduct();

?><!DOCTYPE html>

<?php include_once("head.inc.php"); ?>


<body>
    
<header>
    <a href="search.php?search="$search""><img src="images/arrow.png" alt="back"></a>
    <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
    <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

   <div class="search">
       <form action="" method="get" class="searchNav">
        <input type="search" name="search" placeholder="zoek jouw product" class="search__input">
        <input type=image src=images/search.png alt="Submit">
    </form>
    </div>

<main>
    <?php foreach($products as $p): ?>

    <div>
        <img src="images/<?php echo $p['product_img']; ?>" alt="product" class="searchP__img" >
    </div>

    <div>
        <p class="searchP__hnaam"><?php echo $p['naam']; ?>
        <h4 class="searchP__pnaam"><?php echo $p['product_naam']; ?></h4>
        <p class="searchP__prijs">€ <?php echo $p['product_prijs']; ?></p>
        <div class="info">
            <p class="info__vers"></p>
            <p class="info__seizoen">Seizoensproduct: <?php echo $p['seizoensproduct']; ?></p>
            <p class="info__oorsprong">Oorsprong: <?php echo $p['oorsprong']; ?></p>
            <p class="info__bio"></p>
            <p class="info__fair"></p>
        </div>
    </div>

    <?php endforeach; ?>
</main>

</body>
</html>