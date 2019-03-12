<html>
<head>
<title> Assignment 11 </title>
ADD VISIT
<br><br><br>
</head>
<body>
<?php
include "connh2.php";
$sql='select * from Dog';
#the include
echo '<form action="assn11d.php" method="post">';  #form creation
print 'Add Visit: ';
echo "<br>";
print 'Dog Name: ';
echo '<select name="name" id="name">';
foreach($conn->query($sql) as $row)#select dog to add visit to
{
	echo '<option value="';
	echo $row["Dog_Id"];
	echo '">';
	echo $row["Dog_NNNNName"];
	echo '</option>';
}
echo '</select>';#text inputs
echo '<br>';
print 'Date: ';
echo '<input type="text" name="date" id="date">';# creation of dat valu
print 'Week Day: ';
echo '<input type="text" name = "day" id = "day">';#creation of day value
echo '<input type="submit" name="submit">';
echo	'</form>';#end form
if ($_SERVER['REQUEST_METHOD']=='POST')# checks for a button press
{
	$dog=trim($_POST['name']);#set up elements to add
	$name=trim($_POST['date']);
	$code=trim($_POST['day']);
	$sql="insert into Visit values(DEFAULT,?, ?, ?)";#the sql using defaul to increment primary key
	$stmt=$conn->prepare($sql);#prep sql
        $stmt->execute(array($dog, $name, $code));#run execute to put in three values	
}
?>
</body>
<footer>
<p align='center'> Michael Peterson Section 1</p>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11c.php">New Dog</a>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11e.php">Visits</a>
</footer>

</html>
