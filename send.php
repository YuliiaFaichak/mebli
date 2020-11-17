<?php
$name = $_POST['name'];
$surName = $_POST['surName'];
$num = $_POST['num'];
$message = $_POST['textarea'];

if (!empty($name) && !empty($surName) && !empty($num)){
    $db_host = "localhost"; 
    $db_user = "root"; 
    $db_base = 'iis'; 
    $db_table = "requests";
    $db_password = 'root';

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (surName, name, num, message) VALUES ('$surName','$name', '$num', '$message')");
    if ($result == true){
        echo '<script>alert("Заявка успішно відправлена")
        document.location.href="index.php"
        </script>';
    }
}


?>