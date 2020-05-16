<DOCTYPE! html>
<html>
    <head>

    </head>
    <body>
        <div>
        <?php 
            $name = $_POST['user-name'];
            $email = $_POST['user-email'];
            $age = $_POST['user-age'];

            echo "Your name is $name" ; 
            echo("Your email is $email");
            echo "Your age is $age";
         
        ?>
        </div>
    </body>

</html>