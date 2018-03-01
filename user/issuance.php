<?php
session_start();

if(!isset($_SESSION['username'])){
    $m = "Please Login First!";

    echo "
            <script type = 'text/javascript'>
            alert('$m');
            window.location.replace('../index.php');
            </script>
            ";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <style>
        #new_issuance {

        }
    </style>
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">

                <?php
                echo $_SESSION['username'];

                ?>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li>
                    <a href="items.php">
                        <i class="material-icons">content_paste</i>
                        <p>Items</p>
                    </a>
                </li>

                <li class="active">
                    <a href="issuance.php">
                        <i class="material-icons">content_paste</i>
                        <p>Issuance</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Profile </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Mike John responded to your email</a>
                                </li>
                                <li>
                                    <a href="#">You have 5 new tasks</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Andrew</a>
                                </li>
                                <li>
                                    <a href="#">Another Notification</a>
                                </li>
                                <li>
                                    <a href="#">Another One</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href = "../php/logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>



        <!-- Modal for Add Account -->
        <div class="modal col-lg-12" id="add_account" data-backdrop="static">
            <div class="modal-dialog" style="width:80%;">
                <div class="modal-content">
                    <?php
                    include "../php/addAccount.php";
                    ?>
                </div>
            </div>
        </div>
        <!-- Modal for Edit Account -->

        <div class="modal col-lg-12" id="edit_account" data-backdrop="static">
            <div class="modal-dialog" style="width:80%;">
                <div class="modal-content">
                    <?php
                    //include "../php/editAccount.php";
                    ?>
                </div>
            </div>
        </div>

        <!-- Modal for Add New Issuance -->

        <div class="modal col-lg-12" id="new_issuance" data-backdrop="static">
            <div class="modal-dialog" style="width:99%;">
                <div class="modal-content">

                </div>
            </div>
        </div>
        <!-- Modal for Edit Item -->
        <div class="modal col-lg-12" id="edit_issuance" data-backdrop="static">
            <div class="modal-dialog" style="width:99%;">
                <div class="modal-content">

                </div>
            </div>
        </div>

        <!-- Modal for Delete Issuance -->

        <div class="modal col-lg-12" id="delete_issuance" data-backdrop="static">
            <div class="modal-dialog" style="width:27%;">
                <div class="modal-content">

                </div>
            </div>
        </div>

        <!-- Modal for Edit Issuance -->
        <div class="modal col-lg-12" id="edit_issuance" data-backdrop="static">
            <div class="modal-dialog" style="width:27%;">
                <div class="modal-content">

                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 pull-right">
                        <div class="card">
                            <div class="card-header" data-background-color="purple">
                                <h4 class="title">Accounts</h4>
                                <p class="category">All Accounts</p>
                            </div>

                            <div class="card-content">
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                        <th>Division</th>
                                        <th>Office</th>
                                        <th>Responsibility Center</th>
                                        <th>Date/Time</th>
                                        <th>Status</th>
                                        <th>Proccess</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require '../php/db.php';

                                                $sql = "SELECT id,division,office,responsibility,dateT,timeT,status FROM issuance ";

                                                $res = $conn->query($sql);

                                                if($res){
                                                    while ($row = $res->fetch_assoc()){
                                                        echo "<tr>"
                                                            . "<td>" .$row['division']. "</td>"
                                                            . "<td>" .$row['office']. "</td>"
                                                            . "<td>" .$row['responsibility']. "</td>"
                                                            . "<td>" .$row['dateT']. " " . $row['timeT'] . "</td>"
                                                            . "<td>" .$row['status']. "</td>"
                                                            . "<td>" . "<a href =" . '../php/editIssuance.php?num='.$row['id'] . " " . " type='button' rel='tooltip' title='Edit ' class='btn btn-primary btn-simple btn-xs' data-toggle='modal' data-target='#edit_issuance'>
                                                                <i class='material-icons'>edit</i>
                                                            </a>" . "<a href =" . '../php/issueDelete.php?num='.$row['id'] . " " . "type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs' data-toggle='modal'  data-target='#edit_issuance'>
                                                                <i class='material-icons'>close</i>
                                                            </a>"
                                                            ."</td>"
                                                            . "</tr>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <a href="../php/addNewIssuance.php" class="btn btn-p rimary pull-right" data-toggle="modal" data-target="#new_issuance">New Issuance</a>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<-- Custome JS -->
<script src="../assets/js/custom.js"></script>

<script>
    function autoFill() {
        var a = document.getElementById("office").val();

        alert("yeah");
    }
</script>



</html>