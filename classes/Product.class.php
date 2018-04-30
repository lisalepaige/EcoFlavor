<?php

include_once('Db.class.php');

    class Product {
    
        private $db;

            public static function ShowProduct(){

                $conn = Db::getInstance();
                $statement = $conn->prepare("SELECT * FROM product, handelaar WHERE product.handelaar_id = handelaar.id");
                $statement->execute();

                return $products = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public static function searchProduct($search){

                    $conn = Db::getInstance();
                    $statement = $conn->prepare("SELECT * FROM product, handelaar WHERE product.handelaar_id = handelaar.id");
                        
                        $statement->execute();
                        $product = $statement->fetchAll(PDO::FETCH_ASSOC);

                        $foundProduct = [];
                        foreach($product as $p){
                                if(strpos(strtolower($p['product_naam']), strtolower($search)) !== false){
                                    $foundProduct[] = $p;
                                }                                
                        }

                        return $foundProduct;
            }
    }

?>