<!doctype html>
<html lang="en">
<?php $this->load->view('template/V_header'); ?>
<body id="book-table">
<?php $this->load->view('template/V_sidemenu'); ?>
	<div class="site-main">
		<section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6 col-md-12">
							<h1>Book table</h1>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that, as women.</p>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="contact-form-section">
								<h1>Login to Access</h1>
								<form id="formlogin">
									<div class="form-group col-md-12">
										<input type="text" autocomplete="off" class="form-control" id="txtusername" name="txtusername" placeholder="Username" onfocus="this.placeholder = ''"
										 onblur="this.placeholder = 'Username'">
									</div>
									<div class="form-group col-md-12">
										<input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Password" onfocus="this.placeholder = ''"
										 onblur="this.placeholder = 'Password'">
									</div>
									<div class="col-lg-12 text-right">
										<input type="submit" value="Login" class="primary-btn text-uppercase">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('template/V_footer'); ?>
</body>

</html>