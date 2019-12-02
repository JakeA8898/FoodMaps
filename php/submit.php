<?php
// sets db info 
$servername = "localhost";
$username = "TestUser";
$passowrd = "TestPassword123!";
$dbname = "Foodmaps";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// checks if certin var is checked 
if (isset($_POST['RName'])){
        $uid = uniqid();
        $sql = "INSERT INTO locations (loc_ID, loc_NAME, loc_Address,LAT,LNG,RATING,COST,PHONE,DESCR,RIMAGE) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        // executes the sql statement 
        try {
            $stmt -> execute([$uid, $_POST['RName'], $_POST['RAddress'], $_POST['latitude'], $_POST['longitude'], $_POST['RRating'], $_POST['RCost'],$_POST['RPhone'],$_POST['Desc'],$_FILES['picture']['name']]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        // uploads the image 
        if(isset($_FILES['picture'])){
            $targetDir = "../Media/";
            $targetFile = $targetDir . basename($_FILES['picture']['name']); 
            move_uploaded_file($_FILES['picture']['tmp_name'], $targetFile);  
        }
        header("Location: ../index.php");
    
    
}else{
    // header("Location: ../results.php");
}

?>