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
                echo "<div class='alert alert-danger'>errore</div>";
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <div>
                <input type="number" min="6" max="20" name="passwordLength">
            </div>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="repeatChar" value="" checked>
                    <label class="form-check-label" for="repeatChar">
                        No
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="repeatChar">
                    <label class="form-check-label" for="repeatChar">
                        Si
                    </label>
                </div>
            </div>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="letters" name="include_letters" checked>
                    <label class="form-check-label" for="letters">
                        Lettere
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="numbers" name="include_numbers">
                    <label class="form-check-label" for="numbers">
                        Numeri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="symbols" name="include_symbols">
                    <label class="form-check-label" for="symbols">
                        Simboli
                    </label>
                </div>
            </div>
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </form>
    </main>
</body>
</html>