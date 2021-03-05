<?php
	// $valid_email = "/^[a-zA-Z._]+@[a-zA-Z]+\.[a-zA-Z]{2,}$/";
	// $valid_url = "/^(https:\/\/www\.|http:\/\/www\.|www\.|)[a-zA-Z0-9\-_$]+\.[a-zA-Z]{2,}$/";

	$pattern = "/^($^*+){}[]?$/";
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
+		One or more times
*		Zero or more times
?		Once or none
{3}		Exactly three times
{3,5}	Three to five times
{3,}	Three or more times

\s  	Allow whitespace or spaces
\d  	Allow all digits
\w  	Allow alphanumeric charecters and underscore
\.		Period
.		Allow all characters and symboles


()		Rules that are applied for all characters
|		Logical OR operator

</pre>