<?php
// session_start();
function generatePassword(){
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $upLetters = strtoupper($letters);
    $number = '0123456789';
    if(isset($_GET['passwordLength'])){
    $passwordLength = $_GET['passwordLength'];
        $newPassword = '';
        while(strlen($newPassword) < $passwordLength){
            $allChars= $symbols.$letters.$upLetters.$number;
            $randChar = $allChars[rand(0,strlen($allChars))];
            if(!strpos($newPassword,$randChar)){
                $newPassword .= $randChar;
            }
        }
        $_SESSION['password'] = $newPassword;;
        header('Location:index.php');
        return $newPassword;
    }
    return 'error';
}
?>