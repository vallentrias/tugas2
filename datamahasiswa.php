<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Perpustakaan</title>
</head>
<body>
	<h3>Data Mahasiswa</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
                <th>ALAMAT</th>
                <th>usernama</th>
                <th>password</th>
				<th>AKSI</th>

			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($conn,"select *from
			mahasiswa_uniga");
			$no=0;
			while($data_mahasiswa=mysqli_fetch_array ($qry_mahasiswa)){
				$no++;?>
			<tr>
                <td><?=$no?></td>
				<td><?=$data_mahasiswa['nama']?></td>
				<td><?=$data_mahasiswa["nim"]?></td>
                <td><?=$data_mahasiswa["alamat"]?></td>
                <td><?=$data_mahasiswa["username"]?></td>
                <td><?=$data_mahasiswa["password"]?></td>
                
            <td><a href = "edit.php?.id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"
            class= "btn btn-success">edit</a>
            <a href ="hapus.php?id_mahasiswa=<$data_mahasiswa[id_mahasiswa']?>"
            onclick="return confirm('apakah anda yakin menghapus data ini?')"class="btn btn-danger">
            hapus</a></td>
			</tr>
			<?php
			
			}
			?>
		</tbody>
	</table>
    <center>
<a href="tambah_mahasiswa.php" class="btn btn-primary">tambah mahasiswa</a>
</body>
</html>