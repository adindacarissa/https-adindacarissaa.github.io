<?php
include '../config/config.php';
session_start();
if($_SESSION['level'] == "") {
    header("Location: ../index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Administrator</title>
</head>
<body>
    <div clas="container p-4">
        <h5>Tambah Siswa: </h5>
        <form method="post" action="../controller/tambah_siswa.php">
            <label for="">Nama :</label>
            <input type="text" name="nama" required>
            <br></br>
            <label for="">Tempat Lahir :</label>
            <input type="text" name="tplahir" required>
            <br></br>
            <label for="">Tanggal Lahir :</label>
            <input type="date" name="tglahir" required>
            <br></br>
            <label for="">Alamat :</label>
            <br>
            <textarea name="alamat" id="" cols="30" rows="5" required></textarea>
            <br></br>
            <label for="">Hobi :</label>
            <input type="text" name="hobi" required>
            <br></br>
            <label for="">Cita-cita :</label>
            <input type="text" name="cita_cita" required>
            <br></br>
            <label for="">Jumlah Saudara :</label>
            <input type="int" name="jmsaudara" required>
            <br></br>
            <label for="">Kelas :</label>
            <select name="idkelas" id="" required>
                <option value="1">XI RPL 1</option>
                <option value="2">XI ANM 1</option>
                <option value="3">XI DKV 1</option>
            </select>
            <br></br>
            <label for="">Agama :</label>
            <select name="idagama" id="" required>
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Katolik</option>
                <option value="4">Hindu</option>
            </select>
            <br></br>
            <input type="submit" name="save" value="submit">
        </form>
    </div>
    <div class="container p-4">
        <table border="1" width="88%" align="center" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Hobi</th>
                    <th>Cita-cita</th>
                    <th>Jumlah Saudara</th>
                    <th>Kelas</th>
                    <th>Agama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "SELECT siswa.id, siswa.nama, siswa.tplahir, siswa.tglahir, siswa.alamat, siswa.hobi, siswa.cita_cita, siswa.jm_saudara, siswa.namakelas, siswa.agama";
                $query = mysqli_query($conn, $sql);
                while ($siswa = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?=$siswa['nama']?></td>
                        <td><?=$siswa['tplahir']?></td>
                        <td><?=$siswa['tglahir']?></td>
                        <td><?=$siswa['alamat']?></td>
                        <td><?=$siswa['hobi']?></td>
                        <td><?=$siswa['cita_cita']?></td>
                        <td><?=$siswa['jm_saudara']?></td>
                        <td><?=$siswa['namakelas']?></td>
                        <td><?=$siswa['namaagama']?></td>
                        <td>
                            <button type="button" class="btn" bg-primary"> <a href="edit_siswa.php?id=<?= $siswa['id'] ?>"> Update </a> </button> |
                            <button type="button" class="btn" bg-danger"> <a href="../controller/hapus_siswa.php?id=<?= $siswa['id'] ?>"> Delete </a> </button>
                        </td>
                    </tr>
                <?php
                } 
                ?>
            </tbody>
        </table>
    </div>
    <div class="container p-4">
        <form action="../controller/logout.php" method="post">
            <div class="input-group">
                <button class="btn" bg-danger text-white">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>