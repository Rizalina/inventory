<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require 'db.php';
$i = $_GET['n'];

$sql = "DELETE FROM accounts WHERE id = '$i'";

if($conn->query($sql) === TRUE){
    $m = "Successfully Deleted!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../admin/accounts.php');
            </script>
            ";
}else{
    $m = "Failed to Delete, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../admin/accounts.php');
            </script>
            ";
}