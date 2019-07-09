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
	<link rel="stylesheet" href="dashboardcss/css/apps.css">
<!-- <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script> -->
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
						<h4 class="page-title">Upload Main FP</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="form-group">
											<label for="exampleFormControlFile1">Upload Main FP</label>
										    <input type="file" class="form-control-file" id="fileInput">
										</div>

										<form action="/doUpload-main-fp" method="post">
											<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
											<input type="hidden" name="main_fp_summary" id="main_fp_summary" value="">
											<table class="table" style="display: none;">
												<thead id="mp_head"></thead>
												<tbody id="mp_body"></tbody>
											</table>
											<input type="submit" name="Submit" class="btn btn-submit">
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Main FP Table</div>
									</div>
									<div class="card-body">
										<table class="table mt-3">
											<thead>
												<tr>
													<th scope="col">No</th>
													<th scope="col">Date</th>
													<th scope="col">Entry Count</th>
													<th scope="col">Delete</th>
												</tr>
											</thead>
											<tbody>
												@foreach($all_main_fp as $i => $data)									  
			 									   <tr>
												   	<td>{{ $i+1 }}</td>
													<td>{{ $data->isc_date }}</td>
													<td>{{ $data->new_count }}</td>
													<td><a class="btn btn-danger" href="#" onclick="editFp('{{ $data->isc_date}}');return false;">Delete</a></td>
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
<script src="js/xlsx.full.min.js"></script>
<script src="js/xlsx.core.min.js"></script>
<script>
document.getElementById('fileInput').addEventListener("change", function(e) {
	var mainFpObject = {};
	var mainFpArray = [];

	var files = e.target.files,file;
	if (!files || files.length == 0) return;
	file = files[0];
	var fileReader = new FileReader();
	fileReader.onload = function (e) {
	var filename = file.name;
	var binary = "";
	var bytes = new Uint8Array(e.target.result);
	var length = bytes.byteLength;
	for (var i = 0; i < length; i++) {
		binary += String.fromCharCode(bytes[i]);
	}
	// call 'xlsx' to read the file
	var oFile = XLSX.read(binary, {
		type: 'binary', 
		cellDates: true, 
		cellStyles: true
	});
	// console.log(oFile);
	// console.log(oFile.SheetNames[0]);
	// console.log(oFile.Sheets[oFile.SheetNames[0]])
	var sheet = (oFile.Sheets[oFile.SheetNames[0]]);
	var range = XLSX.utils.decode_range(sheet['!ref']);
	var main_fp_summary = '';
	// console.log(sheet);
	// console.log(range);
	for(var R = range.s.r; R <= range.e.r; ++R) {
		var tContent = '';
		tContent += '<tr>';
		mainFpObject = {};

		for(var C = range.s.c; C <= 4; ++C) {
	        /* find the cell object */
	        // console.log('Row : ' + R);
	        // console.log('Column : ' + C);
	        var cellref = XLSX.utils.encode_cell({c:C, r:R});
	        if(!sheet[cellref]) continue;
	        var cell = sheet[cellref];
	        if (R == 0) {
	        	tContent += '<th>' + cell.v + '</th>';
	        } else {
	        	tContent += '<td>' + cell.v + '</td>';
	        	if (C == 0) {
	        		mainFpObject["isc_emp_number"] = cell.v;
	        	} else if (C == 1) {
	        		mainFpObject["isc_name"] = cell.v;
	        	} else if (C == 2) {
	        		mainFpObject["isc_position"] = cell.v;
	        	} else if (C == 3) {
	        		mainFpObject["isc_date"] = cell.v;
	        	} else {
	        		mainFpObject["isc_time"] = cell.v;
	        	}
	        }
	    }
	    tContent += '</tr>'
	    if (R == 0) {
	    	$('#mp_head').append(tContent);
	    } else {
	    	$('#mp_body').append(tContent);
	    	mainFpArray.push(mainFpObject);
	    }
	}
	$('#main_fp_summary').val(JSON.stringify(mainFpArray));
	// console.log(mainFpArray);
	};
	fileReader.readAsArrayBuffer(file);

});

function editFp (isc_date){
	var new_date = encodeURIComponent(isc_date);
	self.location = '/edit_main_fp?date=' + new_date;
}
</script>
</html>