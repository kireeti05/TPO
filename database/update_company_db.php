<?php
include("config.php");
global $con;
session_start();
if(isset($_POST['update'])){
    $htno = $_SESSION['htno'];
    $companyName = ",".$_POST['name'];
    $query = $con->prepare("SELECT htno FROM users WHERE htno=:htno");
    $query->bindParam("htno", $htno, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() != 0) {
        $query = $con->prepare("UPDATE users SET selected_company=concat(selected_company, :companyName) WHERE htno=:htno");
        $query->bindParam("companyName", $companyName, PDO::PARAM_STR);
        $query->bindParam("htno", $htno, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<p class="success">Your updation was successful!</p>';
            header('Location: ../edit.php');
            echo alert("Your updation was successful!");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>