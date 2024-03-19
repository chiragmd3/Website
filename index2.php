<?php
if(isset($_POST["sub"])){
$server="localhost";
$username="root";
$password="";



$con = mysqli_connect($server, $username, $password); 
if(!$con){
	die ("connection failed".mysqli_connect_error());	
}
echo "sucess conn"."<br>";
		$name=$_POST["name1"];
		$pass=$_POST["pass"];

		$sql="INSERT INTO `check`.`check` (`name`, `pass`) VALUES ('$name', '$pass')";
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