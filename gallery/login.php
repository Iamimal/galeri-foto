<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Login</title>
</head>
<body>
    
    <h1>Halaman Login | Gallery</h1>
    <form action="proses-login.php" method="post">
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
                <td><input type="submit" value="login"> <button><a href="register.php">Registrasi</a></button></td>
            </tr>
            
        </table>
    </form>

</body>
</html> -->
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon" />
  <title>Gallery - Login & Register</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="proses-login.php" method="post">
        <input type="text" name="username" placeholder="Masukan Username Anda">
        <input type="password" name="password" placeholder="Masukan Password Anda">
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label><br>
         <a href="index.php">Kembali Ke Halaman Utama</a>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Register</header>
      <form action="proses-register.php" method="post">
        <input type="text" name="username" placeholder="Masukan Username Anda">
        <input type="text" name="namalengkap" placeholder="Masukan Nama Lengkap Anda">
        <input type="password" name="password" placeholder="Masukan Password Anda">
        <input type="text" name="alamat" placeholder="Masukan Alamat Anda">
        <input type="text" name="email" placeholder="Masukan Email Anda">
        <input type="submit" class="button" value="Signup">

      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>