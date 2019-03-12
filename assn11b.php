<html>
<head>
<title> Assignment 10 Part 1 </title>
DOGS
<br><br><br>
</head>
<body>
<?php
include "connh2.php";
#the include
$sql='select * from Dog';
echo "<table border=1>"; #create a table
echo "<tr><th> Dogs </th>";
foreach($conn->query($sql) as $row)#loop throw query output
{
echo "<tr><td>";
echo $row["Dog_NNNNName"];
echo "</td><td>";
echo $row["Dog_Breed"];
echo "</td><</tr>";
}
echo "</table>";#end table

?>
</body>
<footer>
<p align='center'> Michael Peterson Section 1</p>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11c.php">Add Dog</a>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11d.php">Add Visit</a>
<br><a href="http://students.cs.niu.edu/~z1838929/assn11e.php">Visits</a>
</footer>

</html>
