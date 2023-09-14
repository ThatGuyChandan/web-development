<?php
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['city'])) {
    echo "failure";
    exit;
}

$name = $_POST['name'];
if(!preg_match("/^[A-Z][a-zA-Z]*$/", $name)) {
    echo "failure";
    exit;
}

$email = $_POST['email'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/vitap\.ac\.in$/", $email)) {
    echo "failure";
    exit;
}

$phone = $_POST['phone'];
if(!preg_match("/^\d{10}$/", $phone)) {
    echo "failure";
    exit;
}

$city = $_POST['city'];
if(preg_match("/\d/", $city)) {
    echo "failure";
    exit;
}

$file = fopen("regno.txt", "a");
if(!$file) {
    echo "failure";
    exit;
}
$data = "$name\t$email\t$phone\t$city\n";
fwrite($file, $data);
fclose($file);

echo "success";
header("Location: thankyou.html");
exit;
?>