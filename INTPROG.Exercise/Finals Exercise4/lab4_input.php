<?php
$fake_json = '{"username":"admin","password":"1234"}';

$input = file_get_contents('php://input');

if (empty($input)) {
    $input = $fake_json;
}

$data = json_decode($input);

echo "Username: " . $data->username . "<br>";
echo "Password: " . $data->password;
?>
