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
		<link rel="stylesheet" href="summernote/summernote.css">
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
									<form onsubmit="add()"  enctype="multipart/form-data">
										<fieldset>
											<legend>Package Information</legend>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Name</label>
													<div class="col-sm-10">
														<input type="text" required id="pname"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Image</label>
													<div class="col-sm-10">
														<input type="file" required id="pimage"  class="form-control-file" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Location</label>
													<div class="col-sm-10">
														<input type="text" required id="plocation"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Destination</label>
													<div class="col-sm-10">
														<input type="text" required id="pdestination"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Package Weight</label>
													<div class="col-sm-10">
														<input type="text" required id="pweight" placeholder="2.0"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Expected Delivery Date</label>
													<div class="col-sm-10">
														<input type="text" required id="expected"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
													<div class="col-sm-10">
														<input type="text" required id="status" placeholder="on Hold"  class="form-control" >
													</div>
												</div>
												
										</fieldset>
								
                                    
										<fieldset>
											<legend>Sender's Information</legend>
											<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
													<div class="col-sm-10">
														<input type="text" required id="sname"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Phone number</label>
													<div class="col-sm-10">
														<input type="text" required id="sphone" class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
													<div class="col-sm-10">
														<input type="text" required id="semail"  class="form-control" >
													</div>
												</div>
										</fieldset>

										<fieldset>
											<legend>Reciever's Information</legend>
											<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
													<div class="col-sm-10">
														<input type="text" required id="rname"  class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Phone number</label>
													<div class="col-sm-10">
														<input type="text" required id="rphone" class="form-control" >
													</div>
												</div>
												<div class="form-group row">
													<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
													<div class="col-sm-10">
														<input type="text" required id="remail"  class="form-control" >
													</div>
												</div>
										</fieldset>
                                    <div class="form-group row">
                                        <input type="submit" value="Add"  name="create" class="form-control btn btn-primary btn-md btn-block" id="save">
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
		<script src="summernote/summernote.js"></script>

            <script>
                $(document).ready(function()
                {
                    $('#save').on('click', function()
                    {
						
                        var pname=$('#pname').val();
                        var pimage=$('#pimage').val();
                        var plocation=$('#plocation').val();
                        var pdestination=$('#pdestination').val();
                        var pweight=$('#pweight').val();
                        var expected=$('#expected').val();
                        var status=$('#status').val();
                        var sname=$('#sname').val();
                        var sphone=$('#sphone').val();
						var semail=$('#semail').val();
						var rname=$('#rname').val();
                        var rphone=$('#rphone').val();
                        var remail=$('#remail').val();

                //         $.ajax
                //         ({
                //             url: "add.php",
                //             type: "POST",
                //             data: 
                //             {
                //                 date: date,
                //                 content: content,
                //                 sender: sender,
                //                 destination: destination,
                //                 contact: contact			
                //             },
                //             cache: false,
                //             success: function(dataResult)
                //             {
                //                 var dataResult = JSON.parse(dataResult);
                //                 if(dataResult.statusCode==200)
                //                 {
                //                     $("#save").removeAttr("disabled");
                //                     $('form').find('input:text').val('');
                //                     $("#success").show();
                //                     $('#success').html("Here's the package tracking number : "+dataResult.package_id); 

                //                 }
                //                 else if(dataResult.statusCode==201)
                //                 {
                //                 alert("Error occured !");
                //                 }
                                
                //             }
			    //         });
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