<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
        <title>PHP Motors | Login</title>
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
            <div class="login">
                <?php
                     if (isset($message)) {
                        echo $message;
                     }
                ?>
                <form action="/phpmotors/accounts/index.php?action=Login" method="post">
                    <h1>Login</h1>
                    <br>
                    <div class="field">
                        <label for="name">Email:</label>
                        <br>
                        <input type="email" id="clientEmail" name="email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> required>
                    </div>
                     <br>
                    <div class="field">
                        <label for="password">Password:</label>
                        <br>
                        <input type="password" name="password" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                    </div>
                    <div>
                        <button class="field-button">Login</button>
                         <input type="hidden" name="action" value="Log">
                    </div>
                    <div>
                        <br>
                        <p>Haven't registered for account yet?, please click the link below to create one. </p>
                        <a class="field-button2" href='/phpmotors/accounts/index.php?action=register'>Create Account</a>
                    </div>
                </form>
            </div>
        </main>
       
        <footer>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php';
            ?>
        </footer>
    </body>
</html>