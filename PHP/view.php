<html>
 <head>
      <meta name="viewport" content="width=device-width", initial-scale=1, shrink-to-fit=no>
      <meta name="author" content="Harsh Kumar Sharma">	
	  <meta name="description" content="BookShop For Second Hand books For College Level">	
	  <meta name="keywords" content="BookShop , Second Hand">
	  <meta charset="UTF-8">
      <title>ICEM Book Shop</title>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../CSS/view.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>  
         <div class="nav">
                <div class="logo">
                  <a href="#">
                      <img src="../Images/logo_main.JPG" style="height: 40px ; width: 40px"></a>
                  <a href="search_page.php"><p style="margin:0px; font-size:35px ; color: #ffffff; display:inline-block; position: absolute">COLLEGE BOOKSTORE</p>
                  </a>
                </div>
                <div class="nav-menu">
                    <!-- Space for navigation menu -->
                </div>
            
         </div>
         <div class="sq_box">
                 <center><h1>The College BookStore</h1></center>
         </div>  
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
          $id = $_GET["id"];
          $sql = "SELECT * FROM bookinfo WHERE `Id` = $id";
          $result = mysqli_query($conn , $sql);
          if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
         
          ?>

         <div class="sq_box_d">
            <div class="row" style="padding:20px 30px 10px 30px">
                <div class="col-lg-4" style="padding-top: 30px;">
                    <img src="../Images/demo.jpg" style="height:300px;width:400px; border-radius: 30px;">
                </div>

                <div class="col-lg-8">
                   <h1 style="padding-bottom: 20px;"><?php echo $row["Title"]; ?></h1>
                   <h2>Rs:-<?php echo $row["Price"]; ?> /-</h2>
                   <h3>Description</h3>
                   <p><?php echo $row["Description"]; ?></p>
                   <h3>Contact NO: <?php echo $row["Phone"]; ?></h3>
                </div>
            </div>
        </div>
           <?php } } ?>
        
 </body>
</html>