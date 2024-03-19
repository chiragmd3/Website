<?php
if(isset($_POST["sub"])){
$server="localhost";
$username="chirag108";
$password="chiragmD#17";



$con = mysqli_connect($server, $username, $password); 
if(!$con){
	die ("connection failed".mysqli_connect_error());	
}
echo "sucess conn"."<br>";
		$name=$_POST["txtnm"];
		$pass=$_POST["txtpass"];

		$sql="INSERT INTO `store`.`store1` (`name`, `pass`) VALUES ('$name', '$pass')";
		 echo $sql."<br>";
		 if($con->query($sql)==true)
		 {
			
			 echo "scess inserted"."<br>";
		 }
		 else{
			 echo "not conn";
		 }
				  
		   
		   $con->close();
		   
        }       
?>