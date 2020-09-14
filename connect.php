
<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manivannan";
$n=$_POST['name'];
$d=$_POST['dob'];
$p=$_POST['ph_number'];
$e=$_POST['email'];
$w=$_POST['password'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO student(name,dob,ph_number,email,password)
  VALUES ('$n','$d','$p','$e','$w')";
  $conn->exec($sql);
  echo "New record created successfully";
   }
 catch(PDOException $f) {
  echo $sql . "<br>" . $f->getMessage();
   }

$conn = null;
}
?>

