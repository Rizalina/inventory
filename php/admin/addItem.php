<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/13/2018
 * Time: 5:17 PM
 */
require '../db.php';
session_start();
$temp = $_SESSION['temp'];
$cat = $_SESSION['cat'];

$acct = $_POST['acct'];
$pgso = $_POST['pgso'];
$des = $_POST['description'];
$unit = $_POST['unit'];
$brand = $_POST['brand'];
$quan = $_POST['sQuantity'];
$cost = $_POST['unitCost'];
$level = floor($quan * .2);



$sql = "INSERT INTO items(category,acctSn,pgsoSn,description,unit,startingQuantity,unitCost,brand,orderPoint) 
VALUES('$cat','$acct','$pgso','$des','$unit','$quan','$cost','$brand','$level')";

if($conn->query($sql)){


    header("Location:../../admin/$temp");
}else{
    $m = "Error Adding Item! Please contact administrator!" ;

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../admin/$temp');
            </script>
            ";
}
