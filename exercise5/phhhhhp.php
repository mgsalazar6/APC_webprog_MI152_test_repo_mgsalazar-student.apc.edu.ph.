<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $nicknameErr = addressErr = $emailErr = $genderErr =  "";
$name = $nickname = $address = $email = $gender = $comment =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
   {
  if (empty($_POST["nickname"])) {
    $nameErr = "Nickname is required";
  } else {
    $name = test_input($_POST["nickname"]);

    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
   if (empty($_POST["address"])) {
    $nameErr = "Address is required";
  } else {
    $name = test_input($_POST["address"]);

    if (!preg_match("/^[a-zA-Z ]*$/",$address)) {
      $addressErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
	$cellphone = $_POST['cellphone'];
if (!empty($cellphone)){
	{
		if(pre_match('/^\d(10)$/',$cellphone)){
			$cellphoneErr ="Cellphone number is required";
			$cellphone = '0' . $cellphone;
		}
		else
		{
		echo '';	
		}
	}
	else
	{
	echo '';	
	}
}
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Information</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
   Nickame: <input type="text" nickname="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
   Address: <input type="text" address="address" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Number: <input type="text" name="cellphone" value="<?php echo $cellphone;?>">
  <span class="error">* <?php echo $cellphoneErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $address;
echo "<br>";
echo $email;
echo "<br>";
echo $cellphone;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>