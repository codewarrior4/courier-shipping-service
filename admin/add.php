<?php 
    include  'connect.php';
    
     $pname=$_POST['pname'];
     $plocation=$_POST['plocation'];
     $pdestination=$_POST['pdestination'];
     $pweight=$_POST['pweight'];
     $expected=$_POST['expected'];
     $status=$_POST['status'];
     $sname=$_POST['sname'];
     $sphone=$_POST['semail'];
     $semail=$_POST['pname'];
     $rname=$_POST['rname'];
     $rphone=$_POST['rphone'];
     $remail=$_POST['remail'];
        
    $package_id="EMG".rand(1000000,9999999).date('d');
    $pimage=rand(1000,9999).$_FILES['pimage']['name'];
    $pimage_temp=$_FILES['pimage']['tmp_name'];
     // get the image extension
     $pimageext = substr($pimage,strlen($pimage)-5,strlen($pimage));
    
    $newpimage=md5($pimage).$pimageext;
    $path="img/package/";
        $query=mysqli_query($mycon,"INSERT INTO courier values('','$package_id','$pname','$newpimage','$status','$plocation','$plocation','$pdestination','$sname','$sphone','$semail','$rname','$rphone','$remail','$expected','$pweight',now())");

        move_uploaded_file($pimage_temp,$path.$newpimage);


    
        if ($query)
        {
           
		    echo json_encode(array("statusCode"=>200,"package_id"=>$package_id));
	    } 
        else
        {
		    echo json_encode(array("statusCode"=>201));
    	}
    
?>