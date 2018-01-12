<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">PPMP</h4>
                        <p class="category">Officess with PPMP</p>
                    </div>
                    <div class="card-content table-responsive">

                        <?php
                            echo "<form action = '../php/addPPMP' method = 'post'>";
                        ?>
                        <table class="table">
                            <thead class="text-primary">
                            <th>Code</th>
                            <th>General Description</th>
                            <th>Unit</th>
                            <th>Quantity/Size</th>
                            <th>Unit Cost</th>
                            <th>Estimated Budget</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" name=""></td>
                                <td><input type="text" name=""></td>
                                <td><input type="text" name=""></td>
                                <td><input type="text" name=""></td>
                                <td><input type="text" name=""></td>
                                <td><input type="text" name=""></td>
                            </tr>

                            </tbody>
                        </table>
                        <a href="../admin/ppmp.php" class='btn btn-primary pull-right' id='submitB'>Cancel</a>
                        <a href="../php/addPPMP.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_ppmp">Add PPMP</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>