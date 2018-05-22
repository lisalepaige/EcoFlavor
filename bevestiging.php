<?php

spl_autoload_register(function($class) {
    include_once("classes/" . $class . ".class.php");
});

?><!DOCTYPE html>
<?php include_once("head.inc.php"); ?>
<body>

    <header>
        <a href="index.php"><img src="images/arrow.png" alt="back" class="arrow"></a>
        <a href="index.php"><img src="images/home.png" alt="home" class="header__home"></a>
        <a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
</header>

<h3 class="best__h3">Uw bestelling is geplaatst</h3>

<img src="images/vink.png" class="vink" alt="bevestiging">


<div class="ecokoerier koerier__winkelmand">
       <div class="eco__flex eco__winkelmand">
        <h3 class="eco__h3 best__ecotitel">Mijn boodschappen thuis laten leveren via ecokoeriers</h3>
        <a href="ecokoeriers.php" class="btn btn--eco btn--ecowinkelmand">Leveren<span class="border border--eco"></span></a>
       </div>
</div>




   <?php include_once("nav.inc.php"); ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   

</body>
</html>