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
    <section class="maandproduct">
        <h2 class="maand__titelh2">Product van de maand</h2>
        <h3 class="maand__titelh3">De Aardbei</h3>
        <h5 class="maand__titelh5">Seizoensproduct: juni - september</h5>
    </section>

    <div class="info__maand">
        <ul>
            <li><p>De aardbei is een kruidachtige plant die heel oud kan worden. In de praktijk is het meestal een éénjarige teelt. 
            </p></li>
            <li><p>Er bestaat een ruime keuze aan aardbeivariëteiten met ieder zijn eigen specifieke kwaliteit- en smaakeigenschappen.
            </p></li>
            <li><p>Aardbeien zijn rijk aan vitamine C en vezels en zijn caloriearm. Ze bevatten koolhydraten, calcium, ijzer, natrium en vitamine B1 en B2.
            </p></li>
            <li><p>Aardbeiensiroop: Snijd de gespoelde aardbeien in stukjes, strooi er royaal suiker over. Laat enkele uren trekken. De aardbeien geven sap af en dat is heel lekker over roomijs, bij melk, yoghurt, karnemelk, pudding, enz.</p></li>
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