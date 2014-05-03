<?php
session_start();
include 'comp_header.php';
include 'connect.php';

echo 'Welcome, ' . $_SESSION['comp_name'].'</br>';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'comp_footer.php';
?>
