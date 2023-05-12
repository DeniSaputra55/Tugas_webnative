<?php 
session_start();

unset($_SESSION['MEMBER']);
header('Location:/Tugas_webnative/index.php?hal=admin/login_form');


?>
