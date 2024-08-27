<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::HomePage</title>
</head>
<body>
<table width="239" height="251" border="1">
  <tr>
   <td>Welcome</td>
   <tr>
    <td><a href="Changepassword.php">Changepassword</a></td>
  </tr>
  <tr>
  <td><a href="EditProfile.php">EditProfile</a></td>
  </tr>
  <tr>
    <td><a href="MyProfile.php">MyProfile</a></td>
  </tr>
  <tr>
    <td><a href="ViewProduct.php">ViewProduct</a></td>
  </tr>
  <tr>
    <td><a href="MyBooking.php">MyBooking</a></td>
  </tr>
   <tr>
    <td><a href="Complaint.php">Complaint</a></td>
  </tr>
  <tr>
  <td><a href="MyCart.php">MyCart</a></td>
  </tr>
   <tr>
  <td><a href="Payment.php">Payment</a></td>
  </tr>
</table>
</body>
</html> -->

<?php
include('SessionValidation.php');
?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Freshly Template">
    <meta name="keywords" content="Freshly, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freshly| User</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../Assests/Templates/newuser/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/newuser/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/newuser/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/newuser/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/newuser/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/newuser/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/newuser/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../Assests/Templates/newuser/css/style.css" type="text/css">
</head>

<body>
   
    
    <!-- Header Section Begin -->
    <!-- <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>freshlyproducts03@gmail.com</li>
                                <li>Paid only</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="../Assests/Templates/Farmer/img/Freshly.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="Homepage.php">Home</a></li>
                            <li><a href="MyProfile.php">MyProfile</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a href="ViewProduct.php">ViewProduct</a></li> -->
                            <li><a href="Complaint.php">Complaint</a></li>
                            <li> <a href="SearchProduct.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></a></i> <span></span></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li> -->
                            <li><a href="MyCart.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                            <li> <a href="../Logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg><span></span></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">item: <span>50.00INR</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->