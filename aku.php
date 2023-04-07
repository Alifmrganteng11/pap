<html lang="en">
<head>
    <meta charset = "utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <mmeta name="viewport" content="width=devicde-width,initial-scale=1.0">
    <title>Web With Login & Registration</title>
    <link rel="stylesheet" href="style.css">
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
            <button type="submit" class="btn">Login</button>
            <div class="login-register">
                <p>Don't have an account?<a 
                href="#" class="register-link">Register</a>
                </p>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>