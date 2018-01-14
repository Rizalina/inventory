<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Issuance</h4>
        </div>
        <div class="card-content">
            <form action="../php/addNewIssue.php" method="post" ">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <label >REQUISITION AND ISSUE SLIP</label>
                    </div>
                </div>
            </div>

            <hr style="height:2px;border:none;color:#333;background-color:#333;" />

            <div class="row">
                <div class="col-md-4">
                    <div class="">
                        <label >Division &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</label>
                        <input type="text" name = "first"  required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label class="label-floating text-center">Responsibility Center</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>RIS # :</label>
                        <input type="text" name = "first"  required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <input type="text" name = "first"  size="15" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="">
                        <label >Office &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</label>
                        <input type="text" name = "first"  required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <input type="text" name = "first"  required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                        <label>SAi # :</label>
                        <input type="text" name = "first"  required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <label>Date :</label>
                        <input type="text" name = "first"  size="15" required>
                    </div>
                </div>
            </div>
            <hr style="height:2px;border:none;color:#333;background-color:#333;" />
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group label-floating">
                        <h4 class="control-label text-center">CODE/STOCK</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group label-floating">
                        <h4 class="control-label text-center">REQUISITION</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group label-floating">
                        <h4 class="control-label text-center">ISSUANCE</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <table class="table" id="tabb">
                   <thead class="text-primary">
                        <th width="8%">Code</th>
                        <th width="8%">Stock#</th>
                        <th width="10%">Unit</th>
                        <th width="30%">Item Description</th>
                        <th width="10%">Quantity</th>
                        <th width="10%">Quantity</th>
                        <th width="10%">Remarks</th>
                   </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name="issuanceCode" style="width: 50px;">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </td>
                            <td><input type="number" style="width:50px;"></td>
                            <td>
                                <select>
                                    <option>yeah</option>
                                </select>
                            </td>
                            <td><input type="text" size="45px"></td>
                            <td><input type="number" ></td>
                            <td><input type="number" ></td>
                            <td><input type="text" ></td>
                        </tr>

                    </tbody>

                </table>
            </div>


            <input type="button" class="btn btn-primary" value="Add Row" onclick="addRowIssuance()">
            <a href="../admin/issuance.php" class='btn btn-primary pull-right' id='submitB'>Cancel</a>

            <input type="submit" value="Add" class="btn btn-primary pull-right" id="submit">


            <div class="clearfix"></div>
            </form>


        </div>
    </div>
</div>






