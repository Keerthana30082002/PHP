<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
</head>
<body>

       <form action="" method="post">
            KTU ID:<input type="text" name="ktuid"><br>
            ROLL NO:<input type="text" name="rollno"><br>
            Name:<input type="text" name="name"><br>
            Semester:<input type="text" name="sem"><br>
            <input type="submit" name="submit"><br>
       </form>      
</body>
</html>
<?php
include 'conn1.php';
if(isset($_POST['submit']))
{
$ktuid=$_POST['ktuid'];
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$sem=$_POST['sem'];
if($con)
    {
        $rq="insert into student1 values('$ktuid','$rollno','$name','$sem')";
        $rs=mysqli_query($con,$rq);
        if($rs)
        {
            $res="Account Created";
        }
    }
}
?>
