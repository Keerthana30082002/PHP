<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn)
{
    echo "connection successful😁😁😁";
}
else
{
    echo "connection failed😂😂😂";
}
    $roll=$_POST['rollno'];
    $name=$_POST['name'];
    $mark=$_POST['mark'];
    $sq="insert into stud values('$roll','$name','$mark')";
    $p=mysqli_query($conn,$sq);
if($p)
{
    echo "<script>alert('Successfully inserted one row');</script>";
}
else
{
    echo "<script>alert('Not inserted');</script>";
}

?>

