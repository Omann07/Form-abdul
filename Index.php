<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style form.css"/>
</head>
<body>
<form action="form_simpan.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <legend>Form</legend>
        <!-- Nama -->
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Nama" required/>
        
        <!-- NIM -->
            <label>NIM:</label>
            <input type="text" name="nim" placeholder="Nim" required/>
        
        <!-- Dropdown kelas -->
            <label for="kelas">Pilih Kelas:</label>
            <select id="kelas" name="kelas">
                <option value="t3a">T3A</option>
                <option value="t3b">T3B</option>
                <option value="t3c">T3C</option>
                <option value="t3d">T3D</option>
                <option value="t3e">T3E</option>
                <option value="t3f">T3F</option>
            </select>

        <!-- Saran -->
            <label for="saran">Saran</label>
            <textarea name="saran" rows="10" cols="30"></textarea>
        
        <!-- Nama -->
            <input type="radio" id="lk" name="jenis_kelamin" value="laki-laki">
            Laki-Laki
            <input type="radio" id="pm" name="jenis_kelamin" value="perempuan">
            Perempuan
            <br>
            <br>
            <button type="submit" class="btn btn-primary btn-sm">&nbsp;&nbsp;Simpan&nbsp;</button>

        </fieldset>
    </form>
</body>
</html>