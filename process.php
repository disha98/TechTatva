  <?php
session_start();
$_SESSION['username'] = $_POST['username'];
$UID = $_POST['username'];
$pass = $_POST['passw'];

$connection = mysqli_connect("localhost", "root", "", "tut17");

$query = ("SELECT * FROM login WHERE UID='$UID' AND pass='$pass'");
$result = mysqli_query($connection,$query);

$row = mysqli_fetch_assoc($result);
 
if($row['UID']==$UID && $row['pass']==$pass)
{

	header("Location: homepage.php");
	
}
else
{

	 header("Location: tut17.php");
}


