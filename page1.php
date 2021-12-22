<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
  <?php
 
    $server = "localhost"; // имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost
    $username = "root"; // Имя пользователя БД
    $password = "1235"; // Пароль пользователя. Если у пользователя нету пароля то, оставляем пустое значение ""
    $database = "pet_clinic"; // Имя базы данных, которую создали
     
    $conn = mysqli_connect($server, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<div class="row">
<div style="border: solid 3px #DDA0DD; float: left; margin: 30px;">
<h3 style="font-family: 'Indie Flower', cursive; margin: 30px; padding-left: 120px; color: red;">Реєстрація:</h3>
        <form style="margin: 30px;" action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
    
    <label style="padding-right:104px; font-size: 130%;">Name<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="name" type="text" size="25" maxlength="15">
    </p>
<p>
    <label style="padding-right:92px; font-size: 130%;">Adress<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="adress" type="text" size="25" maxlength="50">
    </p>
<p>
<p>
    <label style="padding-right:85px; font-size: 130%;">Contact<br></label>
    <input style="padding-right: 45px; font-size: 130%;" name="contact" type="number" size="25" maxlength="50">
    </p>
    <label style="padding-right:71px; font-size: 130%;">Pet name<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="pet_name" type="text" size="25" maxlength="50">
    </p>
<p>
    <label style="padding-right:112px; font-size: 130%;">Kind<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="kind" type="text" size="25" maxlength="50">
    </p>
<p>
    <label style="padding-right:44px; font-size: 130%;">Date of birth<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="date" type="date" size="30" maxlength="50">
    </p>
<p class="submit" style="padding-top:10px;"><input class="button btn btn-success" id="register" name= "register" type="submit" value="Зареєструватися" style=" padding: 7px;"></p></form></div>

<div style="float: left; padding-top: 30px;">
  <img src="https://4lapy.ru/resize/1440x660/upload/iblock/9e4/9e4761a13405e9b809c5b1c9c3ab6bc5.jpg" width="50%" height="40%" alt="gute guinea pig">
</div>
<div style="padding-top: 230px;">
  <img src="https://www.ukrboard.com.ua/imgs/board/52/2864652-1.jpg" width="25.5%" height="230px" alt="gute guinea pig">
</div>
  <div style="float: right; border: solid 3px #DDA0DD; float: left; margin-left: 1000px; margin-top: -460px; margin-right:0px;">
  <div style="margin: 30px;">
  <span style="font-size: 150%; font-family: 'Indie Flower', cursive; color:red;">Чекають своєї черги за записом:</span><br>
  <?php
echo "<table style='border: solid 1px black; font-size:150%;'>";
echo "<tr><th>Number</th><th>Name</th><th>Adress</th></tr>";

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
  $stmt = $conn->prepare("SELECT record_number, name, adress FROM client");
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
</div>
</div>
<div class="footer" style="bottom: 0px; font-size: 150%; font-family: 'Indie Flower', cursive;"><p style="text-align:center; float: left; padding: 20px; margin-left:110px;">Contacts:</p><p style="float:left; padding: 20px; margin-left:110px;">
  Adress: Kiev, Shevchenko streat, 34</p><p style="float:left; padding: 20px; margin-left:110px;">
  First number: 048579430</p><p style="float:left; padding: 20px; margin-left:110px;">
  Second number: 048830503</p></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script> 
</body>
</html>