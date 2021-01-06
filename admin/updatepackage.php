<?php 
    include  'connect.php';
    
     $pname=$_POST['pname'];
     $plocation=$_POST['plocation'];
     $pdestination=$_POST['pdestination'];
     $pfrom=$_POST['pfrom'];
     $pweight=$_POST['pweight'];
     $expected=$_POST['expected'];
     $status=$_POST['status'];
     $sname=$_POST['sname'];
     $sphone=$_POST['semail'];
     $semail=$_POST['pname'];
     $rname=$_POST['rname'];
     $rphone=$_POST['rphone'];
     $remail=$_POST['remail'];
     $pid=$_POST['pid'];

        
        $query=mysqli_query($mycon,"UPDATE courier set pname='$pname',pstatus='$status',plocation='$plocation',pfrom='$pfrom',pdestination='$pdestination',sname='$sname',sphone='$sphone',semail='$semail',rname='$rname',rphone='$rphone',remail='$remail',expected='$expected',weight='$pweight' where pid='$pid'");

  

    
        if ($query)
        {
           
		    echo json_encode(array("statusCode"=>200));
	    } 
        else
        {
		    echo json_encode(array("statusCode"=>201));
    	}
    
?>