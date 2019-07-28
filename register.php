<?php  include 'header.php'; ?>
<div class="homepage">
    <div class="headerwrapper">
        <?php include 'topbar.php';?>
        <?php include 'navbar.php';?>
    </div>
    <div class="registerpage">
        <div class="register-wrapper topspacer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 register">
                        <h2>Personal Information</h2>
                        <form action="">
                            <div class="col-md-12 no-pd">
                                <div class="form-group">
                                    <input type="text" class="form-control logininputs" placeholder="First Name"/>
                                </div>
                            </div>
                            <div class="col-md-12 no-pd">
                                <div class="form-group">
                                    <input type="text" class="form-control logininputs" placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="col-md-12 no-pd">
                                <div class="form-group">
                                    <input type="checkbox" name="" id="newsletter"><span class="newsletterspan">&nbsp; &nbsp;SIGN UP FOR NEWSLETTER</span>
                                </div>
                            </div>

                    </div>
                    <div class="col-sm-6 signin">
                    <h2>Sign in Information</h2>
                            <div class="col-md-12 no-pd">
                                <div class="form-group">
                                    <input type="email" class="form-control logininputs" placeholder="Enter Email Id"/>
                                </div>
                            </div>
                            <div class="col-md-12 no-pd">
                                <div class="form-group">
                                    <input type="password" class="form-control logininputs" placeholder="Enter Password"/>
                                </div>
                            </div>
                            <div class="col-md-12 no-pd">
                                <div class="form-group">
                                    <input type="password" name="" class="form-control logininputs" placeholder="Confirm Password" />
                                </div>
                            </div> 
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12 no-pd">
                        <div class="form-group">
                            <input type="submit" value="CREATE AN ACCOUNT" class="kalon-btn-skin">
                        </div>
                    </div>  
                </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<?php  include 'footer.php'; ?>