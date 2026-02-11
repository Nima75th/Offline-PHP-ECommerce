<?php
session_start();
$Connection = mysqli_connect('localhost', 'root', '', 'dbPanel');
if (isset($_SESSION['Admin_SignIn'])) {
    if (isset($_GET['ProductId']) && filter_var($_GET['ProductId'], FILTER_VALIDATE_INT)) {
        $ProductID = $_GET['ProductId'];
        mysqli_query($Connection, "DELETE  FROM `tblproducts` WHERE `ProductID` = '$ProductID'");
        if (mysqli_affected_rows($Connection)) {
            $_SESSION['Delete'] = '';
        }
    }
}
header('location: ProductsList.php');
die();