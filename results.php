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
            <?php include 'php/inc/sidebar.inc' ?>

            <div class="resultPage">
                <div id="map"></div>
                <!-- each resultbox is in its own div labelled result, which lays out the results -->
                <div class="result">
                    <div class="infoBox">
                        <a class="flex-grid-thirds" href="singleResults.php">
                            <table class="resultTable">
                                <tr class="col">
                                    <!-- header for the horizontal table labeling the name of the restaruant -->
                                    <td>Name:</td>
                                    <!-- table data labeling the actual name of the restaruant -->
                                    <td>The Keg Steakhouse + Bar</td>
                                    <!-- the rest of the table is formatted in this exact way -->
                                </tr>
                                <tr class="col">
                                    <td>Address:</td>
                                    <td>1170 Upper James St, Hamilton, ON L9C 3B1</td>
                                </tr>
                                <tr class="col">
                                    <td>Hours of operation:</td>
                                    <td>Monday-Sunday 4:00PM-11:00PM</td>
                                </tr>
                                <tr class="col">
                                    <td>Rating:</td>
                                    <td>4.5/5.0 Stars</td>
                                </tr>
                                <tr class="col">
                                    <td>Cost:</td>
                                    <td>$$$</td>
                                </tr>
                                <tr class="col">
                                    <td>Phone Number:</td>
                                    <td>(905) 574-7880</td>
                                </tr>

                            </table>
                        </a>
                    </div>
                    <!-- arranged in a flex box, these pictures aligns with the right side of the page and allows information to be placed to the left -->
                    <div class="resultPicture">
                        <img src="media/Keg_dining_room.jpg" alt="The Keg Dining Room" class="pic">
                    </div>
                </div>

                <div class="result">
                    <div class="infoBox">
                        <a class="flex-grid-thirds" href="">
                            <table class="resultTable">
                                <tr class="col">
                                    <!-- header for the horizontal table labeling the name of the restaruant -->
                                    <td>Name:</td>
                                    <!-- table data labeling the actual name of the restaruant -->
                                    <td>Spring Sushi</td>
                                    <!-- the rest of the table is formatted in this exact way -->
                                </tr>
                                <tr class="col">
                                    <td>Address:</td>
                                    <td>1508 Upper James St, Hamilton, ON L9B 1K3</td>
                                </tr>
                                <tr class="col">
                                    <td>Hours of operation:</td>
                                    <td>Monday-Sunday 11:00AM-10:30PM</td>
                                </tr>
                                <tr class="col">
                                    <td>Rating:</td>
                                    <td>4.0/5.0 Stars</td>
                                </tr>
                                <tr class="col">
                                    <td>Cost:</td>
                                    <td>$$</td>
                                </tr>

                                <tr class="col">
                                    <td>Phone Number:</td>
                                    <td>(905) 383-6866</td>
                                </tr>
                            </table>
                        </a>
                    </div>
                    <!-- arranged in a flex box, these pictures aligns with the right side of the page and allows information to be placed to the left -->
                    <div class="resultPicture">
                        <img src="media/Spring_dining_room.jpg" alt="The Spring Sushi Dining Room" class="pic">
                    </div>
                </div>

                <div class="result">
                    <div class="infoBox">
                        <a class="flex-grid-thirds" href="">
                            <table class="resultTable">
                                <tr class="col">
                                    <!-- header for the horizontal table labeling the name of the restaruant -->
                                    <td>Name:</td>
                                    <!-- table data labeling the actual name of the restaruant -->
                                    <td>Turtle Jack's Upper James</td>
                                    <!-- the rest of the table is formatted in this exact way -->
                                </tr>
                                <tr class="col">
                                    <td>Address:</td>
                                    <td>1180 Upper James St, Hamilton, ON L9C 3B1</td>
                                </tr>
                                <tr class="col">
                                    <td>Hours of operation:</td>
                                    <td>Monday-Sunday 11:00AM-11:00PM</td>
                                </tr>
                                <tr class="col">
                                    <td>Rating:</td>
                                    <td>4.0/5.0 Stars</td>
                                </tr>
                                <tr class="col">
                                    <td>Cost:</td>
                                    <td>$$</td>
                                </tr>
                                <tr class="col">
                                    <td>Phone Number:</td>
                                    <td>(905) 389-6696</td>
                                </tr>
                            </table>
                        </a>
                    </div>
                    <!-- arranged in a flex box, these pictures aligns with the right side of the page and allows information to be placed to the left -->
                    <div class="resultPicture">
                        <img src="media/Turtle_dining_room.jpg" alt="The Turtle Jacks Room" class="pic">
                    </div>
                </div>

                <div class="result">
                    <div class="infoBox">
                        <a class="flex-grid-thirds" href="">
                            <table class="resultTable">
                                <tr class="col">
                                    <!-- header for the horizontal table labeling the name of the restaruant -->
                                    <td>Name:</td>
                                    <!-- table data labeling the actual name of the restaruant -->
                                    <td>Spring Grill House</td>
                                    <!-- the rest of the table is formatted in this exact way -->
                                </tr>
                                <tr class="col">
                                    <td>Address:</td>
                                    <td>1441 Upper James St, Hamilton, ON L9B 1K2</td>
                                </tr>
                                <tr class="col">
                                    <td>Hours of operation:</td>
                                    <td>Monday-Sunday 12:00PM-11:00PM</td>
                                </tr>
                                <tr class="col">
                                    <td>Rating:</td>
                                    <td>4.5/5.0 Stars</td>
                                </tr>
                                <tr class="col">
                                    <td>Cost:</td>
                                    <td>$$</td>
                                </tr>
                                <tr class="col">
                                    <td>Phone Number:</td>
                                    <td>(905) 383-6868</td>
                                </tr>
                            </table>
                        </a>
                    </div>
                    <!-- arranged in a flex box, these pictures aligns with the right side of the page and allows information to be placed to the left -->
                    <div class="resultPicture">
                        <img src="media/Grill_dining_room.jpg" alt="The Spring Grill Dining Room" class="pic">
                    </div>
                </div>

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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=APIKEYHERE&callback=initMapLarge">
    </script>
</body>

</html>