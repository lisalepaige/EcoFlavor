<?php

include_once('Db.class.php');

   class Categorie {
        private static $conn;

        public static function GetFairtrade(){

            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT * FROM product, groep WHERE fairtrade = 'fairtrade' AND product.groep_id = groep.groep_id");
            $stmt->execute();
            $fairtrade = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $fairtrade;

        }

        public static function GetBio(){

            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT * FROM product, groep WHERE bio = 'bio' AND product.groep_id = groep.groep_id");
            $stmt->execute();
            $fairtrade = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $fairtrade;

        }

    } 