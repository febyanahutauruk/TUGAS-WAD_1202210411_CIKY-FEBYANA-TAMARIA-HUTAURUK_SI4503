<?php
require 'function.php';

//ambil data di url

$IdDestinasiWisata = $_GET["IdDestinasiWisata"];

// query data boneka berdasarkan kode
$tabeldestinasi= query("SELECT * FROM tabeldestinasi WHERE IdDestinasiWisata = '$IdDestinasiWisata'")[0];


// cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST["submit"])){


    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php'
            </script>
        ";
    } else{
        echo "
            <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php'
            </script>
        ";
    }

    
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ubah Data Destinasi Wisata</title>
    </head>

    <body>
        <h1>Ubah Data Destinasi Wisata</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="IdDestinasiWisata">Id Destinasi Wisata</label>
                    <input type="text" name = "IdDestinasiWisata" id="IdDestinasiWisata" required value="<?= $tabeldestinasi['IdDestinasiWisata']?>">
                </li>
                <li>
                    <label for="Nama">Nama</label>
                    <input type="text" name = "Nama" id="Nama" required value="<?= $tabeldestinasi['Nama']?>">
                </li>
                <li>
                    <label for="Gambar">Gambar</label>
                    <input type="text" name = "Gambar" id="Gambar" required value="<?= $tabeldestinasi['Gambar']?>">
                </li>
                <li>
                    <label for="Lokasi">Lokasi</label>
                    <input type="text" name = "Lokasi" id="Lokasi" required value="<?= $tabeldestinasi['Lokasi']?>">
                </li>
                <li>
                    <label for="Deskripsi">Deskripsi</label>
                    <input type="text" name = "Deskripsi" id="Deskripsi" value="<?= $tabeldestinasi['Deskripsi' ]?>">
                </li>
                <li>
                    <label for="Fasilitas">Fasilitas</label>
                    <input type="text" name = "Fasilitas" id="Fasilitas" value="<?= $tabeldestinasi['Fasilitas' ]?>">
                </li>
                <li>
                    <label for="Harga_Tiket">Harga Tiket</label>
                    <input type="text" name = "Harga_Tiket" id="Harga_Tiket" value="<?= $tabeldestinasi['Harga_Tiket' ]?>">
                </li>
                <li>
                    <label for="Jam_Operasional">Jam Operasional</label>
                    <input type="text" name = "Jam_Operasional" id="Jam_Operasional" value="<?= $tabeldestinasi['Jam_Operasional' ]?>">
                </li>
                <li>
                    <label for="Rating_Pengunjung">Rating Pengunjung</label>
                    <input type="text" name = "Rating_Pengunjung" id="Rating_Pengunjung" value="<?= $tabeldestinasi['Rating_Pengunjung' ]?>">
                </li>
                <li>
                    <label for="Kontak_Tour_Guide">Kontak Tour Guide</label>
                    <input type="text" name = "Kontak_Tour_Guide" id="Kontak_Tour_Guide" value="<?= $tabeldestinasi['Kontak_Tour_Guide' ]?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>

        </form>
        
    </body>
</html>