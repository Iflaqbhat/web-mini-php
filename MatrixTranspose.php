<?php
$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
$b = array(array(9,8,7),array(6,5,4),array(3,2,1));
$m=count($a);
$n=count($a[2]);
$p=count($b);
$q=count($b[2]);
print "<h1 style='text-align: center;color: blue;'>Matrix operations</h1> <hr>";
echo "The first matrix :"."<br/>";
for ($row = 0; $row < $m; $row++)
{
for ($col = 0; $col < $n; $col++)
echo " ".$a[$row][$col];
echo "<br/>";
}
echo "<br/>The second matrix :"."<br/>";
for ($row = 0; $row < $p; $row++)
{
for ($col = 0; $col < $q; $col++)
echo " ".$b[$row][$col];
echo "<br/>";
}
echo "<br/>The transpose for the first matrix is:"."<br/>";
for ($row = 0; $row < $m; $row++)
{
for ($col = 0; $col < $n; $col++) echo " ".$a[$col][$row];
echo "<br/>";
}
if(($m===$p) and ($n===$q)) {
echo "<br/>The addition of matrices is:"."<br/>";
for ($row = 0; $row < 3; $row++) 
{
for ($col = 0; $col < 3; $col++)
echo " ".$a[$row][$col]+$b[$row][$col]." ";
echo "<br/>";
}
}
if($n===$p)
{
echo "<br/>The multiplication of matrices: <br/>";
$result=array();
for ($i=0; $i < $m; $i++)
{
for($j=0; $j < $q; $j++)
{
$result[$i][$j] = 0; for($k=0; $k < $n; $k++)
$result[$i][$j] += $a[$i][$k] * $b[$k][$j];
}
}
for ($row = 0; $row < $m; $row++)
{
for ($col = 0; $col < $q; $col++) echo " ".$result[$row][$col];
echo "<br/>";
}
}
?>