<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<style type="text/css">@import "compass";
@import url("https://fonts.googleapis.com/css?family=Open+Sans");

/* Color settings */
$formBg: #2c3e50; 
$formColor: #fff;
$inputBg: #fff;
$inputColor: #000;
$buttonBg: #e67e22;
$buttonColor: #fff;
$errorMsgColor: #ff0000;

/* Styles */
* {
  margin: 0;
  padding: 0;
}

body {
  font-family: "Open Sans";

  font-size: 14px;
}

.container {
  width: 500px;
  margin: 25px auto;
}

form {
  padding: 20px;
  background: $formBg;
  color: $formColor;
  @include border-radius(4px);
  
  label,
  input,
  button {
    border: 0;
    margin-bottom: 3px;
    display: block;
    width: 100%;
  }
  input {
    height: 25px;
    line-height: 25px;
    background: $inputBg;
    color: $inputColor;
    padding: 0 6px;
    @include box-sizing(border-box);
  }
  button {
    height: 30px;
    line-height: 30px;
    background: $buttonBg;
    color: $buttonColor;
    margin-top: 10px;
    cursor: pointer;
  }
  .error {
    color: $errorMsgColor;
  }
}

.article-reference {
  margin-top: 15px;
  a {
    color: $buttonBg;
  }
}

}
</style>
<body>
  <div class="container">
  <h2>Registration</h2>
  <form action="regdata.php" name="registration" method="POST" >

    <label for="username">User Name</label>
    <input type="text" name="username" id="username" placeholder="John"/>


    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="john@doe.com"/>

   
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"/>

    <label for="">address</label>
    <input type="text" name="address" id="address" placeholder="Prakasam"/>


    <label for="">city</label>
    <input type="text" name="city" id="city" placeholder="Prakasam"/>

    
    <label for="">state</label>
    <input type="text" name="state" id="state" placeholder="choose state"/>

    <label for="">ZipCode</label>
    <input type="text" name="zipcode" id="zipcode" placeholder="optional"/>

    
    <label for="">PhoneNumber</label>
    <input type="number" name="phonenumber" id="phonenumber" placeholder="Number"/>


    <label for="">DateOfBirth</label>
    <input type="Date" name="datedfbirth" id="dateofbirth" placeholder="enter date of birth"/>


    <label for="">Gender</label>
    male <input type="radio" name="gender" id="gender1" value="male" />

    female <input type="radio" name="gender" id="gender" value="female" />



    <label for="">Security Questions</label>
    <input type="text" name="securityquestions" id="securityquestions" placeholder="qustions"/> 

    <button type="submit">Register</button>

  </form>
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

<script>
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      username: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true,
      },
     

      password: {
        required: true,
        minlength: 5,
      
    },
     address: "required",
      city: "required",
      state: {
        required: true,
      },
      zipcode:{
        required: true,


      },
      phone: {

        requried: true,


      },
      dateofbirth: "required",
      gender: "required",

      securityquestions: "required",
      },

    // Specify validation error messages
    messages: {
      username: "Please enter your username",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address",
      address: "please enter your current address",
      city: "please enter your city name",
      state: {
       required: "choose your state",
      },
       zipcode: {
        required: "please enter your zip code",
      },
      phone: {
        required: "no spaces or dashes",
      },
      dateofbirth: {
        required: "enter year-month-date",

      },
      gender:{
        reqiured:" choose your gender",
      },
      securityquestion:{
        required: "choose a security questions",
      },


    },
     // specify 

    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
      submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
</body>
</html>