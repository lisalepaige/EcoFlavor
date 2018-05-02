<?php

include_once('Db.class.php');

    class Handelaar {
    
        private $db;

        public static function Verification()
        {
            $conn = Db::getInstance();
            $statement = $conn->prepare("SELECT * FROM handelaar, producthandelaar WHERE producthandelaar.handelaar_id = handelaar.id");
            $statement->execute();
            $handelaar = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $handelaar;
            
        }


    }
?>