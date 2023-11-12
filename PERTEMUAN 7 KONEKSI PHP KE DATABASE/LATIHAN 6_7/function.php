<?php

$conn = mysqli_connect("localhost","root","","database_destinasi_wisata_indonesia");

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
  }

function tambah($data){
      global $conn;

      $IdDestinasiWisata = htmlspecialchars($data["IdDestinasiWisata"]);
      $Nama = htmlspecialchars($data["Nama"]);
      $Gambar = htmlspecialchars($data["Gambar"]);
      $Lokasi = htmlspecialchars($data["Lokasi"]);
      $Deskripsi= htmlspecialchars($data["Deskripsi"]);
      $Fasilitas = htmlspecialchars($data["Fasilitas"]);
      $Harga_Tiket = htmlspecialchars($data["Harga_Tiket"]);
      $Jam_Operasional = htmlspecialchars($data["Jam_Operasional"]);
      $Rating_Pengunjung = htmlspecialchars($data["Rating_Pengunjung"]);
      $Kontak_Tour_Guide = htmlspecialchars($data["Kontak_Tour_Guide"]);

          //query insert data
    $query = "INSERT INTO tabeldestinasi
    VALUES
    ('$IdDestinasiWisata','$Nama','$Gambar','$Lokasi','$Deskripsi', '$Fasilitas','$Harga_Tiket','$Jam_Operasional','$Rating_Pengunjung','$Kontak_Tour_Guide')
    ";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

function hapus($IdDestinasiWisata){
  global $conn;
  mysqli_query($conn, "DELETE FROM tabeldestinasi WHERE IdDestinasiWisata = '$IdDestinasiWisata'");

  return mysqli_affected_rows($conn);
}
?>