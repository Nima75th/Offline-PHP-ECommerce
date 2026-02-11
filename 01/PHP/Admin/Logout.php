<?php
session_start();
if (isset($_SESSION['Admin_SignIn'])) {

    unset ($_SESSION['Admin_SignIn']);
}
    header('location:../../Index.php');
