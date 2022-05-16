<?php include "includes/header.php" ?>
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Login</h1>
                    <form role="form" action="includes/login_inc.php" method="post" id="login-form" autocomplete="off">
                        <h6 class="text-center"></h6>
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username"
                            autocomplete="on" value="<?php echo isset($username) ? $username : '' ?>">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="login" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Login">
                    </form>
                </div>
            </div> 
        </div> 
    </div> 
</section>
</body>
</html>
