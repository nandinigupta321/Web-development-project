<html>
	<head>
	<meta http-equiv = "refresh" content = "0.1; url = home.html" />
	</head>
	<body>
<?php
$user = "root";
$pass = "";
$db = "employee";

$conn = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
if($conn)
echo "database connected";
$Name = $_POST['name'];
$Password = $_POST['pass'];
$Mail = $_POST['mail'];
$C_pass = $_POST['pass1'];

if($Password==$C_pass){
$sql = "INSERT INTO emp_det VALUES ('$Name', '$Mail', '$Password')";

// insert in database 
$rs = mysqli_query($conn, $sql);
if($rs)
{
	echo "Contact Records Inserted";
    
    header("Location:home.html");
    exit;
}
}
mysqli_close($conn);
?>

	</body>
</html>