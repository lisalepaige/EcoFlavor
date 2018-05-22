<?php
  
  spl_autoload_register(function($class) {
    include_once("classes/" . $class . ".class.php");
});

    if ( isset($_GET['search']) ){
        $search = $_GET['search'];
        $product = Product::searchProduct($search);  

        header("Location: search.php?search=$search");

    }


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

       <?php include_once("nav.inc.php"); ?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="script/getLocation.js"></script>

</body>
</html>