<?php	
	session_start();
	define('ACCESS_ALLOWED',TRUE);
	require_once('config/define.php');
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yogaddict - India's No.1 Yoga Blog Site</title>
	<?php include("includes/links.php");?>
</head>
<body class="my-body">
<!-- Header -->
	<?php include ( "includes/nav.php");?>
<!-- Header ends -->

<!-- Slider -->
	<div id="carousel-example-generic" class="my-carousel carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="<?php echo BASE_URL; ?>assets/imgs/slid5.jpg" alt="" class="img-responsive" style="width: 100%">
	      <div class="carousel-caption">
	        <h2 class="animated fadeInLeft"><p>Discover your</p></h2>
	        <h2 class="animated fadeInRight margin"><p>Inner Sanctuary</p></h2>
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo BASE_URL;?>assets/imgs/slid1.jpg" alt="" class="img-responsive" style="width: 100%">
	      <div class="carousel-caption">
	        <h2 class="animated fadeInLeft"><p>Lighten your</p></h2>
	        <h2 class="animated fadeInRight margin"><p>Heart & Mind</p></h2>
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo BASE_URL;?>assets/imgs/slid6.jpg" alt="" class="img-responsive" style="width: 100%">
	      <div class="carousel-caption">
	        <h2 class="animated fadeInLeft"><p>Gather new</p></h2>
	        <h2 class="animated fadeInRight margin"><p>Body Energy</p></h2>
	    </div>
	    </div>
 	</div>
<!-- Slider ends -->

<!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="fa fa-chevron-left arrow" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="fa fa-chevron-right arrow" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Controls end here -->

<!-- Meditation___Yoga___Pilates starts here -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 three-divs-parent">
				<div class="col-md-4 cent">
					<div class="cent-circle">
						<img src="<?php echo BASE_URL;?>/assets/imgs/c1.png">
					</div>
					<p class="health-mind">HEALTHY-MIND</p>
					<p class="meditation">MEDITATION</p>
					<p class="three-divs">Meditation is a practice where an individual uses a technique – such as mindfulness, or focusing the mind on a particular object, thought or activity – to train attention and awareness, and achieve a mentally clear and emotionally calm and stable state. </p>
				</div>
				<div class="col-md-4">
					<div class="cent-circle">
						<img src="<?php echo BASE_URL;?>/assets/imgs/c2.png">
					</div>
					<p class="health-mind">MIND-BALANCE</p>
					<p class="meditation">YOGA</p>
					<p class="three-divs">Yoga is an old discipline from India. It is both spiritual and physical. Yoga uses breathing techniques, exercise and meditation. It helps to improve health and happiness. </p>
				</div>
				<div class="col-md-4">
					<div class="cent-circle">
						<img src="<?php echo BASE_URL;?>/assets/imgs/c3.png">
					</div>
					<p class="health-mind">BODY-STRENGTH</p>
					<p class="meditation">PILATES</p>
					<p class="three-divs">If practiced with consistency, Pilates improves flexibility, builds strength and develops control and endurance in the entire body. It puts emphasis on alignment, breathing, developing a strong core, and improving coordination and balance. </p>
				</div>
			</div>
		</div>
	</div>
<!-- Meditation___Yoga___Pilates ends here -->

<!-- Why we need yoga starts -->
	<div class="container-fluid why-yoga-back">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 why-yoga">
					<h1>The Main Reasons to Practice Yoga:</h2>
					<div class="col-md-4 good_for">
						<p class="good_for_right">Good for Health</p>
						<p class="good_for_text_right">Yoga Fit is where you can find balance, harmony and energy. Yoga Fit is where you can find balance</p>

						<p class="good_for_right">Good for Body</p>
						<p class="good_for_text_right">Yoga Fit is where you can find balance, harmony Yoga where balance of metabolism</p>
					</div>
					<div class="col-md-4">
						<img src="<?php echo BASE_URL;?>/assets/imgs/whyoga.png">
					</div>
					<div class="col-md-4 good_for">
						<p class="good_for_left">Good for Cardio</p>
						<p class="good_for_text_left">Yoga Fit iimproves blood circulation and decreases blood pressure of body. A lower pulse rate helps</p>
						
						<p class="good_for_left">Good for Breathing</p>
						<p class="good_for_text_left">Yoga Fit improves your raspiratory by helping your lungs work more efficiently. Breathing excercises</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Why we need yoga ends here -->

<!-- Sample blogs starts -->
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 sample_blogs">
					<h1>BLOGS:</h2>
					<div class="col-xs-12 col-sm-12 col-md-12 sample_blogs_subcat">
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/assets/imgs/blog_1.webp" class='sample_blogs_imgs'>
						</div>
						<div class="col-md-7">
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_text_date">May 10, 2019</p>
								<p class="sample_blogs_text_title">How a Daily Meditation Practice Helps You Find Trust</p>
								<p class="sample_blogs_text_article" href="<?php echo BASE_URL;?>pages/article.php">One of the nice things about meditation is that when we sit with these moments as they arise, we start to trust in them and in the dark grace.</p>
							</a>
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_read_more">Read More -></p>
							</a>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 sample_blogs_subcat">
						<div class="col-md-7">
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_text_date_right">May 15, 2019</p>
								<p class="sample_blogs_text_title_right">5 Poses to Inspire More Self-Love, Less Self Smack-Talk</p>
								<p class="sample_blogs_text_article_right" href="<?php echo BASE_URL;?>pages/article.php">It’s all too easy to put ourselves down. Here’s how to use your practice to stop, once and for all.</p>
							</a>
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_read_more_right">Read More -></p>
							</a>
						</div>
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/assets/imgs/blog_2.webp" class='sample_blogs_imgs'>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 sample_blogs_subcat">
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/assets/imgs/slider_5.jpg" class='sample_blogs_imgs'>
						</div>
						<div class="col-md-7">
							<a href="<?php echo BASE_URL;?>pages/article.php">	
							<p class="sample_blogs_text_date">May 20, 2019</p>
							<p class="sample_blogs_text_title">These Exercises Will Teach You How to Prevent Shoulder Injuries</p>
							<p class="sample_blogs_text_article" href="<?php echo BASE_URL;?>pages/article.php">Ever experience shoulder pain in your yoga practice? Have a nagging shoulder injury that you can’t quite kick? Here, yoga teacher Benjamin Sears demonstrates practical exercises to better understand your shoulders, optimize the way they function, and both prevent and heal shoulder injuries.</p>
							</a>
							<a href="<?php echo BASE_URL;?>pages/article.php">
								<p class="sample_blogs_read_more">Read More -></p>
							</a>`
						</div>
					</div>
					<div class="last_div">
						<a href="<?php echo BASE_URL;?>pages/blogs.php"><button type="submit" class="more_blogs_btn btn btn-primary">More Blogs</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Sample blogs ends here -->


<!-- Display Message -->
<?php if (isset($_SESSION['success'])) { ?>
	<div class="alert alert-success alert-dismissible validationSuccess show" role="alert">
	<?php echo $_SESSION['success']; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      		<span aria-hidden="true" class="close-success">&times;</span>
  		</button>
	</div>
<?php }?>

<?php if (isset($_SESSION['fail'])) { ?>
	<div class="alert alert-danger alert-dismissible validationSuccess show" role="alert">
		<?php echo $_SESSION['fail']; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
      		<span aria-hidden="true" class="close-success">&times;</span>
  		</button>
		</div>
<?php }?>
<!-- Display Message Ends -->


<!-- Footer Start-->
	<!-- <img src="<?php echo BASE_URL;?>/assets/imgs/map.png" style="width: 100%"> -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229225.54440379355!2d91.56279726554581!3d26.14298086356402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5a287f9133ff%3A0x2bbd1332436bde32!2sGuwahati%2C%20Assam!5e0!3m2!1sen!2sin!4v1572982888363!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	<?php 

		require_once(ROOT_PATH."includes/footer.php");
	?>
<!-- Footer Ends Here-->
</body>
</html>