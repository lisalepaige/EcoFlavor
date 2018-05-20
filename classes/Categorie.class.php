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

    } 