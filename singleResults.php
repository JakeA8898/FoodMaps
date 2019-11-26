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

                <div id='map'></div>

                <!-- each resultbox is in its own div labelled result, which lays out the results -->
                <div class="result">
                    <div class="infoBox">
                        <div class="flex-grid-thirds">
                            <table class="restaurantInfo">
                                <!-- header for the vertical table labeling the information about the restaruant -->
                                <tr class="col">
                                    <th class="enlarge">About the Keg Steakhouse + Bar</th>
                                </tr>
                                <!-- the table data address in groups containing information of restaurant -->
                                <tr class="col">
                                    <td>Address: 1170 Upper James St, Hamilton, ON L9C 3B1 | Hours of operation:
                                        Monday-Sunday 4:00PM-11:00PM | Rating: 4.5/5.0 Stars | Cost: $$$ | Phone Number:
                                        (905)
                                        574-7880</td>
                                </tr>
                                <!-- next bit of table data labels the description of the restaruant -->
                                <tr class="col">
                                    <td>The Keg Steakhouse + Bar serves the finest cuts of succulent steak, aged for
                                        tenderness and grilled to perfection. Prime rib is a Keg specialty, slow
                                        roasted, hand carved and perfectly seasoned with special Keg spices. The
                                        restaurant also serves delicious seafood, memorable appetizers, crisp salads and
                                        decadent desserts</td>
                                </tr>
                                <!-- split into paragraphs for a cleaner design aspect -->
                                <tr class="col">
                                    <td>A casual ambiance and friendly, very knowledgeable staff are proud and reliable
                                        trademarks of The Keg Steakhouse + Bar. You'll find a truly comfortable and
                                        satisfying dining atmosphere accompanied by a fun and up-scale bar setting where
                                        guests can enjoy an excellent wine list, signature Keg martinis, and fresh
                                        squeezed juice cocktails.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- arranged in a flex box, this picture aligns with the right side of the page and allows information to be placed to the left -->
                    <div class="resultPicture">
                        <img src="media/Keg_dining_room.jpg" alt="The Keg location" class="pic">
                    </div>
                </div>

                <!-- next sections are all seperate info boxes for each review -->
                <div class="result">
                    <div class="infoBox">

                        <!-- organized in a table to allow for easier entries and better design aspect -->
                        <div class="flex-grid-thirds">
                            <table class="restaurantInfo">
                                <!-- vertical table header -->
                                <tr class="col">
                                    <th class="enlarge">Review by: JohnD - 5.0/5.0</th>
                                </tr>
                                <!-- review information left by customer -->
                                <tr class="col">
                                    <td>Excellent food, service, and ambience. Servers are very attentive and food
                                        arrives quickly.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- seperate info boxes for each review -->
                <div class="result">
                    <div class="infoBox">
                        <div class="flex-grid-thirds">
                            <table class="restaurantInfo">
                                <!-- vertical table header -->
                                <tr class="col">
                                    <th class="enlarge">Review by: Carly - 4.0/5.0</th>
                                </tr>
                                <!-- review information left by customer -->
                                <tr class="col">
                                    <td>The food was delicious and came out in a timely manner. We really appreciated
                                        that the service wasn't overbearing - we are the type of people that come to The
                                        Keg for a romantic dinner, so it ruins the mood if a server is asking if
                                        everything's okay every 10 minutes. So we were very pleased that wasn't the case
                                        in this instance, our server was excellent and gave us our privacy while also
                                        being efficient at her job. If I *had* to be nit-picky, we had made our
                                        reservation on September 7 (almost a month in advance), but our table was tucked
                                        in a corner beside the wall. It would have been nice to have been seated closer
                                        to the fireplace, but again, that's just me being nit-picky. Thanks again for a
                                        lovely anniversary dinner! :)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- seperate info boxes for each review -->
                <div class="result">
                    <div class="infoBox">
                        <div class="flex-grid-thirds">
                            <table class="restaurantInfo">
                                <!-- vertical table header -->
                                <tr class="col">
                                    <th class="enlarge">Review by: MorganP - 4.0/5.0</th>
                                </tr>
                                <!-- review information left by customer -->
                                <tr class="col">
                                    <td>The Keg is always Consistent...very Good, in every way - that is why we enjoy it
                                        and keep coming back !!</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- seperate info boxes for each review -->
                <div class="result">
                    <div class="infoBox">
                        <div class="flex-grid-thirds">
                            <table class="restaurantInfo">
                                <!-- vertical table header -->
                                <tr class="col">
                                    <th class="enlarge">Review by: VictorWho - 4.0/5.0</th>
                                </tr>
                                <!-- review information left by customer -->
                                <tr class="col">
                                    <td>Food and service was excellent. Had to wait 40 mins after appetizers for main
                                        course. Table of 6 youths beside us were pretty load throughout the course of my
                                        meal.
                                        Also noticed price increases.</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Next three divs(at this level) are for the three popup boxes. They are triggered by the buttons in the header -->
        <?php include 'php/inc/overlays.inc'?>
        
    </div>

    <!-- Footer which includes links to an about us, contact us and help page -->
    <?php include 'php/inc/footer.inc' ?>

    </footer>
    </div>
    <script type="text/javascript" src="Scripts/script.js"></script>
    <script type="text/javascript" src="Scripts/maps.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=APIKEYHERE&callback=initMapSmall">
    </script>
</body>

</html>