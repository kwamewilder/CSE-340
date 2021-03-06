<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
        <title>PHP Motors | Register</title>
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
                <form action="/phpmotors/accounts/index.php" method="post" >
                        <h1> Registration</h1>
                        <p> All fields required </p>

                        <div class="field">
                            <label> First name:
                            <br>
                            <input type="text" name="clientFirstname" id="fname" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?> >

                            </label>
                        </div>   
                        

                        <div class="field">
                            <label>Last name:
                            <br>
                            <input type="text" name="clientLastname" id="lname" <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?>  >
                            <br>
                            </label>
                        </div>

                        <div class="field">
                            <label>Email address: 
                            <br>
                            <input type="email" name="clientEmail" id="email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> >
                            <br>
                            </label>
                        </div>

                        <div class="field">
                        <label>Password:
                            <br>
                            <input type="password" name="clientPassword" id="password" >
                            <br>
                            </label>
                        </div>

                        <div>
                            <input type="submit" name="submit" class="field-button" id="regbtn" value="Register">           
                            <input type="hidden" name="action" value="register">
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