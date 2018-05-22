<?php

include_once("classes/Categorie.class.php");
$fair = Categorie::GetFairtrade();  

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

    <main class="fairtrade">
        <h3>Fairtradeproducten</h3>
        

        
        <div class="producten">
            
            <div class="prod">
            <?php foreach($fair as $f): ?>
            <div class="prod__grid">
                <a href="search.php?search=<?php echo $s['groep_naam']; ?>">
                    <img class="prod__img" src="images/<?php echo $f['groep_image']; ?>" alt="fairtrade">
                    <p><?php echo $f['groep_naam']; ?></p>
                </a>
            </div>
            <?php endforeach; ?>
            </div>
            
            
        </div>
        
        


    </main>

    <?php include_once("nav.inc.php"); ?>
    
</body>
</html>