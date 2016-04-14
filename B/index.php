<html>

<head>
</head>

<body>
<form method="post">
請輸入數字:<input type="text" name="x"><br/>
請輸入數字:<input type="text" name="y"><br/>
請輸入數字:<input type="text" name="z"><br/>
<input type="submit">
<input type="reset">

<?php
$x=$_POST["x"];
echo "<br/>";
$y=$_POST["y"];
echo "<br/>";
$z=$_POST["z"];
echo "<br/>";

function sum($x,$y,$z) 
{
   return $x+$y+$z;
}

echo sum($x,$y,$z);
echo "<br/>";

function minus($x,$y,$z)
{
   return $x-$y-$z;
}
echo minus($x,$y,$z);
echo "<br/>";

function Multiply($x,$y,$z)
{
   return $x*$y*$z;
}
echo Multiply($x,$y,$z);
echo "<br/>";

function except($x,$y,$z)
{
   return $x/$y/$z;
}
echo except($x,$y,$z);
echo "<br/>";

//function pow($x,$y)
//{return pow($x,$y);}

echo pow($x,$y);
echo "<br/>";

function b3($x)
{   
    
}
?>

</form>
</body>
</html>