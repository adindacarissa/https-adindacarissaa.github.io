</<?php
session_start();
include '../config/config.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql ="SELECT * FROM user WHERE username ='$username' AND password= '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        
        if($row['level'] =="1") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "1";
            header("Location: ../siswa_admin.php");

        } else if($row['level'] == "2") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] == "2";
            header("Location: ../siswa_petugas.php");
        }else if($row['level'] == "3") {
            $_SESSION['username'] = "$username";
            $_SESSION['level'] == "3";
            header("Localhost: ../siswa.php");
        }else{
            echo "<script>alert('Gagal Login'); document.location.href = '../index.php';</script>";
        }
    } else{
        echo "script>alert('Email atau Password salah'); document.location.href = '../index.php';</script>";
    }
}
 ?>