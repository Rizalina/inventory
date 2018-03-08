<div class="body">
<div class="col-md-12">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title text-center">Edit Supplier</h4>
        </div>
        <hr>
        <div class="card-content table-responsive">
            <?php
            $id = $_GET['num'];
            echo "<form action=" . '../php/admin/updateReorder.php?ii='.$id . " " . "method='post' >";

            ?>
                <table class="table">
                    <thead class="text-primary">
                    <th>Supplier</th>
                    <th>Tin Number</th>
                    <th>Tax Number</th>
                    <th>Contact Person</th>
                    <th>Contact Number</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT supplierName FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                echo "<input name='supplierName' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT tinNumber FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                echo "<input name='tin' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>
                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT taxNumber FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                echo "<input name='tax' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>
                            </td>

                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT contactPerson FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                echo "<input name='contactPerson' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>


                            </td>
                            <td>
                                <?php
                                require '../../db.php';
                                $a = $_GET['num'];

                                $sql = "SELECT contactNumber FROM suppliers WHERE id = '$a'";
                                $res = $conn->query($sql);
                                $r = $res->fetch_row();


                                echo "<input name='contactNumber' value='" . $r[0] . "' class='form-control' type='text' required>";

                                ?>
                            </td>



                        </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <div class="text-center">


                        <input type="submit" value="Update" class="btn btn-primary " id="submitD">


                        <a href="../admin/supplier.php" class="btn btn-primary pull-right">Cancel</a>

                        <br>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
</div>






