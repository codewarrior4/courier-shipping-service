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

		<title>EMG Shipping Services - Add Package</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
							<div class="card">
								<div class="card-header">
									<div class="card-title">Add new package</div>
								</div>
								
								<div class="card-body">
									<form id="create" enctype="multipart/form-data">
										<fieldset>
											<legend>Package Information</legend>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Name</label>
													<div class="col-sm-10">
														<input type="text" required id="pname" name="pname"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Image</label>
													<div class="col-sm-10">
														<input type="file" accept="image/*"  required id="pimage" name="pimage"  class="form-control-file" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Location</label>
													<div class="col-sm-10">
														<input type="text" required id="plocation" name="plocation" class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Destination</label>
													<div class="col-sm-10">
														<input type="text" required id="pdestination" name="pdestination"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Weight</label>
													<div class="col-sm-10">
														<input type="text" required id="pweight" name="pweight" placeholder="2.0"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Expected Delivery Date</label>
													<div class="col-sm-10">
														<input type="date" required id="expected" name="expected"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
													<div class="col-sm-10">
														<input type="text" required id="status" name="status" placeholder="on Hold"  class="form-control" >
													</div>
												</div>
												
										</fieldset>
								
                                    
										<fieldset>
											<legend>Sender's Information</legend>
											<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
													<div class="col-sm-10">
														<input type="text" required id="sname" name="sname"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Phone number</label>
													<div class="col-sm-10">
														<input type="text" required id="sphone" name="sphone"class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
													<div class="col-sm-10">
														<input type="text" required id="semail" name="semail"  class="form-control" >
													</div>
												</div>
										</fieldset>

										<fieldset>
											<legend>Reciever's Information</legend>
											<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
													<div class="col-sm-10">
														<input type="text" required id="rname" name="rname"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Phone number</label>
													<div class="col-sm-10">
														<input type="text" required id="rphone" name="rphone"class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
													<div class="col-sm-10">
														<input type="text" required id="remail" name="remail"  class="form-control" >
													</div>
												</div>
										</fieldset>
                                    <div class="form-group row">
                                        <input type="submit" value="Add new package"  name="submit" class="form-control btn btn-primary btn-lg btn-block" id="save">
                                    </div>
                                    <div class="row">
                                        <div class="alert alert-primary alert-dismissible" id="success" style="display:none;">
                                        Here's the package number: <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        </div>
                                    </div>
                                    </form>


								</div>
							</div>
						</div>
						
			    </div>
				
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
	
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
        <script src="js/jquery.min.js"></script>

		<script>
			$(document).ready(function()
			{
				$('#create').on('submit', function(e)
				{
					$('#save').attr('disabled')
					$('#save').val('Adding ')
					e.preventDefault();
					$("#pimage").change(function() {
						var file = this.files[0];
						var fileType = file.type;
						var match = ['image/jpeg', 'image/png', 'image/jpg'];
						if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))){
							alert('Sorry, only PJPG, JPEG, & PNG files are allowed to upload.');
							$("#file").val('');
							return false;
						}
					});

					$.ajax
					({
						url: "add.php",
						type: "POST",
						data:new FormData(this),
						cache: false,
						// dataType: 'json',
						contentType: false,
						processData:false,
						success: function(dataResult)
						{
							var dataResult = JSON.parse(dataResult);
							if(dataResult.statusCode==200)
							{
								$("#save").removeAttr("disabled");
								$('form').find('input:text').val('');
								$('form').find('input:date').val('');
								$("#success").show();
								$('#save').val('Add new Package ')
								$('#success').html("Here's the package tracking number : "+dataResult.package_id); 

							}
							else if(dataResult.statusCode==201)
							{
							alert("Error occured !");
							}
							
						}
					});
				});

			});
		</script>

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