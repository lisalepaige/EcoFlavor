<?php

include_once("classes/Categorie.class.php");

    $bio = Categorie::GetBio();  

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
        <h3>Bioproducten</h3>
        
        <div class="producten">
            
            <div class="prod">
            <?php foreach($bio as $b): ?>
            <div class="prod__grid bio__border">
                <a href="search.php?search=<?php echo $b['groep_naam']; ?>">
                    <img class="prod__img" src="images/<?php echo $b['groep_image']; ?>" alt="bio">
                    <p><?php echo $b['groep_naam']; ?></p>
                </a>
            </div>
            <?php endforeach; ?>
            </div>
            
            
        </div>
 
    </main>

    <?php include_once("nav.inc.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html>