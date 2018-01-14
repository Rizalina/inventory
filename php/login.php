<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yanzky
 * Date: 12/17/2017
 * Time: 11:06 PM
 */

include 'db.php';
date_default_timezone_set('Asia/Manila');

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT first_name,last_name,userType,username FROM accounts WHERE username = ? && password = ?";

$st = $conn->prepare($sql);
$st->bind_param('ss',$user,$pass);
$st->execute();

$res = $st->get_result();
$r = $res->fetch_row();

if($res->num_rows > 0){

    $t = date('h:i:a');
    $d = date('Y:n:j');

    $sql = "UPDATE accounts SET time_login = '$t',date_login = '$d' WHERE username = '$user'";
    $conn->query($sql);

    $_SESSION['type'] = $r[2];

    $_SESSION['username'] = $user;

    while($row = $res->fetch_assoc()){
        $fullname = $row['first_name'] . " " . $row['last_name'];
    }

    $_SESSION['full'] = strtoupper($fullname);

    header('Location:../admin/dashboard.php');
}else{
    $m = "Wrong Credentials!";

    echo "
            <script type = 'text/javascript'>
                alert('$m');
                window.location.replace('../index.php');
            </script>
         ";
}

