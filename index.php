<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prodavnica</title>
    <style>
        body {
    background: linear-gradient(to right, rgba(60,134,231,1),rgba(60,231,189,1));
    background-size: 400% 400%;
    animation: animateGradient 10s ease-in-out infinite;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

@keyframes animateGradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
    </style>
</head>
<body>
    <div class="body-container">
       <a href="login.php"><input type="button" value="LOG IN"></a>
       <a href="register.php"><input type="button" value="REGISTER"></a>
    </div>
</body>
</html>