<?php 
    include  'connect.php';
    if(isset($_POST['create']))
    {

        $sender=$_POST['sender'];
        $date=$_POST['date'];
        $content=addslashes($_POST['content']);
        $destination=$_POST['destination'];
        $contact=$_POST['contact'];
        $status=addslashes($_POST['status']);
        $package_id="UFM".rand(1000000,9999999).date('d');
        $query=mysqli_query($mycon,"INSERT INTO courier values('','$sender','$content','$date','$destination','$status',now(),'$package_id','$contact')");
    }
        if ($query)
        {
            echo $package_id;
            echo '<script>window.location="index.php";</script>';
		    echo json_encode(array("statusCode"=>200,"package_id"=>$package_id));
	    } 
        else
        {
		    echo json_encode(array("statusCode"=>201));
    	}
    
?>