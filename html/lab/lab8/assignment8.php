<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>  

<p><span class="error">* required field</span></p>
<form method="post" action="">  
  username: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>


