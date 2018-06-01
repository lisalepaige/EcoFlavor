<?php

include_once("../classes/Db.class.php");
include_once("../classes/Product.class.php");

            $value = $_POST['value'];

            
            if ($value == "Aflabetisch")
            {
                $f = new Product();
                echo "filter alfa";
            }
            else if ($value == "Prijs")
            {
                $f = new Product();
                echo "filter prijs";
            }

        
            $response['status'] = 'success';
        
        
        header('Content-Type: application/json');
        echo json_encode( $response );


?>