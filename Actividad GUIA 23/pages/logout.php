<?php
require __DIR__ . '/../data/conexionDataBase.php';
require __DIR__ . '/../data/auth.php';

if (is_logged()) {
    session_destroy();
}
header('Location: ../index.php');
exit;
