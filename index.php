<?php
include "databases.php";
$result = mysqli_query($conn, "SELECT * FROM `pet`");

while($pet = mysqli_fetch_assoc($result))
{
    // echo $pet['name'];
    // echo " ";
    // echo $pet['record_number'];
    // echo "<br>";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="shortcut icon" href="https://st2.depositphotos.com/2008975/7914/i/600/depositphotos_79143644-stock-photo-silhouette-of-a-black-cat.jpg" type="image/x-icon">
    <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Praise&display=swap" rel="stylesheet">
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pet Clinic</title>
    <style>
      a:hover{
        color: black;
      }
    </style>
</head>
<body style="background-color:#FAF0E6">
<div style="background-color: #DDA0DD; padding: 15px;">
    <header >
        <span style="margin: 100px; font-size: 200%; font-family: 'Indie Flower', cursive;">Pet Clinic</span>
      <ul class="nav nav-pills" style ="float: right">
        <li class="nav-item"><a href="index.php" style="color:white; background-color: #DDA0DD" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="menu.html" style="color:white; background-color: #DDA0DD" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="page1.php" style="color:white; background-color: #DDA0DD" class="nav-link">Record</a></li>
        <li class="nav-item"><a href="page2.php" style="color:white; background-color: #DDA0DD" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="page3.php" style="color:white; background-color: #DDA0DD" class="nav-link">Doctors</a></li>
        
      </ul>
    </header>
  </div>
  <div style="margin: 70px; margin-top: 10px; margin-bottom: 30px; text-align: center; font-size: 130%">Наша ветеринарна клініка заснована командою професіоналів, які мають багаторічний досвід роботи у ветеринарії. Наші фахівці часто проходять регулярне підвищення кваліфікації як на вітчизняних, так і на міжнародних науково-практичних конференціях, постійно розвиваючи та вдосконалюючи свої знання та навички. Ми знаємо та розуміємо, що іноді трапляються найнесподіваніші ситуації, тому наш графік роботи максимально зручний для вас та ваших улюбленців.</div>
  <div>
  <div>
  <img class="xl ml" src="https://chico.ca.us/sites/main/files/imagecache/lightbox/main-images/dog_license.jpg" 
     alt="Dog">
  </div>
  <div style="float: right; margin-right: 130px">
  <span style="font-size: 150%; font-family: 'Indie Flower', cursive; color:red;">Чекають своєї черги за записом:</span><br>
  <?php
echo "<table style='border: solid 1px black; font-size:150%;'>";
echo "<tr><th>Number</th><th>Name</th><th>Kind</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "1235";
$dbname = "pet_clinic";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT record_number, name, kind FROM pet");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
<!-- <div style="margin-top: 50px; margin-left:10px;  font-size: 130%; font-family: 'Indie Flower', cursive;"> -->
  <!-- <p style="text-align:center; ">Contacts:<br> -->
  <!-- Adress: Kiev, Shevchenko streat, 34<br> -->
  <!-- First number: 048579430<br> -->
  <!-- Second number: 048830503<br></p> -->
<!-- </div> -->
</div>
</div>
<div class="footer" style="bottom: -70px; font-size: 150%; font-family: 'Indie Flower', cursive;"><p style="text-align:center; float: left; padding: 20px; margin-left:110px;">Contacts:</p><p style="float:left; padding: 20px; margin-left:110px;">
  Adress: Kiev, Shevchenko streat, 34</p><p style="float:left; padding: 20px; margin-left:110px;">
  First number: 048579430</p><p style="float:left; padding: 20px; margin-left:110px;">
  Second number: 048830503</p></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script> 
</body>
</html>