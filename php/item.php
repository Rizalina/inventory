
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Add Item</h4>
        </div>
        <div class="card-content table-responsive">
            <form action="../php/addItem.php" method="post">
                <table class="table">
                    <thead class="text-primary">
                    <th class="text-center">Code</th>
                    <th class="text-center">Unit</th>
                    <th class="text-center">General Description</th>
                    <th class="text-center">Brand</th>
                    <th class="text-center">Quantity</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="code" class="form-control">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </td>
                            <td>
                                <select name="unit" class="form-control">
                                    <?php
                                            require 'global.php';

                                            showUnits();

                                    ?>
                                </select>
                            </td>
                            <td>
                                <input type="text" placeholder="Description" name = "description" class="form-control" required>
                            </td>
                            <td>
                                <input type="text" placeholder="Brand" name = "brand" class="form-control">
                            </td>
                            <td>
                                <input type="number" placeholder="Quantity" id = "quantity" onkeydown="NumberOnly();" onkeyup="checkNumber()" name = "quantity" class="form-control">
                                <span id = "confirmMessageC"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="../admin/items.php" class='btn btn-primary pull-right' >Cancel</a>
                <input type="submit" value="Add" class="btn btn-primary pull-right" id="submitD">
            </form>

        </div>
    </div>
</div>






