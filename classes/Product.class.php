<?php

include_once('Db.class.php');

    class Product {
    
        private $db;
        private $id;
        private $image;

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;

            return $this;
        }

        public function getImage()
        {
                return $this->image;
        }

        public function setImage($image)
        {
            function random_string($length) {

                $key = '';
                $keys = array_merge(range(0, 9), range('a', 'z'));
                    
                for ($i = 0; $i < $length; $i++) {
                    $key .= $keys[array_rand($keys)];
                }
                    
                return $key;
            }

            $myname = random_string(10).$image['name'];
            $thumb_size = 400;
            $img = file_get_contents( $image['tmp_name'] );
            $picture = imagecreatefromstring( $img );

            if(!defined('__ROOT__')){
                define('__ROOT__', dirname(dirname(__FILE__)));
            }
                    
            $save_path= __ROOT__.'/post_images/ ';
            rename($myname, $save_path . $myname);
                
            $this->image = $myname;
            return $this;
        }

        public static function ShowProduct(){

                $conn = Db::getInstance();
                $statement = $conn->prepare("SELECT * FROM product, handelaar, producthandelaar 
                    WHERE producthandelaar.handelaar_id = handelaar.id 
                    AND producthandelaar.product_id = product.id");
                $statement->execute();

                return $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function ShowOne($id){

                $conn = Db::getInstance();
                $statement = $conn->prepare("SELECT * FROM product, handelaar, producthandelaar, openingsuren, adres 
                    WHERE producthandelaar.handelaar_id = handelaar.id 
                    AND producthandelaar.product_id = product.id 
                    AND handelaar.openingsuren_id = openingsuren.id
                    AND handelaar.adres_id = adres.id
                    AND product.id = :id");
                $statement->bindValue(":id", $id);
                $statement->execute();

                return $oneProduct = $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function ProductVDMaand()
        {
                $conn = Db::getInstance();
                $statement = $conn->prepare("SELECT * FROM groep, product, handelaar, producthandelaar WHERE product.groep_id = '4' 
                AND groep.groep_id = '4'
                AND producthandelaar.product_id = product.id
                AND producthandelaar.handelaar_id = handelaar.id");  
                $statement->execute();
                $maand = $statement->fetchAll(PDO::FETCH_ASSOC);

                return $maand;
        }

        public static function searchProduct($search){

                    $conn = Db::getInstance();

                    $statement = $conn->prepare("SELECT * FROM product, handelaar, producthandelaar WHERE producthandelaar.handelaar_id = handelaar.id AND producthandelaar.product_id = product.id ");  
                    $statement->execute();
                    $product = $statement->fetchAll(PDO::FETCH_ASSOC);

                    $stmt = $conn->prepare("SELECT * FROM product, handelaar, producthandelaar, groep WHERE producthandelaar.handelaar_id = handelaar.id AND producthandelaar.product_id = product.id AND product.groep_id = groep.groep_id");
                    $stmt->execute();
                    $groep = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        $foundProduct = [];
                        foreach($product as $p){
                                if(strpos(strtolower($p['product_naam']), strtolower($search)) !== false  ){
                                    $foundProduct[] = $p;
                                }                                
                        }
                        foreach($groep as $g){
                            if(strpos(strtolower($g['groep_naam']), strtolower($search)) !== false){
                                    $foundPosts[] = $g;
                            }

                    }

                        return $foundProduct;
        }

        public static function getDistance($addressFrom, $addressTo, $unit){
                //Change address format
                $formattedAddrFrom = str_replace(' ','+',$addressFrom);
                $formattedAddrTo = str_replace(' ','+',$addressTo);
                
                //Send request and receive json data
                $geocodeFrom = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false');
                $outputFrom = json_decode($geocodeFrom);
                $geocodeTo = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false');
                $outputTo = json_decode($geocodeTo);
                
                //Get latitude and longitude from geo data
                $latitudeFrom = $outputFrom->results[0]->geometry->location->lat;
                $longitudeFrom = $outputFrom->results[0]->geometry->location->lng;
                $latitudeTo = $outputTo->results[0]->geometry->location->lat;
                $longitudeTo = $outputTo->results[0]->geometry->location->lng;
                
                //Calculate distance from latitude and longitude
                $theta = $longitudeFrom - $longitudeTo;
                $dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                $miles = $dist * 60 * 1.1515;
                $unit = strtoupper($unit);
                if ($unit == "K") {
                    return round(($miles * 1.609344), 2, PHP_ROUND_HALF_UP).' km';
                } else if ($unit == "N") {
                    return ($miles * 0.8684).' nm';
                } else {
                    return $miles.' mi';
                }
    
        }


        public function SaveNewProduct($product_naam, $prijs, $oorsprong){

            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO product (product_naam, product_prijs, oorsprong) 
            VALUES (:product_naam, :prijs, :oorsprong) ");
            $statement->bindValue(":product_naam", $product_naam);
            $statement->bindValue(":prijs", $prijs);
            $statement->bindValue(":oorsprong", $oorsprong);
            $statement->execute();

            return $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>