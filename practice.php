<!DOCTYPE html>
<html>
<body>

<?php

/*echo "prctising section";
echo "<br>";
echo "php class";
*/
/*
 $txt= "hello Mangalgiri";
 $x=40;
 $y=60;
  echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
$z= $x+$y;

echo $z;
echo "<br>";


echo $txt."<br>".$x."<br>".$y."<br>";
echo $z;


echo "<br>".$x=10.4."<br>".$y=11.6."<br>".$z=$x+$y."<br>".$z;
*/
echo ucwords("heloo world");
echo ucfirst("hello world");

echo rtrim("heloo world");
/* index array */

$numbers1=array(5,7,3,4,5,6);
$numbers2=[1,2,3,4,5,6,7,8,9,10];


echo "<pre>";
print_r( $numbers1);

echo sizeof($numbers1);

echo $numbers1[1];


/*associative array*/

$asarray=array("name"=>"Jyothsna","rank"=>1);
print_r($asarray);
echo $asarray["name"];


/* if condition*/

if($numbers1[0]==7)
{

echo "wrong";
/*loops*/
}
else if($numbers1[0]==6)
{

	echo "correct";
}else
{
	echo "unknown";
}


















?>
</body>
</html>