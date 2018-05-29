<?php

include_once("../classes/Db.class.php");
include_once("../classes/User.class.php");
include_once("../classes/Product.class.php");

            $winkel_id = $_POST['winkel_id'];

            $d = new User();
            $d->DeleteItem($winkel_id);
        
            $response['status'] = 'success';
        
        
        header('Content-Type: application/json');
        echo json_encode( $response );


?>