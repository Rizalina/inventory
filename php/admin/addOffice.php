
<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Add New Office</h4>
        </div>
        <div class="card-content table-responsive">
            <form action="../php/addItem.php" method="post">
                <table class="table">
                    <thead class="text-primary">
                    <th>Office</th>
                    <th>Abbreviation</th>
                    <th>Fpp</th>
                    <th>Responsibility Center</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="officeName"  class="form-control" required>
                            </td>
                            <td>
                                <input name="abbr" class="form-control" type="text" required>

                            </td>
                            <td>
                                <input type="text" name = "fpp" class="form-control" required>
                            </td>
                            <td>
                                <input type="text"  name = "responsibility" class="form-control" ">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
                    echo "<a href='../admin/offices.php' class='btn btn-primary pull-right' >Cancel</a>";
                ?>

                <input type="submit" value="Add" class="btn btn-primary pull-right" id="submitD">
            </form>

        </div>
    </div>
</div>






