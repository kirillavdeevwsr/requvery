










<?php





$login_name='';
$username='';
$email='';

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
echo $response;
