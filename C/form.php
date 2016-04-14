<html>

<head>
</head>

<body>

<form action="login.php" method="post">
請輸入網址名稱:<input type="text" name="name"><br/>
請輸入網址路徑:<input type="text" name="Upath"><br/>

<input type="submit">
<input type="reset">

<?php

ob_start();
 session_start();

 if(isset($_SESSION["check"])){
if(isset($_SESSION["name"])){
  $uName=$_SESSION["name"];
  $uPwd=$_SESSION["Upath"];

  $Link=mysqli_connect("localhost","root","123456","elsie");
   mysqli_query($Link,"set name utf8");
   echo "<br/>";

   $add="INSERT INTO uploadurl(name,Upath) VALUES('$name','$Upath')";

?>

</form>
</body>
</html>

