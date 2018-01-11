<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/10/2018
 * Time: 6:54 PM
 */

require 'db.php';

$first = $_POST['first'];
$last = $_POST['last'];
$type = $_POST['type'];
$username = $_POST['username'];
$pass = $_POST['pass'];

$t = date('h:i:a');
$d = date('Y:n:j');

$sql = "INSERT into ACCOUNTS(id,first_name,last_name,username,password,created,date_login,userType,time_login)
        VALUES(null,'$first','$last','$username','$pass',CURRENT_TIMESTAMP,null,'$type',null)";

if($conn->query($sql)){
    $m = "Successfully Added!";

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../admin/accounts.php');
        </script>";

}else
    $m = "Error! Contact Administrator!";

    echo "<script type='text/javascript'>
        
            alert('$m');
            window.location.replace('../admin/accounts.php');
        </script>";