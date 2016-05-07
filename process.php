<!DOCTYPE html>
<html>
<head>
<title>Indian Army</title>
<link rel="icon" type="image/png" href="image\favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="image\favicon-16x16.png" sizes="16x16" />
<link href="stylepage.css" rel="stylesheet" />
</head>
<body>
<header>
<h1>Indian Army</h1><h5>"Service Before Self"</h5>
</header>
<?php
$age=$_GET["age"];
$height=$_GET["height"];
$weight=$_GET["weight"];
$chest=$_GET["chest"];
$f=0;
if($age<=18 || $age>=25)
{
$f=1;
echo "<h3>Disqualified due to age.</h3><br>Should be between 18 and 25 years respectively.<br><br>";
}
if($height<=5.2 || $height>=5.6)
{
$f=1;
echo "<h3>Disqualified due to height.</h3><br>Should be between 5.2 and 5.6 inches respectively.<br><br>";
}
if($weight<=45 || $weight>=60)
{
$f=1;
echo "<h3>Disqualified due to weight.</h3><br>Should be between 45 and 60 kg respectively.<br><br>";	
}
if($chest<=45)
{
$f=1;
echo "<h3>Disqualified due to chest.</h3><br>Should be greater than 45 cm respectively.<br><br>";	
}
if($f==0){
echo "<h2>Qualified for joining the Indian Army</h2>";
header("refresh:5; url=index.html");}
else{
echo "<h2>Disqualified to join army due to above reasons.</h2>";
header("refresh:8; url=index.html");
}
?>
</body>
</html>