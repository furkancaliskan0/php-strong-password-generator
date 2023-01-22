<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            background: darkblue;
            color: white;
        }
    </style>
    <?php

    session_start();

    $pws = $_SESSION['pws'];
    ?>
</head>

<body>

    <h1>Genera una password sicura</h1>
    <h2>New password: <?php echo $pws ?></h2>
</body>

</html>