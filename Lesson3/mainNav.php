<div id="nav">
	<!-- Main Nav -->
	<div id="nav-fixed">
		<div class="container">
			<!-- logo -->
			<div class="nav-logo">
				<a href="index.php" class="logo"><img src="./img/logo.png" alt=""></a>
			</div>
			<!-- nav -->
			<ul class="nav-menu nav navbar-nav">
				<?php
					$i = 1;
					foreach ($categories as $cate) {
				?>
				<li class="cat-<?=$i?>"><a href="category.php?id_c=<?=$cate['id']?>"><?=$cate['title']?></a></li>
				<?php $i++; } ?>
			</ul>
			<!-- search & aside toggle -->
			<div class="nav-btns">
				<button class="aside-btn"><i class="fa fa-bars"></i></button>
				<button class="search-btn"><i class="fa fa-search"></i></button>
				<div class="search-form">
					<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
					<button class="search-close"><i class="fa fa-times"></i></button>
				</div>
			</div>
		</div>
	</div>
	<!-- Aside Nav -->
	<div id="nav-aside">
		<!-- nav -->
		<div class="section-row">
			<ul class="nav-aside-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="#">Join Us</a></li>
				<li><a href="#">Advertisement</a></li>
				<li><a href="contact.php">Contacts</a></li>
			</ul>
		</div>
		<!-- widget posts -->
		<div class="section-row">
			<h3>Recent Posts</h3>
			<div class="post post-widget">
				<a class="post-img" href="blog-post.php"><img src="./img/widget-2.jpg" alt=""></a>
				<div class="post-body">
					<h3 class="post-title"><a href="blog-post.php">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
				</div>
			</div>
			<div class="post post-widget">
				<a class="post-img" href="blog-post.php"><img src="./img/widget-3.jpg" alt=""></a>
				<div class="post-body">
					<h3 class="post-title"><a href="blog-post.php">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
				</div>
			</div>
			<div class="post post-widget">
				<a class="post-img" href="blog-post.php"><img src="./img/widget-4.jpg" alt=""></a>
				<div class="post-body">
					<h3 class="post-title"><a href="blog-post.php">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
				</div>
			</div>
		</div>
		<!-- social links -->
		<div class="section-row">
			<h3>Follow us</h3>
			<ul class="nav-aside-social">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</div>
		<!-- aside nav close -->
		<button class="nav-aside-close"><i class="fa fa-times"></i></button>
	</div>
	<!-- Aside Nav -->
</div>