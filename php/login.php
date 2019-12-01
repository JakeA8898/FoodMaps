<?php


session_start();

$servername = "localhost";
$username = "TestUser";
$passowrd = "TestPassword123!";
$dbname = "Foodmaps";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['usernameL']) && isset($_POST['passwordL'])){
    $sql = "Select * from users where USERNAME=?";
    $stmnt = $pdo->prepare($sql);
    try {
        $stmnt->execute([$_POST['usernameL']]);
    }catch (PDOException $e){
        echo $e ->getMessage();
    }

    $rows = $stmnt->fetchAll();

    if (count($rows) == 1){
        if (password_verify($_POST['passwordL'],$rows[0]['PWORD'])){
            $_SESSION['ID'] = $rows[0]['ID'];
            $_SESSION['USER'] = $rows[0]['USERNAME'];
            // echo $_SESSION['ID'];
            header("Location: ../index.php");
            exit();
        }else{  
            header("Location: ../results.php");
            exit();

        }
        
    }else{
        header("Location: ../singleResults.php");
    }
    
}else{
    header("Location: ../results.php");
}

?>