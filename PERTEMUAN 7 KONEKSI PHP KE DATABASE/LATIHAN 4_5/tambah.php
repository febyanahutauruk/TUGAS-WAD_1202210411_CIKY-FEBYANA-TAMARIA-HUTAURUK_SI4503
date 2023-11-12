<?php
require 'function.php';


// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){


    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php'
            </script>
        ";
    } else{
        echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php'
            </script>
        ";
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Destinasi Wisata</title>
    </head>

    <body>
        <h1>Tambah Destinasi Wisata</h1>

        <form action="" method="post">
        <ul>
            <li>
                <label for="IdDestinasiWisata">ID Destinasi Wisata</label>
                <input type="text" name="IdDestinasiWisata" id="IdDestinasiWisata" required>
            </li>
            <li>
                <label for="Nama">Nama Destinasi Wisata</label>
                <input type="text" name="Nama" id="Nama" required>
            </li>
            <li>
                <label for="Gambar">Gambar Destinasi Wisata</label>
                <input type="text" name="Gambar" id="Gambar" required>
            </li>
            <li>
                <label for="Lokasi">Lokasi Destinasi Wisata</label>
                <input type="text" name="Lokasi" id="Lokasi" required>
            </li>
            <li>
                <label for="Deskripsi">Deskripsi Destinasi Wisata</label>
                <input type="text" name="Deskripsi" id="Deskripsi" required>
            </li>
            <li>
                <label for="Fasilitas">Fasilitas Destinasi Wisata</label>
                <input type="text" name="Fasilitas" id="Fasilitas" required>
            </li>
            <li>
                <label for="Harga_Tiket">Harga Tiket</label>
                <input type="text" name="Harga_Tiket" id="Harga_Tiket" required>
            </li>
            <li>
                <label for="Jam_Operasional">Jam Operasional</label>
                <input type="text" name="Jam_Operasional" id="Jam_Operasional" required>
            </li>
            <li>
                <label for="Rating_Pengunjung">Rating Pengunjung</label>
                <input type="text" name="Rating_Pengunjung" id="Rating_Pengunjung" required>
            </li>
            <li>
                <label for="Kontak_Tour_Guide">Kontak Tour Guide</label>
                <input type="text" name="Kontak_Tour_Guide" id="Kontak_Tour_Guide" required>
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

        </form>
        
    </body>
</html>