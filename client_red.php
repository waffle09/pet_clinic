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
$num_red = filter_var(trim($_POST['num_red']));
// echo $name;
$id = filter_var(trim($_POST['id']));
// echo $adress;
$cl_name = filter_var(trim($_POST['cl_name']));
// echo $contact;
$adress = filter_var(trim($_POST['adress']));
// echo $pet_name;
$contact = filter_var(trim($_POST['contact']));

if(mb_strlen($num_red) < 1 || mb_strlen($num_red) > 10){
  echo "No valid name length";
}
if(mb_strlen($id) < 1 || mb_strlen($id) > 10){
  echo "No valid adress length";
}
if(mb_strlen($cl_name) < 1 || mb_strlen($cl_name) > 90){
  echo "No valid contact length";
}
if(mb_strlen($adress) < 1 || mb_strlen($adress) > 90){
  echo "No valid pet name length";
}
if(mb_strlen($contact) < 3 || mb_strlen($contact) > 90){
  echo "No valid kind length";
}
$conn->query("UPDATE `client` SET `client_id` = $id, `name` = $cl_name, `adress` = $adress, `contact` = $contact WHERE `client`.`record_number` = $num_red");
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();

header('location: http://localhost:81/red_client.php');
?>
