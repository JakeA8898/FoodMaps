<?php
session_start();
$servername = "localhost";
$username = "TestUser";
$passowrd = "TestPassword123!";
$dbname = "Foodmaps";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['reviewText'])){
        $uid = uniqid();
        $sql = "INSERT INTO reviews (RID, loc_ID, UserID, REVIEW, RATING) VALUES (?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt -> execute([$uid, $_POST['location'],$_SESSION['ID'], $_POST['reviewText'],$_POST['stars']]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        header("Location: ../singleResults.php?id={$_POST['location']}");
    
    
}else{
    header("Location: ../results.php");
}

?>