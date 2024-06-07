<?php
include("dbcn.php");
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['id'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];

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
<link href="bootsatrap/css/bootstrap.min.css" rel="stylesheet">
<style>
.sidebar:hover{
            color: rgb(108, 31, 234);
        }
    </style>         
</head>
<body>
    <nav class="nav" style="padding: 0 10%;display: flex;justify-content: space-between;align-items: center;position: fixed;width: 100%;height: 100px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div >
            
            <h1 style="color: rgba(0, 0, 0, 0.521);font-weight: 900;font-family: Segoe UI Black;font-size: 25px;"><img src="images/gaslogo.png" style="height: 100px;width: 110px;">Supplier Dashboard</h1>
        </div>

        <!-- Button with log out information -->
        <h5>Welcome <?php echo $firstname ?><?php echo " ";?><?php echo $lastname;?></h5>
        <div class="dropdown">
         <img src="images/list.png" alt="" height="40px" width="60px" style="margin-left: 100px;" class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </div>
   
    </nav> 



<div style="display: flex;gap: 15px;position: scroll;">

    <div style="height: 160vh;width: 14%;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;padding-top: 120px;">

    <a href="supplier.php" style="list-style: none; color: black;text-decoration: none;position: fixed;"><p style="font-family: Segoe UI;" class="sidebar"><img src="images/house-solid.svg" height="30px" width="30px" style="padding: 8px;" alt="">Dashboard</p></a>
        <a href="product.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 30px;"><p style="font-family:Segoe UI;" class="sidebar"><img src="images/pen-to-square-solid.svg" height="30px" width="30px"  style="padding: 8px;" alt="">Add Product</p></a>
        <a href="editsupplier.php?id=<?php echo $row['id'];?>" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 60px;"><p style="font-family:Segoe UI;" class="sidebar"><img src="images/pen-to-square-solid.svg" height="30px" width="30px"  style="padding: 8px;" alt="">Edit</p></a>
        <a href="logout.php" style="list-style: none; color: black;text-decoration: none;position: fixed;margin-top: 90px;"><p style="font-family: Segoe UI;" class="sidebar"><img src="images/right-from-bracket-solid.svg" height="30px" width="30px" alt=""  style="padding: 8px;" >Logout</p></a>
    
    </div>

    <div style="height: 100vh; width: 86%;padding-top: 100px;flex:content;position:scroll;">
        <div  style="margin-top: 20px;">



       

              <form class="form-horizontal" style="padding: 20px;" method="POST" >


              <div class="form-group">
               <div class="row" style="margin-bottom: 20px;">
               <label class="col-sm-3 control-label">Fisrt Name</label>
               <div class="col-sm-9">
               <input type="text" class="form-control" id="name" name="firstname" autocomplete="off" value="<?php echo htmlspecialchars($supplier['fistname']); ?>">
               </div>
               </div>
               </div>

               <div class="form-group">
                <div class="row" style="margin-bottom: 20px;">
                <label class="col-sm-3 control-label"> Last Name</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="name"  name="lastname" autocomplete="off" required="" value="<?php echo htmlspecialchars($supplier['lastname']); ?>">
                </div>
                </div>
                </div>

                <div class="form-group">
                  <div class="row" style="margin-bottom: 20px;">
                  <label class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                  <input type="email" class="form-control" id="name"  name="email" autocomplete="off" required="" value="<?php echo htmlspecialchars($supplier['email']); ?>">
                  </div>
                  </div>
                  </div>

                  <div class="form-group">
                    <div class="row" style="margin-bottom: 20px;">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="name"  name="address" autocomplete="off" required="" value="<?php echo htmlspecialchars($supplier['address']); ?>">
                    </div>
                    </div>
                    </div>

                    <div class="form-group">
                      <div class="row" style="margin-bottom: 20px;">
                      <label class="col-sm-3 control-label">Phone Number</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" id="name"  name="phonenumber" autocomplete="off" required="" value="<?php echo htmlspecialchars($supplier['phonenumber']); ?>">
                      </div>
                      </div>
                      </div>

                      
                    <div class="form-group">
                      <div class="row" style="margin-bottom: 20px;">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-9">
                      <input type="password" class="form-control" id="name"  name="password" autocomplete="off" required="" value="<?php echo htmlspecialchars($supplier['password']); ?>">
                      </div>
                      </div>
                      </div>     

               <button type="submit" name="update" value="update" class="btn btn-primary btn-flat m-b-30 m-t-30" style="background-color: red;">Update</button>
     

               </form>
              </div>
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
<?php

?>