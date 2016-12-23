<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM sample WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);

}
if(isset($_POST['btn-update']))
{

 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $cellphone = $_POST['cellphone'];
 $comment = $_POST['comment'];
 $gender = $_POST['gender'];

 $sql_query = "UPDATE sample SET name='$name',nickname='$nickname',address='$address',email='$email',cellphone='$cellphone',comment='$comment',gender='$gender' WHERE id=".$_GET['edit_id'];

	echo $sql_query;

 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert(<?php echo $sql_query; ?>);
  </script>
  <?php
 }

}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>

<style>
.error{
	color: red;
}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YAY</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Tell me about yourself ^_^</label>
    </div>
</div>
<div id="content"><td align="center"><a href="index.php"> back to main page</a></td>
<h2>Information</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">*</span>
  <br><br>
   Nickame: <input type="text" name="nickname" value="<?php echo $user_item['firstname'] ?>">
  <span class="error">*</span>
  <br><br>
   Address: <textarea name="address"></textarea>
  <span class="error">* </span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">*</span>
  <br><br>
  Number: <input type="text" name="cellphone" >
  <span class="error">*</span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">*</span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</center>
</body>
</html>