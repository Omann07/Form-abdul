<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Data Form</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Saran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "form";

                $conn = new mysqli($host, $user, $pass, $db);

                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM isi_form";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>".$row['Id']."</td>
                                <td>".$row['nama']."</td>
                                <td>".$row['nim']."</td>
                                <td>".$row['kelas']."</td>
                                <td>".$row['jenis_kelamin']."</td>
                                <td>".$row['saran']."</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="Index.php" class="btn btn-dark">Back</a>

    </div>
</body>
</html>
