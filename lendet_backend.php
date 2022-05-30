<?php
session_start();
 include 'db.php';

// egzekutimi i query ne php
$sql = "SELECT * FROM lendet";
$result = $conn->query($sql);
//-----------------------------------------------------

// $conn->close() pedoret per mbylljen e lidhjes me databaze

//---------------------------------------------------------------
?>