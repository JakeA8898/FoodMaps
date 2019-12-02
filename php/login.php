<?php

// starts a users session 
session_start();

// sets connection information for the database 
$servername = "localhost";
$username = "TestUser";
$passowrd = "TestPassword123!";
$dbname = "Foodmaps";

// sets up the data object to access the db 

$pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// checks if variables are set 
if (isset($_POST['usernameL']) && isset($_POST['passwordL'])){
    // sets up the sql query 
    $sql = "Select * from users where USERNAME=?";
    $stmnt = $pdo->prepare($sql);
    // attempts to executes the query  
    try {
        $stmnt->execute([$_POST['usernameL']]);
    }catch (PDOException $e){
        echo $e ->getMessage();
    }

    $rows = $stmnt->fetchAll();

    if (count($rows) == 1){
        // checks of the password matches 
        if (password_verify($_POST['passwordL'],$rows[0]['PWORD'])){
            // if so, logs user in to the system 
            $_SESSION['ID'] = $rows[0]['ID'];
            $_SESSION['USER'] = $rows[0]['USERNAME'];
            header("Location: ../index.php");
            exit();
        }else{  
            header("Location: ../index.php");
            exit();

        }
        
    }else{
        header("Location: ../index.php");
    }
    
}else{
    header("Location: ../index.php");
}

?>