<?php 
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "blood_bank_management";

    $connection =new mysqli($servername, $username, $password,$database);
    $sql = "DELETE FROM blood_donators WHERE id = $id";
    $connection->query($sql);
}
header("location:./admin/admin/adminDashboard.php");
?>