<?php

$user_name = $_GET['user_name'];
$pdo = new PDO('mysql:host=localhost;dbname=caps_shop_mvc;charset=utf8', 'root', 'root');
$rq = $pdo->prepare("SELECT user_name FROM user WHERE user_name LIKE '%$user_name' ");
$rq->bindValue(':user_name', $user_name, PDO::PARAM_STR);
$rq->execute();
$result = $rq->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);