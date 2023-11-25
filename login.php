<html>
    <body>
<form method="post" action="login.php">
    Username:<input type="text" name="username">
    Password:<input type="text" name="password">
    <input type="submit" name="submit" value="Login">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $conn=mysqli_connect('localhost','root',' ','login');
    $user=$_POST['username'];
    $
}