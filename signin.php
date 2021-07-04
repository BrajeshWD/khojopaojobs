<?php
session_start();
if(!isset($_SESSION['user_name'])){
header("location:home.php");
}
?>
<html>
<head><title>khojopaojobs</title>
<link rel="stylesheet" href="css/home.css">
</head><body>
<?php
include 'header.php';
 echo "<h1>Welcome dear ". $_SESSION['user_name']."</h1>";
 ?>
<button class="logout" style="border:3px solid red;color:white;margin-left:1400px;height:30px;background-color:green;font-size:18px;font-weight:bolder;"><a href="log_out.php" style="color:white;text-decoration:none">Log Out</a></button>
  <?php
  include 'footer.php';
  ?>
</body>
</html>
