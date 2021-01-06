	<?php 
	session_start();
	include 'connect.php';
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

				
				 <div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
                        <div class="table-container">
							<div class="t-header"><h1>Package data</h1></div>
								<div class="table-responsive">
									<table id="copy-print-csv" class="table custom-table">
										
										<tbody>
											
								<?php 
                                $id=$_GET['id'];
								$contact=mysqli_query($mycon,"SELECT * from courier where id = '$id'");
								
								while($row_contact=mysqli_fetch_array($contact))
								{
									echo 
									'
									<tr><td>Tracking Number:</td>	<td>'.$row_contact['pid'].'</td></tr>
									<tr><td>Product Name:</td>	<td>'.$row_contact['pname'].'</td></tr>
									<tr><td>Product Image:</td>	<td><img src="img/package/'.$row_contact['pimage'].'" width="100" height="100"></td></tr>
									<tr><td>Product Location:</td>	<td>'.$row_contact['plocation'].'</td></tr>
									<tr><td>Product Destination:</td>	<td>'.$row_contact['pdestination'].'</td></tr>
									<tr><td>Product Coming From:</td>	<td>'.$row_contact['pfrom'].'</td></tr>
									<tr><td>Product Status:</td>	<td>'.$row_contact['pstatus'].'</td></tr>
									<tr><td>Sender Name:</td>	<td>'.$row_contact['sname'].'</td></tr>
									<tr><td>Sender Phone:</td>	<td>'.$row_contact['sphone'].'</td></tr>
									<tr><td>Sender Email:</td>	<td>'.$row_contact['semail'].'</td></tr>
									<tr><td>Reciever Name:</td><td>'.$row_contact['rname'].'</td></tr>
									<tr><td>Reciever Phone:</td><td>'.$row_contact['rphone'].'</td></tr>
									<tr><td>Reciever Email:</td><td>'.$row_contact['remail'].'</td></tr>
									<tr><td>Expected Delivery Date:</td><td>'.$row_contact['expected'].'</td></tr>
									<tr><td>Date Sent:</td><td>'.$row_contact['created'].'</td></tr>
									
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