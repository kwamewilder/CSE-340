<!DOCTYPE html>
<html lang="en-us">
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
        <nav class>
            <?php
              //require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/navigation.php';
              echo $navList;
            ?>
        </nav>
        <main>
            <h1>Vehicle Management</h1>
                <p> Welcome to the Vehicle management page. Please choose an option below: </p>
                <div class='veh'>
                    <ul>
                        <!--//Link to the controller that will trigger the delivery of the add classification view.-->
                        <li><a href='/phpmotors/vehicles/index.php?action=addClass' style="color: black" title="add classification">Add new Classification</a></li>
                        <!--Link to the controller that will trigger the delivery of the add vehicle view.-->
                        <li><a href="/phpmotors/vehicles/index.php?action=addVehicle" style="color: black" title="add a new vehicle" >Add new Vehicle</a> </li>
                        <?php
                        if (isset($message)) {
                            echo $message;
                        } if (isset($vehList)) {
                            echo $vehList;
                        }
                        ?>
                    </ul>
                </div>
        </main>
        <footer>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php';
            ?>
        </footer>
    </body>
</html>