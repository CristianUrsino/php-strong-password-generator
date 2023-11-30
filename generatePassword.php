<?php
session_start();
include __DIR__ . '/functions/functions.php';
$error = generatePassword();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Generate Password</title>
</head>
<body>
    <main>
        <?php
            if($error){
                echo "<div class="alert alert-danger">$error</div>";
            }else{
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <input type="number" min="6" max="20" name="passwordLength">
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </form>
        <?php } ?>
    </main>
</body>
</html>