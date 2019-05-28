	<div class="menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<header class="fixed-menu">
		<span class="menu-close"><i class="fa fa-times"></i></span>
		<div class="menu-header">
			<div class="logo d-flex justify-content-center">
				<img src="<?php echo base_url() ?>assets/bootstrap/img/logo.png" alt="">
			</div>
			<div  class="text-center">
				<h4>Charlie Barber</h4>
            	<p>Manager</p>
			</div>
		</div>
		<div class="nav-wraper">
			<div class="navbar">
				<ul class="navbar-nav">
					<li class="nav-item submenu dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false"><img src="<?php echo base_url() ?>assets/bootstrap/img/header/nav-icon1.png" alt="">Manager</a>
						<ul class="dropdown-menu">
							<li class="nav-item "><a class="nav-link" href="<?php echo site_url('manager/menu') ?>">Menu</a></li>
						</ul>
					</li>
					<li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false"><img src="<?php echo base_url() ?>assets/bootstrap/img/header/nav-icon2.png" alt="">Casier</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
						</ul>
					</li>
					<li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false"><img src="<?php echo base_url() ?>assets/bootstrap/img/header/nav-icon3.png" alt="">Waiters</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('waiters/order'); ?>">Order</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>