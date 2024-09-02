<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Registrasi</title>
</head>
<body>
    
    <h1>Halaman Registrasi | Gallery</h1>
    <form action="proses-register.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" id="username" name="username" placeholder="Masukan Username Anda" required></td>
            </tr>
            <tr>
                <td>Passrowd</td>
                <td><input type="password" id="password" name="password" placeholder="Masukan Password Anda" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" id="email" name="email" placeholder="Masukan Email Anda" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Anda" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" id="alamat" name="alamat" placeholder="Masukan Alamat Anda" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Register"> <button><a href="login.php">Login</a></button></td>
            </tr>
        </table>
    </form>

</body>
</html>