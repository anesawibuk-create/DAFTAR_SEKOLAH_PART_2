<?php
// Mulai session untuk manajemen login
session_start();

// Include file koneksi database
include_once '../Models/koneksi.php';

// Cek apakah pengguna sudah login, jika ya, arahkan ke dashboard
if (isset($_SESSION['Nis'])) {
    header("Location: login.php");
    exit();
}

// --- LOGIKA REGISTRASI ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_nis'])) {
    $nis = mysqli_real_escape_string($conn, $_POST['register_nis']);
    $email = mysqli_real_escape_string($conn, $_POST['register_email']);
    $password = $_POST['register_password'];

    // Validasi NIS unik
    $check_query = "SELECT nis FROM siswa WHERE nis = '$nis'";
    $query = "SELECT nis FROM class_siswa WHERE nis = '$nis' AND password = '$password'"; 

$result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) > 0) {
        // NIS sudah terdaftar
        $register_error = "Registrasi Gagal: NIS sudah digunakan.";
    } else {
        // Hash password sebelum disimpan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query INSERT data ke tabel siswa
        $sql = "INSERT INTO siswa (nis, email, password) VALUES ('$nis', '$email', '$hashed_password')";

        if (mysqli_num_rows($result) > 0) {
            $register_success = "Registrasi Berhasil! Silakan Login.";
        } else {
            $register_error = "Registrasi Gagal: " . mysqli_error($conn);
        }
    }
}


// --- LOGIKA LOGIN ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_nis'])) {
    $nis = mysqli_real_escape_string($conn, $_POST['login_nis']);
    $password = $_POST['login_password'];

    // Cari data siswa berdasarkan NIS
    $sql = "SELECT nis, password FROM siswa WHERE nis = '$nis'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Verifikasi password yang dimasukkan dengan hash di database
        if (password_verify($password, $row['password'])) {
            // Login Berhasil! Set Session
            $_SESSION['nis'] = $row['nis'];
            
            // Arahkan ke dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            $login_error = "Login Gagal: Password salah.";
        }
    } else {
        $login_error = "Login Gagal: NIS tidak terdaftar.";
    }
}

// Catatan: Pastikan tabel 'siswa' sudah ada di database 'jadwal_sekolah'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup Form</title>
    <link rel="stylesheet" href="../Assets/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .error-msg { color: red; text-align: center; margin-bottom: 10px; }
        .success-msg { color: green; text-align: center; margin-bottom: 10px; }
    </style>
</head>
  <body>
      <div class="container">
          <div class="form-box login">
              <form action="dashboard.php" method="POST"> 
                  <h1>Login</h1>
                  
                  <?php if (isset($login_error)): ?>
                      <p class="error-msg"><?php echo $login_error; ?></p>
                  <?php endif; ?>

                  <?php if (isset($register_success)): ?>
                      <p class="success-msg"><?php echo $register_success; ?></p>
                  <?php endif; ?>

                  <div class="input-box">
                      <input type="text" placeholder="Nis" name="login_nis" required> 
                      <i class='bx bxs-user'></i>
                  </div>
                  <div class="input-box">
                      <input type="password" placeholder="Password" name="login_password" required> 
                      <i class='bx bxs-lock-alt' ></i>
                  </div>
                  <div class="forgot-link">
                      <a href="#">Lupa Password?</a>
                  </div>
                  <button type="submit" class="btn">Login</button>
                  <p>hubungi kami di bawah ini jika ada laporan bug😃</p>
                  <div class="social-icons">
                      <a href="#"><i class='bx bxl-gmail' ></i></a>
                      <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                      <a href="#"><i class='bx bxl-instagram' ></i></a>
                  </div>
              </form>
          </div>
          
          <div class="form-box register">
              <form action="login.php" method="POST"> 
                  <h1>Registration</h1>

                  <?php if (isset($register_error)): ?>
                      <p class="error-msg"><?php echo $register_error; ?></p>
                  <?php endif; ?>
                  
                  <div class="input-box">
                      <input type="text" placeholder="Nis" name="register_nis" required>
                      <i class='bx bxs-user'></i>
                  </div>
                  <div class="input-box">
                      <input type="email" placeholder="Email" name="register_email" required>
                      <i class='bx bxs-envelope' ></i>
                  </div>
                  <div class="input-box">
                      <input type="password" placeholder="Password" name="register_password" required>
                      <i class='bx bxs-lock-alt' ></i>
                  </div>
                  <button type="submit" class="btn">Register</button>
              </form>
          </div>

          <div class="toggle-box">
              <div class="toggle-panel toggle-left">
                  <h1>welcome</h1>
                  <p>belum punya akun?</p>
                  <button class="btn register-btn">Register</button>
              </div>

              <div class="toggle-panel toggle-right">
                  <h1>selamat datang kembali!</h1>
                  <p>udah punya akun?</p>
                  <button class="btn login-btn">Login</button>
              </div>
          </div>
      </div>

      <script src="SignUp_LogIn_Form.js"></script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>