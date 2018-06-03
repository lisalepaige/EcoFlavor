<?php
  
spl_autoload_register(function($class) {
    include_once("classes/" . $class . ".class.php");
});

    if ( isset($_GET['search']) ){
        $search = $_GET['search'];
        $product = Product::searchProduct($search);  

        header("Location: search.php?search=$search");

    }


?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body>
    
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
        <h2 class="maand__h2">De Aardbei</h2>
        <div class="maand__grid">
        <p class="maand__p">Aardbeien staan bekend als het seizoensproduct tijdens zonnige zomerdagen.
        De periode juni-juli vormt nog steeds het hoofdseizoen met de grootste aanvoer.
        In België is vooral Hoogstraten gekend voor zijn aardbeienteelt.</p>
        <a href="maand.php" class="btn btn--maand">Lees Meer<span class="border"></span></a>
        </div>
   </div>
   <main class="categoriën">
        <h3>Categorieën</h3>
        <div class="categorie">
            <a href="bio.php">
            <div class="cat cat__bio">
                <img src="images/bioproducten.png" alt="bio">
                <p>Bioproducten</p>
            </div>
            </a>

            <a href="streek.php">
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

            <a href="seizoen.php">
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