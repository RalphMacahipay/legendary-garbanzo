<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
    $username = $_POST['username'];
    $dish = $_POST['dish'];
    $color = isset($_POST['color']) ? $_POST['color'] : null;


    if(isset($username)){
        if(isset(  $dish) and isset($color)){
            echo "Thanks for your selection"." ".$username."<br>"."You really enjoy"." "
            .$dish." "."<br>- especially with a nice"." ".$_POST['color']." "."wine";
        }else{
            echo "Incomplete data please try again";
        }
        }
   
    ?>
</body>
</html>