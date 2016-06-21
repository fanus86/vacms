<?php
include("config.php");
$conn = new mysqli($servername, $dbusername, $dbpassword , "valiasr");
mysqli_set_charset($conn,"utf8");
if ($conn->connect_error) {
    die("مشکل در اتصال به پایگاه داده");
} 
//Read Data From Request Secure No Injection Patched
$sql = sprintf("SELECT * FROM hwin WHERE id='{$_REQUEST['id']}' AND mellicode='{$_REQUEST['melli']}'");
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["udetail"];
    }
} else {
}
$conn->close();

?>