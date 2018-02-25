<?php

/* string length */

echo strlen("my name is jyothsna");

/* string word count */
echo "<br>";
echo "<br>";
echo "<br>";


echo str_word_count("my name is jyothsna");
echo "<br>";
echo "<br>";
 
/* string reverse */

echo strrev("my name is jyothsna");
echo "<br>";
echo "<br>";

/* specific text with in string*/

echo strpos("my name is jyothsna", "jyothsna");
echo "<br>";
echo "<br>";


/* replace text with in string*/

echo str_replace("jyothsna", "chinni","my name is jyothsna");
echo "<br>";

echo "<br>";


/* addslashes() */

echo addslashes('my name is "jyothsna" sathish');
echo "<br>";
echo "<br>";



echo addcslashes('my name',"n");
echo "<br>";
echo "<br>";



/* html special characters function */

$str="this is my first <b>practice</b> section";
echo htmlspecialchars($str);

echo "<br>";
echo "<br>";


/* implode */

$arr= array('hello','mangalgiri','heartly','weclcome');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>";
echo implode(" *",$arr)."<br>";
echo "<br>";
echo "<br>";


/* explode */

$str='hello mangalgiri heartly weclcome';
print_r(explode(" ",$str));

echo "<br>";
echo "<br>";


/* number format */

echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",","."); 
echo "<br>";
echo "<br>";

/* rtrim fun() */
$str="hello mangalgiri heartly welcome";
echo $str."<br>";
echo rtrim($str,"welcome");
echo "<br>";
/* string to lower case*/

echo strtolower("HELLO MANGALGIRI");

echo "<br>";
  
/* string to UPPER case*/
echo strtoupper("hello mangalgiri");
echo "<br>";

/* ucfirst */

echo ucfirst("heloo mangalgiri");

echo "<br>";
/* uc words */
echo ucwords("hello mangalgiri");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

/* substr */

echo substr("hellomamgalgiri",5)."<br>";
echo substr("hellomamgalgiri",9)."<br>";
echo substr("hellomamgalgiri",6)."<br>";

echo "<br>";

echo substr("hellomamgalgiri",-5)."<br>";
echo substr("hellomamgalgiri",-6)."<br>";

echo "<br>";
echo "<br>";

echo substr("hello mamgalgiri",5,5)."<br>";
echo substr("hello mamgalgiri",6,9)."<br>";

echo "<br>";
echo "<br>";


echo number_format("1000000",2,"@","$");









































echo "<br>";

?>
echo "<br>";
