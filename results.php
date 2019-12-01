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
                <div id="map"></div>
                <!-- each resultbox is in its own div labelled result, which lays out the results -->
                <?php 
                    $servername = "localhost";
                    $username = "TestUser";
                    $passowrd = "TestPassword123!";
                    $dbname = "Foodmaps";
                    
                    $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$passowrd);
                    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $costs = 4;
                    $stars = 0;
                    if(isset($_GET['lat']) && isset($_GET['lng'])){
                        echo("<span class='hidden' id='userLAT'>{$_GET['lat']}</span>");
                        echo("<span class='hidden' id='userLNG'>{$_GET['lng']}</span>");
                        if(isset($_GET['costs'])){
                            $costs = $_GET['costs'];
                        }
                        if(isset($_GET['stars'])){
                            $stars = $_GET['stars'];
                        }
                        $sql = "SELECT * FROM locations WHERE COST < ? AND RATING > ?";
                        $stmt = $pdo->prepare($sql);
                        try{
                            $stmt -> execute([$costs, $stars]);
                        }catch (PDOException $e){
                            echo $e ->getMessage();
                        }
                        while ($row = $stmt->fetch()){
                            $goodDesc = str_replace("+", "", $row['DESCR']);
                            $goodDesc = str_replace("'", "", $goodDesc);
                            echo ("<div class='result'>
                                <div class='infoBox'>
                                    <a class='flex-grid-thirds' href='singleResults.php?id={$row['loc_ID']}'>
                                        <table class='resultTable'>
                                            <tr class='col'>
                                                <!-- header for the horizontal table labeling the name of the restaruant -->
                                                <td>Name:</td>
                                                <!-- table data labeling the actual name of the restaruant -->
                                                <td class='name_loc'>{$row['loc_NAME']}</td>
                                                <!-- the rest of the table is formatted in this exact way -->
                                            </tr>
                                            <tr class='col'>
                                                <td>Address:</td>
                                                <td>{$row['loc_Address']}</td>
                                            </tr>
                                            <tr class='col'>
                                                <td>Rating:</td>
                                                <td>{$row['RATING']}/5.0 Stars</td>
                                            </tr>
                                            <tr class='col'>
                                                <td>Cost:</td>
                                                <td>{$row['COST']}/4 $</td>
                                            </tr>
                                            <tr class='col'>
                                                <td>Phone Number:</td>
                                                <td>{$row['PHONE']}</td>
                                            </tr>
                                            

                                        </table>
                                    </a>
                                    <span class='descr hidden'>{$goodDesc}</span>
                                    <span class='lat hidden'>{$row['LAT']}</span>
                                    <span class='lng hidden'>{$row['LNG']}</span>
                                    <span class='name hidden'>{$row['loc_NAME']}</span>
                                    <span class='locID hidden'>{$row['loc_ID']}</span>
                                    
                                </div>
                                <!-- arranged in a flex box, these pictures aligns with the right side of the page and allows information to be placed to the left -->
                                <div class='resultPicture'>
                                    <img src='media/Keg_dining_room.jpg' alt='The Keg Dining Room' class='pic'>
                                </div>
                            </div>");
                        }
                    }
                    
                    

                ?>
                

            </div>

        </div>

        <!-- Next three divs(at this level) are for the three popup boxes. They are triggered by the buttons in the header -->
        <?php include 'php/inc/overlays.inc'?>
    </div>

    <!-- Footer which includes links to an about us, contact us and help page -->
    <?php include 'php/inc/footer.inc' ?>
    </div>
    <script type="text/javascript" src="Scripts/script.js"></script>
    <script type="text/javascript" src="Scripts/maps.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?APIKEYHERE&callback=initMapLarge">
    </script>
</body>

</html>