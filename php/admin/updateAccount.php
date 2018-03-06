<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 6:56 PM
 */
require '../db.php';
$id = $_GET['ii'];

$sql = "SELECT firstName,lastName,username,password,userType FROM accounts WHERE id = '$id'";
$res = $conn->query($sql);
$r = $res->fetch_row();

//Original User Info
$Ofirst = $r[0];
$Olast = $r[1];
$Ouser = $r[2];
$Opass = $r[3];
$Otype = $r[4];


//Data From Edit Profile
$type = $_POST['type'];
if(empty($type)){
    $type = $Otype;
}
$pass = $_POST['pass'];
if($pass == ""){
    $pass = $Opass;
}
$user = $_POST['username'];
if($user == ""){
    $user = $Ouser;
}
$first = $_POST['first'];
if($first == ""){
    $first = $Ofirst;
}
$last = $_POST['last'];
if($last == ""){
    $last = $Olast;
}

$sql = "UPDATE accounts SET firstName = '$first',lastName = '$last',username = '$user',userType = '$type',password = '$pass' 
      WHERE id = '$id'";

if($conn->query($sql)){
            header('Location:../../admin/accounts.php');
}else{
    $m = "Error! Contact Administrator!";
    die($conn->error);

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../../admin/accounts.php');
        </script>";
}