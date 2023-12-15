<?php
declare(strict_types=1);
session_start();

if (isset($_SESSION['username'])) {
    echo 'Привет ' . $_SESSION['username'];
    
    include 'exit.php';
} else {
    include 'form.html';
}


?>
