<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="register-forma">
    <h1>Register</h1>

    <form action="register_request.php" method="post">
        <div class="register-inputs">
        <div>
            <input name="korisnickoIme" type="text" placeholder="Unesite korisnicko ime..." required>
        </div>
        <div>
            <input name="password" type="password" placeholder="Unesite sifru..." required>
        </div>
        <div>
            <input type="submit" value="REGISTER">
        </div>
        </div>
    </form>
    <p>Imate nalog? <a href="login.php">Prijavite se</a></p>
</div>