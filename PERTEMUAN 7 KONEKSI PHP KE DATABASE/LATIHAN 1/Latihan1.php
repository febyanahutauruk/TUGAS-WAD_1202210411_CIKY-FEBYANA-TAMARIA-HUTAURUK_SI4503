<?php
    // Hubungkan file ke database
    $conn = mysqli_connect("localhost", "root", "", "Database_Destinasi_Wisata");

    // Ambil data dari tabel wisata
    $result = mysqli_query($conn, "SELECT * FROM wisata");

    // if (!$result) {
    // echo mysqli_error($conn);
    // }

    // Ambil data wisata (fetch) dari object result
    // mysqli_fetch_row() // Mengembalikan array numerik pake angka dimulai dari 0
    // mysqli_fetch_assoc() // Mengembalikan array associative tinggal tulis nama kolomnya
    // mysqli_fetch_array() // Mengambalikan keduanya
    // mysqli_fetch_object() // Menggunakan objek

    // while ($data = mysqli_fetch_assoc($result)) {
    //     var_dump($data);
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tugas WAD Pertemuan 7</title>
        <style>
            table, th, td {
                border: 3px solid black;
                border-collapse: collapse;
            }
            th, td {
                text-align: center;
            }
        </style>
    </head>

    <!-- Latihan 1 Buat tabel barang yang terkoneksi dengan database -->
    <body>
        <h1>Daftar Destinasi Wisata Indonesia</h1>
        <table cellpadding="10" cellspacing="0">
            <tr>
                <th>ID Destinasi Wisata</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Lokasi</th>
                <th>Deskripsi</th>
                <th>Fasilitas</th>
                <th>Harga Tiket</th>
                <th>Jam Operasional</th>
                <th>Rating Pengunjung</th>
                <th>Kontak Tour Guide</th>

            </tr>

            <?php $i = 1 ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row["IdDestinasiWisata"] ?></td>
                    <td><?= $row["Nama"] ?></td>
                    <td><img src="img/<?= $row["Gambar"] ?>" alt="<?= $row["Nama"] ?>" width="150" height="150"></td>
                    <td><?= $row["Lokasi"] ?></td>
                    <td><?= $row["Deskripsi"] ?></td>
                    <td><?= $row["Fasilitas"] ?></td>
                    <td><?= $row["Harga_Tiket"] ?></td>
                    <td><?= $row["Jam_Operasional"] ?></td>
                    <td><?= $row["Rating_Pengunjung"] ?></td>
                    <td><?= $row["Kontak_Tour_Guide"] ?></td>
                    <td>
                        <a href="#">Ubah</a> |
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endwhile ?>
        </table>
    </body>
</html>
