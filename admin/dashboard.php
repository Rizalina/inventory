<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">

                <a class="navbar-brand" href="dashboard.php">
                <?php
                session_start();
                echo strtoupper($_SESSION['username']);

                ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <h2 class="info-container pull-left" >


                </h2>
                <ul class="nav navbar-nav navbar-right pull-right">



                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">format_align_justify</i>
                        </a>
                        <ul class="dropdown-menu">

                                    <li>
                                        <a href="../php/logout.php">
                                                <h4>Logout</h4>
                                        </a>
                                    </li>


                        </ul>
                    </li>
                    <!-- #END# Notifications -->

                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">

            <!-- Menu -->
            <div class="menu">
                <ul class="list">

                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="accounts.php">
                            <i class="material-icons">text_fields</i>
                            <span>Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="issuance.php">
                            <i class="material-icons">layers</i>
                            <span>Issuance</span>
                        </a>
                    </li>
                    <li>
                        <a href="reorder.php">
                            <i class="material-icons">local_shipping</i>
                            <span>Re-order</span>
                        </a>
                    </li>
                    <li>
                        <a href="ppmp.php">
                            <i class="material-icons">local_shipping</i>
                            <span>PPMP</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Items</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="widgets/infobox/infobox-5.html">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="ui/badges.html">Badges</a>
                            </li>

                            <li>
                                <a href="ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui/colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="ui/pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="ui/waves.html">Waves</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="tables/jquery-datatable.php">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    
                        </ul>
                    </li>
                    
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            
        </aside>
        <!-- #END# Left Sidebar -->

    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">ITEMS</div>
                            <?php

                            require '../php/db.php';
                            $sql = "SELECT COUNT(id) FROM items";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'></div>";
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">access_alarm</i>
                        </div>
                        <div class="content">
                            <div class="text">TO EXPIRE</div>
                            <?php

                            require '../php/db.php';
                            $sql = "SELECT COUNT(id) FROM items WHERE orderPoint >= startingQuantity";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'></div>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">REORDER</div>
                            <?php

                            require '../php/db.php';
                            $sql = "SELECT COUNT(id) FROM items WHERE orderPoint >= startingQuantity";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'></div>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">USERS</div>
                            <?php

                            require '../php/db.php';
                            $sql = "SELECT COUNT(id) FROM accounts";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'></div>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">devices</i>
                        </div>
                        <div class="content">
                            <div class="text">RETURNS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-yellow hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">favorite</i>
                        </div>
                        <div class="content">
                            <div class="text">ISSUANCE</div>
                            <?php

                            require '../php/db.php';
                            $sql = "SELECT COUNT(id) FROM issuance";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'></div>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-gray hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">devices</i>
                        </div>
                        <div class="content">
                            <div class="text">REORDER</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-brown hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">gps_fixed</i>
                        </div>
                        <div class="content">
                            <div class="text">OFFICES</div>
                            <?php

                            require '../php/db.php';
                            $sql = "SELECT COUNT(id) FROM office";
                            $res = $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'></div>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <div class="row clearfix">
                <!-- Task Info -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>TRANSACTIONS</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Login</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require '../php/db.php';
                                    $sql = "SELECT * FROM accounts";
                                    $res = $conn->query($sql);

                                    if($res){
                                        while ($row = $res->fetch_assoc()){
                                            echo  "<tr>";
                                            echo "<td>" . strtoupper($row['lastName'] . " " . $row['firstName']) . "</td>";
                                            echo "<td>" . $row['username'] . "</td>";
                                            echo "<td>" . $row['loginTime'] . "</td>";
                                            echo "<td>" . $row['userType'] . "</td>";
                                            echo "</tr>";
                                        }
                                    }

                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../plugins/raphael/raphael.min.js"></script>
    <script src="../plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="../plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="../plugins/flot-charts/jquery.flot.js"></script>
    <script src="../plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="../plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="../plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="../plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="../plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>