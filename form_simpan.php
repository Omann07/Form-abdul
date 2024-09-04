<?php
include "koneksi.php";

// Mengambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$saran = $_POST['saran'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Query untuk memasukkan data ke tabel
$sql = "INSERT INTO isi_form (nama, nim, kelas, saran, jenis_kelamin) VALUES ('$nama', '$nim', '$kelas', '$saran', '$jenis_kelamin')";

if ($conn->query($sql) === TRUE) {
  header("location:form_tampil.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>