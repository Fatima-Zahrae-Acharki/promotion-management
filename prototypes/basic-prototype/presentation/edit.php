
<?php 
require_once '../data-access/promotionDAL.php';
require_once '../data-access/promotion.php';
require_once '../data-access/connection.php';

$promotionDAL = new PromotionDAL();

    if(isset($_GET["editid"])){
      $editid = $_GET['editid'];
      $content = $promotionDAL->EditID($editid);
    }

    print_r($content);

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
		<h1 >EDIT PROMOTION</h1>
	</header>
<form action="" method="POST">
Name of the promotion:
 <input type="text" name="name" value=" <?php echo $content['name']; ?>" >  

   
<button type="submit">UPDATE</button>
</form>



</body>
</html>
<?php
if(isset($_POST['update'])){
  $promotionDAL->updatePromotion($_POST);
}

?>
