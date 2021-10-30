<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
        <title>PHP Motors | Home</title>
    </head>
    <body>
        <header>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php';
            ?>
        </header>
        <nav>
            <?php
              //require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php';
              echo $navList;
            ?>
        </nav>
        <main>
            <h1>Welcome to PHP Motors</h1>

            <p id ="delorean"> <b>DMC Delorean </b>
                <br> 
                3 cup holders
                <br>
                Superman doors
                <br>
                Fuzzy dice !
            </p> 

            <img id="own" src="/phpmotors/images/site/own_today.png" alt="own today">

            <img id="car" src="/phpmotors/images/delorean.jpg" alt="delorean">
           
            <div id = bottom>
              
              <div id="upgrades1">
                <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="bumper">
               
              </div>
              <div id="upgrades2">
                <img src="/phpmotors/images//upgrades/flame.jpg" alt="flame">
              </div>
              <div id="upgrades3">
                <img src="/phpmotors/images/upgrades/flux-cap.png" alt="flux">
              </div>
              <div id="upgrades4">
                <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="hub">
              </div>

            <p id="reviews"> 
                 DMC Delorean Reviews 
                <br> 
                <br>
                "So fast it's almost like travelling in time." (4/5)
                <br>
                "Coolest ride on the road. " (4/5)
                <br>
                "I'm feeling Maarty Mcfly!" (5/5)
                <br>
                "The most futuristec ride of our day " (4.5/5)
                <br>
                "80's livin and I love it" (5/5)
            </p>
            </div>
            
            
        </main>
        <footer>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php';
            ?>
        </footer>
    </body>
</html>