<?php
session_start();
function generatePassword(){
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $upLetters = strtoupper($letters);
    $number = '0123456789';
    $passwordLength = $_GET['passwordLength'];
    if($passwordLength < 6 || $passwordLength > 20){
        $newPassword = '';
        while(strlen($newPassword) < $passwordLength){
            $allChars= $symbols.$letters.$upLetters.$number;
            $randChar = $allChars[rand(0,strlen($allChars))];
            if(!strpos($newPassword,$randChar)){
                $newPassword .= $randChar;
            }
        }
        $_SESSION['password'];
        header('Location:index.php');
        return $newPassword;
    }
    return 'error';
}
?>