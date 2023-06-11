<?php
session_start();
if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    echo "La tua password casuale è: $password";
} else {
    echo "Nessuna password generata";
}
?>