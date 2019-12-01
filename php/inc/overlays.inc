<div id="login" class="overlay">
                <div class="popup">
                    <span class=title>Login</span>
                    <!-- Button to close the popup  -->
                    <a class="close" href="#">&times;</a>
                    <div class="information">
                        <!-- Form for the user to submit their login information, through POST, as there is passwords  -->
                        <form action="php/login.php" method="POST" id="form" class="center">
                            <div>
                                <label id="error_ListL"></label>
                            </div>
                            <input type="text" id="usernameL" name="usernameL" class="popupText input" placeholder="Username">
                            <input type="password" id="passwordL" name="passwordL" class="popupText input" placeholder="Password">
                            <div>
                                <input type="submit" id="loginSubmit" class="center input">
                            </div>
                        </form>
                    </div>
                </div>
            </div>




<div id="register" class="overlay">
                <div class="popup">
                    <span class=title>Register</span>
                    <!-- Button to close the popup -->
                    <a class="close" href="#">&times;</a>
                    <div class="information">
                        <!-- Form to register for the site, uses POST due to passwords -->
                        <form action="php/register.php" method="POST" id="form2" class="center">
                            <div>
                                <label id="error_ListR"></label>
                            </div>
                            <span class="">Enter email</span>
                            <input type="email" id="emailR" name="emailR" class="popupText input" placeholder="Email">
                            <span class="">Choose a username</span>
                            <input type="text" id="usernameR" name="usernameR" class="popupText input" placeholder="Username">
                            <span class="">Enter a password</span>
                            <input type="password" id="passwordR" name="passwordR" class="popupText input" placeholder="Password">
                            <span class="">Confirm password</span>
                            <input type="password" id="passwordRC" name="passwordRC" class="popupText input"
                                placeholder="Confirm Password">
                            <div>
                                <input type="submit" id="registerSubmit" class="center input">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


<div id="NewLocation" class="overlay">
                <div class="popup">
                    <span class=title>Submit Location</span>
                    <!-- Cloce button for popup -->
                    <a class="close" href="#">&times;</a>
                    <div class="information">
                        <!-- Allows a user to submit a new item to the database  -->
                        <form action="php/submit.php" method="POST" id="form3" class="center">
                            <div>
                                <label id="error_ListS"></label>
                            </div>
                            <span class="">Restraunt Name</span>
                            <input type="text" id="RName" name="RName" class="popupText input" placeholder="Restraunt">
                            <span class="">Phone Number</span>
                            <input type="text" id="RPhone" name="RPhone" class="popupText input" placeholder="Phone Number">
                            <span class="">Address</span>
                            <input type="text" id="RAddress" name="RAddress" class="popupText input" placeholder="Address">
                            <span class="">Cost and Ratings</span>
                            <input type="text" id="RCost" name="RCost" class="popupText input" placeholder="Cost">
                            <input type="text" id="RRating" name="RRating" class="popupText input" placeholder="Stars">
                            <span class="">Restraunt latitude</span>
                            <input type="text" id="latitude" name="latitude" class="popupText input" placeholder="Latitude">
                            <span class="">Restraunt longitude</span>
                            <input type="text" id="longitude" name="longitude" class="popupText input" placeholder="Longitude">
                            <button type="button" id="locateSub" class="input"></button>
                            <span class="">Describe the Restraunt</span>
                            <textarea id="Desc" name="Desc" class="popupText input left" rows=10 cols=10 wrap="soft"
                                placeholder=""></textarea>
                            <input type="file" name="picture" id="imageUpload" accept="image/*" class="input fullWidth">
                            <div>
                                <input type="submit" id="submitLoc" class="center input">
                            </div>
                        </form>
                    </div>
                </div>
            </div>