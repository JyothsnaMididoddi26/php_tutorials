<?php 
/* loops */

/* while */


$x = 1; 

while($x <= 20) {
    echo "The number is: $x <br>";
    $x++;

}

/* functions */


/* creating function */

function writeMsg(){

	echo "heloo";
}
writeMsg();


function sub($x,$y){
	$z= $x-$y;
	return $z;

}
echo "5 - 3 =".sub(5,3)."<br>";
echo "10 - 5 =".sub(10,5)."<br>";

function familyDetails($name,$work){
	echo "$name working as $work <br>";

}

familyDetails("sekhar","TEACHER");
familyDetails("sathish","AFO");
familyDetails("anjaneyulu","ASI");


/* arrays */

/* index array */


$C= array("GOOGLE","MICROSOFT","ACCENTURE","WEBMOBILEZ");
$arrlength = count($C);
for($x = 0; $x < $arrlength; $x++) {
    echo $C[$x];
    echo "<br>";

}


/* associative array */

$assarray=["sekhar"=>"TEACHER","sathish"=>"AFO","anjaneyulu"=>"ASI"];
foreach($assarray as $key1=>$value1){
				echo $key1." ". $value1;
				echo "<br>";
}












?>


