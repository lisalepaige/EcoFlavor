<?php

include_once("classes/Categorie.class.php");
include_once("classes/Product.class.php");

    $bio = Categorie::GetBio();  

    if ( isset($_GET['search']) ){
        $search = $_GET['search'];
        $product = Product::searchProduct($search);  

        header("Location: search.php?search=$search");

    }
    
$seizoen = Categorie::GetSeizoen();  

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>



<body>
    <header>
        <a href="index.php"><img src="images/arrow.png" alt="back" class="arrow"></a>
        <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
        <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
    </header>

    <div class="search">
       <form action="" method="get" class="searchNav">
        <input type="search" name="search" placeholder="zoek jouw product" class="search__input">
        <input type=image src=images/search.png alt="Submit">
    </form>
    </div>

    <div class="cat__filter">
        <label class="filters" for="filter">Filter</label>
        <select name="filter" class="filter__options">
            <option value="Kies"></option>
            <option value="Fruit">Fruit</option>
            <option value="Groente">Groente</option>
            <option value="Vlees">Vlees</option>
            <option value="Vis">Vis</option>
            <option value="Zuivelproduct">Zuivelproduct</option>
        </select>
    </div>

    <main class="fairtrade">
        <h3>Seizoensproducten</h3>
         
        <div class="producten">
            
            <div class="prod">
            <?php foreach($seizoen as $s): ?>
            <div class="prod__grid seizoen__border">
                <a href="search.php?search=<?php echo $s['groep_naam']; ?>">
                    <img class="prod__img" src="images/<?php echo $s['groep_image']; ?>" alt="seizoen">
                    <p><?php echo $s['groep_naam']; ?></p>
                </a>
            </div>
            <?php endforeach; ?>
            </div>
            
        </div>

    </main>

    <?php include_once("nav.inc.php"); ?>
    
</body>
</html>