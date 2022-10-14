<?php
require_once "../data-access/promotionDAL.php";

$promotionDAL = new promotionDAL();

if(!empty ($_POST)){
    $promotion = new promotion();
    $promotion->setName($_POST['name']);
    $promotionDAL->addPromotion($promotion);
}
	$data = $promotionDAL->displayData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/bf26fb3dab.js"></script>
	<title>PROMOTION 2022/2023</title>
</head>
<body>
	<header>
		<h1 class="text-center">ADD PROMOTION</h1>
	</header>
<form action="" method="POST">
Name of the promotion: <input type="text" name="name" >                                                          
   
<button type="submit" class="btn btn-info"  >SUBMIT</button>
</form>
<h3 class="text-center">PROMOTIONS</h3>
<table class="table table-bordered "> 
        <tr class="bg-info text-light text-centre">
        <th class="text-center">PROMOTION</th>
        <th class="text-center">edit</th>
        <th class="text-center">delete</th>
    </tr>
    <?php
    $data = $promotionDAL->displayData();
    if($data){

    }

    ?>
    <?php
    foreach($data as $value){
            echo'
    <tr class="text-center">
        
        <td>'.$value["name"].'</td>
        
        <td><button type="submit" class="btn btn-success" ><a href="edit.php?editid=<?php .$value["id"]; ?>Edit</a></button></td>
        <td><button type="submit" class="btn btn-danger" >DELETE</button></td>
        
    </tr>';
    }

    ?>


    </table>

</body>
</html>
