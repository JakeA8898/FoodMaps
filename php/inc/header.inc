<div class="head black">
    <a href="index.php" class="link"><span class="white headL">FoodMaps</span></a>
    <div class="headerEnd">
        <?php 
            session_start();
            if (isset($_SESSION['ID'])){
                echo "<div class='link'><span class='white'>Welcome {$_SESSION['USER']}</span></div>";
                echo "<a href='#NewLocation' class='link desktop'><span class='white headL'>Submit a location</span></a>";
                echo "<a href='php/logout.php' class='link'><span class='white headL'>Logout</span></a>";
                // echo "<form action='php/logout.php' class='link'><button type='submit' name='logout' class='white headL'>Logout</button></form>";
            }else{
                echo "<a href='#login' class='link'><span class='white headL'>Login</span></a>";
            // <a href="#register" class="link"><span class="white headL">Register</span></a>
            
        }
        ?>
        
    </div>

</div>
