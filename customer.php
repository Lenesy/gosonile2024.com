<?php
include('dbcn.php');
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.onlinegas.com</title>

        <!-- Image in a title -->
        <link rel="icon" type="image/png" href="images/gaslogo.png" style="border-radius: 100px;" >


    
        <!-- Bootstrap "CSS" Link -->
       <!-- Latest compiled and minified CSS -->
        <link href="bootsatrap\css\bootstrap.min.css" rel="stylesheet">
<style>
        .sidebar:hover{
            color: rgb(108, 31, 234);
        }
    </style>       
</head>
<body>
    <nav class="nav" style="padding: 0 10%; display: flex;justify-content: space-between;align-items: center;position: fixed;width: 100%;height: 100px;background-color: white ;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div style="display: flex;">
            
            <h1 style="color: rgba(0, 0, 0, 0.521);font-weight: 900;font-family: Segoe UI Black;font-size: 25px;"><img src="images/gaslogo.png" style="height: 100px;width: 110px;">Customer Dashboard</h1>
        </div>

        <!-- Button with log out information -->
        <h4>Welcome <?php echo $email ?></h4>
        <div class="dropdown">
         <img src="images/list.png" alt="" height="40px" width="60px" style="margin-left: 100px;" class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <ul class="dropdown-menu">
              <li><a class="dropdown-item hover" href="editcustomer.php">Edit</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </div>
   
    </nav> 

<div style="display: flex;gap: 15px;position: scroll;">

    <div style="height: 160vh;width: 14%;padding-top: 120px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">

        <a href="customer.php" style="list-style: none; color: black;text-decoration: none;position: fixed;"><p style="font-family: Segoe UI;" class="sidebar"><img src="images/house-solid.svg" height="30px" width="30px" style="padding: 8px;" alt="">Dashboard</p></a>
        <a href="editcustomer.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 30px;"><p style="font-family:Segoe UI;" class="sidebar"><img src="images/pen-to-square-solid.svg" height="30px" width="30px"  style="padding: 8px;" alt="">Edit</p></a>
        <a href="logout.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 60px;"><p style="font-family: Segoe UI;" class="sidebar"><img src="images/right-from-bracket-solid.svg" height="30px" width="30px" alt=""  style="padding: 8px;" >Logout</p></a>
    
    </div>

    <div style="height: 100vh; width: 86%;padding-top: 100px;flex:content;position:scroll;">

        <div class="table-responsive" style="margin-top: 20px;">
        <P style="text-align:center;font-size: 30px;font-weight: 400;">Cylinders Form</P>
            <table class="table table-hover">
            <thead class="table-dark" style="font-weight: 600;font-size: 15px;">

                    <td>No</td>
                    <td>Photo</td>
                    <td>Cylinder Name</td>
                    <td>Supplier Name</td>
                    <td>Contacts</td>
                    <td>Location</td>
                    <td>Status</td>
                    <td>Price</td>
                    <td>Action</td>
            </thead>
            <tbody>
            <?php

		$sql = "SELECT * FROM product";
		$result = mysqli_query($conn,$sql);

		if($result){
			$counter=1; //initialization for s/no
			while($row=mysqli_fetch_assoc($result)){
                $photo =  $row['photo'];
                $cylinder =   $row['cylinder'];
                $name =  $row['name'];
                $contact =  $row['contact'];
                $location =  $row['location'];
                $status =  $row['status'];
                $price =  $row['price'];

                echo ' <tr>
                <td style="align-content: center;font-family:Segoe UI;font-size:12px">'.$counter.'</td>
                <td style="align-content: center;font-family:Segoe UI;font-size:12px">'.$photo.'</td>
                <td style="align-content: center;font-family:Segoe UI;font-size:12px">'.$cylinder.'</td>
                <td style="align-content: center;font-family:Segoe UI;font-size:12px">'.$name.'</td>
                <td style="align-content: center;text-align: center;font-family:Segoe UI;font-size:12px">'.$contact.'</td>
                <td style="align-content: center;font-family:Segoe UI;font-size:12px">'. $location.'</td>
                <td style="align-content: center;font-family:Segoe UI;font-size:12px;"><button class="btn btn-success" style="border-radius: 40px;font-size:10px">'.$status .'</button></td>
                <td style="align-content: center;font-family:Segoe UI;font-size:12px;">'.$price.'</td>
                <td style="align-content: center;font-family:Segoe UI;font-size:12px">
                        <button class="btn btn-info" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Request</button>
                        <button class="btn btn-danger" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Decline</button>
                </td> 
            </tr>'; 
				$counter++;
			}
		}
		?>
            </tbody>
        </table>
        </div>
    </div>
</div>
            
        


    

    <footer style="background:linear-gradient(to top, rgb(255, 49, 3), rgba(255, 255, 255, 0.338)); width: 100%;padding: 20px 0;text-align: center;position: fixed;bottom: 0; left: 0;height: 60px;">
        <div class="social-media" style="text-align: center;gap: 50px;">
            <a href="https://www.facebook.com/BlyTz" target="_blank" class="social-icon"><img src="images/png/facebook.png" style="width: 20px;height: 20px;" alt="Facebook"></a>
            <a href="https://www.twitter.com" target="_blank" class="social-icon"><img src="images/png/twitter.png" style="width: 20px;height: 20px;" alt="Twitter"></a>
            <a href="https://www.instagram.com/samweli_mnyone" target="_blank" class="social-icon"><img src="images/png/instagram.png" style="width: 20px;height: 20px;" alt="Instagram"></a>
            <a href="https://www.linkedin.com/SamweliMnyone" target="_blank" class="social-icon"><img src="images/png/linkedin.png" style="width: 20px;height: 20px;" alt="LinkedIn"></a>
        </div>
        <i><p style="text-align: center;font-size:10px;font-weight: bold;color: antiquewhite;">&copy; 2024 Group1. All rights reserved.</p></i>
    </footer>
    <!-- Bootstrap Link for js -->
<script src="bootsatrap\js\bootstrap.bundle.min.js"></script>
</body>
</html>