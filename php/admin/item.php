
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Add Item</h4>
        </div>
        <div class="card-content table-responsive">
            <form action="../php/addItem.php" method="post">
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
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="code" class="form-control">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                            </td>
                            <td>
                                <input name="acct" placeholder="ACCT-SN" class="form-control" type="text" required>

                            </td>
                            <td>
                                <input type="number" placeholder="PGSO-SN" name = "pgso" class="form-control" required>
                            </td>
                            <td>
                                <input type="text" placeholder="Description" name = "description" class="form-control" style="width:350px;">
                            </td>
                            <td>
                                <input type="text" placeholder="unit" name = "unit" class="form-control">
                            </td>
                            <td>
                                <input type="text" placeholder="brand" name = "brand" class="form-control">
                            </td>
                            <td>
                                <input type="number" placeholder="starting" id = "quantity" onkeydown="NumberOnly();" onkeyup="checkNumber()" name = "sQuantity" class="form-control">
                                <span id = "confirmMessageAA"></span>
                            </td>
                            <td>
                                <input type="number" placeholder="Cost" id = "quantity2" onkeydown="NumberOnly2();" onkeyup="checkNumber2()" name = "unitCost" class="form-control">
                                <span id = "confirmMessageBB"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
                    session_start();
                    $temp = $_SESSION['temp'];
                    echo "<a href='../admin/$temp' class='btn btn-primary pull-right' >Cancel</a>";
                ?>

                <input type="submit" value="Add" class="btn btn-primary pull-right" id="submitD">
            </form>

        </div>
    </div>
</div>






