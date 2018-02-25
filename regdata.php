<?php
//echo "<pre>";
//var_dump($_POST);

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
       

            mysql_select_db('samplee');

if(isset($_POST)&&(!empty($_POST)))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$phonenumber=$_POST['phonenumber'];
 $gender=$_POST['gender'];
$securityquestions=$_POST['securityquestions'];
 $sql = "INSERT INTO registration ". "(username,email,password,address,city,state,zipcode,phonenumber,gender,securityquestions) ". "VALUES('$username','$email','$password','$address','$city','$state',$zipcode,$phonenumber,'$gender','$securityquestions')";
 

            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }else if(!empty( $retval))
            {
        


            echo "Entered data successfully\n";
        }

}
             $sql1 = 'SELECT username,email,password FROM registration';
  	// mysql_select_db('test_db');
   $retval1 = mysql_query( $sql1, $conn );
   
   if(! $retval1 ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval1, MYSQL_ASSOC)) {
      echo "username :".$row['username']." <br> ".
         "email : {$row['email']} <br> ".
         "password : {$row['password']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
            
            mysql_close($conn);

?>