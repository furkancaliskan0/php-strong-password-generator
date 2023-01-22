<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <style>
        * {
            background-color: darkblue;
            color: white;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid white;
            border-radius: 500px;
        }

        .btn {
            background-color: mintcream;
            margin: 5px;
            padding: 5px;
            border: 1px solid white;
            border-radius: 5px;
            color: darkblue;
            text-decoration: none;
        }

        h1 {
            padding: 10px;
            color: dimgrey;
        }

        h2 {
            padding: 10px;
            color: white;

        }
    </style>
    <?php

    session_start();

    require_once __DIR__ . "/helper.php";

    $lng = $_GET['length'] ?? -1;

    $minLetters = $_GET['minLetters'] ?? false;
    $maxLetters = $_GET['maxLetters'] ?? false;
    $numbers = $_GET['numbers'] ?? false;
    $symobols = $_GET['symobols'] ?? false;
    $dupplicate = $_GET['dupplicate'] ?? false;

    if ($lng > 0) {

        $pws = pwsGenrate(
            $lng,
            $minLetters,
            $maxLetters,
            $numbers,
            $symobols,
            $dupplicate
        );
        $_SESSION['pws'] = $pws;
        header("Location: thankyou.php");
    }
    ?>
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <form method="GET">
            <label for="length">Lunghezza password:</label>
            <input type="text" name="length" <?php
            if ($lng > 0) {
                echo "value='" . $lng . "'";
            }
            ?>>
        <br>
            <input type="checkbox" name="minLetters">
            <label for="minLetters">Lettere minuscole</label>
            <br>
            <input type="checkbox" name="maxLetters">
            <label for="maxLetters">Lettere maiuscole</label>
            <br>
            <input type="checkbox" name="numbers">
            <label for="numbers">Numeri</label>
            <br>
            <input type="checkbox" name="symobols">
            <label for="symobols">Simboli</label>
            <br>
            <input type="checkbox" name="dupplicate">
            <label for="dupplicate">Caratteri dupplicati</label>
            <br>
            <input type="submit" value="INVIA" class="btn">
        </form>
    </div>
</body>


</html>