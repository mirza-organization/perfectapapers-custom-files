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
						<h1 class="float-left text-center text-md-left">Available Leads</h1>
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
										<h3 class="card-title text-warning">Available Leads List</h3>
									</div>
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Order#</th>
													<th>Email</th>
													<th>Doc Type</th>
													<th>Academic Level</th>
													<th>No# of Pages</th>
													<th>Deadline Time</th>
													<th>Deadline Date</th>
													<th>Country Code</th>
													<th>User Contact</th>
													<th>Order Placing Dt</th>
													<th>Order Placing Tm</th>
												</tr>
											</thead>
											<tbody>
												<?php
												/* $obj is the Object of fetch_and_show Class */
												$AvailableLeads = $obj->show_all_data("AvailableLeads");
												while ($AvailableLeads_data_row = mysqli_fetch_assoc($AvailableLeads)) {
												?>
													<tr>
														<td> <?php echo $AvailableLeads_data_row['id']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['user_email']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['doc_type']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['academic_lvl']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['no_of_pages']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['deadline_time']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['deadline_date']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['user_contact_code']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['user_contact']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['order_placing_date']; ?> </td>
														<td> <?php echo $AvailableLeads_data_row['order_placing_time']; ?> </td>
													</tr>
												<?php  		} ?>
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
	<script src="../custom-assets/jquery-3.2.1.min.js"></script>
	<script src="../custom-assets/popper.min.js"></script>
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