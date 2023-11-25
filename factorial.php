<?php
$num=$_POST['fact'];
$f=1;
for($i=1;$i<=num;$i++)
{
    $f=$f * $i;
}
echo("Factorial=",$f);
?>