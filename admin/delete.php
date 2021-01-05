<?php


include 'connect.php';
$id=$_GET['id'];
$query=mysqli_query($mycon,"DELETE FROM courier where id like '$id'");

if ($query)
{
    echo '<script>window.location="index.php"</script>';
}
else 
{
    echo mysqli_error($query);
}
?>