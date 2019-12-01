<div class="sidebar">
                <div class="position">
                    <span class="white">Maximum budget:</span>
                </div>
                <!-- radio buttons with packages to make it look like cost symbols used in googles API -->
                <div class="radioSelector cost position">
                    <input type="radio" name="costs" id=cost4><label for="cost4"></label>
                    <input type="radio" name="costs" id=cost3><label for="cost3"></label>
                    <input type="radio" name="costs" id=cost2><label for="cost2"></label>
                    <input type="radio" name="costs" id=cost1><label for="cost1"></label>
                </div>
                <div class="description position">
                    <span class="white">Location:</span>
                </div>
                <!-- input tag to allow user to enter a location or address -->
                <div class="location position">
                    <input type="text" id="locateText" class="input text" placeholder="Enter postal code or city">
                    <button id="locate" class="input"></button>
                </div>
                <div class="description position">
                    <span class="white">Restaurant type:</span>
                </div>
                <!-- input tag to allow user to enter a restaruant type or food type -->
                <div class="type position">
                    <input type="text" id="restrauntType" class="input text" placeholder="">
                </div>
                <div class="description position">
                    <span class="white">Minimum rating:</span>
                </div>
                <!-- Radio buttons in combination with css styles and imported fonts to look to selectable stars for ratings -->
                <div class="radioSelector raiting position">
                    <input type="radio" name="stars" id=star5><label for="star5"></label>
                    <input type="radio" name="stars" id=star4><label for="star4"></label>
                    <input type="radio" name="stars" id=star3><label for="star3"></label>
                    <input type="radio" name="stars" id=star2><label for="star2"></label>
                    <input type="radio" name="stars" id=star1><label for="star1"></label>
                </div>
                <div class="description position">
                    <a href="" id="search" class="link input">Click to find food</a>
                </div>
                <div class="description position">
                    <span class="white">(Alternatively) Search by name:</span>
                </div>
                <!-- text field and search button to search for restaruant names -->
                <div class=" spacing position searchBar">
                    <input type="text" id="knownSearch" class="input text " placeholder="Enter where you want to eat">
                    <button id="buttonSearch" class="input">Find food</button>
                </div>
            </div>