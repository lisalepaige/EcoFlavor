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

        public static function getAddress($id)
        {
            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT straatnaam, huisnummer, postcode, gemeente, handelaar.id, product.id, handelaar_id, product_id FROM adres, handelaar, product, producthandelaar
            WHERE producthandelaar.handelaar_id = handelaar.id 
            AND producthandelaar.product_id = product.id 
            AND product.id = :id");
            $stmt->execute();
            $address = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $address;
        }

        public static function getMap($id)
        {
            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT handelaar.id, product.id, map, handelaar_id, product_id FROM handelaar, product, producthandelaar 
            WHERE producthandelaar.handelaar_id = handelaar.id 
            AND producthandelaar.product_id = product.id 
            AND product.id = :id");
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $map = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $map;
        }


    }
?>