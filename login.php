<?php  include 'header.php'; ?>
<div class="homepage">
    <div class="headerwrapper">
        <?php include 'topbar.php';?>
        <?php include 'navbar.php';?>
    </div>
    <div class="loginpage">
        <div class="login-wrapper topspacer">
            <div class="container loginbox">
                <div class="row">
                    <div class="col-sm-5 login">
                        <h2>User Login</h2>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control logininputs" placeholder="Enter your email"/>
                                <input type="password" class="form-control logininputs" placeholder="Password"/>
                                <input type="submit" value="LOGIN" class="kalon-btn-skin">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-7 newcust">
                        <h2>New Customers</h2>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        <button class="newac kalon-btn-skin">Create New Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php  include 'footer.php'; ?>