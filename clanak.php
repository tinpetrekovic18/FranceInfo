<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hr">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://kit.fontawesome.com/958811bdac.js" crossorigin="anonymous"></script>
<title>franceinfo</title>
    </head>
    <body>
        <center>
        <header>
<div class="franceinfo">
    <p>franceinfo</p><p class="dvot">:</p>
</div>
<nav>
    <a href="index.php"> <div >  home</div></a>
    <a href="kategorija.php?id=sport"><div>  Sport</div></a>
    <a href="kategorija1.php?id=politika"><div>   Politika</div></a>
    <a href="unos.php"><div> Unos </div></a>
    <a href="administracijaa.php"><div>   Administracija</div></a>
</nav>
        </header>

        
<?php
 include 'connect.php';
 define('UPLPATH', 'img/');
 if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}
$query = "SELECT * FROM vijesti WHERE id = $id";
 $result = mysqli_query($dbc, $query);
 $row = mysqli_fetch_array($result);
 ?>
 <div class="gore"><h1>
 <?php
 echo $row['naslov'];
 ?></h1><p>
 <?php
 echo "<i>".$row['sazetak']."</i>";
 ?>
 </div>
 <div class="dolee">

 <?php
 echo '<img class="sljikah" src="' . UPLPATH . $row['slika'] . '">';
 ?>

 <h2>
 <?php
echo $row['tekst'];
 ?>
 </h2>
 </div>
      
        <footer>
            
            <div class="podnozje2">franceinfo</div>
       
        </footer>
    </center>
    </body>
</html>
