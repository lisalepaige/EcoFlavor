<?php

include_once("../classes/Db.class.php");
include_once("../classes/User.class.php");
include_once("../classes/Product.class.php");
include_once("../classes/Handelaar.class.php");

            $product_id = $_POST['product_id'];
            $handelaar_id = $_POST['handelaar_id'];
            $totaalprijs = $_POST['totaalprijs'];

            $w = new User();
            $w->SaveWinkelmandje($totaalprijs, $product_id, $handelaar_id);
        
            $response['status'] = 'success';
        
        
        header('Content-Type: application/json');
        echo json_encode( $response );


?>