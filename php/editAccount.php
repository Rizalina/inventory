<div class='col-md-12'>
    <div class='card'>
    <div class='card-header' data-background-color='blue'>
        <h4 class='title'>Edit Account</h4>
        <p class='category'>Edit profile</p>
    </div>
    <div class='card-content'>

        <?php
        $id = $_GET['num'];
        echo "<form action=" . '../php/update.php?ii='.$id . " " . "method='post' >";

        ?>

        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group label-floating'>
                    <label class='form-inline'><b>First Name</b></label>

                    <?php
                    require_once 'db.php';

                    $id = $_GET['num'];

                    $sql = "SELECT first_name FROM accounts WHERE id = '$id'";
                    $res = $conn->query($sql);
                    $r = $res->fetch_row();

                    echo "<input type='text'  placeholder='" .$r[0]. "'name = 'first' class='form-control' >"
                    ?>


                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group label-floating'>
                    <label class='form-inline'><b>Last Name</b></label>

                    <?php
                    require_once 'db.php';

                    $id = $_GET['num'];

                    $sql = "SELECT last_name FROM accounts WHERE id = '$id'";
                    $res = $conn->query($sql);
                    $r = $res->fetch_row();

                    echo "<input type='text'  placeholder='" .$r[0]. "'name = 'last' class='form-control' >"
                    ?>

                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group label-floating'>
                    <label class='form-inline'><b>Username</b></label>

                    <?php
                    require_once 'db.php';

                    $id = $_GET['num'];

                    $sql = "SELECT username FROM accounts WHERE id = '$id'";
                    $res = $conn->query($sql);
                    $r = $res->fetch_row();

                    echo "<input type='text'  placeholder='" .$r[0]. "'name = 'username' class='form-control' >"
                    ?>

                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group label-floating'>
                    <label class='form-inline'><b>Type</b></label>
                    <select  name = 'type' class='form-control'>

                        <?php
                        require_once 'db.php';

                        $id = $_GET['num'];

                        $sql = "SELECT userType FROM accounts WHERE id = '$id'";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        if($r[0] == "user"){
                            echo "<option>".ucfirst($r[0])."</option>" . "<option>" . ucfirst("Admin"). "</option>";
                        }else {
                            echo "<option>" . ucfirst($r[0]) . "</option>" . "<option>" . ucfirst("User") . "</option>";
                        }
                        ?>

                    </select>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-6'>
                <div class='form-group label-floating'>
                    <label class='form-inline'><b>Password</b></label>

                    <?php
                    require_once 'db.php';

                    $id = $_GET['num'];

                    $sql = "SELECT password FROM accounts WHERE id = '$id'";
                    $res = $conn->query($sql);
                    $r = $res->fetch_row();

                    echo "<input type='password'  id = 'passA' placeholder='" .$r[0]. "'name = 'pass' class='form-control'>";
                    ?>

                </div>
            </div>
            <div class='col-md-6'>
                <div class='form-group label-floating'>
                    <label class='form-inline'><b>Confirm Password</b></label>
                    <?php
                    require_once 'db.php';

                    $id = $_GET['num'];

                    $sql = "SELECT password FROM accounts WHERE id = '$id'";
                    $res = $conn->query($sql);
                    $r = $res->fetch_row();

                    echo "<input type='password'  id = 'pass2A' placeholder='" .$r[0]. "'name = 'pass' class='form-control' onkeyup='checkPassB()'>";
                    ?>
                    <span id = 'confirmMessageA'></span>
                </div>
                <div id='mess'>
                    <p></p>
                </div>
            </div>
        </div>
        <a href="../admin/accounts.php" class="btn btn-primary pull-right">Close</a>
        <a class="btn btn-simple pull-right"></a>
        <input type='submit' value='Save' class='btn btn-primary pull-right' id='submitB'>

        <div class='clearfix'></div>
        "</form>"
    </div>
</div>
</div>









