<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{

 $name = $_POST['name'];
 $email = $_POST['email'];
 $nickname = $_POST['nickname'];
 $address = $_POST['address'];
 $comment = $_POST['comment'];
 $gender = $_POST['gender'];
 $cellphone= $_POST['cellphone'];

 

 
        $sql_query = "INSERT INTO sample(name,nickname, email, address, comment, gender, cellphone) VALUES('$name','$nickname','$email','$address','$comment','$gender','$cellphone')";
 mysqli_query($con, $sql_query);
 
}


$nameErr = $emailErr = $genderErr  = $nicknameErr = $addressErr = $cellphoneErr = "";
$name = $email = $gender = $comment = $nickname = $address = $cellphone = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
 
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and numbers allowed"; 
    }
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
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
    if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
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
   
     $cellphone = $_POST['cellphone'];
if(!empty($cellphone))
{
    if(preg_match('/^\d{10}$/',$cellphone))
    {
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
  echo ' ';
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
<style>


.error{
	color:red;
}
</style>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<div id="header">

    <label>Add your informations here<a href="http://cleartuts.blogspot.com" target="_blank"></a></label>
</div><br> 
 <div id="content"><center><a href="index.php">back to main page</a></center><br>


 <div id="content" align="center">
<p align="center"><span class="error">* required field.</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	Name: <input type="text" name="name" value="<?php echo $name;?>">
	<span class="error">* <?php echo $nameErr;?></span>
	</br>
	Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
	<span class="error">* <?php echo $nicknameErr;?></span>
	</br>
	E-mail: <input type="text" name="email" value="<?php echo $email;?>">
	<span class="error">* <?php echo $emailErr;?></span>
	</br>
	Address: <textarea name="address" rows="10" cols="50"><?php echo $address;?></textarea>
	</br>
	Gender:
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="male">Male
	<span class="error">* <?php echo $genderErr;?></span>
	</br> 
	Cellphone Number: <input type="text" name="cellphone" value="<?php echo $cellphone;?>">
	<span class="error">*<?php echo $cellphoneErr;?></span>
	</br>
	Comment: <textarea name="comment" rows="8" cols="40"><?php echo $comment;?></textarea>
	</br>
   <input type="submit" name="btn-save"></button>

</form>
</div>
</center>


<div class="output" align="center">
<?php

echo "<h2>Your Input:</h2>";
echo "<br>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $address;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $cellphone;
?>
</div>
</body>
</html>	

