<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Forms - Ready Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="dashboardcss/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="dashboardcss/css/ready.css">
	<link rel="stylesheet" href="dashboardcss/css/demo.css">
	<style type="text/css">
		.form-radio-label {
			display: block;
		}
	</style>
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
					<div class="container-fluid">
						<h4 class="page-title">Daily Timesheet</h4>
						<div class="row">
							<form action="javascript:addJob();" id="formJob" style="display: contents;">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Input Daily Timesheet</div>
										</div>
										<div class="card-body">
											<div class="form-group">
												<label for="email">Date</label>

												<input id="ts_date" type='date' class="form-control" id='datetimepicker4' />
											</div>
											<div class="checkbox">
												<label><input type="checkbox"> Holiday</label>
											</div>

											<div class="form-group">
												<label for="emp">Employee No</label>
												<input type="text" id="ts_emp_number" class="form-control" id="emp" placeholder="Employee Number">
											</div>

											<div class="form-group">
												<label for="exampleFormControlSelect1">Status</label>
												<select  id="ts_status" class="form-control" id="exampleFormControlSelect1" onchange="statusChanged(this)">
													<option>Working</option>
													<option>Absent</option>
													<option>Working (Holiday)</option>
												</select>
											</div>

											<div class="form-group">
												<label for="name">Name</label>
												<input type="name" class="form-control" disabled="true" id="name" placeholder="Name">
											</div>

											<div class="row">
												<div class="form-group col-md-6">
													<label for="emp">Start FP</label>
													<input type="text" id="ts_fp_start" class="form-control" disabled="true" id="emp" placeholder="Time">
												</div>

												<div class="form-group col-md-6">
													<label for="emp">Finish FP</label>
													<input type="text" id="ts_fp_finish" class="form-control" disabled="true" id="emp" placeholder="Time">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div class="card-header">
											<div class="card-title">Input Allowance</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="form-group">
													<label for="emp">Meals</label>
													<input type="number"  id="ts_meal" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Transport</label>
													<input type="number"  id="ts_transport" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">On-Time</label>
													<input type="number"  id="ts_ontime" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Attendance</label>
													<input type="number"  id="ts_attendance" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">HSE</label>
													<input type="number"  id="ts_hse" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Productivity</label>
													<input type="number"  id="ts_productivity" class="form-control" id="emp" placeholder="0">
												</div>
												<div class="form-group">
													<label for="emp">Away</label>
													<input type="number"  id="ts_away" class="form-control" id="emp" placeholder="0">
												</div>
											</div>											
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="card">
										<div id="leaveDetail">
											<div class="card-header">
												<div class="card-title">Leave Details</div>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label for="exampleFormControlSelect1">Leave</label>
													<select  id="leaveStatus" class="form-control" id="exampleFormControlSelect1" onchange="leaveDetailChange(this)">
														<option value="Sick Leave">Sick Leave</option>
														<option value="Annual Leave">Annual Leave</option>
													</select>
												</div>
												<div class="form-group" id="sickRadio">
													<select  id="sickStatus" class="form-control" id="exampleFormControlSelect1" onchange="withCertChange()">
														<option value="">-- Sick Detail --</option>
														<option value="With Certificate">With Certificate</option>
														<option value="Without Certificate">Without Certificate</option>
													</select>
												</div>
												<div class="form-group" id="annualRadio">
													<select  id="annualStatus" class="form-control" id="exampleFormControlSelect1" onchange="annualRadioChange(this)">
														<option value="">-- Leave Detail --</option>
														<option value="Annual Leave">Annual Leave</option>
														<option value="Absent">Absent</option>
														<option value="Specialist Leave">Specialist Leave</option>
													</select>
												</div>
												<div class="form-group" id="2wb">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" onchange="on2wbChange(this)" value="">
														<span class="form-check-sign">With Notification 2 Weeks Before</span>
													</label>
												</div>
												<div class="form-group" id="specialistRadio">
													<select  id="specialistStatus" class="form-control" id="exampleFormControlSelect1">
														<option value="">-- Leave Detail --</option>
														<option value="Marriage">Marriage</option>
														<option value="Baby Birth">Baby Birth</option>
														<option value="Family Death">Family Death</option>
														<option value="Circumcision">Circumcision</option>
														<option value="Other">Other</option>
													</select>
												</div>
											</div>
										</div>
										<div id="jobDetail">
											<div class="card-header">
												<div class="card-title">Input Job Detail</div>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="form-group col-md-4">
														<label for="emp">Job Number</label>
														<input type="text"  id="ts_job_number" class="form-control" id="emp" placeholder="0">
													</div>

													<div class="form-group col-md-4">
														<label for="emp">Start</label>
														<input type="time"  id="ts_start" class="form-control" id="emp" placeholder="0">
													</div>

													<div class="form-group col-md-4">
														<label for="emp">Finish</label>
														<input type="time"  id="ts_finish" class="form-control" id="emp" placeholder="0">
													</div>
													<div class="form-group col-md-12">
														<label for="comment">Description</label>
														<textarea class="form-control" id="ts_desc" id="comment" rows="2"></textarea>
													</div>
												</div>											
											</div>
										</div>
										<div class="card-action" style="padding: 15px;">
											<input type="submit" value="Add" class="btn btn-success" style="float: right;">
										</div>
									</div>
								</div>
							</form>
							<div class="col-md-6">
								<div class="card">
									<form action="/submitform" method="post">
										<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
										<input type="hidden" name="ts_summary" id="ts_summary" value="">
										<div class="card-header">
											<div class="card-title">Job Detail Summary</div>
										</div>
										<div class="card-body">
											<table class="table mt-3">
												<thead>
													<tr>
														<th scope="col">Date</th>
														<th scope="col">Job No</th>
														<th scope="col">Start</th>
														<th scope="col">Finish</th>
													</tr>
												</thead>
												<tbody id="jobDetailTable">
													<!-- <tr onclick="editJob(this)" style="cursor: pointer;">
														<td>4567</td>
														<td>08.00</td>
														<td>09.00</td>
													</tr> -->
												</tbody>
											</table>
											<div class="form-group">
												<input type="submit" class="btn btn-success" name="submit" value="Submit All">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- <div class="col-md-12" align="center">
								<div class="card">
									<div class="card-action">
										<button class="btn btn-success">Submit</button>
									</div>
								</div>
							</div> -->
							</div>
						</div>
					</div>
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
<script type="text/javascript">

	$('#leaveDetail').hide();
	$('#annualRadio').hide();
	$('#specialistRadio').hide();
	$('#2wb').hide();
	
	function annualRadioChange (that) {
		$('#sickStatus').prop('selectedIndex', 0);
		$('#specialistStatus').prop('selectedIndex', 0);
		
		if ($(that).val() == 'Specialist Leave') {
			$('#specialistRadio').show();
			$('#2wb').hide();
			$('#specialistStatus').prop('required', true);
		} else if ($(that).val() == 'Annual Leave') {
			$('#specialistRadio').hide();
			$('#specialistStatus').prop('required', false);
		} else {
			$('#specialistRadio').hide();
			$('#2wb').hide();
			$('#specialistStatus').prop('required', false);
		}
	}

	function onAnnualLeave () {
		$('#sickRadio').hide();
		$('#sickStatus').prop('required', false);
		$('#annualRadio').show();
		$('#annualStatus').prop('required', true);
		$('#annualStatus').prop('selectedIndex', 0);
		$('#specialistRadio').hide();
	}

	function onSickLeave () {
		$('#2wb').hide();
		$('#sickStatus').prop('required', true);
		$('#specialistRadio').hide();
		$('#annualRadio').hide();
		$('#sickRadio').show();
	}

	function onAbsent () {
		/*not used yet*/
	}

	function withCertChange () {
		console.log('cert change');
	}

	function statusChanged (that) {
		console.log($(that).val())
		if ($(that).val() == 'Absent') {
			$('#leaveDetail').show();
			$('#jobDetail').hide();
			$("#jobDetail :input").prop('required', false);
			$("#jobDetail :input").val('');
			$("#leaveDetail :input");
			$('#sickStatus').prop('required', true);
		} else {
			$('#leaveDetail').hide();
			$('#jobDetail').show();
			$("#leaveDetail :input");
			$("#jobDetail :input").prop('required', true);
		}
	}

	function leaveDetailChange (that) {
		$('#sickStatus').prop('selectedIndex', 0);
		$('#annualStatus').prop('selectedIndex', 0);
		$('#specialistStatus').prop('selectedIndex', 0);
		console.log($(that).val());
		if ($(that).val() == 'Annual Leave') {
			onAnnualLeave();
		} else {
			onSickLeave();
		}
	}

	function on2wbChange (that) {
		console.log($(that).is(':checked'));
	}

	function addJob () {
		console.log($('#leaveStatus').val())
		console.log($('#sickStatus').val())
		console.log($('#annualStatus').val())
		console.log($('#specialistStatus').val())
		
		var ts_date = $('#ts_date').val();
		var ts_emp_number = $('#ts_emp_number').val();
		var ts_status = $('#ts_status').val();
		var ts_fp_start = $('#ts_fp_start').val();
		var ts_fp_finish = $('#ts_fp_finish').val();
		var ts_meal = $('#ts_meal').val();
		var ts_transport = $('#ts_transport').val();
		var ts_ontime = $('#ts_ontime').val();
		var ts_attendance = $('#ts_attendance').val();
		var ts_hse = $('#ts_hse').val();
		var ts_productivity = $('#ts_productivity').val();
		var ts_away = $('#ts_away').val();

		var ts_leave_status = $('#leaveStatus').val();
		var ts_sick_status = $('#sickStatus').val();
		var ts_annual_status = $('#annualStatus').val();
		var ts_specialist_status = $('#specialistStatus').val();

		var ts_job_number = $('#ts_job_number').val();
		var ts_start = $('#ts_start').val();
		var ts_finish = $('#ts_finish').val();
		var ts_desc = $('#ts_desc').val();

		var newJobNumber = '';
		var newTsStart = '';
		var newTsFinish = '';

		if (ts_status == 'Absent') {
			newJobNumber = 'Leave';
			newTsStart = '--:--';
			newTsFinish = '--:--';
		} else {
			newJobNumber = ts_job_number;
			newTsStart = ts_start;
			newTsFinish = ts_finish;
		}

		var ts_summary = {
			"ts_date": ts_date,
			"ts_emp_number": ts_emp_number,
			"ts_status": ts_status,
			"ts_fp_start": ts_fp_start,
			"ts_fp_finish": ts_fp_finish,
			"ts_meal": ts_meal,
			"ts_transport": ts_transport,
			"ts_ontime": ts_ontime,
			"ts_attendance": ts_attendance,
			"ts_hse": ts_hse,
			"ts_productivity": ts_productivity,
			"ts_away": ts_away,
			"ts_job_number": ts_job_number,
			"ts_start": ts_start,
			"ts_finish": ts_finish,
			"ts_desc": ts_desc,
			"ts_leave_status": ts_leave_status,
			"ts_sick_status": ts_sick_status,
			"ts_annual_status": ts_annual_status,
			"ts_specialist_status": ts_specialist_status
		};
		
		var tbodyContent = `<tr onclick="editJob(this)" style="cursor: pointer;">
								<td>` + ts_date + `</td>
								<td>` + newJobNumber + `</td>
								<td>` + newTsStart + `</td>
								<td>` + newTsFinish + `</td>
							</tr>`;

		$('#jobDetailTable').append(tbodyContent);
		$('#ts_summary').val($('#ts_summary').val() + JSON.stringify(ts_summary) + '|');
		return false;
	}

	function editJob (that) {
		$(that).remove();
	}

</script>
</html>