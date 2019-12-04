 <?php
require 'connection.php';
$cname=$_POST["feild1"];
$empid=$_POST["feild2"];
$password=$_POST["feild3"];
$sql="INSERT INTO users(Empid,Password,CName,UserType) 
VALUES('$empid','$password','$cname','Employee') ";
$result=mysqli_query($conn,$sql);
if ($result!=NULL) {
    header("location:CorporateLogin.html");
} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>