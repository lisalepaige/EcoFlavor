<?php
    spl_autoload_register(function($class) {
        include_once("classes/" . $class . ".class.php");
    });

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>

<body class="body__afrekenen">

<header>
    <a href="index.php"><img src="images/arrow.png" alt="back" class="arrow"></a>
    <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
    <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>
      
 <h3 class="h3__toevoegen">Product toevoegen</h3>
 

<form action="" class="form__toevoegen">
<div class="center">
    <label class="label__eco label__toevoegen" for="name">Naam product *</label>
    <input id="naamproduct" class="input__eco" name="name" type="text" placeholder="Jonagold Appel"> 

    <label class="label__eco label__toevoegen" for="groep">Groepsnaam *</label>
    <input id="groepsnaam" class="input__eco" name="groep" type="text" placeholder="appel, banaan, rund, kaas, ...">

    <label class="label__eco label__toevoegen" for="handelaarsnaam">Naam Handelaar *</label>
    <input id="naamhandelaar" class="input__eco" name="handelaarsnaam" type="text" placeholder="">

     <label class="label__eco" for="straat">Straat *</label>
    <input id="straat" class="input__eco" name="street" type="text" placeholder="Bruul">

    
    <label class="label__eco" for="nr">Nr *</label>

    <div class="toevoegen__flexbox">
        <input id="nummer" class="input__eco inputtext__toevoegen input__nr" type="text" placeholder="42" name="nr">

        <div class="postcode__flexbox">
            <label class="label__eco" for="postcode">Postcode *</label>
            <input id="postcode" class="input__eco inputtext__toevoegen" type="text" name="postocde" placeholder="2800">
        </div>
    </div>

    <label class="label__eco" for="gemeente">Gemeente *</label>
    <input id="gemeente" class="input__eco" type="text" name="gemeente" placeholder="Mechelen">

    <label class="label__eco label__toevoegen" for="seizoen">Seizoen *</label>
    <div class="checkboxes">
        <div><input class="input__toevoegen" type="checkbox" value="januari" name="seizoen">Januari</div>
        <div><input class="input__toevoegen" type="checkbox" value="februari" name="seizoen">Februari</div>
        <div><input class="input__toevoegen" type="checkbox" value="maart" name="seizoen">Maart</div>
        <div><input class="input__toevoegen" type="checkbox" value="april" name="seizoen">April</div>
        <div><input class="input__toevoegen" type="checkbox" value="mei" name="seizoen">Mei</div>
        <div><input class="input__toevoegen" type="checkbox" value="juni" name="seizoen">Juni</div>
        <div><input class="input__toevoegen" type="checkbox" value="juli" name="seizoen">Juli</div>
        <div><input class="input__toevoegen" type="checkbox" value="augustus" name="seizoen">Augustus</div>
        <div><input class="input__toevoegen" type="checkbox" value="september" name="seizoen">September</div>
        <div><input class="input__toevoegen" type="checkbox" value="oktober" name="seizoen">Oktober</div>
        <div><input class="input__toevoegen" type="checkbox" value="november" name="seizoen">November</div>
        <div><input class="input__toevoegen" type="checkbox" value="december" name="seizoen">December</div>
    </div>

    <label class="label__eco label__toevoegen" for="categorie">Categorie</label>
        <div class="checkboxes--cat">
            <div><input class="input__toevoegen" type="checkbox" value="bio" name="categorie">Bio</div>
            <div><input class="input__toevoegen" type="checkbox" value="fairtrade" name="categorie">Fairtrade</div>
            <div><input class="input__toevoegen" type="checkbox" value="vers" name="categorie">Vers</div>
        </div>


    <label class="label__eco label__toevoegen" for="oorsprong">Oorsprong *</label>
    <input id="oorsprong" class="input__eco" type="text" placeholder="stad/dorp" name="oorsprong">    

    <label class="label__eco label__toevoegen" for="prijs">Kostprijs/kg *</label>
    <input id="prijs" class="input__eco" name="prijs" type="text" placeholder="2.55">

    <label class="label__eco label__toevoegen" for="prijs">Foto product*</label>

    </div class="form__ecobutton">  
        <a href="#" id="toevoegen" class="btn btn--bestelling">Plaatsen<span class="border border-bestelling border--mand"></span></a>
        <a href="#" class="annuleren__toevoegen">Annuleren</a>
    </div>

</div>

</form>

<?php include_once("nav.inc.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script/getNewProduct.js"></script>

</body>
</html>