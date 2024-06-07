<?php
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
    <nav class="nav" style="padding: 0 10%;display: flex;justify-content: space-between;align-items: center;position: fixed;width: 100%;height: 100px;background-color: white ;">
        <div >
            
            <h1 style="color: rgba(0, 0, 0, 0.521);font-weight: 900;font-family: Segoe UI Black;font-size: 25px;"><img src="images/gaslogo.png" style="height: 100px;width: 110px;">Supplier Dashboard</h1>
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

    <div style="height: 160vh;width: 14%;background-color: rgb(243, 243, 236);padding-top: 120px;">

        <a href="supplier.php" style="list-style: none; color: black;text-decoration: none;position: fixed;"><p style="font-family: Segoe UI;" class="sidebar"><img src="images/house-solid.svg" height="30px" width="30px" style="padding: 8px;" alt="">Dashboard</p></a>
        <a href="editsupplier.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 30px;"><p style="font-family:Segoe UI;" class="sidebar"><img src="images/pen-to-square-solid.svg" height="30px" width="30px"  style="padding: 8px;" alt="">Manage Customer</p></a>
        <a href="login.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 60px;"><p style="font-family: Segoe UI;" class="sidebar"><img src="images/right-from-bracket-solid.svg" height="30px" width="30px" alt=""  style="padding: 8px;" >Add Customer</p></a>
        <a href="editcustomer.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 90px;"><p style="font-family:Segoe UI;" class="sidebar"><img src="images/pen-to-square-solid.svg" height="30px" width="30px"  style="padding: 8px;" alt="">Manage Cylinder</p></a>
        <a href="login.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 120px;"><p style="font-family: Segoe UI;" class="sidebar"><img src="images/right-from-bracket-solid.svg" height="30px" width="30px" alt=""  style="padding: 8px;" >Add Cylinder</p></a>
        <a href="editsupplier.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 150px;"><p style="font-family:Segoe UI;" class="sidebar"><img src="images/pen-to-square-solid.svg" height="30px" width="30px"  style="padding: 8px;" alt="">Edit</p></a>
        <a href="logout.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 180px;"><p style="font-family: Segoe UI;" class="sidebar"><img src="images/right-from-bracket-solid.svg" height="30px" width="30px" alt=""  style="padding: 8px;" >Logout</p></a>
    
    
    </div>

    <div style="height: 100vh; width: 86%;padding-top: 100px;flex:content;position:scroll;">
        <div>
            <div class="container text-center" style="margin-top: 30px;">

                <div class="row" style="gap: 50px;">
                  <div class="col" style="background-color: rgba(14, 235, 6, 0.648);border-radius: 14px;text-align: center;font-weight: 900;color:rgb(0, 0, 0) ;padding: 20px;height: 100px;">
                    <img src="images/gas-cylinder.png" height="50px" width="50px" alt="">Total Cylinder: 6
                  </div>
                  <div class="col" style="background-color: rgba(6, 27, 222, 0.717);border-radius: 14px;text-align: center;font-weight: 900;color:rgb(0, 0, 0) ;padding: 20px;height: 100px;">
                    <img src="images/convenience.png" height="50px" width="50px" alt="">Number of Supplier: 10
                  </div>
                  <div class="col" style="background-color: rgba(244, 0, 0, 0.717);border-radius: 14px;text-align: center;font-weight: 900;color:rgb(0, 0, 0) ;padding: 20px;height: 100px;">
                    <img src="images/calendar.png" height="50px" width="50px" alt="">Your booking: 8
                  </div>
                </div>
              </div>
        </div>

        <div class="table-responsive" style="margin-top: 20px;">
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
                <tr>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">1</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px"><img src="images/ORYX4FT.png" height="90px"width="90px" alt=""></td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">ORYX GAS</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">Mr Obadia  Henry</td>
                    <td style="align-content: center;text-align: center;font-family:Segoe UI;font-size:12px">+255626340599</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">Mzumbe Changarawe</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px;"><button class="btn btn-success" style="border-radius: 40px;">Available</button></td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px;">Tsh 25,000/=</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">
                            <button class="btn btn-info" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Request</button>
                            <button class="btn btn-danger" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Decline</button>
                    </td> 
                </tr>

                <tr>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">2</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px"><img src="images/MANJIS23.png" height="90px"width="90px" alt=""></td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">ORYX GAS</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">Mr Obadia  Henry</td>
                    <td style="align-content: center;text-align: center;font-family:Segoe UI;font-size:12px">+255626340599</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">Mzumbe Changarawe</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px;"><button class="btn btn-success" style="border-radius: 40px;">Available</button></td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px;">Tsh 25,000/=</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">
                            <button class="btn btn-info" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Request</button>
                            <button class="btn btn-danger" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Decline</button>
                    </td> 
                </tr>

                <tr>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">3</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px"><img src="images/ORYX4FT.png" height="90px"width="90px" alt=""></td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">ORYX GAS</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">Mr Obadia  Henry</td>
                    <td style="align-content: center;text-align: center;font-family:Segoe UI;font-size:12px">+255626340599</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">Mzumbe Changarawe</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px;"><button class="btn btn-success" style="border-radius: 40px;">Available</button></td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px;">Tsh 25,000/=</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">
                            <button class="btn btn-info" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Request</button>
                            <button class="btn btn-danger" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Decline</button>
                    </td> 
                </tr>

                <tr>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">4</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px"><img src="images/MANJIS23.png" height="90px"width="90px" alt=""></td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">ORYX GAS</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">Mr Obadia  Henry</td>
                    <td style="align-content: center;text-align: center;font-family:Segoe UI;font-size:12px">+255626340599</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">Mzumbe Changarawe</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px;"><button class="btn btn-success" style="border-radius: 40px;">Available</button></td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px;">Tsh 25,000/=</td>
                    <td style="align-content: center;font-family:Segoe UI;font-size:12px">
                            <button class="btn btn-info" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Request</button>
                            <button class="btn btn-danger" style="padding: 3px; font-size: 12px;color: black;width: 50px;">Decline</button>
                    </td> 
                </tr>

   

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>