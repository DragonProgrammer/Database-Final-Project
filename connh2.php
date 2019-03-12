<?PHP
#print "I am here";
$host = 'courses';
$user = 'z1838929';
$password = '1988Dec06';
$db = 'z1838929';
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
#echo 'in conn';
try
{
#	echo 'in try block';
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $e)
{
echo 'ERROR: ' .$e->getMessage();
}
#echo 'did this';
?>

