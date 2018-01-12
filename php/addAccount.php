<div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Add Account</h4>
            <p class="category">Input your profile</p>
        </div>
        <div class="card-content">
            <form action="../php/addNewUser.php" method="post" ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Fist Name</label>
                            <input type="text" name = "first" class="form-control"  required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Last Name</label>
                            <input type="text" name = "last" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Username</label>
                            <input type="text" name = "username" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Type</label>
                            <select name = "type" class="form-control">
                                <option>User</option>
                                <option>Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Password</label>
                            <input type="password" name = "pass"class="form-control" id = "pass" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Confirm Password</label>
                            <input type="password" class="form-control" id = "pass2" onkeyup="checkPass()" required>
                            <span id = "confirmMessage"></span>
                        </div>
                        <div id="mess">
                            <p></p>
                        </div>
                    </div>
                </div>

                <a href="../admin/accounts.php" class='btn btn-primary pull-right' id='submitB'>Cancel</a>
                <input type="submit" value="Add" class="btn btn-primary pull-right" id="submit">


                <div class="clearfix"></div>
            </form>


        </div>
    </div>
</div>






