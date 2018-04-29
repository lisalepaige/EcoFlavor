<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <title>EcoFlavor</title>
</head>
<body>
   <header>
        <img src="images/home.png" alt="home" class="header__home">
        <img src="images/instellingen.png" alt="instellingen">
   </header>

   <div class="search">
        <input type="search" value="zoek jouw product" class="search__input">
        <img src="images/search.png" alt="search" class="search__icon">
    </div>

   <div class="maand">
        <h1 class="maand__h1">Product van de maand</h1>
        <h2 class="maand__h2">De Prei</h2>
        <div class="maand__grid">
        <p class="maand__p">Ben je aan het koken? Voeg dat wat prei toe aan het gerecht… 
        het zorgt voor een rijkere en zachtere smaak. 
        Een prei is ook ideaal als basis voor een soep,
        maar het kan evengoed gestoomd of gebakken worden in boter.</p>
        <a href="maandProduct.php" class="btn">Lees Meer<span class="border"></span></a>
        </div>
   </div>
   <main class="categoriën">
        <h3>Categorieën</h3>
        <div class="categorie">
            <a href="#">
            <div class="cat cat__bio">
                <img src="images/bio.png" alt="bio">
                <p>Bio Producten</p>
                <span class="border borderCat"></span>
            </div>
            </a>

            <a href="#">
            <div class="cat cat__streek">
                <img src="images/streek.png" alt="streek">
                <p>Streekproducten</p>
                <span class="border borderCat"></span>
            </div>
            </a>

            <a href="#" class="afair">
            <div class="cat cat__fair">
                <img src="images/fairtrade.png" alt="fairtrade">
                <p>Fairtrade Producten</p>
                <span class="border borderCat"></span>
            </div>
            </a>

            <a href="#">
            <div class="cat cat__seizoen">
                <img src="images/bio.png" alt="seizoen">
                <p>Seizoensproducten</p>
                <span class="border borderCat"></span>
            </div>
            </a>
        </div>
   </main>

   <div class="ecokoerier">
        <h3>Handenvrij Shoppen</h3>
        <p>Sinds december '15 startten de ECOkoeriers met een unieke dienstverlening naar de shoppers.
        Laat je aankopen achter in de winkels, de ECOkoeriers pikken ze voor je op en zorgen ervoor dat ze later die dag bij je thuis geleverd worden. </p>
        <a href="ecokoeriers.php">Lees Meer</a>
   </div>
</body>
</html>