<?php include_once("../includes/sessions_check.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Perfectapapers - User Dashboard</title>
	<?php include_once("user-dashboard-assets-links.php"); ?>
</head>

<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">

			<?php include_once("user-dashboard-navigation.php"); ?>

			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8">
						<h1 class="float-left text-center text-md-left">Update Form</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">
						<!-- This ".php" file is very important because it is including sessions_check file & fetch_and_show class. All dynamic information is diplayed in the pages with the help of this file. 
						-->
						<?php include_once("user-dashboard-dropdown.php"); ?>

					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-12">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Update your details here</h3>
										<form class="form" method="post" action="../includes/user_info_update.php">

											<!-- <div class="form-group row">
												<label class="col-md-3 col-form-label">Change Picture:</label>
												<div class="col-md-9">
													 <div class="custom-file">
														<input type="file" class="custom-file-input" id="customFile" accept="image/*">
														<label class="custom-file-label" for="customFile">Choose file</label>
													  </div>
												</div>
											</div> -->

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Name:</label>
												<div class="col-md-9">
													<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Update your name here" value="<?php echo $user_data_row['user_name']; ?>">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Password</label>
												<div class="col-md-9">
													<input class="form-control" type="password" name="user_password" id="user_password" placeholder="Update your password here">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">Email:</label>
												<div class="col-md-9">

													<input type="email" disabled="disabled" value="<?php echo $user_data_row['user_email']; ?>" class="form-control">

													<input type="hidden" name="user_email" id="user_email" value="<?php echo $user_data_row['user_email']; ?>" class="form-control">

													<span class="text-muted"> Sorry you can't update the email. If you want to you can only create a new account. </span>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-md-3"></div>
												<div class="col-md-9">
													<input type="submit" value="Update" class="user-update-btn" name="user_update_btn" id="user_update_btn">

												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</section>
						<section class="row"> </section>
						<section class="row">
							<div class="col-12 mt-1 mb-4">All Rights Reserved by <a href="#">Perfectapapers</a></div>
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

	<script>
		// Add the following code if you want the name of the file appear on select
		$(".custom-file-input").on("change", function() {
			var fileName = $(this).val().split("\\").pop();
			$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
	</script>

</body>

</html>