<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require 'db.php';

$code = $_POST['code'];
$unit = $_POST['unit'];
$des = $_POST['description'];
$brand = $_POST['brand'];
$quan = $_POST['quantity'];


$sql = "INSERT INTO items(code,unit,description,brand,quantity) VALUES (?,?,?,?,?)";

$st = $conn->prepare($sql);
$st->bind_param('isssi',$code,$unit,$des,$brand,$quan);
$st->execute();


if($st->errno == 0){
    header("Location:../admin/items.php");
}else{
    $m = "Error Adding Item! Please contact administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../admin/$t');
            </script>
            ";
}
