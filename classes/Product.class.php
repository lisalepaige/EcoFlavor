<?php

include_once('Db.class.php');

    class Post {
    
        private $db;

            public static function ShowProduct(){

                $conn = Db::getInstance();
                $statement = $conn->prepare("SELECT product.naam, prijs, handelaar.naam FROM product, handelaar WHERE product.handelaar_id = handelaar.id");
                $statement->execute();

                return $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public static function searchProduct($search){
                    $conn = Db::getInstance();
                    $stm = $conn->prepare("SELECT * FROM product");
                        
                        $stm->execute();
                        $posts = $stm->fetchAll(PDO::FETCH_ASSOC);

                        $foundProduct = [];
                        foreach($product as $p){
                                if(strpos(strtolower($p['naam']), strtolower($search)) !== false){
                                    $foundProduct[] = $p;
                                }                                
                        }

                        return $foundProduct;
            }
    }

?>