<html>
<head>
<title> Assignment 11</title>
VISITS TABLE
<br><br><br>
</head>
<body>
<?php
include "connh2.php";
#the include
$sql='select * from Visit';
echo "<table border=1>"; #create a table
echo "<tr><td>Dog ID<td> Date</td><td> DAY</td></th></tr>";
foreach($conn->query($sql) as $row)#loop throw query output
{
echo "<tr><td>"; #create Table of visits
echo $row["Dog_Id"];
echo "</td><td>";
echo $row["VISIT_Date"];
echo "</td><td>";
echo $row["Day"];
echo "</td></tr>";
}
echo "</table>";#end table

?>
</body>
<footer>
<p align='center'> Michael Peterson Section 1</p>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11f.php">Delete Visit</a>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11c.php">Add Visits</a>
</footer>

</html>
