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
        <?php
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "Data berhasil di input.";
            }else if($pesan == "update"){
                echo "Data berhasil di update.";
            }else if($pesan == "hapus"){
                echo "Data berhasil di hapus.";
            }
        }
        ?>
        <br/>
        <a class="tombol" href="input.php">+ Tambah Data Baru</a>
        <h3>Data Barang</h3>
        <table border="1" class="table">
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Nama</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>

            <?php
            include "koneksi.php";
            $brg = mysql_query("SELECT * FROM barang")or die(mysql_error());
            $nomor = 1;
            while($data = mysql_fetch_array($brg)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td align="right"><?php echo $data['hrg_beli']; ?></td>
                <td align="right"><?php echo $data['hrg_jual']; ?></td>
                <td><?php echo $data['stok']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>