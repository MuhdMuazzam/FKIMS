<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FKIMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.2.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
body
{
  width:100vw;"
}

input[type=button] 
{
  background-color: RoyalBlue;
  border: 2px solid black;
  border-color: black;
  color: white; 
  border-radius: 5px;
  font-weight: bold;
  margin: auto; 
}

input[type=button]:hover 
{
  background-color: green;
  border: 2px solid black;
}

input[type=reset]
{
  background-color: green;
  border-color: white;
  height: 50px;
  width: 100px;
  color: white; 
  border-radius: 5px;
  font-weight: bold;
  font-size: 20px; 
  margin: auto; 
}

input[type=reset]:hover 
{
  background-color: MediumSpringGreen;
}

table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  text-align: center;
  padding:10px;
  

}
th
{
	
	background-color: #DCDCDC;
	
}

.btn{

	width:90px;


}
.search
{
	width: 500px;
	border: 2px solid black;
	font-size: 20px; 
	
}
.search:hover 
{
  background-color: #c1f0f0;
}

.dropbtn {
  background-color: #008B8B;
  width:80px;
  color: white;
  padding: 7px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border: 2px solid black;
  border-color: black;
  color: white; 
  border-radius: 5px;
  font-weight: bold;
  margin: auto; 
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color:#66CDAA;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

<script type="text/javascript"> 
	  
	  function deleteuser() 
	  {
				alert("Item Deleted from Database");
			
	  }
	  
</script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="../ManageLogin/Login.php"><span>f</span>KIMS</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
			<li><a class="active"href="../ManageStock/manageMain.php">Manage Store</a></li>
			<li class="dropdown"><a href="../ManageRequest/requestItem.php"><span>Request</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../ManageRequest/requestMain.php">Manage Request</a></li>
            </ul>
          </li>
			<li><a href="../ManageVendor/managevendor.php">Vendor</a></li>
			<li><a href="../ItemRegistration/ItemRegistration.php"><span>Register</span></a></li>
			<li><a href="../ManageDispense/DispenseItem.php">Dispense</a></li>
			<li><a href="../GenerateReport/reportMain.php">Report</a></li>
			<li><a style="font-weight:bold;font-style:italic;" href="../ManageLogin/Login.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
 <main id="main">
  
    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">FK INVENTORY MANAGEMENT SYSTEM </h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Manage Your Items Easily</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
	

  	  <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Manage Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
		  
 <center> 
 
	<?php

			$sname= "localhost";
			$unmae= "root";
			$password = "";

			$db_name = "fkims";

			$conn = mysqli_connect($sname, $unmae, $password, $db_name);

			if (!$conn) {
				echo "<br>";
				echo "Connection failed!";
			}

			if(isset($_POST['search']))
			{
				$valueToSearch = $_POST['valueToSearch'];
				// search in all table columns
				// using concat mysql function
				
				
				$query = "SELECT * FROM `itemlist` WHERE CONCAT(`vendorID`, `itemType`, `itemID`, `itemName`, `sectionID`) LIKE '%".$valueToSearch."%'";
				$search_result = filterTable($query);
				
			}
			 else {
				$query = "SELECT * FROM `itemlist` ";
				$search_result = filterTable($query);
			}

      $sort_option="";

      if(isset($_POST['sort']))
          {
            if($_POST['sort']=="AscPrice")
            {
              $sort_option= "ASC";
              $query = "SELECT * FROM itemlist ORDER BY itemPrice $sort_option";
              $search_result = filterTable($query);

            }
            elseif($_POST['sort']=="DescPrice")
            {
              $sort_option= "DESC";
              $query = "SELECT * FROM itemlist ORDER BY itemPrice $sort_option";
              $search_result = filterTable($query);
            }
            elseif($_POST['sort']=="AscAmount")
            {
              $sort_option= "ASC";
              $query = "SELECT * FROM itemlist ORDER BY itemBalance $sort_option";
              $search_result = filterTable($query);
            }
            elseif($_POST['sort']=="DescAmount")
            {
              $sort_option= "DESC";
              $query = "SELECT * FROM itemlist ORDER BY itemBalance $sort_option";
              $search_result = filterTable($query);
            }
          }

        
          

			// function to connect and execute the query
			function filterTable($query)
			{
				$connect = mysqli_connect("localhost", "root", "", "fkims");
				$filter_Result = mysqli_query($connect, $query);
				return $filter_Result;
			}

		?>
		
		<form action="manageMain.php" method="post">
            <input class="search" type="text" style="width:600px;" name="valueToSearch" placeholder="Value To Vendor ID, ItemType, Item ID, Item Name, Section ID">
            <input class="gap" type="submit" name="search" value="Search"><br><br>
			
			<h3 class="gap" style="font-size:25px";>ITEM LIST</h3>

      </center>
      <form action="manageMain.php" method="post" style="float:right;background-color:#33475b;">
            <div class="col-md-4">
                <div class="input-group mb-3">
                  <select name="sort" id="sort" class="form-control">
                    <option value="">--Select Option--</option>
                    <option value="AscPrice" name="AscPrice" id="AscPrice">Ascending Price</option>
                    <option value="DescPrice" name="DescPrice" id="DescPrice">Descending Price</option>
                    <option value="AscAmount" name="AscAmount" id="AscAmount">Ascending Amount</option>
                    <option value="DescAmount" name="DescAmount" id="DescAmount">Descending Amount</option>
    </select>
    <button type="submit" value="Sort" name="Sort" style="width:100px;background-color:#008B8B;color: white;font-weight: bold;" >Sort</button>
    </div>
    </div>
    </div>
    </form>

      <center>
            
            <table style="width:100%;">
                <tr>
                  <th style="text-align:center;"></th>
                    <th style="text-align:center;">Item No</th>
                    <th style="text-align:center;">Vendor</th>
                    <th style="text-align:center;width:10%;">Name</th>
                    <th style="text-align:center;">Type</th>
                    <th style="text-align:center;width:10%;">Detail</th>
                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">Amount</th>
                    <th style="text-align:center;">Location</th>
                    <th style="text-align:center;width:7%;">Price</th>
                    <th style="text-align:center;width:9%;">Date</th>
                    <th style="text-align:center;">Time</th>
                    <th style="text-align:center;width:20%;"></th>
                </tr>
       

				<!-- populate table from mysql database -->

                <?php 
                
                $i=1;
                while($row = mysqli_fetch_array($search_result)):
                        

					
					$uID = $row['itemID'];
				
				?>
                <tr>
          <td style="text-align:center;"><?php echo $i;?></td>
					<td style="text-align:center;"><?php echo $row['itemID'];?></td>	
					<td style="text-align:center;"><?php echo $row['vendorID'];?></td>
					<td style="text-align:center;"><?php echo $row['itemName'];?></td>
					<td style="text-align:center;"><?php echo $row['itemType'];?></td>
					<td style="text-align:center;"><?php echo $row['itemDesc'];?></td>
					<td style="text-align:center;"><?php echo $row['itemStatus'];?></td>
					<td style="text-align:center;"><?php echo $row['itemBalance'];?></td>
					<td style="text-align:center;"><?php echo $row['sectionID'];?></td>
					<td style="text-align:center;";>RM <?php echo $row['itemPrice'];?></td>
					<td style="text-align:center;"><?php echo $row['RegDate'];?></td>
					<td style="text-align:center;"><?php echo $row['RegTime'];?></td>
					
					<td style="text-align:center;">
					<a href="updateItem.php?GetID=<?php echo $uID ?>"><input type="button" value="Update"></a>
					</form>
					
					<a href="../../Controller/StockController/Delete.php?DeleteID=<?php echo $uID ?>"><input style="background-color:red;" type="button" name="Delete" value="Delete" onclick="deleteuser()"></a>
					<a href="../../View/ManageStock/Code.php?ID=<?php echo $uID ?>"><input style="background-color:LimeGreen;" type="button" name="Code" value="  Code  "></a>
					</td>
                </tr>
                <?php 
                  $i++;
                  endwhile;?>
            </table>
  

				
    
					
	  </center>   
   

    
    


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>genesys</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a>Genesys</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  
</body>

</html>