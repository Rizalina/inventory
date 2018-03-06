
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Add Supplier</h4>
        </div>
        <div class="card-content table-responsive">
            <form action="newSupplier.php" method="post">
                <table class="table">
                    <thead class="text-primary">
                    <th>TAX NO.</th>
                    <th>TIN NO.</th>
                    <th>SUPPLIER NAME</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" placeholder="TAX NO." name="tax" class="form-control"  required>
                            </td>
                            <td>
                                <input type="text" placeholder="TIN NO." name = "tin" class="form-control" required>
                            </td>
                            <td>
                                <input type="text" placeholder="Supplier Name" name = "supname" class="form-control" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
                    echo "<a href='../admin/supplier.php' class='btn btn-primary pull-right' >Cancel</a>";
                ?>

                <input type="submit" value="Add" class="btn btn-primary pull-right" id="submitD">
            </form>

        </div>
    </div>
</div>






