<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
        <title>PHP Motors | Add Classification</title>
    </head>
    <body>
        <header>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php';
            ?>
        </header>
        <nav class>
            <?php
              echo $navList;
            ?>
        </nav>
        <main>
            <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                <h1>Add Classification</h1>
                <form action="/phpmotors/vehicles/index.php" method="post" >
                    <input type="text" name="classificationName" <?php if(isset($classificationName)){echo "value='$classificationName'";} ?> required />
                    <br>
                    <input type="submit" name="submit" class="field-button" id="regbtn" value="Add">           
                            <input type="hidden" name="action" value="addClass">
                </form>
           
        </main>
        <footer>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php';
            ?>
        </footer>
    </body>
</html>