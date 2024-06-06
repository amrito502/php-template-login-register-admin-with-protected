<?php
session_start();
if(isset($_SESSION["auth"])){
    $_SESSION['message'] = 'You are already Logged In';
    header("location: index.php");
    exit();
    }
 include('includes/header.php');
?>
<!-- ============header============== -->

<div class="limiter">
     <div class="container">
        <!-- =========start-message============= -->
     <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
            <strong></strong><?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
                unset($_SESSION['message']);
             }
            ?>
        <!-- =========end-message=============== -->
     </div>
    <div class="container-login100">
        <div class="wrap-login100" style="width: 550px;">
            <form action="functions/authcode.php" method="post" class="login100-form validate-form">
                <span class="login100-form-title p-b-26">
                    Welcome
                </span>
                <span class="login100-form-title p-b-48">
                    <i class="zmdi zmdi-font"></i>
                </span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="name">
                    <span class="focus-input100" data-placeholder="Name"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100" data-placeholder="Email"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="phone">
                    <span class="focus-input100" data-placeholder="Phone"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter Confirm password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="cpassword">
                    <span class="focus-input100" data-placeholder="Password"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" name="register_btn" class="login100-form-btn">
                          Sign Up
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        You have an account?
                    </span>

                    <a class="txt2" href="login.php">
                        Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ============footer============== -->
<?php include('includes/footer.php') ?>