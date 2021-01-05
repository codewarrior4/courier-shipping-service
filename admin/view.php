	<?php 
	session_start();
	include 'connect.php';
	?>

<!doctype html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script data-ad-client="ca-pub-1347938510360945" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/logocopy.png" />

		<title>Royal Star Express Express - Admin Dashboard</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">

		<link rel="stylesheet" href="vendor/daterange/daterange.css" />

	</head>

	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div class="spinner-border" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Loading ends -->


		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			<?php include 'sidebar.php' ?>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<?php include 'header.php' ?>
				<!-- Header end -->

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Admin Dashboard</li>
					</ol>

				</div>
				<!-- Page header end -->
				
				<!-- Main container start -->
				<div class="main-container">

				
				 <div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
                        <div class="table-container">
							<div class="t-header"><h1>Package data</h1></div>
								<div class="table-responsive">
									<table id="copy-print-csv" class="table custom-table">
										
										<tbody>
											
								<?php 
                                $id=$_GET['id'];
								$contact=mysqli_query($mycon,"SELECT * from courier where id like '%$id%'");
								
								while($row_contact=mysqli_fetch_array($contact))
								{
									echo 
									'
									<tr><td>Tracking Number:</td>	<td>'.$row_contact['package_id'].'</td></tr>
									<tr><td>Sender:</td><td>'.$row_contact['sender'].'</td></tr>
									<tr><td>Package:</td><td>'.$row_contact['content'].'</td></tr>
									<tr><td>Destination:</td><td>'.$row_contact['destination'].'</td></tr>
									<tr><td>Expected Delivery Date:</td><td>'.$row_contact['expected'].'</td></tr>
									<tr><td>Status:</td><td>'.$row_contact['status'].$row_contact['status1'].'</td></tr>
									<tr><td>Date Sent:</td><td>'.$row_contact['date'].'</td></tr>
									
								</tr>
									';
								}
								?>
								
										
										
										
										</tbody>
						    	</table>
								</div>
							</div>

                                                  
                  		</div>
                	</div>

					<!-- Row start -->
					

				

				</div>
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
	
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="vendor/datatables/custom/custom-datatables.js"></script>
		<script src="vendor/datatables/custom/fixedHeader.js"></script>

		<!-- Download / CSV / Copy / Print -->
		<script src="vendor/datatables/buttons.min.js"></script>
		<script src="vendor/datatables/jszip.min.js"></script>
		<script src="vendor/datatables/pdfmake.min.js"></script>
		<script src="vendor/datatables/vfs_fonts.js"></script>
		<script src="vendor/datatables/html5.min.js"></script>
		<script src="vendor/datatables/buttons.print.min.js"></script>

		<!-- Polyfill JS -->
		<script src="vendor/polyfill/polyfill.min.js"></script>


		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>

</html>