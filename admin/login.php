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

		<title>EMG Shipping Services - Admin Login</title>		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/main.css" />

	</head>

	<body class="authentication">

		<!-- Container start -->
		<div class="container">
			
			<form action="" method="POST">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
								<a href="#" class="login-logo">
									<h3>EMG Shipping Services</h3>
								</a>
								<h5>Welcome back,<br />Please Login to your Account.</h5>
								<div class="form-group">
									<input type="text" class="form-control" required name="email" placeholder="Email Address" />
								</div>
								<div class="form-group">
									<input type="password" name="password" required class="form-control" placeholder="Password" />
								</div>
								<div class="actions mb-4">
									
									<button type="submit" name="log" class="btn btn-block btn-primary">Login</button>
									<?php 
									include 'connect.php';
										if(isset($_POST['log']))
										{
											$email=$_POST['email'];
											$password=$_POST['password'];

											if($email=="eniolamelody" && $password=='shipping')
											{
												session_start();
												$_SESSION['email']=$email;
												$_SESSION['name']="Admin Module";
												echo '<script>document.location="index.php"</script>';
											}	
											else
											{
												echo '<script>alert("Invalid Username or Password!")</script>';
											}
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>

</html>