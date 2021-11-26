<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>USPF Students Directory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/view.css">  
	</head>
	<body>
		<div style="text-align: center; font: 16px;">
			<h1>USPF Students Directory</h1>
			<a href="../index.php">Back</a>
		</div>  	
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center">
						<h1 class="heading-section">View Students Record</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-wrap">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Middle Name</th>
										<th>Last Name</th>
										<th>Course</th>
										<th>Year</th>
										<th>Age</th>
										<th>Email Address</th>
									</tr>
								</thead>
								<tbody>
									<?php include '../php/view_data.php';?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

