Html code
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>
  <form action="index.php" method="POST">
      Login     <input type="text" name="login" value="">
      Password  <input type="password" name="pass" value="">
                <input type="submit">
  </form>
</body>
</html>
  
PHP code
<?php
$abc = "Anton";
$cba = 12345;
require_once('index.html');
echo "  Login  <input type='text' name='login' value='".$abc."'>";
echo "  Password  <input type='text' name='pass' value='".$cba."'>";
?>
