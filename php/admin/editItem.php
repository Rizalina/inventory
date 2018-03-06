
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Add Item</h4>
        </div>
        <div class="card-content table-responsive">


                <form action='itemUpdate.php' method='post'>

                <table class="table">
                    <thead class="text-primary">
                    <th>Category</th>
                    <th>ACCT-SN</th>
                    <th>PGSO-SN</th>
                    <th>DESCRIPTION</th>
                    <th>UOM</th>
                    <th>BRAND</th>
                    <th>STARTING QUANTITY</th>
                    <th>UNIT COST</th>
                    <th>RO-P</th>
                    </thead>
                    <tbody>
                    <tr>

                        <td>
                            <?php
                                require 'db.php';
                                $id = $_GET['num'];
                                session_start();
                                $_SESSION['IDedit'] = $id;
                                $sql = "SELECT category FROM items WHERE id = '$id'";
                                $res= $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input type='text'  placeholder='" .$r[0]. "'name = 'category' class='form-control' >";
                            ?>
                        </td>
                        <td>
                            <?php
                            require 'db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT acctSn FROM items WHERE id = '$id'";
                            $res= $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text'  placeholder='" .$r[0]. "'name = 'acct' class='form-control' >";
                            ?>
                        </td>
                        <td>
                            <?php
                            require 'db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT pgsoSn FROM items WHERE id = '$id'";
                            $res= $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text'  placeholder='" .$r[0]. "'name = 'pgso' class='form-control' >";
                            ?>
                        </td>
                        <td>
                            <?php
                                require 'db.php';
                                $id = $_GET['num'];
                                $sql = "SELECT description FROM items WHERE id = '$id'";
                                $res= $conn->query($sql);
                                $r = $res->fetch_row();

                                echo "<input type='text'  placeholder='" .$r[0]. "'name = 'description' class='form-control' >";
                            ?>
                        </td>
                        <td>
                            <?php
                            require 'db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT unit FROM items WHERE id = '$id'";
                            $res= $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text'  placeholder='" .$r[0]. "'name = 'unit' class='form-control' >";
                            ?>
                        </td>
                        <td>
                            <?php
                            require 'db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT brand FROM items WHERE id = '$id'";
                            $res= $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "<input type='text'  placeholder='" .$r[0]. "'name = 'brand' class='form-control' >";
                            ?>
                        </td>
                        <td>
                            <?php
                            require 'db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT startingQuantity FROM items WHERE id = '$id'";
                            $res= $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "
                            
                            
                            <input type='number' placeholder='" . $r[0] . "' id = 'quantity' onkeydown='NumberOnly();' onkeyup='checkNumber()' name = 'sQuantity' class='form-control'>
                            <span id = 'confirmMessageAA'></span>
                            ";
                            ?>
                        </td>
                        <td>
                            <?php
                            require 'db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT unitCost FROM items WHERE id = '$id'";
                            $res= $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "
                            
                            
                            <input type='number' placeholder='" . $r[0] . "' id = 'quantity' onkeydown='NumberOnly2();' onkeyup='checkNumber2()' name = 'unitCost' class='form-control'>
                            <span id = 'confirmMessageBB'></span>
                            ";
                            ?>
                        </td>
                        <td>
                            <?php
                            require 'db.php';
                            $id = $_GET['num'];
                            $sql = "SELECT orderPoint FROM items WHERE id = '$id'";
                            $res= $conn->query($sql);
                            $r = $res->fetch_row();

                            echo "
                            
                            
                            <input type='number' placeholder='" . $r[0] . "' id = 'quantity' onkeydown='NumberOnly3();' onkeyup='checkNumber3()' name = 'rLevel' class='form-control'>
                            <span id = 'confirmMessageAA'></span>
                            ";
                            ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="../admin/items.php" class='btn btn-primary pull-right' >Cancel</a>
                <input type="submit" value="Update" class="btn btn-primary pull-right" id="submitD">
            </form>

        </div>
    </div>
</div>






