<?php

include_once('Db.class.php');

   class Categorie {
        private static $conn;

        public static function GetFairtrade(){

            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT * FROM product, groep WHERE fairtrade = 'fairtrade' AND product.groep_id = groep.groep_id");
            $stmt->execute();
            $fairtrade = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $Foundfairtrade = [];
                        foreach($fairtrade as $f){
                                
                            $Foundfairtrade[$f['groep_id']] = $f;
                                                               
                        }
            
            return $Foundfairtrade;

        }

        public static function GetBio(){

            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT * FROM product, groep WHERE bio = 'bio' AND product.groep_id = groep.groep_id");
            $stmt->execute();
            $bio = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $foundBio = [];
                        foreach($bio as $b){
                                
                            $foundBio[$b['groep_id']] = $b;
                                                               
                        }
           
            return $foundBio;

        }

        public static function GetStreek(){

            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT * FROM product, groep WHERE oorsprong = 'Mechelen' AND product.groep_id = groep.groep_id");
            $stmt->execute();
            $streek = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $foundStreek = [];
                        foreach($streek as $s){
                                
                            $foundStreek[$s['groep_id']] = $s;
                                                               
                        }
           
            return $foundStreek;

        }

        public static function GetSeizoen(){

            $conn = Db::getInstance();
            $stmt = $conn->prepare("SELECT * FROM product, groep, seizoen, productseizoen WHERE productseizoen.seizoen_id = seizoen.id 
            AND productseizoen.product_id = product.id 
            AND productseizoen.seizoen_id = '6' 
            AND product.groep_id = groep.groep_id");
            $stmt->execute();
            $seizoen = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $foundSeizoen = [];
                        foreach($seizoen as $z){
                                
                            $foundSeizoen[$z['groep_id']] = $z;
                                                               
                        }
           
            return $foundSeizoen;

        }

    } 