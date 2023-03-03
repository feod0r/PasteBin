<?php
include "connection.php";

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//$id = uniqid();
$id = generateRandomString(5);
$content = $_POST["content"];
$syntax = $_POST["syntax-highlighting"];
$ip = $_SERVER['REMOTE_ADDR'];

$stmt = $conn->prepare("INSERT INTO pastes (id, content, syntax, host) VALUES (:id, :content, :syntax, :ip)");
$stmt->bindParam(":id", $id);
$stmt->bindParam(":content", $content);
$stmt->bindParam(":syntax", $syntax);
$stmt->bindParam(":ip", $ip);
$stmt->execute();

header("Location: paste.php?id=" . $id);
?>
