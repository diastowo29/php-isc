<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>All Employee - Indocool Solusi Cemerlang</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="dashboardcss/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="dashboardcss/css/ready.css">
	<link rel="stylesheet" href="dashboardcss/css/demo.css">
	<link rel="stylesheet" href="dashboardcss/css/apps.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			
			<!-- HEADER -->
			@include('new-header')
			<!-- HEADER -->
			
			<!-- SIDEBAR -->
			@include('sidebar')
			<!-- SIDEBAR -->
			
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">All Employees</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card my-card">
									<div class="card-header">
										<div class="card-title">Employees</div>
									</div>
									<div class="card-body">
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Employee No</th>
													<th scope="col">Name</th>
													<th scope="col">Position</th>
													<th scope="col">Status</th>
													<th scope="col"></th>
												</tr>
											</thead>
											<tbody>
												@foreach($employee as $i => $data)									  
			 									   <tr>
												   	<td>{{ $i+1 }}</td>
													<td>{{ $data->isc_emp_number }}</td>
													<td>{{ $data->isc_name }}</td>
													<td>{{ $data->isc_position }}</td>
													<td>Active</td>
													<td><a class="btn btn-success" href="/edit_employee/{{ $data->isc_emp_number }}" >Edit</a></td>
												   </tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@include('footer')
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
<script>
	$('#displayNotif').on('click', function(){
		var placementFrom = $('#notify_placement_from option:selected').val();
		var placementAlign = $('#notify_placement_align option:selected').val();
		var state = $('#notify_state option:selected').val();
		var style = $('#notify_style option:selected').val();
		var content = {};

		content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
		content.title = 'Bootstrap notify';
		if (style == "withicon") {
			content.icon = 'la la-bell';
		} else {
			content.icon = 'none';
		}
		content.url = 'index.html';
		content.target = '_blank';

		$.notify(content,{
			type: state,
			placement: {
				from: placementFrom,
				align: placementAlign
			},
			time: 1000,
		});
	});
</script>
</html>