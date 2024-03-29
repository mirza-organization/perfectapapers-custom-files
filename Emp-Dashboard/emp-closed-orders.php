<?php include_once("../includes/sessions_check.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Perfectapapers - Employee Dashboard</title>
	<?php include_once("emp-dashboard-assets-links.php"); ?>
</head>

<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">

			<?php include_once("emp-dashboard-navigation.php"); ?>

			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8">
						<h1 class="float-left text-center text-md-left">Closed Orders</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">
						<!-- This ".php" file is very important because it include's fetch_and_show class. All dynamic information is diplayed in the pages with the help of this file. 
						-->
						<?php include_once("emp-dashboard-dropdown.php"); ?>

					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-sm-12 col-md-12">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title text-success">Closed Orders List</h3>
									</div>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Order #</th>
													<th>Product</th>
													<th>Status</th>
													<th>Due Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>0001</td>
													<td>Product Name 1</td>
													<td>Complete</td>
													<td>2019-08-09</td>
												</tr>
												<tr>
													<td>0002</td>
													<td>Product Name 2</td>
													<td>Complete</td>
													<td>2019-08-09</td>
												</tr>
												<tr>
													<td>0003</td>
													<td>Product Name 3</td>
													<td>Processing</td>
													<td>2019-08-09</td>
												</tr>
												<tr>
													<td>0004</td>
													<td>Product Name 4</td>
													<td>Pending</td>
													<td>2019-08-09</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>

					</div>

				</section>
				<section class="row">
					<div class="col-12 mt-1 mb-4">All Rights Reserved by <a href="https://www.perfectapapers.com/" target="_blank">Perfectapapers</a></div>
				</section>
		</div>
		</section>
		</main>
	</div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../custom-assets/dist/js/bootstrap.min.js"></script>

	<script src="../custom-assets/js/chart.min.js"></script>
	<script src="../custom-assets/js/chart-data.js"></script>
	<script src="../custom-assets/js/easypiechart.js"></script>
	<script src="../custom-assets/js/easypiechart-data.js"></script>
	<script src="../custom-assets/js/bootstrap-datepicker.js"></script>
	<script src="../custom-assets/js/custom.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

</body>

</html>