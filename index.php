<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $color = "pink";
}else{
   // header('Location: ./index.php');
    // die;
    $color = "yellow";
}
print_r(count($_SERVER));
echo "<br>";
// print_r(array_keys($_SERVER));
echo "<br>";
print_r($_SERVER['REQUEST_METHOD']);
echo "<br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?=$color?>;">

     <a href="?labas=miau">ten pat</a>
     <a href="https://www.google.com">google</a>
     <a href="./antras.php">antras</a>
    
    <form action="" method="post">
        <input type="text" name="vardas">
        <br>
        <input type="text" name="pavarde">
        <button type="submit">touch me!</button>
    </form>

    <?php
        print_r($_GET);
        print_r($_POST);

    ?>


<?php  if(isset($_GET['vardas']) && isset($_GET['pavarde'])){ ?>
    <h1><?=$_GET['vardas']?></h1>
    <h1><?=$_GET['pavarde']?></h1>

<?php } ?>


<?php 
 if(isset($_POST['vardas']) && isset($_POST['pavarde'])){ 
    echo "<h6>" . $_POST['vardas'] . "</h6>";
    echo "<h5>" . $_POST['pavarde'] . "</h5>";
 } 
 ?>


</body>
</html>

