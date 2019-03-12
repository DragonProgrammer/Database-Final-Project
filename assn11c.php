<html>
<head>
<title> Assignment 11 </title>
ADD DOG
<br><br><br>
</head>
<body>
<?php
include "connh2.php";
#the include
echo '<form action="assn11c.php" method="post">';  #form creation
print 'Add Dog: ';
echo "<br>";# text input for new dog
print 'Dog Breed: ';
echo '<input type="text" name="breed" id = "breed">';# breed creation
echo '<br>';
print 'Dog Name: ';
echo '<input type="text" name="name" id="name">';#name creation
echo '<input type="submit" name="submit">';
echo	'</form>';#end form
if ($_SERVER['REQUEST_METHOD']=='POST')# checks for a button press
{
	$name=trim($_POST['name']);
	$code=trim($_POST['breed']);#sets variables as submited code
	$sql="insert into Dog values(DEFAULT, ?, ?)"; #the sql
	$stmt=$conn->prepare($sql);# preping the sql
        $stmt->execute(array($name, $code));	#executing the sql, dog added to database
}
?>
</body>
<footer>
<p align='center'> Michael Peterson Section 1</p>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11b.php">DOGs</a>
<br>
<a href="http://students.cs.niu.edu/~z1838929/assn11d.php">Add Visit</a>
</footer>

</html>
