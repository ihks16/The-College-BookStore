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
    $uname = $_POST["email"];
    $pass = $_POST["password"];
    $pwd = md5($pass);
    $sql = "SELECT * FROM `userinfo` WHERE `E-mail` = '$uname' AND `Password`='$pwd'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $name = $row["Name"];
            $email = $row["E-mail"];
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
        }
         echo '<script>window.location = "search_page.php"</script>';
        //header("Location : search_page.php");
    }
     else
     {
         echo '<script>alert("Username or Password Incorrect")</script>';  
          echo '<script>window.location = "../signIn.html"</script>';
     }





	/*$conn = mysqli_connect("localhost","root","","bookshop");
    if(isset($_POST["submit"])){
      $uname = $_POST["email"];
      $pass = $_POST["password"];
    }
    $sql="SELECT * FROM userinfo WHERE `E-mail` = '$uname' and `Password`= '$pass'";
	$result = $conn->query($sql);
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "<script>alert('Invalid Username or Password!')</script>";
	} else {
		//echo "You are successfully authenticated!";
        header("Location : search_page.php" );
	}
    */
   ob_end_flush();
?>

