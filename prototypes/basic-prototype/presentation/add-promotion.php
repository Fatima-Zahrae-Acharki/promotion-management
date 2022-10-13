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
	<script src="https://use.fontawesome.com/bf26fb3dab.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>PROMOTION 2022/2023</title>
</head>
<body>
	<header>
		<h1>ADD PROMOTION</h1>
	</header>
<form action="" method="POST">
Name of the promotion: <input type="text" name="name" >                                                          
   
<button type="submit">SUBMIT</button>
</form>
<h3>PROMOTIONS</h3>
<table class="table table-bordered"> 
        <tr class="bg-warning text-centre">
        <th>PROMOTION</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php
    $data = $promotionDAL->displayData();
    if($data){

    }

    ?>
    <?php
    foreach($data as $value){
            echo'
    <tr>
        <td>'.$value["NAME"].'</td>
    </tr>';
    }

    ?>


    </table>

</body>
</html>
