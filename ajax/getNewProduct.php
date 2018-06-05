<?php

include_once("../classes/Db.class.php");
include_once("../classes/Product.class.php");

            $product_naam = $_POST['product_naam'];
            $groep_naam = $_POST['groep_naam'];
            $handelaar_naam = $_POST['handelaar_naam'];

            $straat = $_POST['straat'];
            $nummer = $_POST['nummer'];
            $postcode = $_POST['postcode'];
            $gemeente = $_POST['gemeente'];

            //$siezoen_val = $_POST['siezoen_val'];
            //$categorie_val = $_POST['categorie_val'];

            $prijs = $_POST['prijs'];
            $oorsprong = $_POST['oorsprong'];

            //$image = $_POST['image'];

            $newproduct = new Product();
            //$newproduct->setImage($image);
            $newproduct->SaveNewProduct($product_naam, $prijs, $oorsprong);
            
        
            $response['status'] = 'success';
        
        
        header('Content-Type: application/json');
        echo json_encode( $response );


?>