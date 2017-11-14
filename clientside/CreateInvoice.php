<?php
    session_start();
    if (!isset($_SESSION['username']) AND !isset($_SESSION['domaine'])) {
        header('Location: ../login.php');
    }
    include 'php/futureselector.php';
    include 'php/research.php';
    include 'php/campname.php'; 
    include 'invoicingform.html'; 
?>