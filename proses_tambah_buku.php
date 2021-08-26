<?php
if($_POST){
    $ID_BUKU=$_POST['ID_BUKU'];
    $JUDUL_BUKU=$_POST['JUDUL_BUKU'];
    $PENULIS=$_POST['PENULIS'];
    $PENERBIT=$_POST['PENERBIT'];
    if(empty($ID_BUKU)){
        echo "<script>alert('ID Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";

    } elseif(empty($JUDUL_BUKU)){
        echo "<script>alert('Judul Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($PENULIS)){
        echo "<script>alert('PENULIS tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($PENERBIT)){
        echo "<script>alert('PENERBIT tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (ID_BUKU, JUDUL_BUKU, PENULIS, PENERBIT) value 
        ('".$ID_BUKU."','".$JUDUL_BUKU."','".$PENULIS."','".$PENERBIT."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Buku');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?>