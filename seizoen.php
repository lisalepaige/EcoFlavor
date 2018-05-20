<?php

include_once("classes/Categorie.class.php");
$seizoen = Categorie::GetSeizoen();  

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

    <main class="fairtrade">
        <h3>Seizoensproducten</h3>
         
        <div class="producten">
            
            <div class="prod">
            <?php foreach($seizoen as $s): ?>
            <div class="prod__grid">
                <a href="search.php">
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