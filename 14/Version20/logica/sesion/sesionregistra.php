<?php
session_name("loginUsuario");
session_start();

if (!isset($_SESSION['rolcodigo']) || $_SESSION['rolcodigo'] != 1) {
	header("Location: ../../index.php");
	exit();
}