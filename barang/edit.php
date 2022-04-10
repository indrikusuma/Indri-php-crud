<!DOCTYPE html>
<html>
    <head>
        <title>Membuat CRUD Dengan PHP Dan MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="judul">
            <h2>Menampilkan Data Dari Database</h2>
        </div>
        <br/>
        <a href="index.php">Lihat Semua Data</a>
        <br/>
        <h3>Edit Data</h3>
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $brg = mysql_query("SELECT * FROM barang WHERE id='$id'")or die(mysql_error());
        $nomor = 1;
        while($data = mysql_fetch_array($brg)){
        ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Kategori</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" name="kategori" value="<?php echo $data['kategori'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="text" name="beli" value="<?php echo $data['hrg_beli'] ?>"></td>
                    </td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><input type="text" name="jual" value="<?php echo $data['hrg_jual'] ?>"></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </body>
</html>