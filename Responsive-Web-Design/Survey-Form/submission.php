<?php 
    # Variables
    if(isset($_GET['submit'])){

        $ingredients == '';

        if(!empty($_GET['coffee-ingredient-group'])) {    
            foreach($_GET['coffee-ingredient-group'] as $value) {
                if($ingredients=='') {
                    $ingredients == $value;
                } else {
                    $ingredients .= ', '.$value;
                }
            }
        }
    }
        $name = $_GET['user-name'];
        $email = $_GET['user-email'];
        $age = $_GET['user-age'];
        $list = $_GET['dropdown-list'];
        $days = $_GET['coffee-day-group'];
        $cups = $_GET['coffee-cup-group'];
        $tips = $_GET['tips'];
        $comments = $_GET['comments'];
    
?>

<DOCTYPE! html>
<html>
    <head>
        <style>
            body {
                background-color: #FFEBCD;
            }
        </style>
    </head>

    <body>
        
    
    <?php
    echo "Here is all the information you entered:<br>";
    echo "Your name is $name<br>";
    echo "Your email is $email<br>";
    echo "Your age is $age<br>";
    echo "You get your coffee from a $list<br>";
    echo "You drink coffee $days day(s) a week, $cups cup(s) a day<br>";
    echo "You use $ingredients in your coffee<br>";
    echo "Your tips for making coffee include: $tips <br>";
    echo "When asked for additional comments, you wrote: $comments<br>";
    echo "<br>";
    echo "Thanks for taking our coffee survey!"
    ?>

    </body>
</html>