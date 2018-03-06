<!-- Multi Column -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 align="center">
                    ADD NEW USER
                </h2>
            </div>
            <form action="../php/admin/addNewUser.php" method="post">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>First Name</label>
                                    <input type="text" name="first" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Last Name</label>
                                    <input type="text" name="last" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>User Type</label>
                                    <select name="type" class="form-control">
                                        <option>User</option>
                                        <option>Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Password</label>
                                    <input type="text" name="pass" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>Confirm Password</label>
                                    <input type="text"  class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-lg waves-effect" value="ADD">
                            <a href="../admin/accounts.php" class="btn btn-primary btn-lg waves-effect">CLOSE</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- #END# Multi Column -->