<!-- File: Application/views/view-data-matakuliah.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matakuliah</title>
</head>

<body>

    <h2>Data Matakuliah</h2>

    <?php if (!empty($kode) && !empty($nama) && !empty($sks)): ?>
    <p>Kode Matakuliah: <?php echo $kode; ?></p>
    <p>Nama Matakuliah: <?php echo $nama; ?></p>
    <p>SKS: <?php echo $sks; ?></p>
    <?php else: ?>
    <p>Data matakuliah tidak tersedia.</p>
    <?php endif; ?>

</body>

</html>