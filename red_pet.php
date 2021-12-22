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
<div class="column" style="margin-left: 500px;">
<div style="border: solid 3px #DDA0DD; float: left; margin: 30px;">
<h3 style="font-family: 'Indie Flower', cursive; margin: 30px; padding-left: 90px; color: red;">Редагування</h3>
        <form style="margin: 30px;" method="post" action="pet_red.php">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
    
    <label style="padding-right:104px; font-size: 130%;">record_number<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="num_red_pet" type="number" size="25" maxlength="15">
    </p>
<p>
    <label style="padding-right:164px; font-size: 130%;">client_id<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="id_pet" type="number" size="25" maxlength="50">
    </p>
<p>
<p>
    <label style="padding-right:189px; font-size: 130%;">name<br></label>
    <input style="padding-right: 45px; font-size: 130%;" name="pet_name" type="text" size="15" maxlength="50">
    </p>
    <label style="padding-right:200px; font-size: 130%;">kind<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="kind" type="text" size="20" maxlength="50">
    </p>
<p>
    <label style="padding-right:172px; font-size: 130%;">date of birth<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="date" type="date" size="20" maxlength="50">
    </p>
<p class="submit" style="padding-top:10px;"><input class="button btn btn-success" id="register" name= "register" type="submit" value="Редагувати" style=" padding: 7px;"></p></form>
<h3 style="font-family: 'Indie Flower', cursive; margin: 30px; padding-left: 90px; color: red;">Видалення</h3>
        <form style="margin: 30px;" method="post" action="pet_del.php">    
    <label style="padding-right:104px; font-size: 130%;">record_number<br></label>
    <input style="padding-right: 0px; font-size: 130%;" name="num_del_pet" type="text" size="20" maxlength="15">
    </p>
<p class="submit" style="padding-top:10px;"><input class="button btn btn-success" id="register" name= "register" type="submit" value="Видалити" style=" padding: 7px;"></p></form>

</div>
</div>
</div>
<div class="footer" style="bottom: -40px; font-size: 150%; font-family: 'Indie Flower', cursive;"><p style="text-align:center; float: left; padding: 20px; margin-left:110px;">Contacts:</p><p style="float:left; padding: 20px; margin-left:110px;">
  Adress: Kiev, Shevchenko streat, 34</p><p style="float:left; padding: 20px; margin-left:110px;">
  First number: 048579430</p><p style="float:left; padding: 20px; margin-left:110px;">
  Second number: 048830503</p></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script> 
</body>
</html>