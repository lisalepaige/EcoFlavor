<?php
    spl_autoload_register(function($class) {
        include_once("classes/" . $class . ".class.php");
    });

    $winkel = Handelaar::getHandelaars();

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>

<body class="body__afrekenen">

<header>
    <a href="index.php"><img src="images/arrow.png" alt="back" class="arrow"></a>
    <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
    <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

<div class="ecokoerier koerier__winkelmand">
       <div class="eco__flex eco__winkelmand">
        <h3 class="eco__h3 best__ecotitel">Mijn boodschappen thuis laten leveren via ecokoeriers</h3>
       </div>
</div>


<form action="" class="form__eco">
<div class="center">
    <label class="label__eco" for="name">Naam *</label>
    <input class="input__eco input__naam" name="name" type="text" placeholder="Voornaam"> 
    <input class="input__eco input__naam" name="name" type="text" placeholder="Achternaam">

    <label class="label__eco" for="straat">Straat *</label>
    <input class="input__eco" name="street" type="text" placeholder="Bruul">

    <label class="label__eco" for="nr">Nr *</label>
    <input class="input__eco" type="text" placeholder="42" name="nr">

    <label class="label__eco" for="bus">Bus</label>
    <input class="input__eco" type="text" placeholder="B12" name="bus">

    <label class="label__eco" for="postcode">Postcode *</label>
    <input class="input__eco" type="text" name="postocde" placeholder="2800">

    <label class="label__eco" for="winkel">Kies Winkel *</label>
    <select name"winkel" class="input__eco input__select">
    <option value="Selecteer winkel">Selecteer winkel</option>

        <?php foreach($winkel as $w): ?>

            <option value="<?php echo $w['handelaar_naam']; ?>"><?php echo $w['handelaar_naam']; ?></option>
            
        <?php endforeach; ?>
    </select>

    <label class="label__eco" for="levertijd">Gewenste levertijd *</label>
    <select name="levertijd" class="input__eco input__naam input__levertijd">
        <option value="Uur">Uur</option>
        <option value="12u - 14u">12u - 14u</option>
        <option value="18u30 - 20u30">18u30 - 20u30</option>
    </select>
    <select name="levertijd" class="input__eco input__naam input__levertijd">
        <option value="Dag">Dag</option>
        <option value="Vandaag">Vandaag</option>
        <option value="Andere dag...">Andere dag...</option>
    </select>
</div>

    </div class="form__ecobutton">  
       <a href="#" id="leveren" class="btn btn--bestelling">Bevestigen<span class="border border-bestelling border--mand"></span></a>
</div>

</form>



<?php include_once("nav.inc.php"); ?>

</body>
</html>