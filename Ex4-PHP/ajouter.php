<?php
$host='127.0.0.1';
$username='root';
$pwd='';
$db="etudiant";

$nom=$_POST['nom'];
$option=$_POST['optionC'];
$abs="0";
$email=$_POST['email'];


$prenom=$_POST['prenom'];
$avatar='avatar';



$con=mysqli_connect($host,$username,$pwd,$db,3308) or die('Unable to connect');
if(mysqli_connect_error($con))
{
    echo "Failed to Connect to Database ".mysqli_connect_error();
}
else{
    echo ("Connceted successfully \n
    ");
}

$req="Insert INTO  etudiant(nom,prenom,abs,email,optionC,avatar) VALUES('$nom','$prenom',$abs,'$email','$option','$avatar')";

$result=mysqli_query($con,$req);
if($result)
{
    echo ('Successfully Saved');
}else
{
    echo('Not saved Successfully');
}
mysqli_close($con);

?>
