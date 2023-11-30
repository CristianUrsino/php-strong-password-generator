<?php
// session_start();
function generatePassword(){
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $upLetters = strtoupper($letters);
    $number = '0123456789';
    if(isset($_GET['passwordLength'])){
        $passwordLength = $_GET['passwordLength'];
        $repeatChar = $_GET['repeatChar'];
        if($passwordLength < 6 || $passwordLength > 20){
            return true;
        }
        $newPassword = '';
        while(strlen($newPassword) < $passwordLength){
            $allChars= '';
            if(isset($_GET['include_letters'])){
                $allChars .= $letters.$upLetters;
            }
            if(isset($_GET['include_numbers'])){
                $allChars .= $number;
            }
            if(isset($_GET['include_symbols'])){
                $allChars .= $symbols;
            }
            if($allChars === '') return true;
            // $symbols.$letters.$upLetters.$number
            $randChar = $allChars[rand(0,strlen($allChars))];
            if($repeatChar||!strpos($newPassword,$randChar)){
                $newPassword .= $randChar;
            }
        }
        $_SESSION['password'] = $newPassword;;
        header('Location:index.php');
    }
    return false;
}
?>