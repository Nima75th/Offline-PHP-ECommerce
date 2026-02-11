<?php
session_start();
$Connection = mysqli_connect('localhost', 'root', '', 'dbPanel');
if (isset($_SESSION['SignIn'])) {
    if (isset($_GET['ProductId']) && filter_var($_GET['ProductId'], FILTER_VALIDATE_INT)) {
        $UserID = $_SESSION['SignIn'];
        $ProductID = $_GET['ProductId'];
        mysqli_query($Connection, "DELETE  FROM `tblCard` WHERE `UserID` = '$UserID' AND `ProductID` = '$ProductID' AND `PaymentStatus` = 0");
        if (mysqli_affected_rows($Connection)) {
            $_SESSION['DeleteCard'] = '';
        }
        header('location: Card.php');
        die();
    }
}
header('location: Index.php');
die();
