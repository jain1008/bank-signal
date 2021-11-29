<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_assets/');?>util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_assets/');?>main.css">
<!--===============================================================================================-->
</head>
<body>
    
    
    <div class="container-login100" style="background-image: url('<?php echo base_url('assets/admin_assets/');?>images/login.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <?php $this->load->view("common/errors");?> 
            <form name="loginForm" method="POST" action="<?php echo base_url('Login/doLogin'); ?>" enctype="multipart/form-data" class="login100-form validate-form" >
                <span class="login100-form-title p-b-37">
                    Log-In
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Log In
                    </button>
                </div>
            </form>         
        </div>
    </div>
    
    

    <div id="dropDownSelect1"></div>
    

</body>
</html>