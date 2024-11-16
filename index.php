<?php 
    session_start();

    if (!isset($_SESSION['user'])){
        header('Location: Login.php');
    } else {
        $user = $_SESSION['user'];
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>NIGGA~</h1>
</body>
</html>