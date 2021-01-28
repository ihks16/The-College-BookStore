<?php
$servername = "localhost";
$username = "root";
$password = "" ;
$database = "bookshop";
$conn = new mysqli($servername, $username, $password , $database);

if (mysqli_connect_errno()) 
              {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  exit();
              }
  if(isset($_POST["submit"])){
  $title = $_POST["title"] ;
  $price = $_POST["price"];
  $description = $_POST["description"];
  $phone = $_POST["phone"];
  }
  session_start();
     $email = $_SESSION['email'];
 
  $sql = "INSERT INTO `bookinfo`(`Title`, `Price`, `Description`,`E-mail`,`Phone`)VALUES ('$title','$price','$description','$email','$phone') ";
  $qw = $conn->query($sql); 
  /* $stmtinsert = $conn->prepare($sql);
  $names = array($name,$email,$age,$dept,$year,$password);
  $result = $stmtinsert->execute($names);
  if($result)
  {
      echo "Successfully Saved ";
  }
   else
   {
    echo "error occured ";
   } */
   
  echo '<script>alert("Your Books are Uploded")</script>';
  echo '<script>window.location="search_page.php"</script>';
  //header("Location: search_page.php");
?>