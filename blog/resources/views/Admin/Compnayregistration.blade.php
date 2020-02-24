<?php
include("connection.php");
include("adminpage.php");
		$name=  $_POST['name'];
		$address= $_POST['address'];
		$file  =  $_FILES["img"]["name"];
		$offercapacity= $_POST['offer_capacity'];
		$internship_type = $_POST['internship_type'];
		$grade = $_POST['min_grade'];
		$area_of_study= $_POST['filed'];
        $company_id=  $_POST['company_id'];

		$user_id=  $_POST['user_id'];
		$fname=  $_POST['first_name'];
		$lname=  $_POST['last_name'];
		$sex=  $_POST['sex'];
		$email=  $_POST['email'];
		$phone=  $_POST['phone'];

if (move_uploaded_file($_FILES['img']['tmp_name'],"images/".$file)) {
  
 $sql="INSERT INTO `company`(`company_id`,`name`, `address`, `profile`, `offer_capacity`, `internship_type`, `min_grade`, `field`) VALUES ('$company_id','$name','$address','$file','$offercapacity','$internship_type','$grade','$area_of_study');";
echo $grade;
$sql2="INSERT INTO `company_coordinator`(`user_id`,`first_name`, `last_name`, `sex`, `email`, `phone`,`company_id`) VALUES ('$user_id','$fname','$lname','$sex','$email','$phone','$company_id')";

 $result=mysqli_query($conn, $sql);
 $result2=mysqli_query($conn, $sql2);
 if($result and $result2){
  header("location:adminpage.php");

 }else{
 	echo ".$conn->error";
 }

}  
?>
