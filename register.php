<html lang="en">
<?php
    //Memasukkan file config
    require_once "index.php";

    $nama = $alamat = $password = "";
    $nama_err = $alamat_err = $password_err = "";

    //Proses data form ketika form di submit
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Validasi nama
        if (empty(trim($_POST["nama"])))
        {
            $nama_err = "Masukkan nama yang valid!";
        } 
        else {
            //Memeriksa apakah dalam database ada email yang sama, diambil dulu datanya
            $sql = "SELECT id FROM users WHERE nama = ?";
            
            if ($stmt = mysqli_prepare($link, $sql))
            {
                //Mengikat variabel pada statemen sebagai parameter
                mysqli_stmt_bind_param($stmt, "s", $param_nama);
                
                //Menyiapkan parameter
                $param_nama = trim($_POST["nama"]);
                
                if(mysqli_stmt_execute($stmt))
                {
                    //MENYIMPAN DATA\\
                    mysqli_stmt_store_result($stmt);
                    
                    if (mysqli_stmt_num_rows($stmt) == 1)
                    {
                        $nama_err = "Nama telah digunakan!";
                    } else {
                        $nama = trim($_POST["nama"]);
                    }
                }
            } else {
                echo "Ada sesuatu yang salah, coba lagi nanti";
            }
            //Close statement
            mysqli_stmt_close($stmt);
        }

//Validasi Alamat
if (empty(trim($_POST["alamat"])))
{
    $alamat_err = "Masukkan Alamat yang dikenal! atau input awal dengan huruf besar!";
} elseif (strlen(trim($_POST["alamat"])) > 25)
{
    $alamat_err = "Alamat tidak dikenal!";
} else {
    $alamat = trim($_POST["alamat"]);
}

//Validasi password
        if (empty(trim($_POST["password"])))
        {
            $password_err = "Masukkan password";
        } elseif(strlen(trim($_POST["password"])) < 6){
            $password_err = "Password minimal 6 karakter";
        } else {
            $password = trim($_POST["password"]);
        }

if (empty($nama_err) && empty($alamat_err) && empty($password_err))
{
//Menyiapkan statement masukkan
$sql = "INSERT INTO users (nama, alamat, password) VALUES (?, ?, ?)";

if ($stmt = mysqli_prepare($link, $sql))
{
    //Mengikat variabel pada statemen sebagai parameter
    mysqli_stmt_bind_param($stmt, "sssss", $param_nama, $param_alamat, $param_password);
    
    //Set parameter
    $param_nama = $nama;
    //Menciptakan hash
    $param_password = password_hash($password, PASSWORD_DEFAULT); 
    $param_alamat = $alamat;
    
    //Usaha eksekusi statemen yang disiapkan
    if (mysqli_stmt_execute($stmt))
    {
        //Arahkan ke login
        header("location: pap.php");
    } else {
        echo "Ada sesuatu yang salah, coba lagi nanti";
    }
    //statemen penutup
    mysqli_stmt_close($stmt);
}
}
//memutus jaringan database
mysqli_close($link);
}

?>

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
        <div class="form-box Register">
        <h2>Register</h2>  
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">"
            <div class="input-box">
                <span class="icon"><ion-icon 
                name="id-card"></ion-icon></span>
                <input type="nama"required>
                <label>Nama Lengkap</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon 
                 name="mail"></ion-icon></span>
                <input type="alamat"required>
                <label>Alamat (Asal Instansi)</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon 
                name="lock-closed"></ion-icon></span>
                <input type="password"required>
                <label>Password</label>
            </div>
            <div class="d-grid gap-2">
                <button href="pap.php" type="submit" class="btn btn-primary" style="background-color:Coral">Register</button>

        </form>
    </div>

</body>
</html>