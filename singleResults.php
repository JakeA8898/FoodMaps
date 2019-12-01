<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- import stylesheets, main.css for page tyles, google fonts for site font, font-awesome for icons like stars -->
    <link rel="stylesheet" type="text/css" href="Styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Search Results</title>
    <script src="validate.js" defer></script>
</head>

<body>
    <div class="main">
        <!-- Header bar which includes links leading to login popup, register popup, and submit a location popup -->
        <?php include 'php/inc/header.inc' ?>
        <!-- Results section relating to the side navigation bar -->
        <div class="results off-black">
        <!-- ?php include 'php/inc/sidebar.inc' ?> -->

            <div class="resultPage">

                <div id='map'></div>

                <!-- each resultbox is in its own div labelled result, which lays out the results -->
                <?php
                    $servername = "localhost";
                    $username = "TestUser";
                    $passowrd = "TestPassword123!";
                    $dbname = "Foodmaps";
                    
                    $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
                    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    if(isset($_GET['id'])){
                        
                        $sql = "SELECT * FROM locations WHERE loc_ID = ?";
                        $stmt = $pdo->prepare($sql);
                        try{
                            $stmt -> execute([$_GET['id']]);
                        }catch (PDOException $e){
                            echo $e ->getMessage();
                        }

                        $rows = $stmt->fetchAll();
                        
                        if(count($rows) == 1){
                            $goodDesc = str_replace("+", "", $rows[0]['DESCR']);
                            $goodDesc = str_replace("'", "", $goodDesc);
                            echo("<span class='hidden' id='userLAT'>{$rows[0]['LAT']}</span>");
                            echo("<span class='hidden' id='userLNG'>{$rows[0]['LNG']}</span>");
                            echo ("<div class='result'>
                                        <div class='infoBox'>
                                            <div class='flex-grid-thirds'>
                                                <table class='restaurantInfo'>
                                                    <!-- header for the vertical table labeling the information about the restaruant -->
                                                    <tr class='col'>
                                                        <th class='enlarge'>About {$rows[0]['loc_NAME']}</th>
                                                    </tr>
                                                    <!-- the table data address in groups containing information of restaurant -->
                                                    <tr class='col'>
                                                        <td>Address: {$rows[0]['loc_Address']} |  Rating: {$rows[0]['RATING']}/5 Stars | Cost: {$rows[0]['COST']}/4 $ | Phone Number:
                                                            {$rows[0]['PHONE']}</td>
                                                    </tr>
                                                    <!-- next bit of table data labels the description of the restaruant -->
                                                    <tr class='col'>
                                                        <td>{$goodDesc}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <span class='descr hidden'>{$rows[0]['DESCR']}</span>
                                        <span class='lat hidden'>{$rows[0]['LAT']}</span>
                                        <span class='lng hidden'>{$rows[0]['LNG']}</span>
                                        <span class='name hidden'>{$rows[0]['loc_NAME']}</span>
                                        <span class='locID hidden'>{$rows[0]['loc_ID']}</span>
                                        <!-- arranged in a flex box, this picture aligns with the right side of the page and allows information to be placed to the left -->
                                        <div class='resultPicture'>
                                            <img src='media/{$rows[0]['RIMAGE']}' alt='Unable to load' class='pic'>
                                        </div>
                                    </div>");
                        
                        }else{
                            echo("{$_GET['id']}");
                        } 
                    }
                ?>
                
                <?php   
                    if(isset($_SESSION['ID'])){
                        echo("<div class='result'>
                        <div class='infoBox'>
    
                            <!-- organized in a table to allow for easier entries and better design aspect -->
                            <div class='flex-grid-thirds'>
                                <form action='php/submitReview.php' id='reviewForm' method='POST' class='restaurantInfo'>
                                    <!-- vertical table header -->
                                    <div class='col review'>
                                        <span class='enlarge'>Enter a review here</span> 
                                    </div>
                                    <div class='col'>
                                        <textarea class='reviewtext' id='review' name='reviewText' rows='10'  placeholder='Enter review here'></textarea>
                                    </div>
                                    <div class='radioSelector raiting'>
                                        <!-- The labels allow for special symbols forthe radio boxes  -->
                                        <input type='radio' name='stars' id=starR5 value='5'><label for='starR5'></label>
                                        <input type='radio' name='stars' id=starR4 value='4'><label for='starR4'></label>
                                        <input type='radio' name='stars' id=starR3 value='3'><label for='starR3'></label>
                                        <input type='radio' name='stars' id=starR2 value='2'><label for='starR2'></label>
                                        <input type='radio' name='stars' id=starR1 value='1' checked><label for='starR1'></label>
                                    </div>
                                    <input type='text' class='hidden' name='location' value={$_GET['id']}>

    
                                    <div class='review'>
                                        <input type='submit' id='submitReview' class='center input'>
                                    </div>
    
                                </form>
                            </div>
                        </div>
                    </div>");
                    }
                ?>

                
                <?php

                    $servername = "localhost";
                    $username = "TestUser";
                    $passowrd = "TestPassword123!";
                    $dbname = "Foodmaps";

                    $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
                    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    
                        
                        $sql = "SELECT * FROM reviews WHERE loc_ID = ?";
                        $stmt = $pdo->prepare($sql);
                        try{
                            $stmt -> execute([$_GET['id']]);
                        }catch (PDOException $e){
                            echo $e ->getMessage();
                        }

                        
                        

                        while($row = $stmt -> fetch()){
                            $sql = "SELECT USERNAME FROM users WHERE ID=?";
                            $stmt2 = $pdo->prepare($sql);
                            try{
                                $stmt2 -> execute([$row['UserID']]);
                            }catch (PDOException $e){
                                echo $e ->getMessage();
                            }
                            $uid = $stmt2->fetch();
                            echo("<div class='result'>
                            <div class='infoBox'>
        
                                <!-- organized in a table to allow for easier entries and better design aspect -->
                                <div class='flex-grid-thirds'>
                                    <table class='restaurantInfo'>
                                        <!-- vertical table header -->
                                        <tr class='col'>
                                            <th class='enlarge'>Review by: {$uid['USERNAME']} - {$row['RATING']}/5</th>
                                        </tr>
                                        <!-- review information left by customer -->
                                        <tr class='col'>
                                            <td>{$row['REVIEW']}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>");
                        }


                ?>
                

                <!-- next sections are all seperate info boxes for each review -->
                

            </div>

        </div>

        <!-- Next three divs(at this level) are for the three popup boxes. They are triggered by the buttons in the header -->
        <?php include 'php/inc/overlays.inc'?>
        
    </div>
                        
    <!-- Footer which includes links to an about us, contact us and help page -->
    <footer>
        <?php include 'php/inc/footer.inc' ?>

    </footer>
    </div>
    <script type="text/javascript" src="Scripts/script.js"></script>
    <script type="text/javascript" src="Scripts/maps.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBX-I1xmNBFJNXjbC4-uoH_LddM_3whiUY&callback=initMapSmall">
    </script>
</body>

</html>