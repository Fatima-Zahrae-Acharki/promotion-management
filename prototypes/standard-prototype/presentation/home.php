<?php

require_once "../data-access/promotionDAL.php";

$promotionDAL = new promotionDAl();

if (!empty($_POST)) {
    $promotion = new promotion();
    $promotion->setName($_POST['Name']);
    $promotionDAL->addPromotion($promotion);

    // redirect to index.php
}

if (isset($_GET["idDelete"])) {

    $promoDlt = new promotionDAL();
    $prm = new promotion();


    $prm->setId($_GET["idDelete"]);
    $promoDlt->deletePromo($prm->getId());
}

if (isset($_GET[""])) {

    $promoEdt = new promotionDAL();
    $prm = new promotion();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>promotion mangment</title>
</head>

<body>

    <header>
        <h1 class="text-center text-info">Add a promotion</h1>
    </header> <br> <br>

    <form action="" method="POST" class="text-center">
        <br>
        Promotion name: <input type="text" name="Name">

        <button type="submit" class="btn btn-info">ADD</button> <br> <br>

    </form>
    <h4 class="text-center text-info">PROMOTIONS :</h4><br>

    <table class="table table-bordered">
        <tr class="bg-info text-center text-light">
            <th>PROMOTION</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $data = $promotionDAL->displayData();
        // if($data){

        // }

        ?>
        <?php
        foreach ($data as $value) {
            echo '
    <tr class="text-center">
        <td>' . $value["name"] . '</td>
        <td> <a href="upD.php?idEdit=' . $value['id'] . '"  name="editBtn" class="btn btn-primary" > edit </a> </td>
        <td>
        <a href="home.php?idDelete=' . $value["id"] . '" class="btn btn-danger" > delete </a>  
        </td>
    </tr>';
        }

        ?>



    </table>

</body>

</html>