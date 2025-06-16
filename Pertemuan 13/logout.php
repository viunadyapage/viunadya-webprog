<?php
session_start();
session_destroy(); 
// nanti ngarahin ke login.php 
header("Location: login.php?message=" . urlencode("Anda telah logout."));
exit;
?>
