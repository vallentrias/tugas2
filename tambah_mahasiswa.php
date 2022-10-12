<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta charset="utf-8">
</head>

<body>
    <h3>Tambah data mahasiswa</h3>
<form action="proses_tambah_mahasiswa.php" method="POST">
    nama    :
    <input type="text" name ="nama" class="form-control" placeholder="masukkan nama disini"><br>
    nim     :
    <input type="number" name="nim" class="form-control" placeholder="masukkan nim disini"> <br>
    alamat    :
    <textarea name="alamat" cols="30" rows="10" class="form-control" placeholder="masukkan alamat disini"></textarea> <br>
    username     :
    <input type="text" name="usernama" class="form-control" placeholder="masukkan usename disini"> <br>
    password     :
    <input type="password" name="password" class="form-control" placeholder="masukkan password disini">
    <input type="submit" name="simpan" value="tambah mahasiswa" class="btn btn-primary">
</from>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
</body>
</html>