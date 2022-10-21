<?php
session_start();

$id_escola = trim($_GET['cod']);
$_SESSION['id_escola'] = $id_escola;

header("location: ../web/visualizar_escola");
