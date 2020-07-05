<?php

$host='127.0.0.1';
$username='root';
$pwd='';
$db="etudiant";

//$id=$_POST['id'];
$id=69;
$con=mysqli_connect($host,$username,$pwd,$db,3308) or die('Unable to connect');

if(mysqli_connect_error($con))
{
    echo "Failed to Connect to Database ".mysqli_connect_error();
}

$query=mysqli_query($con,"UPDATE etudiant
SET abs = abs-1 WHERE id='$id' and abs>0 ");

if($query)
{
    while($row=mysqli_fetch_array($query))
    {
        $flag[]=$row;
    }
    print(json_encode($flag));
}
mysqli_close($con);
?>