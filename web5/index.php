<?php
session_start();
if(isset($_SESSION['num_visits'])){
    $_SESSION['num_visits'] = $_SESSION['num_visits']+1;
} else {
$_SESSION['num_visits'] = 1;
}
if(isset($_POST['d'])){
   session_destroy();
   header("Location:index.php");
}


?>

<h1>Hello</h1>
<p>You have visited this page <?php echo $_SESSION['num_visits']; ?> times</p>
<p><form method="POST"><button name="d">reset</button></form></p>
<?php
    if($_SESSION['num_visits'] == 10 ){
        include 'congratulations.php';
    }
?>
