<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Import stylesheets, main.css for page styles, google fonts for site font, font-awesome for icons liek stars -->
    <link rel="stylesheet" type="text/css" href="Styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>FoodMaps</title>
    <script src="validate.js" defer></script>
</head>

<body>
    <div class="main">
        <!-- header bar, including links leading to login popup, register opoup and submit a location popup -->
        <?php 'php/inc/login.inc' ?>
        <?php include 'php/inc/header.inc' ?>
        <!-- The content contains all of the inputs on the page -->
        <div class="content off-black">
            <span class="instruction white">Don't know what to eat? Use the options below to find somewhere</span>
            <!-- This form takes all user results and submits them using the get method. It also takes them to the results page -->
            <form action="results.php" id="form4" method="get">
                <!-- Selectors are the options users can select when inputing their search options -->
                <div class="selectors">
                    <div class="center option">
                        <!-- Description classes are for instructional text -->
                        <div class="description">
                            <span class="instruction white">Show me restraunts that cost at most:</span>
                        </div>
                        <!-- Radio selectors, placed in reverse order for css purposes -->
                        <div class="radioSelector cost">
                            <!-- The label for each input allows us to insert special symbols -->
                            <input type="radio" name="costs" id=cost4 value="4"><label for="cost4"></label>
                            <input type="radio" name="costs" id=cost3 value="3"><label for="cost3"></label>
                            <input type="radio" name="costs" id=cost2 value="2"><label for="cost2"></label>
                            <input type="radio" name="costs" id=cost1 value="1"><label for="cost1"></label>
                        </div>

                    </div>
                    <div class="center option">
                        <div>
                            <label id="error_ListP" class="white"></label>
                        </div>
                        <!-- Gives user instruction -->
                        <div class="description">
                            <span class="instruction white">Show me restraunts in this location:</span>
                        </div>
                        <!-- Has a text input for user to input area and a button to find exact location -->
                        <div class=location>
                            <input type="text" id="locateText" class="input text" name="geoLocation"
                                placeholder="Enter postal code or city">
                            <button type="button" id="locate" class="input"></button>
                        </div>
                        <div id=LocEntry class="white">

                        </div>
                    </div>
                    <div class="type center option">
                        <!-- Gives user instruction -->
                        <div class="description">
                            <span class="instruction white">I want to eat:</span>
                            <span class="instruction white">(Fast food, Sit Down, Italian..)</span>
                        </div>
                        <!-- Text box for user to input their querry -->
                        <div class="type">
                            <input type="text" id="restrauntType" class="input text" name="TypeOfFood">
                        </div>

                    </div>
                    <div class="center option">
                        <!-- Instruction for user -->
                        <div class="description">
                            <span class="instruction white">Show me restraunts with a rating above or equal to:</span>
                        </div>
                        <!-- Radio selectors for stars, placed in reverse order for css purposes -->
                        <div class="radioSelector raiting">
                            <!-- The labels allow for special symbols forthe radio boxes  -->
                            <input type="radio" name="stars" id=star5 value="5"><label for="star5"></label>
                            <input type="radio" name="stars" id=star4 value="4"><label for="star4"></label>
                            <input type="radio" name="stars" id=star3 value="3"><label for="star3"></label>
                            <input type="radio" name="stars" id=star2 value="2"><label for="star2"></label>
                            <input type="radio" name="stars" id=star1 value="1"><label for="star1"></label>
                        </div>
                    </div>

                </div>
                <!-- This is the search button that takes the users information and submits the form -->
                <div class="search center">
                    <div class="searchBar">
                        <button type="submit" id="search" class="link input">Click to find food</button>
                    </div>
                </div>
            </form>

            <div class="spacing center">
                <div class="instruction white">
                    <span>Know where you want to eat? Search for it below</span>
                </div>
                <!-- Allows a user to search for a specific restraunt -->
                <div class="spacing searchBar">
                    <input type="text" id="knownSearch" class="input text " placeholder="Enter where you want to eat">
                    <button id="buttonSearch" class="input">Find food</button>
                </div>

            </div>
            <!-- Next three divs(at this level) are for the three popup boxes. They are triggered by the buttons in the header -->
            <?php include 'php/inc/overlays.inc'?>
        </div>

        <!-- Footer provides additional links for users -->
        

    </div>

    <script type="text/javascript" src="Scripts/script.js"></script>
</body>



</html>