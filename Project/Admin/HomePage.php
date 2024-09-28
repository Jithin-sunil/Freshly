<?php
include('Header.php');
?>
        <div class="main-panel">
          <div class="content-wrapper">
          <?php

include('../Assests/Connection/Connection.php');

if(isset($_GET["delID"]))
{
	$user_id=$_GET["delID"];
	$delQry="delete from tbl_newuser where user_id=$user_id";
	if($con -> query($delQry))
	{
		echo"Deleted";		
		header("location:Newuser.php");
	}
}





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::UserList</title>
<style>
        /* Resetting some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
            display: inline-block;
        }

        a:hover {
            color: #0056b3;
        }

        /* Form Styling */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #008000;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        td {
            background-color: #f9f9f9;
            color: black;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        td img {
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        td a {
            color: #dc3545;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        td a:hover {
            color: #c82333;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            th, td {
                font-size: 14px;
                padding: 10px;
            }

            td img {
                width: 40px;
                height: 40px;
            }
        }

        @media (max-width: 480px) {
            th, td {
                font-size: 12px;
                padding: 8px;
            }

            td img {
                width: 35px;
                height: 35px;
            }

            a {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- <a href="HomePage.php">Home</a> -->

    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <th>SINo</th>
                <th>PlaceName</th>
                <th>Pincode</th>
                <th>District</th>
                <th>Photo</th>
                <th>Proof</th>
                <th>UserName</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            <?php
            $selquery="select * from tbl_newuser u inner join tbl_place p on u.place_id=p.place_id inner join  tbl_district d on p.district_id=d.district_id";
            $result=$con->query ($selquery);
            $i=0;
            while($data=$result->fetch_assoc())
            {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $data["place_name"] ?></td>
                    <td><?php echo $data["place_pincode"] ?></td>
                    <td><?php echo $data["district_name"] ?></td>
                    <td><img src="../Assests/Files/UserDocs/<?php echo $data["user_photo"] ?>" width="50" height="50" /></td>
                    <td><img src="../Assests/Files/UserDocs/<?php echo $data["user_proof"] ?>" width="50" height="50" /></td>
                    <td><?php echo $data["user_name"] ?></td>
                    <td><?php echo $data["user_gender"] ?></td>
                    <td><?php echo $data["user_contact"] ?></td>
                    <td><?php echo $data["user_email"] ?></td>
                    <td><a href="Newuser.php?delID=<?php echo $data["user_id"]?>">DELETE</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>

</body>
</html>

<?php


if(isset($_GET["rejID"]))
{
	$farmer_id=$_GET["rejID"];
	$rejQry="update  tbl_farmers set farmer_status='2'  where farmer_id=$farmer_id";
	if($con -> query($rejQry))
	{
		echo"Rejected";		
		header("location:FarmerAcceptedList.php");
	}
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::UserList</title>
</head>
<style>
        
        a {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #4caf50; /* Green */
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #4caf50; /* Green border */
        }
        th {
            background-color: #4caf50; /* Green header */
            color: white;
            padding: 10px;
            text-align: center;
        }
        td {
            padding: 10px;
            text-align: center;
            columns: black;
            color:black;
        }
        td img {
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        td a {
            color: #e60000; /* Red color for reject action */
            font-weight: bold;
            text-decoration: none;
            columns: black;
        }
        td a:hover {
            text-decoration: underline;
        }
        .btn-submit {
            background-color: #4caf50; /* Green button */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #45a049;
        }
    </style>

<body>



<div class="container">
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <th>SINo</th>
                <th>Place Name</th>
                <th>Pincode</th>
                <th>District</th>
                <th>Photo</th>
                <th>Proof</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $selquery = "select * from tbl_farmers u inner join tbl_place p on u.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where farmer_status='1'";
            $result = $con->query($selquery);
            $i = 0;
            while ($data = $result->fetch_assoc()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['place_name']; ?></td>
                <td><?php echo $data['place_pincode']; ?></td>
                <td><?php echo $data['district_name']; ?></td>
                <td><img src="../Assests/Files/FarmerDocs/<?php echo $data['farmer_photo']; ?>" width="50" height="50" /></td>
                <td><img src="../Assests/Files/FarmerDocs/<?php echo $data['farmer_proof']; ?>" width="50" height="50" /></td>
                <td><?php echo $data['farmer_name']; ?></td>
                <td><?php echo $data['farmer_address']; ?></td>
                <td><?php echo $data['farmer_contact']; ?></td>
                <td><?php echo $data['farmer_email']; ?></td>
                <td><a href="FarmerAcceptedList.php?rejID=<?php echo $data['farmer_id']; ?>">Reject</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
</div>

</body>
</html>





            <!-- <div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>Like what you see? Check out our premium version for more.</p>
                  <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                  <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div>
            </div> -->
            <!-- <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
                  <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
                  <button type="button" class="btn btn-link text-light py-0">3 Month</button>
                </div>
                <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                  <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Conversion</a>
                    </li>
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Completed</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Decreased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                  <h4 class="card-title mb-0">Recent Activity</h4>
                                  <div class="dropdown dropdown-arrow-none">
                                    <button class="btn p-0 text-dark dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="mdi mdi-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuIconButton1">
                                      <h6 class="dropdown-header">Settings</h6>
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3 col-sm-4 grid-margin  grid-margin-lg-0">
                                <div class="wrapper pb-5 border-bottom">
                                  <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                    <p class="mb-0 text-dark">Total Profit</p>
                                    <span class="text-success"><i class="mdi mdi-arrow-up"></i>2.95%</span>
                                  </div>
                                  <h3 class="mb-0 text-dark font-weight-bold">$ 92556</h3>
                                  <canvas id="total-profit"></canvas>
                                </div>
                                <div class="wrapper pt-5">
                                  <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                    <p class="mb-0 text-dark">Expenses</p>
                                    <span class="text-success"><i class="mdi mdi-arrow-up"></i>52.95%</span>
                                  </div>
                                  <h3 class="mb-4 text-dark font-weight-bold">$ 59565</h3>
                                  <canvas id="total-expences"></canvas>
                                </div>
                              </div>
                              <div class="col-lg-9 col-sm-8 grid-margin  grid-margin-lg-0">
                                <div class="pl-0 pl-lg-4 ">
                                  <div class="d-xl-flex justify-content-between align-items-center mb-2">
                                    <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">
                                      <h3 class="text-dark font-weight-bold mr-2 mb-0">Devices sales</h3>
                                      <h5 class="mb-0">( growth 62% )</h5>
                                    </div>
                                    <div class="d-lg-flex">
                                      <p class="mr-2 mb-0">Timezone:</p>
                                      <p class="text-dark font-weight-bold mb-0">GMT-0400 Eastern Delight Time</p>
                                    </div>
                                  </div>
                                  <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                                  <canvas id="device-sales"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4 grid-margin stretch-card">
                        <div class="card card-danger-gradient">
                          <div class="card-body mb-4">
                            <h4 class="card-title text-white">Account Retention</h4>
                            <canvas id="account-retension"></canvas>
                          </div>
                          <div class="card-body bg-white pt-4">
                            <div class="row pt-4">
                              <div class="col-sm-6">
                                <div class="text-center border-right border-md-0">
                                  <h4>Conversion</h4>
                                  <h1 class="text-dark font-weight-bold mb-md-3">$306</h1>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="text-center">
                                  <h4>Cancellation</h4>
                                  <h1 class="text-dark font-weight-bold">$1,520</h1>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-xl-flex justify-content-between mb-2">
                              <h4 class="card-title">Page views analytics</h4>
                              <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend"></div>
                            </div>
                            <canvas id="page-view-analytic"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php 
         include('Footer.php');
         ?>