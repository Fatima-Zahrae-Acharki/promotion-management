<?php
        require_once "connection.php";
        require_once "promotion.php";

        class PromotionDAL extends connection {

            public function addPromotion($promotion){
                $name = $promotion->getName();
            

            $insertRow = "INSERT INTO promo (NAME) VALUES ('$name')";

            mysqli_query ($this->connect(),$insertRow);
        }


        public function displayData(){
            $sql = "SELECT * FROM promo";
            $result = mysqli_query($this->connect(),$sql);
            if($result->num_rows >0){
    
                return $result;
            }
        }
        }
       


?>
