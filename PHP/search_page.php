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
      <link type="text/css" rel="stylesheet" href="../CSS/search_page.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>  
     <?php
     session_start();
     $name = $_SESSION['name'];
     ?>
         <div class="nav">
                <div class="logo">
                  <a href="PHP/search_page.php">
                      <img src="../Images/logo_main.JPG" style="height: 40px ; width: 40px"></a>
                  <p style="font-size:35px ; color: #ffffff; display:inline-block; position: absolute;">COLLEGE  BOOKSTORE</p>
                </div>
                <div class="nav-menu">
                    <!-- Space for navigation menu -->
                    <h4><?php echo $name; ?>
                    <a href="logout.php" class="button">Log Out</a></h4>
                </div>
            
         </div>
         <div class="sq_box">
                 <center><h1>Search In The College BookStore</h1></center>
         </div>  

         <div class="sq_box_d">
            <div class="search_bar">
                <input type="text" placeholder="Search" name="search" >
                <button type="submit"><i class="fa fa-search" style="color: black; background-color: #ffffff;"></i></button>
                <h3 style="display: inline-block; padding-left: 15px;">Search THE COLLEGE BOOKSTORE</h3>
                <a href="../upload.html"><div class="upload" style="margin-left:450px;">Upload</div></a>
            </div>
             
            <div class="search_result"  style="background-color: grey;">
                <?php
           $conn = mysqli_connect("localhost", "root", "", "bookshop");
             if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
             }
             $sql = "SELECT * FROM bookinfo";
             $result = $conn->query($sql);
             if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
              ?>
               <form method="get" action="PHP/view.php" >   
                <div class="book_result">
                    <a href="view.php?id=<?php echo $row["Id"]; ?>"><h1><?php echo $row["Title"]; ?></h1></a>
                    <div class="row">
                       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                         <a href="view.php?id=<?php echo $row["Id"]; ?>"><img src="../images/demo.jpg"></a>
                       </div>
                       <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <h4>RS: <?php echo $row["Price"] ?> /-</h4><br>
                        <p><?php echo $row["Description"]; ?></p>
                       </div>
                    </div>
                </div>
                </form>
                <?php 
                 }}else { echo "0 results"; }
                 $conn->close();
                ?>

               
            </div>
        </div>
        
 </body>
</html>