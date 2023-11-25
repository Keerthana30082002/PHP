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
$s="select * from stud where rollno='$roll'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q))
{
    echo "<html><body><form>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<input type='text' value='".$row["rollno"]."'disabled>";
        echo "<input type='text' value='".$row["name"]."'disabled>";
        echo "<input type='text' value='".$row["mark"]."'>";
        echo "<td>".$row["rollno"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["mark"]."</td>";
        echo "</tr>";
    }
    echo "</form>";
}