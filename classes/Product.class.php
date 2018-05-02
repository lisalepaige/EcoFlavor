<?php

include_once('Db.class.php');

    class Product {
    
        private $db;
        private $id;

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

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

            public static function searchProduct($search){

                    $conn = Db::getInstance();
                    $statement = $conn->prepare("SELECT * FROM product, handelaar, producthandelaar WHERE producthandelaar.handelaar_id = handelaar.id AND producthandelaar.product_id = product.id ");
                        
                        $statement->execute();
                        $product = $statement->fetchAll(PDO::FETCH_ASSOC);

                        $foundProduct = [];
                        foreach($product as $p){
                                if(strpos(strtolower($p['product_naam']), strtolower($search)) !== false  ){
                                    $foundProduct[] = $p;
                                }                                
                        }

                        return $foundProduct;
            }

    }

?>