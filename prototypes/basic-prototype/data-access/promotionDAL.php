<?php
        require_once "connection.php";
        require_once "promotion.php";

        class PromotionDAL extends connection {

            public function addPromotion($promotion){
                $name = $promotion->getName();
            

            $insertRow = "INSERT INTO promo (name) VALUES ('$name')";

            mysqli_query ($this->connect(),$insertRow);
        }


        public function displayData(){
            $sql = "SELECT * FROM promo";
            $result = mysqli_query($this->connect(),$sql);
            if($result->num_rows >0){
    
                return $result;
            }
        }


        public function  EditID($id){
            $sql = "SELECT * FROM promo WHERE id = $id";
            $result = mysqli_query($this->connect(), $sql);
            if($result->num_rows==1){
           
            return $result;
        }


       
}


         public function editName($id, $name){

                $edt = "UPDATE promotion set name = '$name' WHERE id = $id";
                $dltN = mysqli_query($this->connect(), $edt);

        }



		// public function updatePromotion($data){

		// 	$query = "UPDATE records SET name='$data[name]' WHERE id='$data[id] '";

		// 	if ($sql = $this->conn->query($query)) {
		// 		return true;
		// 	}else{
		// 		return false;
		// 	}
        //     header('location: ../presentation/add-promotion.php');
		// }



        }
       


?>
