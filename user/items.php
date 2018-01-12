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
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="items.php">
                            <i class="material-icons">content_paste</i>
                            <p>Items</p>
                        </a>
                    </li>

                    <li>
                        <a href="accounts.php">
                            <i class="material-icons">person</i>
                            <p>Accounts</p>
                        </a>
                    </li>
                    <li>
                        <a href="ppmp.php">
                            <i class="material-icons">library_books</i>
                            <p>PPMP</p>
                        </a>
                    </li>
                    <li>
                        <a href="notifications.php">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
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
                        <div class="dropdown">
                            <a class="navbar-brand dropdown-toggle" data-toggle="dropdown" href="#">Select Category <span class="glyphicon glyphicon-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="items.php">A - Office Supplies</a>
                                    <a href="two.php">B - Printer and Photocopier</a>
                                    <a href="three.php">C - Janitorial Supplies</a>
                                    <a href="four.php">D - Office Suuplies w/ ICS</a>
                                </li>
                            </ul>
                        </div>
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
            <!-- Modal for Add Item -->
            <div class="modal col-lg-12" id="add_item" data-backdrop="static">
                <div class="modal-dialog" style="width:80%;">
                    <div class="modal-content">

                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">A - Office Supplies</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Code</th>
                                            <th>Stock#</th>
                                            <th>Unit</th>
                                            <th>General Description</th>
                                            <th>Brand</th>
                                            <th>Quantity</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require '../php/db.php';

                                            $sql = "SELECT * FROM items WHERE code = 01";
                                            $res = $conn->query($sql);
                                            if($res->num_rows > 0){
                                                while($row = $res->fetch_assoc()){
                                                    echo "<tr>"
                                                        . "<td>" . $row['code'] . "</td>"
                                                        . "<td>" . $row['stockno'] . "</td>"
                                                        . "<td>" . $row['unit'] . "</td>"
                                                        . "<td>" . $row['description'] . "</td>"
                                                        . "<td>" . $row['brand'] . "</td>"
                                                        . "<td>" . $row['quantity'] . "</td>"
                                                        . "</tr>";
                                                }
                                            }else{
                                                echo "<tr><td>No records in the database!</td></tr>";
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                    <a href="../php/item.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_item">Add Item</a>
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
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

<script type='text/javascript'>
    function checkNumber()
    {
        //Store the password field objects into variables ...
        var quan = document.getElementById('quantity');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessageC');
        //Set the colors we will be using ...
        var badColor = '#ff6666';
        var goodColor = '#66cc66';
        //Compare the values in the password field
        //and the confirmation field
        if(quan.value <= 0){
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            document.getElementById('submitD').disabled = true;
            message.style.color = badColor;
            message.innerHTML = 'Only Positive Numbers Allowed!'
        }else if(quan.value >= 0) {
            document.getElementById('submitD').disabled = false;
            message.style.color = goodColor;
            message.innerHTML = '   '
        }
    }
    function NumberOnly() {
        var ageInput = document.getElementById("quantity")

        ageInput.addEventListener("keydown", function(e) {
            // prevent: "e", "=", ",", "-", "."
            if ([69, 187, 188, 189, 190].includes(e.keyCode)) {
                e.preventDefault();
            }
        })
        
    }


</script>

</html>