<!doctype html>
<html lang="en">
<?php $this->load->view('template/V_header'); ?>
<body id="book-table">
<?php $this->load->view('template/V_sidemenu'); ?>
	<div class="site-main">
				<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-12 offset-lg-0">
						<div class="contact-form-section">
							<h1>List Order <?php echo date('d F Y') ?></h1><br>
							<div class = "table-responsive">
							<table id="table-food" class="table table-striped table-bordered ">
								<thead>
									<tr>
										<th></th>
										<th>No.</th>
                    <th>Time</th>
										<th>Code</th>
										<th>Item</th>
                    <th>Qty</th>
										<th>Additional</th>
                    <th>Desc</th>
									</tr>
								</thead>
								<tbody id="show_order"></tbody>
							</table>
							</div>
							<div class="float-right"><a href="<?php echo site_url('waiters/page_order') ?>" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Add New</a></div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<?php $this->load->view('template/V_footer'); ?>
</body>

</html>