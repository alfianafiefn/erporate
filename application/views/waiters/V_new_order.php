<!doctype html>
<html lang="en">
<?php $this->load->view('template/V_header'); ?>
<body id="book-table">
<?php $this->load->view('template/V_sidemenu'); ?>
	<div class="site-main">
				<div class="container">
				<div class="row align-items-left justify-content-left">
					<div class="col-lg-4 offset-lg-0">
						<div class="contact-form-section">
							<h1>&nbsp;</h1><br>
							<form id="form_order">
								<div class="form-group col-md-12">
									<input type="text" readonly="readonly" class="form-control" id="inpinvoice" name="inpinvoice" value="<?php echo $invoice;?>" placeholder="Order Code" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Invoice'">
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="inptable" name="inptable" placeholder="Table Number" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Table Number'">
								</div>
							<h4>Menu</h4>
								<div class="form-group col-md-12 requ">
									<select id="txtorder" style="width: 100%;">
										<option value=""></option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<input type="number" class="form-control" id="numqty" name="txtpassword" placeholder="Quantity" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Password'">
								</div>
								<div class="form-group col-md-12">
									<input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Request" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Password'">
								</div>
								<div class="col-lg-12 text-right">
									<input type="submit" value="ADD " class="primary-btn text-uppercase">
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-8 offset-lg-0">
						<div class="contact-form-section">
							<h1>New Order</h1><br>
							<div class = "table-responsive">
								<table class="table table-striped table-bordered ">
									<thead>
										<tr>
											<th></th>
											<th>No.</th>
											<th>Item</th>
	                 					   	<th>Qty</th>
	                 					   	<th>Request</th>
										</tr>
									</thead>
									<tbody id="show_order"></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<?php $this->load->view('template/V_footer'); ?>
</body>

</html>