<?php 
session_start();
  define('ACCESS_ALLOWED',TRUE);
  require_once('../config/define.php');
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/3.3/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL;?>assets/imgs/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">

    <title>Dashboard - Yogaddict</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/simple_sidebar.css" rel="stylesheet">
  </head>
  

<body>
  <div class="container-fluid">
    <!-- Navbar -->
    <?php include ( ROOT_PATH."admin/includes/nav.php");?>
    <!-- Navbar Ends -->

    <div class="wrapper">
      <nav id="sidebar">
          <ul class="list-unstyled components">
            <li class="active">
              <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#recentblogs">All Blogs</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Blogs</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#gallery">Gallery</a>
            </li>
            <li>
                <a href="#comments">Comments</a>
            </li>
            <li>
                <a href="#">Social</a>
            </li>
            <li>
                <a href="#">Settings</a>
            </li>
          </ul>
      </nav>

    <div id="content col-sm-12 col-md-12 col-xs-12 col-lg-12">

      <div class="banner col-sm-12 col-md-12 col-xs-12 col-lg-12" id="banner">
        <h2 class="page-header">Banner</h2>
        <form method="POST" action="<?php echo BASE_URL;?>admin/process/process.php" enctype="multipart/form-data">
          <div class="col-md-4 col-lg-4">
            <h4 class="">Banner Image:</h4>
            <input type="file" class="txtbx2" name="bannerImage" style="display: inline;">
          </div>
          <div class="col-md-4 col-lg-4">
            <h4 class="">Banner Description 1:</h4>
            <input type="text" class="txtbx2" name="bannerDescription1" style="display: inline;">
          </div>
          <div class="col-md-4 col-lg-4">
            <h4 class="">Banner Description 2:</h4>
            <input type="text" class="txtbx2" name="bannerDescription2" style="display: inline;">
          </div>
          <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12" style="margin-top: 10px;">
            <input type="submit" name="uploadBanner" value="Upload" class="btnbx_mdlbx2 inline">
          </div>
        </form>
      </div>
      
      <div class="uploadedbanner col-sm-12 col-md-12 col-xs-12 col-lg-12" id="uploadedbanner">
        <h2 class="page-header">Uploaded Banners</h2>
          <div class="col-md-4 col-lg-4">
            <div class="thumbnail">
              <img src="<?php echo BASE_URL;?>/assets/imgs/slid5.jpg" alt="blog">

            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="thumbnail">
              <img src="<?php echo BASE_URL;?>/assets/imgs/slid1.jpg" alt="blog">

            </div>
          </div>
          <div class="col-md-4 col-lg-4">
            <div class="thumbnail">
              <img src="<?php echo BASE_URL;?>/assets/imgs/slid6.jpg" alt="blog">

            </div>
          </div>
      </div>

      <div class="recentblogs col-sm-12 col-md-12 col-xs-12 col-lg-12" id="recentblogs">
        <h2 class="page-header">Recent Blogs</h2>
        <div class="col-md-3 col-lg-3">
          <div class="thumbnail">
            <a href="<?php echo BASE_URL;?>pages/article.php">
              <img src="<?php echo BASE_URL;?>/assets/imgs/blog_2.webp" alt="blog">
              <div class="caption">
                <h4>5 Poses to Inspire More Self-Love, Less Self Smack-Talk</h4>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="thumbnail">
            <a href="<?php echo BASE_URL;?>pages/article.php">
              <img src="<?php echo BASE_URL;?>/assets/imgs/blog_1.webp"alt="blog">
              <div class="caption">
                <h4>How a Daily Meditation Practice Helps You Find Trust</h4>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="thumbnail">
            <a href="<?php echo BASE_URL;?>pages/article.php">
              <img src="<?php echo BASE_URL;?>/assets/imgs/slider_5.jpg" alt="blog">
              <div class="caption">
                <h4>These Exercises Will Teach You How to Prevent Shoulder Injuries</h4>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="thumbnail">
            <a href="<?php echo BASE_URL;?>pages/article.php">
              <img src="<?php echo BASE_URL;?>/assets/imgs/slider_6.jpg" alt="blog">
              <div class="caption">
                <h4>Stand Tall & Steady: 10 Yoga Sequences for the Legs</h4>
              </div>
            </a>
          </div>
        </div>
      </div>

      
      <div class="gallery col-sm-12 col-md-12 col-xs-12 col-lg-12" id="gallery">
        <h2 class="page-header">Recently Uploaded Images</h2>
        <img src="<?php echo BASE_URL;?>/assets/imgs/slider_3.jpg" width="33%;">
        <img src="<?php echo BASE_URL;?>/assets/imgs/slider_4.jpg" width="33%;">
        <img src="<?php echo BASE_URL;?>/assets/imgs/slider_5.jpg" width="33%;"><br><br>
        <img src="<?php echo BASE_URL;?>/assets/imgs/slider_6.jpg" width="45%;">
        <img src="<?php echo BASE_URL;?>/assets/imgs/slider_7.jpg" width="45%;">
      </div>

      <div class="comments col-sm-12 col-md-12 col-xs-12 col-lg-12" id="comments">
        <h2 class="page-header">Recent Comments</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
</body>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
    });

    //For Comments
    $('#comments').on('click', function () {
    $('#comments1').toggleClass('show');
    });

  });
  
</script>
  

</body></html>