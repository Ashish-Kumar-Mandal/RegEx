<?php
	$pattern = "/^[a-zA-Z._]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/";
	if(isset($_POST['submit'])){
		$res = preg_match($pattern, $_POST['val']);
		if($res){
			$op =  '<span style="color:green"> ✔ </span>';
		}else{
			$op = '<span style="color:red"> ✘ </span>';
		}
	}
?>

<form method="POST">
	<input type="text" name="val" autofocus>
	<input type="submit" name="submit" value="Submit">
	<?php if(isset($op)){echo $op;} ?>
</form>

<pre>	

//		write any Regular Expration code inside forward slash
^		Start
$		End
[]		Rules that are applied to a single character
+		Apply the rule to everything
\s  	Allow whitespace or spaces
\d  	Allow all digits
\w  	Allow alphanumeric charecters and underscore
.		Allow all characters and symboles
\.		Period
{5}		Apply rule to the next 5 charecter
{2,5}	Apply rule to between 2 and 5 character

</pre>