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
  $name = $_POST["name"] ;
  $age = $_POST["age"];
  $email = $_POST["email"];
  $year = $_POST["year"];
  $dept = $_POST["department"];
  $pass = $_POST["password"];
  $pwd = md5($pass);
  }

  $sql = "INSERT INTO `userinfo`(`Name`, `Age`, `E-mail`, `Department`, `Year`, `Password`) VALUES ('$name' , '$age' , '$email' , '$dept' , '$year' , '$pwd') ";
  $result = mysqli_query($conn,$sql); 
  if ($result)
  { 
      echo '<script>alert("User Created Successfully")</script>';
      echo '<script>window.location = "../signIn.html"</script>'; 
  }
   else 
   {
    echo "Error : ".$sql;
    }

?>