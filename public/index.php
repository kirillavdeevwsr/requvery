<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
<div class="menu">
    <form method="post" name="form" style="width: 500px;" class="form">
        <div class="row">
            <div class="col">
                Username:
            </div>
            <div class="col">
                <input type="text" name="username">
            </div>
            <div class="w-100">

            </div>
            <div class="col">
                Login_name:
            </div>
            <div class="col">
                <input type="text" name="login_name">
            </div>
            <div class="w-100"></div>
            <div class="col">
                Email:
            </div>
            <div class="col">
                <input type="text" name="email">
            </div>
        </div>
        <div><input type="submit" class="button"></div>

    </form>
</div>


<?php


$login_name=$_POST['login_name'];
$username=$_POST['username'];
$email=$_POST['email'];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://localhost:3000/api/v1/admin/users",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => array('login_name' => $login_name,'username' => $username,'email' => $email),
    CURLOPT_HTTPHEADER => array(
        "Authorization: Basic RW1wdHlQZWFjZW1ha2VyOjIwMDMxMTEy"
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $curl;
?>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</html>