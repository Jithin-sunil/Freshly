<?php
include('../Assests/Connection/Connection.php');
if(isset($_POST["submit"]))
{
	$name=$_POST["txtname"];
	$gender=$_POST["gender"];
	$contact=$_POST["txtcontact"];
	$email=$_POST["txtemail"];
		$address=$_POST["txtaddress"];
	$password=$_POST["txtpassword"];
	$district=$_POST["seldistrict"];
    $place=$_POST["selplace"];
	
	$photo = $_FILES["filephoto"]["name"];
	$temp=$_FILES["filephoto"]["tmp_name"];
	move_uploaded_file($temp,'../Assests/Files/UserDocs/'.$photo);
	
	
	$proof = $_FILES["fileproof"]["name"];
	$temp=$_FILES["fileproof"]["tmp_name"];
	move_uploaded_file($temp,'../Assests/Files/UserDocs/'.$proof);
	
	
	$insQry="insert into tbl_newuser(user_name,user_gender,user_contact,user_email,user_address,user_password,place_id,user_photo,user_proof) values('$name','$gender','$contact','$email','$address','$password','$place','$photo','$proof')";
	
	if($con -> query($insQry))
	{
		echo "inserted";
	}
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FReshly: New User Registration</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 50%;
        margin: auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        margin-top: 50px;
    }

    h1 {
        text-align: center;
        color: #333333;
    }

    form {
        width: 100%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        padding: 10px;
        vertical-align: middle;
    }

    input[type="text"], input[type="password"], input[type="file"], select {
        width: calc(100% - 22px);
        padding: 8px;
        border: 1px solid #cccccc;
        border-radius: 4px;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    .valid {
        color: green;
    }

    .invalid {
        color: red;
    }

    .buttons {
        text-align: center;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin: 5px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[type="submit"][disabled] {
        background-color: #cccccc;
        cursor: not-allowed;
    }

    .error-message {
        color: red;
        font-size: 12px;
    }
</style>
</head>

<body>
<div class="container">
    <h1>New User Registration</h1>
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="txtname" id="txtname" required oninput="nameCheck(this.value)" />
                    <span id="namecheck" class="error-message"></span>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <label>
                        <input type="radio" name="gender" value="Male" /> Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Female" /> Female
                    </label>
                </td>
            </tr>
            <tr>
                <td>Contact</td>
                <td>
                    <input type="text" name="txtcontact" id="txtcontact" required oninput="contactCheck(this.value)" />
                    <span id="clength" class="error-message"></span>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="txtemail" id="txtemail" required onChange="emailCheck(this.value)" />
                    <span id="emailcheck" class="error-message"></span>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="txtaddress" id="txtaddress" required oninput="addressCheck(this.value)" />
                    <span id="addresscheck" class="error-message"></span>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="txtpassword" id="txtpassword" required oninput="passCheck(this.value)" />
                    <div id="passcheck">
                        <span id="uppercase" class="invalid">At least one uppercase letter</span><br />
                        <span id="lowercase" class="invalid">At least one lowercase letter</span><br />
                        <span id="number" class="invalid">At least one number</span><br />
                        <span id="length" class="invalid">Length of password should be between 6 to 16 characters</span><br />
                    </div>
                </td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>
                    <input type="password" name="txtconformpassword" id="txtconformpassword" required />
                </td>
            </tr>
            <tr>
                <td>District</td>
                <td>
                    <select name="seldistrict" id="seldistrict" required onchange="getPlace(this.value)">
                        <option value="--select--">--select--</option>
                        <?php
                            $selquery = "select * from tbl_district";
                            $result = $con->query($selquery);
                            while($data = $result->fetch_assoc()) {
                                echo "<option value='{$data['district_id']}'>{$data['district_name']}</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Place</td>
                <td>
                    <select name="selplace" id="selplace" required>
                        <option value="--select--">--select--</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>
                    <input type="file" name="filephoto" id="filephoto" required />
                </td>
            </tr>
            <tr>
                <td>Proof</td>
                <td>
                    <input type="file" name="fileproof" id="fileproof" required />
                </td>
            </tr>
            <tr class="buttons">
                <td colspan="2">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                    <input type="submit" name="cancel" id="cancel" value="Cancel" />
                </td>
            </tr>
        </table>
    </form>
</div>

<script src="../Assests/JQ/jQuery.js"></script>
<script>
    function getPlace(did) {
        $.ajax({
            url: "../Assests/Ajax/AjaxPlace.php?did=" + did,
            success: function(result) {
                $("#selplace").html(result);
            }
        });
    }

    function emailCheck(txtemail) {
        const submitButton = document.getElementById('submit');
        const isValidEmail = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test(txtemail);
        const emailCheckSpan = document.getElementById('emailcheck');

        if (isValidEmail) {
            $.ajax({
                url: "../Assests/Ajax/AjaxEmail.php?email=" + txtemail,
                success: function(result) {
                    if (result == "EXISTS") {
                        submitButton.setAttribute('disabled', 'true');
                        emailCheckSpan.textContent = 'Email already exists';
                    } else {
                        emailCheckSpan.textContent = '';
                    }
                }
            });
        } else {
            submitButton.setAttribute('disabled', 'true');
            emailCheckSpan.textContent = 'Invalid email format';
        }
    }

    function nameCheck(txtname) {
        const submitButton = document.getElementById('submit');
        const isValidName = /^[A-Z][a-zA-Z ]{1,}$/.test(txtname);
        const nameCheckSpan = document.getElementById('namecheck');

        if (isValidName) {
            nameCheckSpan.textContent = '';
        } else {
            nameCheckSpan.textContent = 'Invalid name format';
        }
    }

    function passCheck(txtpassword) {
    const submitButton = document.getElementById('submit');
    const uppercase = document.getElementById('uppercase');
    const lowercase = document.getElementById('lowercase');
    const number = document.getElementById('number');
    const length = document.getElementById('length');

    const uppercasePattern = /[A-Z]/;
    const lowercasePattern = /[a-z]/;
    const numberPattern = /[0-9]/;
    const lengthPattern = /^.{6,16}$/;

    if (lengthPattern.test(txtpassword)) {
        length.classList.add('valid');
        length.classList.remove('invalid');
    } else {
        length.classList.add('invalid');
        length.classList.remove('valid');
    }

    if (uppercasePattern.test(txtpassword)) {
        uppercase.classList.add('valid');
        uppercase.classList.remove('invalid');
    } else {
        uppercase.classList.add('invalid');
        uppercase.classList.remove('valid');
    }

    if (lowercasePattern.test(txtpassword)) {
        lowercase.classList.add('valid');
        lowercase.classList.remove('invalid');
    } else {
        lowercase.classList.add('invalid');
        lowercase.classList.remove('valid');
    }

    if (numberPattern.test(txtpassword)) {
        number.classList.add('valid');
        number.classList.remove('invalid');
    } else {
        number.classList.add('invalid');
        number.classList.remove('valid');
    }

    const allValid = lengthPattern.test(txtpassword) && uppercasePattern.test(txtpassword) && lowercasePattern.test(txtpassword) && numberPattern.test(txtpassword);
    if (allValid) {
        submitButton.removeAttribute('disabled');
    } else {
        submitButton.setAttribute('disabled', 'true');
    }
}


    function contactCheck(txtcontact) {
        const clength = document.getElementById('clength');
        const lengthPattern = /^\d{10}$/;

        if (lengthPattern.test(txtcontact)) {
            clength.classList.add('valid');
            clength.classList.remove('invalid');
        } else {
            clength.classList.remove('valid');
            clength.classList.add('invalid');
        }
    }

    function addressCheck(txtaddress) {
        const submitButton = document.getElementById('submit');
        const addressCheckSpan = document.getElementById('addresscheck');
        const isValidAddress = /^[a-zA-Z0-9\s,.-]{10,}$/.test(txtaddress);

        if (isValidAddress) {
            addressCheckSpan.textContent = '';
        } else {
            submitButton.setAttribute('disabled', 'true');
            addressCheckSpan.textContent = 'Invalid address format';
        }
    }
</script>
</body>
</html>
