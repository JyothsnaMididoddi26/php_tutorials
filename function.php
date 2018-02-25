<?php
// predefined function
echo strtolower("RES");
 // user defined function
 function add ($a,$b,$c)
 {
$r= ($a+$b)/$c;

return $r;
 }
 //echo 
add(5,3,2);


// index array
$indexarray=[1,34,2,"venky",4.5,58.5];
for($i=0;$i<sizeof($indexarray);$i++)
{
	echo "Name :".$indexarray[$i]."<br>";
}
// associative arary
$assarray=["name"=>"venky","subject"=>"BSC","result"=>80];

foreach($assarray as $key=>$value)
{
				echo $key." ". $value;
				echo "<br>";
			//exit;
	
	}

?>