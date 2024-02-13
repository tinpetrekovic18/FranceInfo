<?php
include 'connect.php';
if (!$dbc) {
  die('Neuspjela veza s bazom podataka: ' . mysqli_connect_error());
}
    if (isset($_POST['title']) && isset($_POST['about']) && isset($_POST['content']) && isset($_POST['category']) && isset($_POST['pphoto'])) {
        $naslov = $_POST['title'];
        $sazetak = $_POST['about'];
        $tekst = $_POST['content'];
        $kategorija = $_POST['category'];
        $slika = $_POST['pphoto'];
        $obavijest = isset($_POST['archive']) ? '1' : '0';
        $query = "INSERT INTO vijesti (naslov, sazetak, tekst, kategorija, slika, arhiva) VALUES
    ('$naslov', '$sazetak', '$tekst', '$kategorija', '$slika', '$obavijest')";
        $result = mysqli_query($dbc, $query) or die('Error querying database.');
        if ($result) {
          echo "Podaci uspješno spremljeni u bazu.";
      } else {
          echo "Dogodila se greška pri spremanju podataka.";
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
 document.getElementById("slanje").onclick = function(event) {
 var slanjeForme = true;
 var poljeTitle = document.getElementById("title");
 var title = document.getElementById("title").value;
 if (title.length < 5 || title.length > 30) {
 slanjeForme = false;
 poljeTitle.style.border="1px dashed red";
 document.getElementById("porukaTitle").innerHTML = "Naslov vjesti mora imati između 5 i 30 znakova!<br>";
 } else {
 poljeTitle.style.border="1px solid green";
 document.getElementById("porukaTitle").innerHTML="";
 }
 var poljeAbout = document.getElementById("about");
 var about = document.getElementById("about").value;
 if (about.length < 10 || about.length > 100) {
 slanjeForme = false;
 poljeAbout.style.border="1px dashed red";
 document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
 } else {
 poljeAbout.style.border="1px solid green";
 document.getElementById("porukaAbout").innerHTML="";
 }
 var poljeContent = document.getElementById("content");
 var content = document.getElementById("content").value;
 if (content.length == 0) {
 slanjeForme = false;
 poljeContent.style.border="1px dashed red";
 document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
 } else {
 poljeContent.style.border="1px solid green";

 document.getElementById("porukaContent").innerHTML="";
 }
 var poljeSlika = document.getElementById("pphoto");
 var pphoto = document.getElementById("pphoto").value;
 if (pphoto.length == 0) {
 slanjeForme = false;
 poljeSlika.style.border="1px dashed red";
 document.getElementById("porukaSlika").innerHTML="Slika mora biti unesena!<br>";
 } else {
 poljeSlika.style.border="1px solid green";
 document.getElementById("porukaSlika").innerHTML="";
 }
 var poljeCategory = document.getElementById("category");
 if(document.getElementById("category").selectedIndex == 0) {
 slanjeForme = false;
 poljeCategory.style.border="1px dashed red";
document.getElementById("porukaKategorija").innerHTML="Kategorija mora biti odabrana!<br>";
 } else {
 poljeCategory.style.border="1px solid green";
 document.getElementById("porukaKategorija").innerHTML="";
 }
 if (slanjeForme != true) {
 event.preventDefault();
 }
 };
});
 </script>
  <meta charset="UTF-8">
  <title>Prikaz vijesti</title>
  <link rel="stylesheet" href="style.css">
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
        <form action="" method="POST">
 <div class="form-item">
 <span id="porukaTitle" class="bojaPoruke"></span>
 <label for="title">Naslov vjesti</label>
 <div class="form-field">
 <input type="text" name="title" id="title" class="formfield-textual">
 </div>
 </div>
 <div class="form-item">
 <span id="porukaAbout" class="bojaPoruke"></span>
 <label for="about">Kratki sadržaj vjesti (do 50 znakova)</label>
 <div class="form-field">
 <textarea name="about" id="about" cols="30" rows="10" class="form-field-textual"></textarea>
 </div>
 </div>
 <div class="form-item">
 <span id="porukaContent" class="bojaPoruke"></span>
 <label for="content">Sadržaj vjesti</label>
 <div class="form-field">
 <textarea name="content" id="content" cols="30" rows="10" class="form-field-textual"></textarea>
 </div>
 </div>
 <div class="form-item">
 <span id="porukaSlika" class="bojaPoruke"></span>
 <label for="pphoto">Slika: </label>
 <div class="form-field">
 <input type="file" class="input-text" id="pphoto" name="pphoto"/>
 </div>
 </div>
 <div class="form-item">
 <span id="porukaKategorija" class="bojaPoruke"></span>
 <label for="category">Kategorija vjesti</label>
 <div class="form-field">
 <select name="category" id="category" class="form-fieldtextual">
 <option value="" disabled selected>Odabir kategorije</option>
 <option value="sport">Sport</option>
 <option value="kultura">Kultura</option>
 <option value="politika">Politika</option>
 <option value="lifestyle">Lifesytle</option>
 </select>
 </div>
 </div>
 <div class="form-item">
 <label>Spremiti u arhivu:
 <div class="form-field">
 <input type="checkbox" name="archive" id="archive">
 </div>
 </label>
 </div>
 <div class="form-item">
 <button type="reset" value="Poništi">Poništi</button>
 <button type="submit" value="Prihvati" id="slanje">Prihvati</button>
 </div>
 </form>
</div>
        <footer>
          <p>france.tv</p>
      </footer>
</center>
</body>
</html>
