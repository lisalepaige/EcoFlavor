<?php
    include_once("classes/Product.class.php");

    if ( isset($_GET['search']) ){
        $search = $_GET['search'];
        $product = Product::searchProduct($search);  

        header("Location: search.php?search=$search");

    }


?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body>

<p>Your Location: <span id="location"></span></p>
    
<header>
        <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
        <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

   <div class="search">
       <form action="" method="get" class="searchNav">
        <input type="search" name="search" placeholder="zoek jouw product" class="search__input">
        <input type=image src=images/search.png alt="Submit">
    </form>
    </div>

   <div class="maand">
        <h1 class="maand__h1">Product van de maand</h1>
        <h2 class="maand__h2">De Prei</h2>
        <div class="maand__grid">
        <p class="maand__p">Ben je aan het koken? Voeg dat wat prei toe aan het gerecht… 
        het zorgt voor een rijkere en zachtere smaak. 
        Een prei is ook ideaal als basis voor een soep,
        maar het kan evengoed gestoomd of gebakken worden in boter.</p>
        <a href="maandProduct.php" class="btn">Lees Meer<span class="border"></span></a>
        </div>
   </div>
   <main class="categoriën">
        <h3>Categorieën</h3>
        <div class="categorie">
            <a href="#">
            <div class="cat cat__bio">
                <img src="images/bioproducten.png" alt="bio">
                <p>Bio Producten</p>
            </div>
            </a>

            <a href="#">
            <div class="cat cat__streek">
                <img src="images/streekproducten.png" alt="streek">
                <p>Streekproducten</p>
            </div>
            </a>

            <a href="fairtrade.php" class="afair">
            <div class="cat cat__fair">
                <img src="images/fairtradeproducten.png" alt="fairtrade">
                <p>Fairtrade Producten</p>
            </div>
            </a>

            <a href="#">
            <div class="cat cat__seizoen">
                <img src="images/seizoensproducten.png" alt="seizoen">
                <p>Seizoensproducten</p>
            </div>
            </a>
        </div>
   </main>

   <div class="ecokoerier">
       <div class="eco__flex">
        <h3 class="eco__h3">Handenvrij Shoppen</h3>
        <p class="eco__p">Sinds december '15 startten de ECOkoeriers met een unieke dienstverlening naar de shoppers.
        Laat je aankopen achter in de winkels, de ECOkoeriers pikken ze voor je op en zorgen ervoor dat ze later die dag bij je thuis geleverd worden. </p>
        <a href="ecokoeriers.php" class="btn btn--eco">Lees Meer<span class="border border--eco"></span></a>
       </div>
       </div>

       <?php include_once("nav.inc.php"); ?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="script/getLocation.js"></script>

</body>
</html>