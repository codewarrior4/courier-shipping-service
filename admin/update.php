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
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script data-ad-client="ca-pub-1347938510360945" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/logocopy.png" />

		<title>Royal Star Express Express - Admin Dashboard</title>
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
									<div class="card-title"><h1>Update package</h1></div>
								</div>
								<div class="card-body">
									<form method="post">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Sender Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" required name="sender" id="sender" value="<?php echo $row_contact['sender']?>" class="form-control" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Package Details</label>
                                            <div class="col-sm-10">
                                                
											<textarea name="content" id="summernote" cols="30" rows="10" class="form-control"><?php echo $row_contact['content']?></textarea>

                                            
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Expected Delivery Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" value="<?php echo $row_contact['expected']?>" name="date" id="date" required class="form-control" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Destination</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="destination" value="<?php echo $row_contact['destination']?>" id="destination" required class="form-control" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Contact</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?php echo $row_contact['contact']?>" name="contact" id="contact" required class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
											<textarea name="status" id="status" cols="30" rows="10" class="summernote form-control"><?php echo $row_contact['status']?></textarea>
                                                
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <input type="submit" name="update" value="UPDATE" name="create" class="form-control btn btn-primary btn-md btn-block" >
                                        </div>
                                    </form>
                                    <?php 
                                        if(isset($_POST['update']))
                                        {
                                            $sender=$_POST['sender'];
                                            $content=addslashes($_POST['content']);
                                            $destination=$_POST['destination'];
                                            $expected=$_POST['date'];
                                            $contact=$_POST['contact'];
                                            $status=addslashes($_POST['status']);

                                            $updated=mysqli_query($mycon,"UPDATE courier set sender='$sender',content='$content',destination='$destination',expected='$expected',contact='$contact',status='$status' where id = '$id'");

                                            if($updated)
                                            {
                                                echo '<script>alert("Updated Successfully");</script>';
                                                echo '<script>window.location="index.php";</script>';
                                            }
                                            else
                                            {
                                                echo mysqli_error($updated);
                                            }
                                        }
                                    ?>
    <?php }?>
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
			$(document).ready(function(){

				 $('#summernote').summernote({
                    height: 120,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
				});	
				$('.summernote').summernote({
                    height: 120,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
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