<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 1/11/2018
 * Time: 9:00 PM
 */

require 'db.php';
$i = $_GET['n'];

$sql = "DELETE FROM issuance WHERE id = '$i'";

if($conn->query($sql)){
    $sql = "DELETE FROM itemissuance WHERE issue_id = '$i'";
    $conn->query($sql);
    header("Location:../admin/issuance.php");

}else{
    $m = "Failed to Delete Issuance, Contact Administrator!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../admin/issuance.php');
            </script>
            ";
}


