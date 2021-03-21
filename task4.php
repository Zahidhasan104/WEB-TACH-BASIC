
<?php
$email="";
$err_email="";
$password="";
$err_pass="";
$name="";
$err_name="";
$username="";
$err_username="";
$phonenuumber="";
$err_phonenumber="";
$addressname="";
$err_addressname="";
$date="";
$err_date="";

function validateEmail ($email){
	$pos_at = strpos($email,"@");
	$pos_dot = strpos($email,".",$pos_at+1);
	if($pos_at < $pos_dot){
		return true;
	}
	return false;
}
function validatePassword($password){
$hasUpper=false;
$hasLower=false;
for($i=0;$i<strlen($password);$i++){
if (ctype_upper($password[$i])){
$hasUpper = true;
}
if (ctype_lower($password[$i])){
	$hasLower = true;
}

}
if($hasLower==false|| $hasUpper==false){
return false;
}
else{
return true;
}
}
	




if($_SERVER["REQUEST_METHOD"]=="POST"){

	if(empty($_POST["email"])){
	
		$err_email="Email Required";
		
	}
	elseif(!validateEmail($_POST["email"])){
	$err_email="Not a valid email";


}

if(empty($_POST["password"])){
	$err_pass="Password Required";
}
else{
	$err_pass="password must contain at least 1 upper case and 1 lower case";
}
if(empty($_POST["name"])){
	
		$err_name="Name Required";
	}
	if(empty($_POST["username"])){
	
		$err_username="Username Required";
	}

	if(empty($_POST["phonenumber"])){
	
		$err_phonenumber="Phonenumber Required";
	}
	if(empty($_POST["addressname"])){
	
		$err_addressname="Address Required";
	}
	if(!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"])){
	$err_date="Date Required";
}
else {
	$date=$_POST["day"]."-".$_POST["month"]."-"._POST["year"];
}

}

?>



<html>

	
	<body>
		<h1>Club Member Registation</h1>

		<form action="" method="post">
		Name:<input type="text" name=" name ">
		<?php echo $err_name;?></br>
	     </br>
	 </br>
	 Username:<input type="text" name=" username ">
		<?php echo $err_username;?></br>
		</br>
		Password:<input type="text" name="password"><?php echo $err_pass;?><br>
		<br>
		Email:<input type="text" name="email"><?php echo $err_email;?><br>
		<br>
		Phone:<input type="number" name="phonenumber"><?php echo $err_phonenumber;?><br>
		<br>
		Address:<input type="text" name="addressname"><?php echo $err_addressname;?><br>
		<br>
		Gender:<input type="radio" name="gender"checked>Male<input type="radio" name="gender">Female<input type="radi" name="gender"><br>
		<br>



		Birth Date:

		
		
		<select name="day">
			<option selected disabled>Day</option>
			<?php
			for ($i=0;$i<=31;$i++){
			echo"<option>$i</option>";
			
		}
		?>
			</select>
		
	<select name="month">
			<option selected disabled>Month</option>
			<?php
			$month= array("january","february","march","april","may","june","july","august","september","october","november","december");
			for($i=0;$i<count($months);$i++)
			{
				echo "<option>$months[$i]</option>";

			}
			?>

			</select>
	
	<select name="year">
			<option selected disabled>Year</option>
			<?php
			for($i=1995;$i<=2014;$i++){
			echo "<option>$i</option>";
		}
		?>
			</select><?php err_date; ?>
		</br>
	</br>

		<input type="submit" value="Registation"></br>
     
     </form>

	</body>
</html>