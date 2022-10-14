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





        


        public function selectAllPromo(){
            $select = "SELECT * FROM promo";
            return mysqli_query($this->Connect(), $select);
        }
    
        public function getPromotionById($promotion){
            $sqlGetData = "SELECT * FROM promo WHERE ID = ". $promotion->getId();
            return mysqli_query($this->Connect(), $sqlGetData);
        }
    






        public function editRecord($id){

			$data = null;

			$query = "SELECT * FROM promo WHERE ID = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function updatePromotion($data){

			$query = "UPDATE records SET NAME='$data[name]' WHERE ID='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
            header('location: ../presentation/add-promotion.php');
		}



        }
       


?>
