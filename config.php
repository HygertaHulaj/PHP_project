<?php

$db_user = "projekti";
$db_pass = "";
$db_name = "regjistrimi";

$db = new PDO('mysql:host=localhost;db_name=' . db_name. ' charset=utf8', $db_user, $db_pass);
$db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);