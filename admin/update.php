	<?php 
	session_start();
	include_once 'connect.php';

    $id=$_GET['id'];
    $query="SELECT * from courier where id= '$id'";

    $contact=mysqli_query($mycon,$query);
    // echo $mycon;
    while($row_contact=mysqli_fetch_array($contact))
    {



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
							<div class="card">
								<div class="card-header">
									<div class="card-title"><h1>Update package</h1></div>
								</div>
								<div class="card-body">
									<form id="create">
										<fieldset>
											<legend>Package Information</legend>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Name</label>
													<div class="col-sm-10">
														<input type="text" required id="pname" name="pname" value="<?= $row_contact['pname']?>"  class="form-control" >
														<input type="hidden" name="pid" id="pid" value="<?=$row_contact['pid']?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Location</label>
													<div class="col-sm-10">
														<input type="text" required id="plocation" name="plocation" class="form-control" value="<?= $row_contact['plocation']?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Destination</label>
													<div class="col-sm-10">
														<input type="text" required id="pdestination" name="pdestination"  class="form-control" value="<?= $row_contact['pdestination']?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Coming from</label>
													<div class="col-sm-10">
														<input type="text" required id="pfrom" name="pfrom"  class="form-control" value="<?= $row_contact['pfrom']?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Weight</label>
													<div class="col-sm-10">
														<input type="text" required id="pweight" name="pweight" placeholder="2.0"  class="form-control" value="<?= $row_contact['weight']?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Expected Delivery Date</label>
													<div class="col-sm-10">
														<input type="date" required id="expected" name="expected"  class="form-control" value="<?= $row_contact['expected']?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
													<div class="col-sm-10">
														<select name="status" id="" class="form-control">
															<option selected value="<?= $row_contact['pstatus']?>"><?= $row_contact['pstatus']?></option>
															<option value="Shipment information sent to Emgss"> Shipment information sent to Emgss</option>
															<option value="Picked up"> Picked up</option>
															<option value="At local emgss facility"> At local emgss facility</option>
															<option value="Left emgss origin facility"> Left emgss origin facility</option>
															<option value="In transit"> In transit</option>
															<option value="On Emgss vehicle for delivery"> On Emgss vehicle for delivery</option>
															<option value="Clearance delay (International orders)"> Clearance delay (International orders)</option>
															<option value="Customer not available or business closed (For more information, please contact Emgss customer service.)"> Customer not available or business closed (For more information, please contact Emgss customer service.)</option>
															<option value="Business closed - No delivery attempt (For more information, please contact Emgss customer service.)"> Business closed - No delivery attempt (For more information, please contact Emgss customer service.)</option>
															<option value="Customs delay (For more information, please contact Emgss customer service.)"> Customs delay (For more information, please contact Emgss customer service.)</option>
															<option value="Holiday (For more information, please contact Emgss customer service.)"> Holiday (For more information, please contact Emgss customer service.)</option>
															<option value="Missing documentation. (For more information, please contact Emgss customer service.)"> Missing documentation. (For more information, please contact Emgss customer service.)</option>
															<option value="Delivered"> Delivered</option>
														</select>
													</div>
												</div>
												
										</fieldset>
								
                                    
										<fieldset>
											<legend>Sender's Information</legend>
											<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
													<div class="col-sm-10">
														<input type="text" required id="sname" name="sname" value="<?= $row_contact['sname']?>" class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Phone number</label>
													<div class="col-sm-10">
														<input type="text" required id="sphone" value="<?= $row_contact['sphone']?>" name="sphone"class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
													<div class="col-sm-10">
														<input type="text" required id="semail" name="semail"  class="form-control" value="<?= $row_contact['semail']?>">
													</div>
												</div>
										</fieldset>

										<fieldset>
											<legend>Reciever's Information</legend>
											<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
													<div class="col-sm-10">
														<input type="text" required id="rname" name="rname" value="<?= $row_contact['rname']?>" class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Phone number</label>
													<div class="col-sm-10">
														<input type="text" required id="rphone" name="rphone"class="form-control" value="<?= $row_contact['rphone']?>">
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
													<div class="col-sm-10">
														<input type="text" required id="remail" name="remail"  class="form-control" value="<?= $row_contact['remail']?>">
													</div>
												</div>
										</fieldset>
                                    <div class="form-group row">
                                        <input type="submit" value="Update package"  name="submit" class="form-control btn btn-primary btn-lg btn-block" id="save">
                                    </div>
									<div class="row">
                                        <div class="alert alert-primary alert-dismissible" id="success" style="display:none;">
                                         <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        </div>
                                    </div>
                                    </form>


								</div>
								<?php }?>
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
					$('#save').val('Updating ')
					e.preventDefault();
					

					$.ajax
					({
						url: "updatepackage.php",
						type: "POST",
						data:new FormData(this),
						cache: false,
						contentType: false,
						processData:false,
						success: function(dataResult)
						{
							var dataResult = JSON.parse(dataResult);
							if(dataResult.statusCode==200)
							{
								$("#save").removeAttr("disabled");
								$("#success").show();
								$('#save').val('Update Package ')
								$('#success').html("Package Successfully Updated: "); 

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