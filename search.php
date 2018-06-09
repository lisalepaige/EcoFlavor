<?php

spl_autoload_register(function($class) {
    include_once("classes/" . $class . ".class.php");
});

$verification = Handelaar::Verification();

if ( isset($_GET['search']) ){
    $search = $_GET['search'];
    $found = Product::searchProduct($search);        
}



?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body>

<header>
    <a href="index.php"><img src="images/arrow.png" alt="back" class="arrow"></a>
    <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
    <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

   <div class="search searchF">
       <form action="" method="get" class="searchNav">
        <input type="search" name="search" placeholder="zoek jouw product" class="search__input">
        <input type=image src=images/search.png alt="Submit">
    </form>
    </div> 

     <div class="search__filter">
        <label class="filters" for="filter">Filter</label>
        <select name="filter" class="filter__options">
            <option value="Kies"></option>
            <option value="Alfabetisch">Alfabetisch</option>
            <option value="Prijs">Prijs</option>
        </select>
    </div> 
 
    <main class="searchP">
        <h2 class="searchP__titel"><?php echo $search; ?></h2>

        <?php foreach($found as $f): ?>

        <div class="searchP__list">
            <img src="images/<?php echo $f['product_img']; ?>" alt="product" class="searchP__img" >
            <div class="searchP__grid">
                <h4 class="searchP__pnaam" data-groep="<?php echo $f['groep_naam']; ?>"><?php echo $f['product_naam']; ?></h4>
                <p class="searchP__hnaam" data-id="<?php echo $f['handelaar_id']; ?>"><?php echo $f['handelaar_naam']; ?>
                <?php if ($f['verificatie'] == 1): ?>
                    <img src="images/verificatie.png" alt="verificatie" class="searchP__v"></p>
                <?php endif; ?>          
                <p class="searchP__afstand"></p>
                <p class="searchP__prijs">&euro; <?php echo $f['product_prijs']; ?></p>
            </div>  
            <a href="detail.php?product_id=<?php echo $f['product_id']; ?>" class="btn btn--searchP">Lees Meer<span class="border"></span></a>
        </div>
        <?php endforeach; ?>

    </main>

   <?php include_once("nav.inc.php"); ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="script/getLocation.js"></script>
</body>
</html>