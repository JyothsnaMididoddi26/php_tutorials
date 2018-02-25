<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $(".demo1").click(function(){
    	a=10;
    	console.log(a);
        $("p").hide();
    });

    $("#add").click(function(){

       a= $("#num").val();

       b= $("#num1").val();
       z=parseInt(a)+parseInt(b);
       $(".result").html(z);
    });

});

</script>
</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
A : <input type="number" id="num" value='' />
B: <input type="number" id="num1" value='' />
<button id="demo">show</button>
<button id="add">Add</button>
<span class="result"></span>
<button class="demo1">Click me to hide paragraphs</button>

</body>
</html>
