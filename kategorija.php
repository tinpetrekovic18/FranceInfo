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
        <div class="box">
            <p class="naslov">ELECTIONS EUROPEENNES 2019</p>
        <?php
        include 'connect.php';
        define('UPLPATH', 'img/');
        if(isset($_GET['kategorija'])) { 
            $kategorija = $_GET['kategorija'];
        }
        ?>
        <section>
        <?php
        $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='sport' LIMIT 5";
        $result = mysqli_query($dbc, $query);
         $i=0;
         while($row = mysqli_fetch_array($result)) {
         echo '<article>';
         echo '<img class="slika" src="' . UPLPATH . $row['slika'] . '"';
         echo '<h4><a href="clanak.php?id='.$row['id'].'">';
         echo $row['tekst'];
         echo '</a></h4>';
         echo '</article>';
         }?>
        </section>
        </div>

        <footer>
            
            <div class="podnozje">france.tv</div>
       
        </footer>
    </center>
    </body>
</html>
