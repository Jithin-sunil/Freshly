<?php
include('../Assests/Connection/Connection.php');
session_start();
if(isset($_POST["btnLogin"]))
{
	$email = $_POST["txtEmail"];
	$password = $_POST["txtPassword"];
	$SelUser=" select * from tbl_newuser where user_email='$email' and user_password='$password' ";
	$user=$con->query($SelUser);
	
	$Seladmin=" select * from tbl_admin where admin_email='$email' and admin_password='$password' ";
	$admin=$con->query($Seladmin);
	
	$selfarmer=" select * from tbl_farmers where farmer_email='$email' and farmer_password='$password' ";
	$farmer=$con->query($selfarmer);
	
	 if ($datauser=$user->fetch_assoc())
	{
		$_SESSION["uid"]=$datauser["user_id"];
		$_SESSION["uname"]=$datauser["user_name"];
		header('Location:../User/Homepage.php');
	}
	else if($dataadmin=$admin->fetch_assoc())
	
	{
		$_SESSION["Aid"]=$dataadmin["admin_id"];
		$_SESSION["Aname"]=$dataadmin["admin_name"];
		header('Location:../Admin/Homepage.php');
		
	}
	else if($datafarmer=$farmer->fetch_assoc())
	{
		$_SESSION["fid"]=$datafarmer["farmer_id"];
		$_SESSION["fname"]=$datafarmer["farmer_name"];
		header('Location:../Farmer/Homepage.php');
	}
	else
	{
		
		?>
        <script>
		alert("Invalid Details")
		</script>
        <?php
		}
}
 
?>



<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly:Login</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table >
    <tr>
      <td width="128">Email</td>
      <td width="210"><label for="txtEmail"></label>
      <input type="text" name="txtEmail" id="txtEmail" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtPassword"></label>
      <input type="text" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnLogin" id="btnLogin" value="Login" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><a href="FarmerRegistration.php">NewFarmer</a>/<a href="NewUser.php">NewUser</a></td>
    </tr>
  </table>
</form>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Freshly|Login</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Freshly|Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email" name="txtEmail" autocomplete="off" id="Email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="txtPassword" id="password">
        <br>
        <br>

        <input type="submit" placeholder="Login" name="btnLogin" value="Login">
        <div class="social">
          <!-- <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div> -->
        </div>
    </form>
</body>
</html>
<!-- partial -->
  
</body>
</html>

