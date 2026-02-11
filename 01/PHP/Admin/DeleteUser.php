<?php
session_start();
$Connection = mysqli_connect('localhost', 'root', '', 'dbPanel');
if (isset($_SESSION['Admin_SignIn'])) {
    if (isset($_GET['UserID']) && filter_var($_GET['UserID'], FILTER_VALIDATE_INT)) {
        $ProductID = $_GET['UserID'];
        mysqli_query($Connection, "DELETE  FROM `tblUsers` WHERE `UserID` = '$ProductID'");
        if (mysqli_affected_rows($Connection)) {
            $_SESSION['Delete'] = '';
        }
    }
}
header('location: UsersList.php');
die();