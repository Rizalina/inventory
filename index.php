<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>
<div class="main agileits-w3layouts">
    <h1>Provincial Capitol</h1>
    <div class="main-agileinfo">
        <div class="agileui-forms">
            <div class="container-form">
                <div class="form-item log-in"><!-- login form-->
                    <div class="w3table agileinfo">
                        <div class="w3table-cell register">
                            <div class="w3table-tophead">
                                <h2>Sign in</h2>
                            </div>
                            <form action="php/login.php" method="post">
                                <div class="fields-grid">
                                    <div class="styled-input agile-styled-input-top">
                                        <input type="text" name="username" required="">
                                        <label>Username</label>
                                        <span></span>
                                    </div>
                                    <div class="styled-input">
                                        <input type="Password" name="password" required="">
                                        <label>Password</label>
                                        <span></span>
                                    </div>
                                    <input type="submit" value="Sign in">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
</body>
</html>