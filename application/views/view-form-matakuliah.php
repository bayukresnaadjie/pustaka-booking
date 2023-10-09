<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Matakuliah</title>
</head>

<body>

    <h2>Form Matakuliah</h2>

    <form action="process-form.php" method="post">
        <!-- Gantilah process-form.php dengan nama file yang sesuai untuk menangani data form -->

        <label for="kode">Kode Matakuliah:</label>
        <input type="text" id="kode" name="kode" required>

        <br>

        <label for="nama">Nama Matakuliah:</label>
        <input type="text" id="nama" name="nama" required>

        <br>

        <label for="sks">SKS:</label>
        <input type="number" id="sks" name="sks" required>

        <br>

        <button type="submit">Submit</button>
    </form>

</body>

</html>