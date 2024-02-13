<?php
session_start();
include("connect.php");
define('UPLPATH', 'img/');

if (isset($_SESSION['username']) && isset($_SESSION['razina'])) {
  $sessionUsername = $_SESSION['username'];
  $sessionRazina = $_SESSION['razina'];
  //echo $sessionRazina;
  //echo $sessionUsername;

  /*if ($sessionRazina == 0) {
    header("Location: index.php");
    exit;
  }
} else{
  header("Location: registracija.php");*/
}

if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $query = "DELETE FROM vijesti WHERE id=$id ";
  $result = mysqli_query($dbc, $query);
  header("Location: administracija.php");
  exit();
}

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $title = $_POST['title'];
  $about = $_POST['about'];
  $content = $_POST['content'];
  $category = $_POST['category'];
  if (isset($_POST['archive'])) {
    $archive = 1;
  } else {
    $archive = 0;
  }

  if ($_FILES['picture']['name'] != '') {
    $picture = $_FILES['picture']['name'];
    $target_dir = 'img/' . $picture;
    move_uploaded_file($_FILES["picture"]["tmp_name"], $target_dir);
  } else {
    $query = "SELECT slika FROM vijesti WHERE id = $id";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_assoc($result);
    $picture = $row['slika'];
  }

  $query = "UPDATE vijesti SET naslov='$title', sazetak='$about', tekst='$content', slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id";
  $query = "UPDATE vijesti SET naslov= ?, sazetak= ?, tekst= ?, slika= ?, kategorija= ?, arhiva= ? WHERE id=$id";
  $stmt = $dbc->prepare($query);
  $stmt->bind_param("ssssss", $title, $about, $content, $picture, $category, $archive);
  $stmt->execute();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rufina:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cantata+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
  <title>Le Nouvel Observateur</title>
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
  <hr>

  <main>


    <?php
    $query = "SELECT * FROM vijesti";
    $result = mysqli_query($dbc, $query);
    while ($row = mysqli_fetch_array($result)) {
      echo '<form enctype="multipart/form-data" action="" method="POST" class="form form-edit adm-form" name="edit[' . $row['id'] . ']"> 
        <div class="form-item"> 
        <div class="form-field">
        <label for="title">Naslov vjesti:</label> 
        <textarea name="title" id="title" cols="30" rows="1" class="form-field-textual edit-input">' . $row['naslov'] . '</textarea> 
        </div> 
        </div> 
        <div class="form-item">
        <label for="about">Kratki sadržaj vijesti (do 100 znakova):</label> 
        <div class="form-field"> 
        <textarea name="about" id="kratki_sadrzaj" cols="30" rows="10" class="form-field-textual">' . $row['sazetak'] . '</textarea> 
        </div> 
        </div> 
        <div class="form-item">
        <label for="content">Sadržaj vijesti:</label> 
        <div class="form-field"> 
        <textarea name="content" id="sadrzaj" cols="30" rows="10" class="form-field-textual">' . $row['tekst'] . '</textarea> 
        </div> 
        </div> 
        <div class="form-item"> 
        <label for="pphoto">Slika:</label> 
        <div class="form-field">
        <input type="file" class="input-text" id="picture" value="' . $row['slika'] . '" name="picture"/> 
        <br>
        <img src="' . UPLPATH . $row['slika'] . '" width=100px>
        </div> 
        </div> 
        <div class="form-item"> 
        <label for="category">Kategorija vijesti:</label> 
        <div class="form-field"> 
        <select name="category" id="category" class="form-field-textual"> 
        <option value="Sport"';
      if ($row['kategorija'] == "Sport") echo ' selected="selected"';
      echo '>Sport</option> 
        <option value="Politika"';
      if ($row['kategorija'] == "Politika") echo ' selected="selected"';
      echo '>Politika</option> 
        </select> 
        </div> 
        </div> 
        <div class="form-item"> 
        <label>Spremiti u arhivu: 
        <div class="form-checkbox">';
      if ($row['arhiva'] == 0) {
        echo '<input type="checkbox" name="archive" id="archive"/> Arhiviraj?';
      } else {
        echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';
      }
      echo '
          </div> 
          </label> 
          </div> 
          </div> 
          <div class="form-item"> 
          <input type="hidden" name="id" class="form-field-textual" value="' . $row['id'] . '"> 
          <button type="reset" value="Poništi">Poništi</button> 
          <button type="submit" name="update" value="Prihvati" id="izmjeni">Izmjeni</button> 
          <button type="submit" name="delete" value="Izbriši">Izbriši</button> 
          </div> 
          </form>';
    }
    ?>



  </main>
  <footer>
    <p>france.tv</p>
  </footer>
</body>

</html>