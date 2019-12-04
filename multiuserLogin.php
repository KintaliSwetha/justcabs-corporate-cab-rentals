
 <?php
 require 'connection.php';
	$cname=$_POST['CName'];	
	$user=$_POST['EmpId']; 
	$usertype=$_POST['UserType'];
	$pass=$_POST['Password'];
	$sql="SELECT * FROM users WHERE CName='$cname' and Empid='$user' and Password='$pass' and UserType='$usertype'";
	$rs=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($rs)<1)
	{
		header("location:improper.html");
	}
	else
	{
		//$row=mysql_fetch_array($rs);
		if($usertype=="Corporate")
		{
			//$_SESSION['ID']=$user;
			header("location:CorporateLogin.html");
		}
		else if($usertype="Employee")
		{
			//$_SESSION['ID']=$user;
			header("location:UserLogin.html");
		}
		else{
			echo "no result";
		}
	}
			
 ?>