<html lang="en">
<head>
    <meta charset = "utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devicde-width,initial-scale=1.0">
    <title>Web With Login & Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
<body>

    <header>
        <img src ="logounairbiru.png" alt="LogoUniversitasAirlangga" width="150"> 
        <h2 class="logo">IIP 2021</h2>
        <nav class="navigation">
            <a href="#">Beranda </a>
            <a href="#">Sirkulasi </a>
            <a href="#"> Data Entri Buku </a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">

        <div class="form-box login">
        <h2>Login</h2>  
        <form action="#">
            <div class="input-box">
                <span class="icon"><ion-icon 
                name="id-card"></ion-icon></span>
                <input type="Username(NIM)"required>
                <label>Username (NIM)</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon 
                name="lock-closed"></ion-icon></span>
                <input type="password"required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Lupa Kata Sandi?</a>
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="background-color:Coral">Login</button>
            <div class="login-register">
                <p>Don't have an account?<a 
                href="register.html" class="register-link">Register</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>

