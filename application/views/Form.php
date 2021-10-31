<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <title>Form Pembelian Sepatu</title>
</head>

<body>
    <?php echo validation_errors(); ?>
    <center>
        <form action="<?= base_url('TokoSepatu/pesan'); ?>" method="POST">
            <div class="form-group" style="margin-top: 50px;">
                <table>
                    <h1 class="display-4">Toko Sepatu</h1>
                    <tr>

                        <td>
                            <small>Nama Pembeli</small>
                            <input type="text" name="nama" class="form-control mt-2 mb-2">
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <small>No. Telepon</small>
                            <input type="text" name="telepon" class="form-control mt-2 mb-2">
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <small>Merk Sepatu</small>
                            <select name="merk" class="form-control mt-2 mb-2">
                                <option value="">Pilih Merk Sepatu</option>
                                <option value="Nike 375.000">Nike 375.000</option>
                                <option value="Adidas 300.000">Adidas 300.000</option>
                                <option value="Kickers 250.000">Kickers 250.000</option>
                                <option value="Eiger 275.000">Eiger 275.000</option>
                                <option value="Bucherri 400.000">Bucherri 400.000</option>
                            </select>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <small>Ukuran Sepatu</small>
                            <select name="ukuran" class="form-control mt-2">
                                <option value="">Pilih Ukuran Sepatu</option>
                                <option value="32">32</option>
                                <option value="33">33</option>
                                <option value="34">34</option>
                                <option value="35">35</option>
                                <option value="36">36</option>
                            </select>
                        </td>
                    </tr>

                </table>
            </div>

            <br>
            <input type="submit" name="submit" value="Masukkan Pesanan" class="btn btn-info">
        </form>
</body>

</html>