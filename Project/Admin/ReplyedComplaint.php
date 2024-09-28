<?php 
include('../Assests/Connection/Connection.php');
ob_start();
include('Header.php');
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freshly::ReplyedComplaint.php</title>
<style>
       

        a {
            text-decoration: none;
            color: #1b5e20; /* Dark green for links */
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Slight shadow for modern look */
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #4caf50;
        }

        th {
            background-color: #4caf50; /* Green for table headers */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #e8f5e9; /* Light green for alternating rows */
        }

        td a {
            background-color: #4caf50;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
        }

        td a:hover {
            background-color: #388e3c;
        }

        td {
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f8f5;
            border-radius: 8px;
        }

        h2 {
            color: #1b5e20;
            text-align: center;
        }

    </style>
</head>

<body>

<div class="container">
    <a href="HomePage.php">Home</a>

    <h2>User Complaints - Responses</h2>
    <form id="form" name="form" method="post" action="">
        <table>
            <tr>
                <th>User Name</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
                <th>Reply</th>
            </tr>
            <?php
            $selcomplaint="select * from tbl_complaint p inner join tbl_newuser u on p.user_id=u.user_id where complaint_status=1";
            $row=$con->query($selcomplaint);
            while($data=$row->fetch_assoc())
            {
            ?>
            <tr>
                <td><?php echo $data["user_name"] ?></td>
                <td><?php echo $data["complaint_title"] ?></td>
                <td><?php echo $data["complaint_content"] ?></td>
                <td><?php echo $data["complaint_date"] ?></td>
                <td><?php echo $data["complaint_replay"] ?></td>
            </tr>
            <?php } ?>
        </table>

        <h2>Farmer Complaints - Responses</h2>
        <table>
            <tr>
                <th>Farmer Name</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php
            $selcomplaint="select * from tbl_complaint p inner join tbl_farmers f on p.farmer_id=f.farmer_id where complaint_status=1";
            $row=$con->query($selcomplaint);
            while($data=$row->fetch_assoc())
            {
            ?>
            <tr>
                <td><?php echo $data["farmer_name"] ?></td>
                <td><?php echo $data["complaint_title"] ?></td>
                <td><?php echo $data["complaint_content"] ?></td>
                <td><?php echo $data["complaint_date"] ?></td>
                <td><a href="Replay.php">REPLAY</a></td>
            </tr>
            <?php } ?>
        </table>
    </form>
</div>

</body>
</html>
<?php
include('Footer.php');
ob_flush();
?>
