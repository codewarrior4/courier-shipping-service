	<?php 
	session_start();
	include 'connect.php';
	$total_volunteers=mysqli_query($mycon,"SELECT * from courier");


	$count_volunteers=mysqli_num_rows($total_volunteers);
	?>

<!doctype html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="<?php echo $_SERVER['HTTP_HOST']?>/assets/img/logo/logo.png" type="image/x-icon">
        <!-- Bootstrap Css -->
        <meta name="description" content="EMG shipping services is a leading logistics and distribution services company established in 2018. We offer a wide array of express courier and logistic support solutions to our various customers">

        <meta name="keywords" content="Courier Services, emg, shipping,shipping services,emg services,smg shipping services Logistics, mailroom , warehousing , best courier service in Nigeria, logistics company in Nigeria, ecommerce delivery, ecommerce courier service ,local shipment, international shipment, same day delivery , logistics support, konga delivery, jumia delivery , delivery services, delivery service for ecommerce, ecommerce delivery in Nigeria , deal dey delivery, Nigeria logistics company,">
        <link rel="pingback" href="xmlrpc.php">
        <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] ?>">
        <meta property="og:title" content="EMG Shipping Services">
        <meta property="og:description" content="EMG shipping services is a leading logistics and distribution services company established in 2018. We offer a wide array of express courier and logistic support solutions to our various customers ">
        <meta property="og:site_name" content="EMG Shipping Services">
        <meta property="og:image" content="<?php echo $_SERVER['HTTP_HOST']?>/assets/img/logo/logo.png">
        <meta property="og:image:width" content="1500"/>
        <meta property="og:image:height" content="249"/>
        <meta itemprop="name" content="EMG Shipping Services"/>
        <meta itemprop="url" content="https://<?php echo $_SERVER['HTTP_HOST'] ?>"/>
        <meta itemprop="description" content="Courier Services, emg, shipping,shipping services,emg services,smg shipping services Logistics, mailroom , warehousing , best courier service in Nigeria, logistics company in Nigeria, ecommerce delivery, ecommerce courier service ,local shipment, international shipment, same day delivery , logistics support, konga delivery, jumia delivery , delivery services, delivery service for ecommerce, ecommerce delivery in Nigeria , deal dey delivery, Nigeria logistics company,"/>
        <meta name="twitter:title" content="EMG Shipping Services"/>
        <meta name="twitter:url" content="https://<?php echo $_SERVER['HTTP_HOST'] ?>"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:description" content="EMG shipping services is a leading logistics and distribution services company established in 2018. We offer a wide array of express courier and logistic support solutions to our various customers"/>

		<title>EMG Shipping Services - Admin Dashboard</title>

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

					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-user1"></i>
								</div>
								<div class="sale-num">
									<center>
									<h3><?php echo $count_volunteers  ?></h3>
									<p>Total Package</p> </center>
								</div>
							</div>
						</div>
						
					</div>
					<!-- Row end -->
				 <div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
                        <div class="table-container">
							<div class="t-header">No Search Field</div>
								<div class="table-responsive">
									<table id="copy-print-csv" class="table custom-table">
										<thead>
											<tr>
											  <th> Order Date</th>
											  <th>Sender</th>
											  <th>Content</th>
											  <th>Destination</th>
											  <th>Delivery Date</th>
											  <th> Package_id</th>
											  <th></th>
											  </td>
											</tr>
										</thead>
										<tbody>
											
								<?php 

								$contact=mysqli_query($mycon,"SELECT * from courier order by date desc");
								
								while($row_contact=mysqli_fetch_array($contact))
								{
									echo 
									'
									<tr>
									<td>'.$row_contact['date'].'</td>
									<td>'.$row_contact['sender'].'</td>
									<td>'.$row_contact['content'].'</td>
									<td>'.$row_contact['destination'].'</td>
									<td>'.$row_contact['expected'].'</td>
									<td>'.$row_contact['package_id'].'</td>
									<td>&nbsp;&nbsp;<a href="view.php?id='.$row_contact['id'].'"><i class="icon-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="update.php?id='.$row_contact['id'].'"><i class="icon-edit-2"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete.php?id='.$row_contact['id'].'"><i class="icon-delete"></i></a>&nbsp;</td>
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