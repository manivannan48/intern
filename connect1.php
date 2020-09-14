

<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manivannan";
$e=$_POST['email'];
$w=$_POST['password'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from student where email='$e' && password='$w'";
  $res = $conn->query($sql);
   if ($res)
{                               
  echo 'logged succesfully';
}}
catch(PDOException $f) {
  echo $sql . "<br>" . $f->getMessage();
   }

$conn = null;
}
?>

