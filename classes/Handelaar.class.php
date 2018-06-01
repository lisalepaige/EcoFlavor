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

        public static function getAddress()
        {
            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT straatnaam, huisnummer, postcode, gemeente FROM adres, handelaar
            WHERE adres_id = adres.id");
            $stmt->execute();
            $address = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $address;
        }

        public static function getHandelaars()
        {
            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT handelaar_naam FROM handelaar");
            $stmt->execute();
            $winkel = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $winkel;
        }

    }
?>