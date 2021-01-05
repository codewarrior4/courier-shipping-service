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

    <title>Royal Star Express Express - contact message</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="fonts/style.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="vendor/daterange/daterange.css" />
    <link rel="stylesheet" href="vendor/lobipanel/css/lobipanel.css" />


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

                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <span class="range-text"></span>
                            <i class="icon-chevron-down"></i>	
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-export"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Page header end -->
            
            <!-- Main container start -->
            <div class="main-container">

                <!-- Row start -->
                
                <!-- Row end -->

                <!-- Row start -->
                <div class="row gutters">

                <?php 

                $contact=mysqli_query($mycon,"SELECT * from contact order by id desc");

                while($row_contact=mysqli_fetch_array($contact))
                {
                    echo    
                    '  
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card lobipanel-basic">
                        <div class="card-header">
                            <div class="card-title">'.$row_contact['name'].'</div>
                        </div>
                        <div class="card-body">
                            <p>'.$row_contact['message'].'</p> <br>
                            <p>'.$row_contact['phone'].'</p> <br>
                            <p>'.$row_contact['email'].'</p> <br>
                            <p><b>Time : </b> '.$row_contact['date'].'</p> <br>
                        </div>
                    </div>
                </div>
                    ';
                }
                ?>




                   
                </div>
                                                  
                                                    
                              
            

            

            </div>
            <!-- Main container end -->

        </div>
        <!-- Page content end -->

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/moment.js"></script>


    <!-- *************
			************ Vendor Js Files *************
		************* -->
    <!-- Slimscroll JS -->
    <script src="vendor/slimscroll/slimscroll.min.js"></script>
    <script src="vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Daterange -->
    <script src="vendor/daterange/daterange.js"></script>
    <script src="vendor/daterange/custom-daterange.js"></script>

    <!-- jQuery UI -->
    <script src="js/jquery-ui.min.js"></script>

    <!-- Lobipanel -->
    <script src="vendor/lobipanel/js/lobipanel.js"></script>
    <script src="vendor/lobipanel/js/lobipanel-custom.js"></script>


    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>


</html>