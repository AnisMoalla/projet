<?php 


session_start() ; 
// header('location:member.html') ; 
$con = mysqli_connect('localhost','root','') ; 
mysqli_select_db($con, 'projet') ; 


 
$mail = $_POST['mail'];  
$passe = $_POST['passe']; 



$s = " select * from sign where mail = '$mail' && passe = '$passe' "; 

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result); 

if($num == 1)
{
	echo " Email Already taken";
}
else
{
	$reg=" insert into user (mail,passe) values ('$mail' , '$passe')";
	mysqli_query($con, $reg);
    //echo " Registration Successful";
    header('location:index.html');
}

?>


 