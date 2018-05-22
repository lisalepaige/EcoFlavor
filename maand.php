<?php

spl_autoload_register(function($class) {
    include_once("classes/" . $class . ".class.php");
});

$verification = Handelaar::Verification();

$maand = Product::ProductVDMaand();

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

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body>

    <header>
        <a href="index.php"><img src="images/arrow.png" alt="back" class="arrow"></a>
        <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
        <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>
    <section>
        <h2 class="searchP__titel">Product van de maand</h2>
        <h3>De Prei</h3>
        <h5>Seizoensproduct: december - mei</h5>
    </section>

    <div>
        <ul>
            <li><p>Prei is een heel veelzijdig en dankbaar ingrediënt in de keuken. De groente past in zowat alle gerechten. En met fijne reepjes preiwit of -groen kan je je gerechten ook altijd mooi afwerken.
            </p></li>
            <li><p>Ze is een belangrijke bron van vitamine A (vooral in het groene gedeelte) en vezels.
            </p></li>
            <li><p>Prei is lekker in soep, stoemp, quiche of een salade. Of gebruik haar als smaakmaker in wokgerechten, stoofpotjes of ovenschotels. Prei kan ook het witloof vervangen in de typisch Belgische hamrolletjes met witloof.
            </p></li>
            <li><p>Bij het bereiden slinkt het volume van prei nogal fel. Daarom reken je het best 400 à 500 g rauwe prei per persoon.</p></li>
        </ul>
    </div>

        <main class="searchP">
        <?php foreach($maand as $m): ?>

        <div class="searchP__list">
            <img src="images/<?php echo $m['product_img']; ?>" alt="product" class="searchP__img" >
            <div class="searchP__grid">
                <h4 class="searchP__pnaam" data-groep="<?php echo $m['groep_naam']; ?>"><?php echo $m['product_naam']; ?></h4>
                <p class="searchP__hnaam" data-id="<?php echo $m['handelaar_id']; ?>"><?php echo $m['handelaar_naam']; ?>
                <?php if ($m['verificatie'] == 1): ?>
                    <img src="images/verificatie.png" alt="verificatie" class="searchP__v"></p>
                <?php endif; ?>
                <p class="searchP__afstand"><?php echo $calculateDis; ?></p>
                <p class="searchP__prijs">&euro; <?php echo $m['product_prijs']; ?></p>
            </div>  
            <a href="detail.php?product_id=<?php echo $m['product_id']; ?>" class="btn btn--searchP">Lees Meer<span class="border"></span></a>
        </div>
        <?php endforeach; ?>

    </main>

   <?php include_once("nav.inc.php"); ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="script/getLocation.js"></script>
</body>
</html>