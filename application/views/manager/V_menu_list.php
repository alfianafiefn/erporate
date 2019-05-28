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
							<h1>Menu List</h1><br>
							<div class="blog_right_sidebar">
								<aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">Tags Menu</h4>
                                <ul class="list">
                                	<li style='margin-right:5px;'><a href='javascript:void(0);' class='tags_cat' data-cat="">All</a></li>
                                	<?php foreach ($category as $cat) {
                                		print_r("<li style='margin-right:5px;'><a href='javascript:void(0);' class='tags_cat' data-cat=".$cat['food_category_id'].">".$cat['category']."</a></li>") ;
                                	} ?>
                                </ul>
                            </aside>
							</div>
							<div class = "table-responsive">
							<table id="table-food" class="table table-striped table-bordered ">
								<thead>
									<tr>
										<th></th>
										<th>No.</th>
										<th>Name</th>
										<th>Price</th>
										<th>Desc</th>
										<th>Files</th>
										<th>Available</th>
									</tr>
								</thead>
								<tbody id="show_data"></tbody>
							</table>
							</div>
							<div class="float-right"><a href="javascript:void(0);" class="btn btn-primary btn-sm" id="addnew"><span class="fa fa-plus"></span> Add New</a></div>
						</div>
					</div>
				</div>
			</div>
	</div>

	<!-- Modal ADD -->
	<form id="formnewitem">
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  		<div class="form-group row" style="display: none;">
                            <label class="col-md-2 col-form-label">Menu ID</label>
                            <div class="col-md-10">
                              <input type="text" name="inpid" autocomplete="off" id="product_name" class="form-control" placeholder="Title Menu Display">
                            </div>
                        </div>
                        <div class="form-group row required">
                            <label class="col-md-2 col-form-label">Category</label>
                            <div class="col-md-10">
                              <select name="slccategory" id="slccategory" class="form-control">
                              	<?php foreach ($category as $cat) {
                              		echo "<option value='".$cat['food_category_id']."'>".$cat['category']."</option>";
                              	} ?>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row required">
                            <label class="col-md-2 col-form-label">Menu</label>
                            <div class="col-md-10">
                              <input type="text" name="inpmenu" autocomplete="off" id="product_name" class="form-control" placeholder="Title Menu Display">
                            </div>
                        </div>
                        <div class="form-group row required">
                            <label class="col-md-2 col-form-label">Price</label>
                            <div class="col-md-10">
                              <input type="text" name="inpprice" autocomplete="off" id="price" class="form-control" placeholder="Price">
                            </div>
                        </div>
                        <div class="form-group row required">
                            <label class="col-md-2 col-form-label">Image</label>
                            <div class="col-md-10">
                              <input type="file" name="file" id="price" class="form-control" placeholder="Price">
                            </div>
                        </div>
                        <div class="form-group row required">
                            <label class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">
                              <textarea class="form-control" name="txtdesc" height="5"></textarea>
                            </div>
                        </div>
                  </div>
            </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_save" class="btn btn-primary">Add</button>
                    <button type="submit" id="btn_edit" class="btn btn-info" hidden>Update</button>
                  </div>
                </div>
              </div>
            </div>
	<?php $this->load->view('template/V_footer'); ?>
</body>

</html> 