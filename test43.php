<?php


$return = $_POST;
$return["json"] = $_POST['data'];

echo json_encode($return);

 ?>
