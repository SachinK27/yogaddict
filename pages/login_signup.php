<?php
  session_start();
  define('ACCESS_ALLOWED',TRUE);
  require_once('../config/define.php');
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login/SignUp - Yogaddict</title>
  <?php include(ROOT_PATH."includes/links.php");?>

</head>
<body>
<!-- Navbar -->
  <?php include (ROOT_PATH."includes/nav.php");?>
<!-- Navbar ends -->

<!-- Form -->
<div class="container">
  <div class="row">

    <div class="margin_top">

      <div class="cent_box" style="background-color: #efefef">
        <ul class="nav nav-tabs login_tab" id="authMenu">
        <li class="nav-item  active">
          <a class="nav-link" data-toggle="tab" href="#home">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-toggle="tab" href="#profile">Sign Up</a>
        </li>
      </ul>

        <div id="myTabContent" class="tab-content">

          <!-- Login -->
          <div class="tab-pane active" id="home">
            <form method="POST" action="<?php echo BASE_URL;?>process/login_process.php" name="login" id="login">
              <div class="txtbx_mdl">
                <input type="text" name="email_id" placeholder="Enter Email" class="txtbx_mdlbx" required="">
              </div>
              <div class="txtbx_mdl">
                <input type="password" name="password" placeholder="Enter password" class="txtbx_mdlbx" required="">
              </div>
              <div class="btnbx_mdl">
                <input type="submit" name="sign_in" value="Login" class="btnbx_mdlbx">
              </div>
            </form>
              <div class="login-help">
                <a href="#profile"  data-toggle="tab">New to Yogaddict? - Sign Up</a> <br><br> <a href="#">Forgot Password?</a>
              </div>
          </div>
          <!-- Login ends -->

          <!-- SignUp -->
          <div class="tab-pane fade show" id="profile">
          <form method="POST" action="<?php echo BASE_URL;?>process/signup.php" name="signup" id="signup">
            <div class="txtbx_mdl">
              <input type="text" name="full_name" placeholder="Enter Fullname" class="txtbx_mdlbx" required="">
            </div>
            <div class="txtbx_mdl">
              <input type="text" name="email_id" placeholder="Enter Email" class="txtbx_mdlbx" required="">
            </div>
            <div class="txtbx_mdl">
              <input type="text" name="contact_number" placeholder="Enter phone number" class="txtbx_mdlbx" required="">
            </div>
            <div class="txtbx_mdl">
              <input type="password" name="password" placeholder="Enter password" class="txtbx_mdlbx" required="">
            </div>
            <div class="txtbx_mdl">
              <input type="password" name="confirm_password" placeholder="Confirm password" class="txtbx_mdlbx" required="">
            </div>
            <div class="btnbx_mdl">
              <input type="submit" name="sign_up" value="Sign Up" class="btnbx_mdlbx">
            </div>
          </form>
            <div class="login-help">
              <a href="#home"  data-toggle="tab">Have an account? - Login</a>
            </div>
          </div>
        <!-- SignUp ends -->

        <!-- Display Message -->
        <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-info alert-dismissible validationSuccess show" role="alert">
          <?php echo $_SESSION['success']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" class="close-success">&times;</span>
              </button>
          </div>
        <?php }?>

        <?php if (isset($_SESSION['fail'])) { ?>
          <div class="alert alert-info alert-dismissible validationSuccess show" role="alert">
          <?php echo $_SESSION['fail']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" class="close-success">&times;</span>
              </button>
          </div>
        <?php }?>
        <!-- Display Message Ends -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Form ends here -->

<!-- Footer Start-->
  <?php include(ROOT_PATH."includes/footer.php")?>
<!-- Footer Ends Here-->

  <script type="text/javascript" src="jquery/jquery.js"></script>
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <script type="text/javascript" src="../assets/js/function.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
</body>
</html>
