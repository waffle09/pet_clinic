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
<?php
$name = filter_var(trim($_POST['name']));
// echo $name;
$adress = filter_var(trim($_POST['adress']));
// echo $adress;
$contact = filter_var(trim($_POST['contact']));
// echo $contact;
$pet_name = filter_var(trim($_POST['pet_name']));
// echo $pet_name;
$kind = filter_var(trim($_POST['kind']));
// echo $kind;
$date = filter_var(trim($_POST['date']));
// echo $date;
$client_id = rand(1000,9999);
// echo $client_id;
$tquery = 'SELECT MAX(record_number) AS lastbill FROM client';
  $row = mysqli_fetch_assoc(mysqli_query($conn,$tquery));
  $nextbillno = $row['lastbill'];
$record_number = $nextbillno + 1;
echo $record_number;

if(mb_strlen($name) < 1 || mb_strlen($name) > 50){
  echo "No valid name length";
}
if(mb_strlen($adress) < 10 || mb_strlen($adress) > 90){
  echo "No valid adress length";
}
if(mb_strlen($contact) < 4 || mb_strlen($contact) > 10){
  echo "No valid contact length";
}
if(mb_strlen($pet_name) < 1 || mb_strlen($pet_name) > 50){
  echo "No valid pet name length";
}
if(mb_strlen($kind) < 3 || mb_strlen($kind) > 90){
  echo "No valid kind length";
}
$conn->query("INSERT INTO `client`(`record_number`,`client_id`, `name`, `adress`, `contact`) VALUES ('$record_number', '$client_id', '$name', '$adress', '$contact')");
$conn->query("INSERT INTO `pet`(`record_number`, `name`, `kind`, `date_of_birth`, `client_id`) VALUES ('$record_number', '$pet_name', '$kind', '$date', '$client_id')");

$conn->close();

header('location: http://localhost:81/page1.php');
?>
