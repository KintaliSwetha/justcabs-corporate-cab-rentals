
<?php
 $from=$_GET["FromDesti"];
 $to=$_GET["ToDesti"];
 $type=$_GET["VehiType"];
 if(($_GET["Share"])=="on")
	 $share="to share";
 else
	 $share="not to share";
 ?>
 <html>
 <head>
 <title>Booking Details</title>
 <style>
body {
  background-image: url('booking2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
.right {
  float: left;
  width: 300px;
  border: 0px solid #FFFFFF;
  padding: 50px;
  margin-left: 95px;
  margin-top:0px;
}
</style>
 </head>
 <body>
 <div>
 <font color="black">
<object align="right"><h2><a href="frame2.html"><u>logout</u></a></h2></object>
 <br><br>
 <h1><center>Welcome..!!!</center></h1>
 <font size="6">
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 Your booking has been confirmed with from destination <u><?php echo "$from";?></u> to <u><?php echo "$to";?></u> destination.</p>
 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 You have choosen model <u><?php echo "$type";?></u> and you are willing <u><?php echo "$share"?></u>. </p>
 <center>Happy riding!!!<center>
 </font>
 <br>
 <br><br><br><br><br><br><br>
 <h2><u><a href="UserLogin.html">GoBack</a></u></h2>
 </font>
 </div>
 </body>
 </html>