<?php
    include_once("classes/Product.class.php");
    include_once("classes/Handelaar.class.php");

    $products = Product::ShowProduct();
    $verification = Handelaar::Verification();

    $id = $_GET['id']; 
    echo $id;

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

    <div class="detail">
        <img src="images/<?php echo $p['product_img']; ?>" alt="product" class="detail__img" >
    </div>

    <div class="information">
        <p class="info__hnaam"><?php echo $p['naam']; ?>
        <?php if ($p['verificatie'] == 1): ?>
            <img src="images/verificatie.png" alt="verificatie" class="searchP__v">
        <?php endif; ?>
        <div class="info__flex">
            <h4 class="searchP__pnaam pnaam--info"><?php echo $p['product_naam']; ?></h4>
            <p class="searchP__prijs prijs--info">€ <?php echo $p['product_prijs']; ?></p>
        </div>
        <div class="info">
            <p class="info__vers"><?php echo $p['vers']; ?></p>
            <p class="info__seizoen">Seizoensproduct: <span><?php echo $p['seizoensproduct']; ?></span></p>
            <p class="info__oorsprong">Oorsprong: <span><?php echo $p['oorsprong']; ?></span></p>
            <p class="info__bio"><?php echo $p['bio']; ?></p>
            <p class="info__fair"><?php echo $p['fairtrade']; ?></p>
        </div>
    </div>

    <?php endforeach; ?>
</main>

</body>
</html>