<?php
    include_once("classes/Product.class.php");
    include_once("classes/Handelaar.class.php");

    $id = $_GET['id'];

    $oneProduct = Product::ShowOne($id);
    $verification = Handelaar::Verification();

    $product = Product::ShowProduct(); 
    
    //get map
    $viewmap = Handelaar::getMap($id);
    $map = $viewmap['map'];
    var_dump($map);
    
    //calculate distance
    $address = Handelaar::getAddress();
    $straatnaam = $address['straatnaam'];
    $huisnr = $address['huisnummer'];
    $postcode = $address['postcode'];
    $gemeente = $address['gemeente'];

    $addressFrom = 'Hondstraatje 9, 3460 Bekkevoort';
    $addressTo = $straatnaam . " " . $huisnr . ", " . $postcode . " " . $gemeente;
    $unit = "K";

    $calculateDis = Product::getDistance($addressFrom, $addressTo, $unit);
    var_dump($calculateDis);
    var_dump($addressTo);

?><!DOCTYPE html>

<?php include_once("head.inc.php"); ?>


<body class="detailphp">
    
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
    <?php foreach($oneProduct as $p): ?>

    <div class="detail">
        <img src="images/<?php echo $p['product_img']; ?>" alt="product" class="detail__img" >
    </div>

    <div class="information">
        <p class="info__hnaam"><?php echo $p['handelaar_naam']; ?>
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

        <div class="bestelling">
        <a href=".php" class="btn--bestelling">Bestelling plaatsen<span class="border-bestelling"></span></a>
        </div>  
    </div>


    <div class="uren">
        <img src="images/klok.png" alt="klok" class="uren__img">
        <h3 class="uren__titel">Openingsuren</h3>
        <div class="dagen">
            <p class="uren__ma" "uren__dagen">Maandag: <span><?php echo $p['maandag_start']; ?>  - </span></p>
            <p class="uren__stop" "uren__dagen"><span> <?php echo $p['maandag_stop']; ?></span></p>

            <p class="uren__di" "uren__dagen">Dinsdag: <span><?php echo $p['dinsdag_start']; ?>  - </p>
            <p class="uren__stop" "uren__dagen"><span> <?php echo $p['dinsdag_stop']; ?></span></p>

            <p class="uren__wo" "uren__dagen">Woensdag: <span><?php echo $p['woensdag_start']; ?>  - </p>
            <p class="uren__stop" "uren__dagen"><span> <?php echo $p['woensdag_stop']; ?></span></p>

            <p class="uren__do" "uren__dagen">Donderdag: <span><?php echo $p['donderdag_start']; ?>  - </p>
            <p class="uren__stop" "uren__dagen"><span> <?php echo $p['donderdag_stop']; ?></span></p>

            <p class="uren__vr" "uren__dagen">Vrijdag: <span><?php echo $p['vrijdag_start']; ?>  - </p>
            <p class="uren__stop" "uren__dagen"><span> <?php echo $p['vrijdag_stop']; ?></span></p>

            <p class="uren__za" "uren__dagen">Zaterdag: <span><?php echo $p['zaterdag_start']; ?>  - </p>
            <p class="uren__stop" "uren__dagen"><span> <?php echo $p['zaterdag_stop']; ?></span></p>

            <p class="uren__zo" "uren__dagen">Zondag: <span><?php echo $p['zondag_start']; ?>  - </p>
            <p class="uren__stop" "uren__dagen"><span> <?php echo $p['zondag_stop']; ?></span></p>

        </div>
    </div>
    </main>   

    <div class="contact">
        <h3 class="contact__titel">Contact</h3>
        <h4 class="contact__bijtitel">Breng ons een bezoekje</h4>
        <div class="adres">
            <p class="adres__info"> <?php echo $p['straatnaam']; ?> </p>
            <p class="adres__info"> <?php echo $p['huisnummer']; ?> </p>
            <p class="adres__info"> <?php echo $p['postcode']; ?> </p>
            <p class="adres__info"> <?php echo $p['gemeente']; ?></p>
        </div>
            <p class="adres__mail"><?php echo $p['handelaar_mail']; ?></p>
            <p>0<?php echo $p['telefoon']; ?></p>
        
    </div>

    <?php endforeach; ?>

     <iframe width="100%" height="400" src="<?php echo $map ?>"></iframe>

    <div class="ecokoerier">
       <div class="eco__flex eco__leveren" >
        <h3 class="eco__titel">Mijn boodschappen thuis laten leveren via de ecokoeriers</h3>
        <a href="ecokoeriers.php" class="btn btn--leveren">Leveren<span class="border border--eco"></span></a>
       </div>
       </div>

    <?php include_once("nav.inc.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script/getLocation.js"></script>

    <script>
        
    </script>
</body>
</html>