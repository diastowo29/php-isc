<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>New Employee - Indocool Solusi Cemerlang</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="dashboardcss/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="dashboardcss/css/ready.css">
	<link rel="stylesheet" href="dashboardcss/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			
			<!-- HEADER -->
			<?php include('new-header.blade.php') ?>
			<!-- HEADER -->
			
			<!-- SIDEBAR -->
			<?php include('sidebar.php') ?>
			<!-- SIDEBAR -->

			<div class="main-panel">
				<div class="content">
					<form id="new_employee_form" action="/submit-employee" method="post">
						<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
						<div class="container-fluid">
							<h4 class="page-title">New Employee</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Input Employee</div>
										</div>
										<div class="card-body row">
											<div class="form-group form-name">
												<label for="name">Employee Name</label>
												<input type="name" required="required" name="new_name" class="form-control" id="name" placeholder="Input Name">
											</div>
											<div class="form-group form-other">
												<label for="name">Employee Number</label>
												<input type='text' name="emp_number" class="form-control" id='emp_number' required="required"/>
											</div>
											<div class="form-group form-other">
												<label for="name">Join Date</label>
												<input type='date' name="new_join_date" class="form-control" id='datetimepicker4' required="required"/>
											</div>
											<div class="form-group form-other">
												<label for="name">Probation Period</label>
												<input type="name" required="required" name="new_prob_period" class="form-control" id="name" placeholder="Input Period">
											</div>
											<div class="form-group form-other">
												<label for="name">Date of Birth</label>
												<input type='date' name="new_date_of_birth" class="form-control" id='datetimepicker4' required="required" />
											</div>
											<div class="form-group form-other">
												<label for="name">NIK</label>
												<input type="name" required="required" name="new_nik" class="form-control" id="name" placeholder="Input NIK">
											</div>
											<div class="form-group form-other">
												<label for="name">Email</label>
												<input type="name" required="required" name="new_email" class="form-control" id="name" placeholder="Input Email">
											</div>
											<div class="form-group form-other">
												<label for="name">KK Number</label>
												<input type="name" required="required" name="new_kk" class="form-control" id="name" placeholder="Input KK">
											</div>
											<div class="form-group form-other">
												<label for="name">Bank Account Number</label>
												<input type="name" required="required" name="new_rek" class="form-control" id="name" placeholder="Input Account Number">
											</div>
											<div class="form-group form-other">
												<label for="name">NPWP Number</label>
												<input type="name" required="required" name="new_npwp" class="form-control" id="name" placeholder="Input NPWP">
											</div>
											<div class="form-group form-other">
												<label for="exampleFormControlSelect1">KK Status</label>
												<select class="form-control" id="exampleFormControlSelect1">
													<option>TK 0</option>
													<option>TK 1</option>
													<option>TK 2</option>
													<option>TK 3</option>
													<option>K 0</option>
													<option>K 1</option>
													<option>K 2</option>
													<option>K 3</option>
													<option>BH</option>
												</select>
											</div>
											<div class="form-group form-other">
												<label for="name">BPJS TK Number</label>
												<input type="name" required="required" name="new_bpjs_tk" class="form-control" id="name" placeholder="Input BPJS TK">
											</div>
											<div class="form-group form-other">
												<label for="name">BPJS KS Number</label>
												<input type="name" required="required" name="new_bpjs_ks" class="form-control" id="name" placeholder="Input BPJS KS">
											</div>
											<div class="form-group form-other">
												<label for="name">Address</label>
												<!-- <input type="textarea" class="form-control" id="name" placeholder="Name" rows="3"> -->
												<textarea name="new_address" rows="3" class="form-control" form="new_employee_form" required="required" placeholder="Enter address here..."></textarea>
											</div>
											<div class="form-group form-other">
												<label for="name">Phone Number</label>
												<input type="name" required="required" name="new_phone" class="form-control" id="name" placeholder="Name">
											</div>
											<div class="form-group form-other">
												<label for="name">Position</label>
												<input type="name" required="required" name="new_position" class="form-control" id="name" placeholder="Input Position">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Salary Information</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="form-group">
													<label for="emp">Basic Salary</label>
													<input type="emp" required="required" name="new_salary" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Fix Allowance</label>
													<input type="emp" required="required" name="new_allowance" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Meal</label>
													<input type="emp" required="required" name="new_meal" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Transport</label>
													<input type="emp" required="required" name="new_transport" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">On-Time</label>
													<input type="emp" required="required" name="new_ontime" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Attendance</label>
													<input type="emp" required="required" name="new_attendance" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">HSE</label>
													<input type="emp" required="required" name="new_hse" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Productivity</label>
													<input type="emp" name="new_productivity" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Away</label>
													<input type="emp" required="required" name="new_away" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Total</label>
													<input type="emp" required="required" name="new_total" disabled="true" class="form-control" id="emp" placeholder="0">
												</div>
											</div>											
										</div>
									</div>
								</div>
								<div class="col-md-12" align="center">
									<div class="card">
										<div class="card-action">
											<input type="submit" class="btn btn-success" name="Submit"></input>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</form>
					<footer class="footer">
						<div class="container-fluid">
							<nav class="pull-left">
								<ul class="nav">
									<li class="nav-item">
										<a class="nav-link" href="http://www.themekita.com">
											ThemeKita
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
											Help
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
											Licenses
										</a>
									</li>
								</ul>
							</nav>
							<div class="copyright ml-auto">
								2018, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
							</div>				
						</div>
					</footer>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
					<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="dashboardcss/js/core/jquery.3.2.1.min.js"></script>
<script src="dashboardcss/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="dashboardcss/js/core/popper.min.js"></script>
<script src="dashboardcss/js/core/bootstrap.min.js"></script>
<script src="dashboardcss/js/plugin/chartist/chartist.min.js"></script>
<script src="dashboardcss/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="dashboardcss/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="dashboardcss/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="dashboardcss/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="dashboardcss/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="dashboardcss/js/plugin/chart-circle/circles.min.js"></script>
<script src="dashboardcss/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="dashboardcss/js/ready.min.js"></script>
</html>