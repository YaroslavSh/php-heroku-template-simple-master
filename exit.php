<?php
declare(strict_types=1);
session_start();

session_unset();

echo ' Ваша сессия завершилась';

//header("Location: index.php");
//exit;
?>

<script>
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 3000);
</script>