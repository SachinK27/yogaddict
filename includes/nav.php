
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="nav-cent container">
		  	<div class="navbar-header">
		  		<a class="logo navbar-brand" href="<?php echo BASE_URL;?>index.php"><img src="<?php echo BASE_URL;?>/assets/imgs/logo.png" class="pic-logo"></a>
		  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
		  			<span class="icon-bar"></span>
		  			<span class="icon-bar"></span>
		  			<span class="icon-bar"></span>
		  		</button>
		  	</div>

		    <div class="collapse navbar-collapse" id="mainNavbar">
			    <ul class="my-navs nav navbar-nav navbar-right">
			      <li <?php if($currentPage === 'index.php'){ ?> class="active" <?php } ?>>
			      	<a href="<?php echo BASE_URL;?>index.php">Home</a>
			      </li>
			      <li <?php if($currentPage === 'about.php'){ ?> class="active" <?php } ?>>
			      	<a href="<?php echo BASE_URL;?>pages/about.php">About</a>
			      </li>
			      <li <?php if($currentPage === 'blogs.php'){ ?> class="active"<?php } ?>>
			      	<a href="<?php echo BASE_URL;?>pages/blogs.php">Blogs</a>
			      </li>
			      <li <?php if($currentPage === 'contact.php'){ ?> class="active" <?php } ?>>
			      	<a href="<?php echo BASE_URL;?>pages/contact.php">Contact</a>
			      </li>

			      <?php if (!empty($_SESSION['userInfo'])) {?>
			      	<li <?php if($currentPage === 'profile.php'){ ?> class="active" <?php } ?>>
			      		<a href="<?php echo BASE_URL;?>pages/profile.php">Profile</a>
			      	</li>
			      	<li <?php if($currentPage === 'logout.php'){ ?> class="active" <?php } ?>>
			      		<a href="<?php echo BASE_URL;?>process/logout.php">Logout</a>
			      	</li>
			      	<?php }else {?>
			      	<li <?php if($currentPage === 'login_signup.php'){ ?> class="active" <?php } ?>>
			      		<a href="<?php echo BASE_URL;?>pages/login_signup.php">Login</a>
			      	</li>
			      <?php }?>
			  </ul>
			</div>
		  </div>
		</nav>
	</div>

	