<?php
    // Koneksi ke database
    require 'function.php';
    $tabeldestinasi = query("SELECT * FROM tabeldestinasi");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tugas WAD Pertemuan 7</title>
        <style>
        table, th, td {
             border: 3px solid black;
             border-collapse : collapse;
            }
        th,td{
            text-align: center
        }
        </style>
    </head>
<!-- Latihan 1 Buat tabel barang yang terkoneksi dengan database -->
    <body>
        <h1>Destinasi Wisata Indonesia</h1>

        <a href="Tambah.php">Tambah Data Destinasi Wisata Indonesi</a>
        <br><br>

        
        <table cellpadding = "15" cellspacing = "0">
        <tr>
            <th>ID Destinasi Wisata</th>
            <th>Nama Destinasi Wisata</th>
            <th>Gambar</th>
            <th>Lokasi</th>
            <th>Deskripsi</th>
            <th>Fasilitas</th>
            <th>Harga Tiket</th>
            <th>Jam Operasional</th>
            <th>Rating Pengunjung</th>
            <th>Kontak tour guide</th>
            <th>Action</th>
            </tr>

            <?php $i= 1; ?>
            <?php foreach($tabeldestinasi as $row) :?>

                <tr>
                    <td><?= $row["IdDestinasiWisata"] ?></td>
                    <td><?= $row["Nama"] ?></td>
                    <td><img src="img/<?= $row["Gambar"] ?>" alt= "pulaukomodo" width="150" height="150"></td>
                    <td><?= $row["Lokasi"] ?></td>
                    <td><?= $row["Deskripsi"] ?></td>
                    <td><?= $row["Fasilitas"] ?></td>
                    <td><?= $row["Harga_Tiket"] ?></td>
                    <td><?= $row["Jam_Operasional"] ?></td>
                    <td><?= $row["Rating_Pengunjung"] ?></td>
                    <td><?= $row["Kontak_Tour_Guide"] ?></td>
                    <td>
                    <a href="">Ubah</a> |
                    <a href="Hapus.php?IdDestinasiWisata=<?= $row["IdDestinasiWisata"]?>">Hapus</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach?>

                </td>
            </tr>
        </table>

        
    </body>
</html>