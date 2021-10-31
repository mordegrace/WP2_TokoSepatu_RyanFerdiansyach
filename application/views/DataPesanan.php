<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <title>Data Pesanan Toko Sepatu</title>
</head>

<body>
    <center>
        <div class="box">
            <p class="display-4">Data Pesanan</p>
            <table class="table-sm">
                <tr>
                    <th>Nama Pembeli </th>
                    <th>:</th>
                    <td><?= $nama; ?></td>
                </tr>
                <tr>
                    <th>No. Telepon </th>
                    <th>:</th>
                    <td><?= $telepon; ?></td>
                </tr>
                <tr>
                    <th>Merk Sepatu </th>
                    <th>:</th>
                    <td><?= $merk; ?></td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu </th>
                    <th>:</th>
                    <td><?= $ukuran; ?></td>
                </tr>
            </table>
            <br>
            <a href="<?= base_url('TokoSepatu'); ?>" class="btn btn-success">Kembali</a>
        </div>
</body>

</html>