<?php

include_once('Db.class.php');

    class User {
    
        private $db;
        private $product_id;
        private $handelaar_id;
        private $totaalprijs;

        public function getProduct_id()
        {
                return $this->product_id;
        }

        
        public function setProduct_id($product_id)
        {
                $this->product_id = $product_id;

                return $this;
        }

       
        public function getHandelaar_id()
        {
                return $this->handelaar_id;
        }

        public function setHandelaar_id($handelaar_id)
        {
                $this->handelaar_id = $handelaar_id;

                return $this;
        }

        public function SaveWinkelmandje($product_id, $handelaar_id, $totaalprijs)
        {
            $conn = Db::getInstance();
                $stmt = $conn->prepare("INSERT INTO winkelmandje (product_id, handelaar_id, totaalprijs) VALUES (:product_id, :handelaar_id, :totaalprijs)");
                $stmt->bindValue(":product_id", $product_id);
                $stmt->bindValue(":handelaar_id", $handelaar_id);
                $stmt->bindValue(":totaalprijs", $totaalprijs);
                $result = $stmt->execute();
                
                return $result;
        }

    }
?>