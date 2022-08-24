<html>
	
	<body>
<?php
$user = "root";
$pass = "";
$db = "employee";
$conn = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
if($conn)
echo "database connected";
$email=$_POST['e'];
$pass=$_POST['p'];
$sql="SELECT Password FROM emp_det WHERE Email='$email'";
$rt=mysqli_query($conn,$sql);
$ft=mysqli_fetch_assoc($rt);
if($ft['Password']==$pass){
    //call when you return, am unaware of what to put here next
    echo "log in";
    header("Location:det.php");
    exit; 
}
else{
    header("Location:home.html");
    exit;
}
?>
    </body>
</html>