<html>
<head>
<title> Assignment 11 </title>
DELETE VISIT
<br><br><br>
</head>
<body>
<?php
include "connh2.php";
$sql='select * from Dog, Visit where Dog.Dog_Id = Visit.Dog_Id';
#the include
echo '<form action="assn11f.php" method="post">';  #form creation
print 'Remove Visit: ';
echo "<br>";
print 'Dog Name: ';
echo '<select name="name" id="name">';
foreach($conn->query($sql) as $row)# dropdown to select do name and visit to delete
{
	echo '<option value="';
	echo $row["Visit_Id"];
	echo '">';
	echo $row["Dog_NNNNName"].' '.$row["VISIT_Date"];
	echo '</option>';
}
echo '</select>';
echo '<br>';
echo '<input type="submit" name="submit">';
echo	'</form>';#end form
if ($_SERVER['REQUEST_METHOD']=='POST')# checks for a button press
{
	$dog=trim($_POST['name']);
	#$code2=$_Post['name'];
	$sql="Delete from Visit where Visit_Id = '$dog'"; #the sql
	$stmt=$conn->prepare($sql);#prepsql
        $stmt->execute(array($dog));#run sql	
}
?>
</body>
<footer>
<p align='center'> Michael Peterson Section 1</p>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11c.php">New Dog</a>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11e.php">Visits</a><br>
<a href="http://students.cs.niu.edu/~z1838929/assn11d.php">Add Visit</a>
<br> <a href=http://students.cs.niu.edu/~z1838929/assn11b.php>dogs</a>
</footer>

</html>
