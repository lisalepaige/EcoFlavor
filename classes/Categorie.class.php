<?php

include_once('Db.class.php');

   class Categorie {
        private static $conn;

        public static function GetFairtrade(){

            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT fairtrade, product_naam, product_img, product.id FROM product WHERE fairtrade = 'fairtrade'");
            $stmt->execute();
            $fairtrade = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $fairtrade;

        }

    } 