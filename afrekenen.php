<?php

spl_autoload_register(function($class) {
    include_once("classes/" . $class . ".class.php");
});

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>

<body class="body__afrekenen">

<header>
    <a href="winkelmandje.php"><img src="images/arrow.png" alt="back"></a>
    <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
    <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

<section class="jouwbestelling">
    <h3 class="jouwbestelling__h3">Jouw bestelling</h3>
</section>

<main class="betaal">
    <h5 class="betaal__h5">Selecteer betaalmethode</h5>
    <div class="rekening__flex">
        <input type="radio" id="bancontact" class="radioButton" name="betaalmethode">
        <label for="betaalmethode">Bancontact Mister Cash</label>
        <img src="images/bankcontact.png" alt="bancontact" class="rekening__img">
    </div>
    <div class="rekening__flex">
        <input type="radio" id="paypal" class="radioButton" name="betaalmethode">
        <label for="betaalmethode">Paypal</label>
        <img src="images/paypal.png" alt="paypal" class="rekening__img paypal">
    </div>
    <div class="rekening__flex">
        <input type="radio" id="creditcard" class="radioButton" name="betaalmethode">
        <label for="betaalmethode">Creditcard</label>
        <img src="images/visa.png" alt="creditcard" class="rekening__img visa">
    </div>

     </div>  
       
            <a href="" id="bevestigen" class="btn btn--bestelling">Bevestigen<span class="border border-bestelling border--mand"></span></a>
    </div>


</main>

 <?php include_once("nav.inc.php"); ?>

</body>

<script>

var bancontact = document.querySelector('#bancontact');
var paypal = document.querySelector('#paypal');
var creditcard = document.querySelector('#creditcard');

var button = document.querySelector('#bevestigen');

bancontact.addEventListener("click", function(e){
    button.href = "https://www.bancontact.com/en/online-payments";
});

paypal.addEventListener("click", function(e){
    button.href = "https://www.paypal.com/be/home?locale.x=nl_BE";
});

creditcard.addEventListener("click", function(e){
    button.href = "https://www.beobank.be/nl/particulier/betalen/kredietkaarten/gold-visa?gclid=Cj0KCQjw3InYBRCLARIsAG6bfMQOrEwTshd0pi2aeU0dE-2jHZQoBP9VcCiUBQu3tZPgezeY5CkkmcsaAliGEALw_wcB";
});

</script>

</html>