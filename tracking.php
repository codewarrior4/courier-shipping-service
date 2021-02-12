<!DOCTYPE html>
<html>
    <head>
        <title>EMG Shipping Services | Tracking </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/logo/logo.png" type="image/x-icon">
        <!-- Bootstrap Css -->
        <meta name="description" content="EMG shipping services is a leading logistics and distribution services company established in 2018. We offer a wide array of express courier and logistic support solutions to our various customers">

        <meta name="keywords" content="Courier Services, emg, shipping,shipping services,emg services,smg shipping services Logistics, mailroom , warehousing , best courier service in Nigeria, logistics company in Nigeria, ecommerce delivery, ecommerce courier service ,local shipment, international shipment, same day delivery , logistics support, konga delivery, jumia delivery , delivery services, delivery service for ecommerce, ecommerce delivery in Nigeria , deal dey delivery, Nigeria logistics company,">
        <link rel="pingback" href="xmlrpc.php">
        <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] ?>">
        <meta property="og:title" content="EMG Shipping Services">
        <meta property="og:description" content="EMG shipping services is a leading logistics and distribution services company established in 2018. We offer a wide array of express courier and logistic support solutions to our various customers ">
        <meta property="og:site_name" content="EMG Shipping Services">
        <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']?>/assets/logo/logo.png">
        <meta property="og:image:width" content="1500"/>
        <meta property="og:image:height" content="249"/>
        <meta itemprop="name" content="EMG Shipping Services"/>
        <meta itemprop="url" content="https://<?php echo $_SERVER['HTTP_HOST'] ?>"/>
        <meta itemprop="description" content="Courier Services, emg, shipping,shipping services,emg services,smg shipping services Logistics, mailroom , warehousing , best courier service in Nigeria, logistics company in Nigeria, ecommerce delivery, ecommerce courier service ,local shipment, international shipment, same day delivery , logistics support, konga delivery, jumia delivery , delivery services, delivery service for ecommerce, ecommerce delivery in Nigeria , deal dey delivery, Nigeria logistics company,"/>
        <meta name="twitter:title" content="EMG Shipping Services"/>
        <meta name="twitter:url" content="https://<?php echo $_SERVER['HTTP_HOST'] ?>"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:description" content="EMG shipping services is a leading logistics and distribution services company established in 2018. We offer a wide array of express courier and logistic support solutions to our various customers"/>
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/font-elegant/elegant.css">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/owl.carousel.2/assets/owl.carousel.css">


        <!-- Animate Css -->       
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
        <style>
                #progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 33.33%;
    float: left;
    position: relative;
    font-weight: 400;
    color: #455A64 !important
}

#progressbar #step1:before {
    content: "1";
    color: #fff;
    width: 29px;
    margin-left: 15px !important;
    padding-left: 11px !important
}

#progressbar #step2:before {
    content: "2";
    color: #fff;
    width: 29px
}

#progressbar #step3:before {
    content: "3";
    color: #fff;
    width: 29px;
    margin-right: 15px !important;
    padding-right: 11px !important
}

#progressbar li:before {
    line-height: 29px;
    display: block;
    font-size: 12px;
    background: #455A64;
    border-radius: 50%;
    margin: auto
}

#progressbar li:after {
    content: '';
    width: 121%;
    height: 2px;
    background: #455A64;
    position: absolute;
    left: 0%;
    right: 0%;
    top: 15px;
    z-index: -1
}

#progressbar li:nth-child(2):after {
    left: 50%
}

#progressbar li:nth-child(1):after {
    left: 25%;
    width: 121%
}

#progressbar li:nth-child(3):after {
    left: 25% !important;
    width: 50% !important
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #4bb8a9
}
        </style>
    </head>
    <body id="home">

        <!-- Main Wrapper -->        
        <main class="wrapper">

            <?php include 'header.php' ?>

            <!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> product tracking </h2>
                                    <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Track</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Tracking -->
                <section class="pt-50 pb-120 tracking-wrap">    
                    <div class="theme-container container ">  
                        <div class="row pad-10">
                            <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">     
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <form class="" id="search">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your product ID" required="" name="pid" class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <button type="submit" id="trackbtn" class="btn-1">track your product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>    
                        </div>

                        <div class="row" style="display:none" id="parent">
                           
                            <div class="col-md-12 text-center pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s"> 
                               <span style="font-size:36px;font-weight:300;">Scheduled Delivery : To be delivered on<br> <span id="pexpected"></span> </span>
                               <br> <span style="font-size:16px;font-weight:600;" class="text-uppercase" id="status">Process</span> <br>
                               <span style="font-size:16px;font-weight:300;" class="" >At <span id="plocation">Location</span></span> <br>
                               <div class="row " style="margin-top:25px">
                                    <div class="col-sm-12 col-md-6">
                                        <span class="text-uppercase" style="font-size:20px;font-weight:800;" >From</span> <span style="font-size:20px;padding-left:12px" id="pfrom"></span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <span class="text-uppercase" style="font-size:20px;font-weight:800;" >To</span> <span style="font-size:20px; padding-left:12px"  id="pdestination"></span>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <div class=" row progress-wrap" style="display:none"  id="progressbar" >
                            <div class="row px-3">
                                <div class="col">
                                    <div class="progress" style="height:20px">
                                        <div class="progress-bar" id="progress" role="progressbar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                        <div class="alert alert-danger alert-dismissible" id="success" style="display:none;">
                                         <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                        </div>
                            </div>
                    </div>
                </section>
                

            </article>
            <!-- /.Content Wrapper -->

            <?php include 'footer.php' ?>

        </main>
        <!-- / Main Wrapper -->

      

        <!-- Main Jquery JS -->
        <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>    
        
        <script>
            $(document).ready(function()
			{
				$('#search').on('submit', function(e)
				{
					
                    e.preventDefault();
                    $("#trackbtn").attr("disabled")
                    $("#trackbtn").html("Tracking Product ...")
                    
                    $.ajax
					({
						url: "trackfile.php",
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
								
								$("#trackbtn").removeAttr("disabled")
                                $("#trackbtn").html("Track Your Product ...")
                                $("#parent").show()
                                $("#pname").html(dataResult.pname)
                                $("#weight").html(dataResult.pweight)
                                $("#rname").html(dataResult.rname)
                                $("#sname").html(dataResult.sname)
                                $("#pfrom").html(dataResult.pfrom)
                                $("#pdestination").html(dataResult.pdestination)
                                $("#plocation").html(dataResult.plocation)
                                $("#pexpected").html(dataResult.expected)
                                $("#status").html(dataResult.status)
                                
                                if(dataResult.status =="Shipment information sent to Emgss" || dataResult.status =="Picked up")
                                {
                                    $("#progress").css({"width":"20%","background-color":"black"})
                                    $("#progress").attr("class","progress-bar")
                                    $("#progress").html(dataResult.status)
                                }
                                else if(dataResult.status =="At local emgss facility" || dataResult.status=="Left emgss origin facility")
                                {
                                    $("#progress").css({"width":"40%","background-color":"#e69f00"})
                                    $("#progress").html(dataResult.status)

                                }
                                else if(dataResult.status =="In transit")
                                {
                                    $("#progress").css({"width":"50%","background-color":"#e69f00"})
                                    $("#progress").html(dataResult.status)

                                }
                                else if(dataResult.status =="On Emgss vehicle for delivery" || dataResult.status=="Clearance delay (International orders)")
                                {
                                    $("#progress").css({"width":"60%","background-color":"#e69f00"})
                                    $("#progress").html(dataResult.status)

                                }
                                else if(dataResult.status =="Customer not available or business closed (For more information, please contact Emgss customer service.)" || dataResult.status=="Business closed - No delivery attempt (For more information, please contact Emgss customer service.)" || dataResult.status=="Customs delay (For more information, please contact Emgss customer service.)" || dataResult.status=="Holiday (For more information, please contact Emgss customer service.)" || dataResult.status=="Missing documentation. (For more information, please contact Emgss customer service.)")
                                {
                                    $("#progress").css({"width":"85%","background-color":"#e40000"})
                                    $("#progress").html(dataResult.status)

                                }
                                else if(dataResult.status =="Delivered")
                                {
                                    $("#progress").css({"width":"100%","background-color":"#18800c"})
                                    $("#progress").html(dataResult.status)

                                }
                                $('#pid').val("")
                                $("#parents").show()
                                $("#parent").show()
                                $("#progressbar").show()
                            	$('#success').hide(); 

							}
							else if(dataResult.statusCode==201)
							{
                                $('#pid').val("")
                                $("#parents").hide()
                                $("#parent").hide()
                                $("#progressbar").hide()
                                $("#trackbtn").html("Track Your Product ...")
								$('#success').show(); 
								$('#success').html(dataResult.result); 
							    
							}
							
                        }
                    })
                })
            })
        </script>
        <!-- Bootstrap JS -->
        <script src="assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="assets/plugins/owl.carousel.2/owl.carousel.min.js" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="assets/js/jquery.sticky.js"></script>
        <!-- Wow JS -->
        <script src="assets/plugins/WOW-master/dist/wow.min.js" type="text/javascript"></script>   

        <!-- Slider JS -->        


        <!-- Theme JS -->
        <script src="assets/js/theme.js" type="text/javascript"></script>

    </body>
</html>
