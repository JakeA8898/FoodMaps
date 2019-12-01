<?php

$servername = "localhost";
$username = "TestUser";
$passowrd = "TestPassword123!";
$dbname = "Foodmaps";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['emailR']) && isset($_POST['passwordR']) && isset($_POST['usernameR'])){
    if ($_POST['passwordR'] === $_POST['passwordRC']){
        $uid = uniqid();
        $sql = "INSERT INTO users (USERNAME, PWORD, EMAIL, ID) VALUES (?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt -> execute([$_POST['usernameR'], password_hash($_POST['passwordR'], PASSWORD_DEFAULT), $_POST['emailR'],$uid]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        header("Location: ../index.php");
    }
    
}else{
    header("Location: ../results.php");
}

?>