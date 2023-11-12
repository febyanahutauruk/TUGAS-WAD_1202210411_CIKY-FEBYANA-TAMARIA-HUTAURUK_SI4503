<?php

require 'function.php';

$IdDestinasiWisata = $_GET["Id"];

if( hapus($IdDestinasiWisata) > 0){
    echo "
            <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php'
            </script>
        ";

} else{
    echo "
            <script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php'
            </script>
        ";
}

?>