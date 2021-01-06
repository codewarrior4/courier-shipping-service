<?php
    include  'admin/connect.php';
    $pid=$_POST['pid'];

    $query=mysqli_query($mycon,"SELECT * from courier where pid = '$pid'");
    $row=mysqli_fetch_array($query);
    if ($query)

    {
        if (mysqli_num_rows($query)==1)
        {
            echo json_encode(array("statusCode"=>200,"pname"=>$row['pname'],"plocation"=>$row['plocation'],"pfrom"=>$row['pfrom'],"pdestination"=>$row['pdestination'],"pweight"=>$row['weight'],"expected"=>$row['expected'],"status"=>$row['pstatus'],"sname"=>$row['sname'],"semail"=>$row['semail'],"sphone"=>$row['sphone'],"rname"=>$row['rname'],"rphone"=>$row['rphone'],"remail"=>$row['remail'],"pimage"=>$row['pimage'],"created"=>$row['created'])); 
        }  
        else
        {
            echo json_encode(array("statusCode"=>201,"result"=>"Invalid Tracking Id"));
        }
         
    }
    
    