<?php

include_once("classes/Categorie.class.php");
$fair = Categorie::GetFairtrade();  

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>



<body>
    <header>
        <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
        <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
    </header>

    <main class="fairtrade">
        <h3>Fairtradeproducten</h3>
        

        <?php foreach($fair as $f): ?>
        <div class="producten">
            
            <div class="prod">
                <img src="images/<?php echo $f['product_img']; ?>" width="200px" alt="bio">
                <p><?php echo $f['product_naam']; ?></p>
            </div>
            
            
        </div>
        <?php endforeach; ?>
        


    </main>

    <?php include_once("nav.inc.php"); ?>
    
</body>
</html>