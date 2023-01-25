<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="login-forma">
    <h1>Log in</h1>
<form action="login_request.php" method="POST">
    <div class="login-inputs">
    <div>
        <input name="korisnickoIme" type="text" placeholder="Unesite korisnicko ime..." required>
    </div>
    <div>
        <input name="sifra" type="password" placeholder="Unesite sifru..." required>
    </div>
    <div>
        <input type="submit" value="LOG IN">
    </div>
    </div>
</form>
<div class="register-link">
    <p>Nemate nalog? <a href="register.php">Registrujte se</a></p>
</div>
</div>