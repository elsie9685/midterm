<?php
 ob_start();
 session_start();

 if(isset($_SESSION["check"])){
if(isset($_SESSION["Uname"])){
  $uName=$_SESSION["Uname"];
  $uPwd=$_SESSION["Upwd"];

  $Link=mysqli_connect("localhost","root","123456","elsie");
   mysqli_query($Link,"set name utf8");
   echo "<br/>";
$add="INSERT INTO reg(user,pwd) VALUES('root','123456')";

 if(isset($_POST["Uname"]))
   {
     $Uname=$_POST["Uname"];
     $Upwd=$_POST["Upwd"];

     $sql="SELECT * FROM reg WHERE user='root' AND pwd='123456'";
     $result=mysqli_query($Link,$sql);

     $rows=mysqli_num_rows($result);

     if($rows)
      {
      	echo "Success";
      $_SESSION["check"]="yes";
	    $_SESSION["Uname"]=$Uname;
	    $_SESSION["Upwd"]=$Upwd;
      	header('Location:index.php');
      }
      else
       {
       	echo "Failed, Will back to login page after 3 second";
       	header('refresh:3,url="reg.php"');
       }
   }
 }

?>