<?php
require 'connection.php';
$cid=$_POST["field1"];
$cname=$_POST["field2"];
$pswd=$_POST["field3"];
$email=$_POST["field4"];
$addr=$_POST["field5"];
$phone=$_POST["field6"];
$sql="INSERT INTO company_details(Cid,CName,Password,Email,Address,PhoneNo) VALUES('$cid','$cname','$pswd','$email','$addr',$phone) ";
$msql="INSERT INTO users(Empid,CName,Password,UserType) VALUES('$cid','$cname','$pswd','Corporate') ";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$msql);
if ($result!=NULL && $result1!=NULL) {
	header("location:frame2.html");
} else if($result==NULL){
	header("location:improper1.html");
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else{
	header("location:improper2.html");
    //echo "Error: " . $msql . "<br>" . mysqli_error($conn);
}
?>