<?php
session_start();


 if(isset($_SESSION['visitCount'])){
     if ($_SESSION['visitCount'] == 4){
        echo "<h1>Wow!</h1> You sure come to this page a lot</>";
        $_SESSION['visitCount']++;
        

     }elseif($_SESSION['visitCount'] == 9){
        header("Location: congratulations.php");
        echo "cool";
      

     }else 
        $_SESSION['visitCount']++;


    
    
 }
 else
    $_SESSION['visitCount'] = 1;

        
?>

