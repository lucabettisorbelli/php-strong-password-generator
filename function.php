<?php

session_start();

if (isset($_GET['length'])) {
    $length = $_GET['length'];
    
    $useNumbers = isset($_GET['useNumbers']);
    $useLetters = isset($_GET['useLetters']);
    $useSymbols = isset($_GET['useSymbols']);
    $sameCharacters = isset($_GET['sameCharacters']);
    
    $password = generatePassword($length, $useNumbers, $useLetters, $useSymbols, $sameCharacters);
    
    $_SESSION['password'] = $password;
    
    header('Location: password.php');
    exit;
}

function generatePassword($length, $useNumbers = true, $useLetters = true, $useSymbols = true, $sameCharacters = true)
{
    $numbers = '0123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!@#$%^&*()';
    
    $characters = '';
    if ($useNumbers) {
        $characters .= $numbers;
    }
    if ($useLetters) {
        $characters .= $letters;
    }
    if ($useSymbols) {
        $characters .= $symbols;
    }
    
    if (!$sameCharacters) {
        if ($length > strlen($characters)) {
            return "Impossibile generare una password senza ripetizioni con i parametri specificati";
        }
    }
    
    $charactersLength = strlen($characters);
    $randomPassword = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charactersLength - 1);
        $randomCharacter = $characters[$randomIndex];
        
        if (!$sameCharacters) {
            $characters = str_replace($randomCharacter, '', $characters);
            $charactersLength = strlen($characters);
        }
        
        $randomPassword .= $randomCharacter;
    }
    
    return $randomPassword;
}
?>