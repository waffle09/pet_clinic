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
      table, th, td {
      border: 1px solid black;
      padding: 10px;
      text-align: center;
      }
    table{
      width: 1285px;
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
  <div><div style=" position: absolute; margin: 20px; float:left; padding-right: 38%; padding-left: 25px;">
  <p style="font-size: 150%;">Послуги нашої ветеринарної клініки включають обстеження, лікування, вакцинацію та догляд за домашніми улюбленцями. У нас сучасна технічна база для виконання на місці всіх аналізів та будь-якої складності діагностики, просторі приміщення для стаціонару та салон для догляду за тваринами. Ми ведемо електронний запис, завдяки чому для Вас виключаються черги та затримки. У готелі, який діє на базі клініки, Ви можете залишити тварину на перетримку при виїзді з міста.<br><br>Ветеринарний лікар-терапевт проведе первинний клінічний огляд та призначить лікування чи додаткові дослідження.
Проконсультує з питань харчування, утримання та догляду.
Консультацію з догляду та утримання можна отримати і без тварини, але для проведення будь-якого лікування її присутність є обов'язковою.</p></div>
  <div style="float: right; padding-left: 60%; margin: 20px">
  <img src="https://inde.io/i/posts/547/02a95329bf007d99fa4154b4f6680d35.jpg" width="95%" height="95%" alt="cat in the clinic" ></div>
    </div>
    <div style="float: right; margin-right: 130px">
  <span style="font-size: 150%; font-family: 'Indie Flower', cursive; color:red;">Наші послуги:</span><br>
  <?php
$servername = "localhost";
$username = "root";
$password = "1235";
$dbname = "pet_clinic";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT service_id, service_name, price FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Price, UAH</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["service_id"]. "</td><td style='text-align: left;'>" . $row["service_name"]. "</td><td>" . $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<div class="footer" style="bottom: -300px; font-size: 150%; font-family: 'Indie Flower', cursive;"><p style="text-align:center; float: left; padding: 20px; margin-left:110px;">Contacts:</p><p style="float:left; padding: 20px; margin-left:110px;">
  Adress: Kiev, Hnata Yuru streat, 34</p><p style="float:left; padding: 20px; margin-left:110px;">
  First number: 048579430</p><p style="float:left; padding: 20px; margin-left:110px;">
  Second number: 048830503</p></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script> 
</body>
</html>