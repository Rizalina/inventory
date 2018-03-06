<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Accounts</title>

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

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard.php">GENERAL SERVICES OFFICE</a>
            </div>
        </div>
    </nav>
       <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">

                <a class="navbar-brand" href="accounts.php">
                <?php
                session_start();
                echo strtoupper($_SESSION['username']);

                ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
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
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="accounts.php">
                            <i class="material-icons">people</i>
                            <span>Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="issuance.php">
                            <i class="material-icons">store_mall_directory</i>
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
                            <i class="material-icons">event_note</i>
                            <span>PPMP</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="../pages/widgets/cards/basic.html">Basic</a>
                                    </li>
                                    <li>
                                        <a href="../pages/widgets/cards/colored.html">Colored</a>
                                    </li>
                                    <li>
                                        <a href="../pages/widgets/cards/no-header.html">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="../pages/widgets/infobox/infobox-1.html">Infobox-1</a>
                                    </li>
                                    <li>
                                        <a href="../pages/widgets/infobox/infobox-2.html">Infobox-2</a>
                                    </li>
                                    <li>
                                        <a href="../pages/widgets/infobox/infobox-3.html">Infobox-3</a>
                                    </li>
                                    <li>
                                        <a href="../pages/widgets/infobox/infobox-4.html">Infobox-4</a>
                                    </li>
                                    <li>
                                        <a href="../pages/widgets/infobox/infobox-5.html">Infobox-5</a>
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
                                <a href="../pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="../pages/ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="../pages/ui/badges.html">Badges</a>
                            </li>

                            <li>
                                <a href="../pages/ui/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="../pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="../pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="../pages/ui/colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="../pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="../pages/ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="../pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="../pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="../pages/ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="../pages/ui/modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="../pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="../pages/ui/pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="../pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="../pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="../pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="../pages/ui/sortable-nestable.html">Sortable & Nestable</a>
                            </li>
                            <li>
                                <a href="../pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="../pages/ui/thumbnails.html">Thumbnails</a>
                            </li>
                            <li>
                                <a href="../pages/ui/tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="../pages/ui/waves.html">Waves</a>
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
                                <a href="../pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="../pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="../pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="../pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="../pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="../pages/forms/editors.html">Editors</a>
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
                                <a href="../pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="tables/jquery-datatable.php">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="../pages/tables/editable-table.html">Editable Tables</a>
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
                                <a href="../pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="../pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="../pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="../pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="../pages/charts/jquery-knob.html">Jquery Knob</a>
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
                                <a href="../pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="../pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="../pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="../pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="../pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="../pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
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

    <!-- Modal for Add Account -->
    <div class="modal col-lg-12" id="add_account" data-backdrop="static">
        <div class="modal-dialog" style="width:50%;">
            <div class="modal-content">
            </div>
        </div>
    </div>

    <!-- Modal for Edit Account -->
    <div class="modal col-lg-12" id="edit_account" data-backdrop="static">
        <div class="modal-dialog" style="width:50%;">
            <div class="modal-content">
            </div>
        </div>
    </div>

    <!-- Modal for Delete Account -->
    <div class="modal col-lg-12" id="del_account" data-backdrop="static">
        <div class="modal-dialog" style="width:20%;">
            <div class="modal-content">
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ACCOUNTS</h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Time-in</th>
										<th>Time-out</th>
										<th>Type</th>
										<th>Process</th>
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
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>" . $row['loginTime'] . "</td>";
                                        echo "<td>" . $row['logoutTime'] . "</td>";
                                        echo "<td>" . $row['userType'] . "</td>";
                                        echo "<td>" . "<a href=" .'../php/admin/editAccount.php?num=' .$row['id'] . "  " . " class='material-icons' data-toggle='modal' data-target='#edit_account'>mode_edit</a>" . "  ||  " . "<a href=" .'../php/admin/deleteAccount.php?num=' .$row['id'] . " " . " class='material-icons' data-toggle='modal' data-target='#del_account'>delete</a>" . "</td>";
                                        echo "</tr>";
                                    }
                                }

                                ?>
                                </tbody>
                            </table>
                            <a href="../php/admin/addAccount.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_account">Add Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>


    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>