<!DOCTYPE html>
<HTML>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="annonymous">
<title> </title>
</head>
<body>
    <h3>Tambah Buku</h3>
    <form action="proses_tambah_buku.php" method="post">
        ID Buku :
        <input type="int" name="ID_BUKU" value="" class="form-control">
        Judul Buku : 
        <input type="text" name="JUDUL_BUKU" value="" class="form-control">
        Penulis :
        <input type="text" name="PENULIS" value="" class="form-control">
        Penerbit
        <input type="text" name="PENERBIT" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah buku" class="btn btn-primary">
</form>

<script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
<HTML>