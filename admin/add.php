<?php 
    include  'connect.php';
    
     $pname=$_POST['pname'];
     $plocation=$_POST['plocation'];
     $pdestination=$_POST['pdestination'];
     $pweight=$_POST['pweight'];
     $expected=$_POST['expected'];
     $status=$_POST['status'];
     $sname=$_POST['sname'];
     $sphone=$_POST['sphone'];
     $semail=$_POST['semail'];
     $rname=$_POST['rname'];
     $rphone=$_POST['rphone'];
     $remail=$_POST['remail'];
        
        $package_id="EMG".rand(1000000,9999999).date('d');

        $query=mysqli_query($mycon,"INSERT INTO courier values('','$package_id','$pname','$status','$plocation','$plocation','$pdestination','$sname','$sphone','$semail','$rname','$rphone','$remail','$expected','$pweight',now())");
    
        if ($query)
        {
           
		    echo json_encode(array("statusCode"=>200,"package_id"=>$package_id));
	    } 
        else
        {
		    echo json_encode(array("statusCode"=>201));
    	}
    
?>