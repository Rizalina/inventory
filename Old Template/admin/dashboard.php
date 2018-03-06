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
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../assets/css/font-awesone.min.css" rel="stylesheet">
    <link href='../assets/css/icons.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text">

                    <?php
                        echo $_SESSION['username'];
                    ?>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="items.php">
                            <i class="material-icons">content_paste</i>
                            <p>Items</p>
                        </a>
                    </li>
                    <li>
                        <a href="order.php">
                            <i class="material-icons">library_books</i>
                            <p>Re-order</p>
                        </a>
                    </li>
                    <li>
                        <a href="expire.php">
                            <i class="material-icons">library_books</i>
                            <p>To-Expire</p>
                        </a>
                    </li>

                    <li>
                        <a href="issuance.php">
                            <i class="material-icons">content_paste</i>
                            <p>Issuance</p>
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
                        <a href="offices.php">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Offices</p>
                        </a>
                    </li>
                    <li>
                        <a href="supplier.php">
                            <i class="material-icons">library_books</i>
                            <p>Suppliers</p>
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

                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
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

                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Items</p>
                                    <h3 class="title">

                                        <?php
                                            require '../php/db.php';

                                            $sql = "SELECT COUNT(id) FROM items";
                                            $result = $conn->query($sql);
                                            $res = $result->fetch_row();

                                            echo $res[0];
                                        ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <a href="../admin/accounts.php" class="category">Users</a>
                                    <h3 class="title">
                                        <?php
                                        require '../php/db.php';

                                        $sql = "SELECT COUNT(id) FROM accounts";
                                        $result = $conn->query($sql);
                                        $res = $result->fetch_row();

                                        echo $res[0];
                                        ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">To Expire</p>
                                    <h3 class="title">0</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Offices</p>
                                    <h3 class="title">
                                    <?php
                                    require '../php/db.php';

                                    $sql = "SELECT COUNT(id) FROM office";
                                    $result = $conn->query($sql);
                                    $res = $result->fetch_row();

                                    echo $res[0];
                                    ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Reorder</p>
                                    <h3 class="title">

                                        <?php
                                        require '../php/db.php';

                                        $sql = "SELECT COUNT(id) FROM items WHERE startingQuantity <= orderPoint";
                                        $result = $conn->query($sql);
                                        $res = $result->fetch_row();

                                        echo $res[0];
                                        ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <a href="../admin/accounts.php" class="category">Issuance</a>
                                    <h3 class="title">
                                        <?php
                                        require '../php/db.php';

                                        $sql = "SELECT COUNT(id) FROM issuance";
                                        $result = $conn->query($sql);
                                        $res = $result->fetch_row();

                                        echo $res[0];
                                        ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Offices With PPMP</p>
                                    <h3 class="title">0</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Returns</p>
                                    <h3 class="title">
                                       0
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Users</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Login</th>
                                            <th>Type</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require '../php/db.php';

                                                $sql = "SELECT * FROM accounts";

                                                $res = $conn->query($sql);

                                                if($res->num_rows > 0){
                                                    while($row = $res->fetch_assoc()){
                                                        echo "<tr>" . "<td>" . ucwords($row['firstName'] . " " . $row['lastName']) . "</td>"
                                                            . "<td>" . $row['username'] ."</td>"
                                                            . "<td>" . $row['loginDate'] .','. $row['loginTime'] ."</td>"
                                                            . "<td>" . $row['userType'] ."</td>"
                                                            . "</tr>"
                                                        ;
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Transactions</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Login</th>
                                        <th>Type</th>
                                        </thead>
                                        <tbody>
                                        <?php
                                        require '../php/db.php';

                                        $sql = "SELECT * FROM accounts";

                                        $res = $conn->query($sql);

                                        if($res->num_rows > 0){
                                            while($row = $res->fetch_assoc()){
                                                echo "<tr>" . "<td>" . ucwords($row['fullname']) . "</td>"
                                                    . "<td>" . $row['username'] ."</td>"
                                                    . "<td>" . $row['loginDate'] .','. $row['loginTime'] ."</td>"
                                                    . "<td>" . $row['userType'] ."</td>"
                                                    . "</tr>"
                                                ;
                                            }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
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
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>

</html>