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
  <div style="margin: 10px;">
    <img src="https://terra.vet/wp-content/uploads/2021/09/37.jpg" width="50%" alt="doctor">
    </div>
  <div style="font-size: 150%; float: right; padding-left: 800px; padding-right: 10px; margin-top: -430px;">
    <p>Є тварини, які все своє життя служать людині: вони рятують людей з-під завалів, шукають зниклих, гарантують безпеку. А є люди, які присвятили все своє життя тваринам та їх лікуванню.</p>
    <p>Багато хто не уявляє собі життя без домашніх вихованців. Вони зовсім як люди: у кожного свій характер, свої звички та особливості. Тварини допомагають нам і підтримують у важких ситуаціях, але іноді підтримка та допомога потрібна їм самим.</p>
    <p>Ветеринар, або ветеринарний лікар – це фахівець, який займається лікуванням та профілактикою захворювань тварин. В його обов'язки входить огляд, надання медичної допомоги, вакцинація, чіпування, проведення різних процедур та операцій, а також консультування клієнтів щодо догляду та утримання тварин.</p>
    <p>Наші фахівці відповідальні, спостережливі, здатні до співпереживання і водночас здатні виявляти холоднокровність. Не обходяться без любові до всіх видів тварин. Вони мають великі знання в області звичок тварин і птахів, як домашніх, так і диких. Мають хорошу пам'ять та логічне мислення, легко запам'ятовують медичні препарати, співвідносять симптоми з конкретними хворобами. А в наданні першої допомоги не позбавлені швидкої реакції, оперативності, обережності та стресостійкості.</p>
  </div>
  <div style="position: absolute; float: left; padding-top: -100px; border: solid 3px #DDA0DD; margin: 30px; padding-left: 30px; padding-right:30px; padding-bottom:30px; margin-right:830px;">
    <h3 style="font-family: 'Indie Flower', cursive; color: red;">Контакти лікарів нашої клініки: </h3>
  <?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Certificate</th><th>Name</th><th>Contact</th><th>Service ID</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px; border:1px solid black;'>" . parent::current(). "</td>";
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
  $stmt = $conn->prepare("SELECT certificate_number, doc_name, contact, service_id FROM doctor");
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
?></div>
<div style="float: right; padding-right: 170px;">
  <img src="https://static8.depositphotos.com/1206957/941/i/600/depositphotos_9412666-stock-photo-puppy-playing.jpg" width="130%" height="370px" alt="a dog">
</div>
<div class="footer" style="bottom: -450px; font-size: 150%; font-family: 'Indie Flower', cursive;"><p style="text-align:center; float: left; padding: 20px; margin-left:110px;">Contacts:</p><p style="float:left; padding: 20px; margin-left:110px;">
  Adress: Kiev, Shevchenko streat, 34</p><p style="float:left; padding: 20px; margin-left:110px;">
  First number: 048579430</p><p style="float:left; padding: 20px; margin-left:110px;">
  Second number: 048830503</p></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script> 
</body>
</html>