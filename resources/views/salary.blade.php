<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Tables - Ready Bootstrap Dashboard</title>
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
			@include('new-header')
			<!-- HEADER -->
			
			<!-- SIDEBAR -->
			@include('sidebar')
			<!-- SIDEBAR -->

			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Salary Calculation</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Calculation Table</div>
									</div>
									<div class="card-body">
										<!-- <div class="card-sub">											
											Add <code class="highlighter-rouge">.table-striped</code> to rows the striped table
										</div>
										<table class="table table-striped mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">First</th>
													<th scope="col">Last</th>
													<th scope="col">Handle</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td>
												</tr>
												<tr>
													<td>3</td>
													<td colspan="2">Larry the Bird</td>
													<td>@twitter</td>
												</tr>
											</tbody>
										</table> -->
										<div class="card-sub">
											Add <code class="#highlighter-rouge">.table-striped-bg-*states</code> to change background from striped rows
										</div>
										<table class="table table-striped table-striped-bg-default mt-3">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">First</th>
													<th scope="col">Last</th>
													<th scope="col">Handle</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td>
												</tr>
												<tr>
													<td>3</td>
													<td colspan="2">Larry the Bird</td>
													<td>@twitter</td>
												</tr>
											</tbody>
										</table>
										<!-- <table class="table table-striped table-striped-bg-danger mt-4">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">First</th>
													<th scope="col">Last</th>
													<th scope="col">Handle</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Mark</td>
													<td>Otto</td>
													<td>@mdo</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Jacob</td>
													<td>Thornton</td>
													<td>@fat</td>
												</tr>
												<tr>
													<td>3</td>
													<td colspan="2">Larry the Bird</td>
													<td>@twitter</td>
												</tr>
											</tbody>
										</table> -->
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