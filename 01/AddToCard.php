<?php
$Connection = mysqli_connect('localhost', 'root', '', 'dbPanel');
session_start();
$Erors = [];

if (isset($_SESSION['SignIn'])) {
    if (isset($_GET['ProductID']) && filter_var($_GET['ProductID'], FILTER_VALIDATE_INT)) {
        $UserID = $_SESSION['SignIn'];
        $ProductID = $_GET['ProductID'];
        $Select = mysqli_query($Connection, "SELECT * FROM `tblproducts` WHERE `ProductID` = '$ProductID'");
        $ResultSelect = mysqli_fetch_assoc($Select);
        if ($ResultSelect) {
            $CheckCard = mysqli_query($Connection, "SELECT * FROM `tblCard` WHERE `UserID` = '$UserID' AND `ProductID` = '$ProductID' AND `PaymentStatus` = 0 ");
            if (mysqli_num_rows($CheckCard) === 0) {
                mysqli_query($Connection, "INSERT INTO `tblcard` (`UserID`, `ProductID`, `PaymentStatus`) VALUES ('$UserID', '$ProductID', 0)");
                if (mysqli_affected_rows($Connection)) {
                    $_SESSION['AddedToCard'] = '';
                }
            } else {
                $_SESSION['AddNotToCard'] = '';
            }
        }
    }
}
header('location: index.php');
die();
