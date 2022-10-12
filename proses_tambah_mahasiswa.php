<?php 
if ($_POST) {
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
    $alamat=$_POST['alamat'];
	$usernama=$_POST['usernama'];
    $password=$_POST['password'];
	if (empty($nama)) {
		echo "<script>alert('Nama Tidak Boleh Kosong');location.href='tambah_mahasiswa.php';</script>";
	}elseif (empty($nim)) {
		echo "<script>alert('NIM Tidak Boleh Kosong');location.href='tambah_mahasiswa.php';</script>";
    }elseif (empty($alamat)) {
		echo "<script>alert('Alamat Tidak Boleh Kosong');location.href='tambah_mahasiswa.php';</script>";
    }elseif (empty($usernama)) {
    echo "<script>alert('Usernama Tidak Boleh Kosong');location.href='tambah_mahasiswa.php';</script>";
    }elseif (empty($password)) {
    echo "<script>alert('Password Tidak Boleh Kosong');location.href='tambah_mahasiswa.php';</script>";
    }else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into mahasiswa_uniga (nama, nim, alamat, usernama, password) value ('".$nama."','".$nim."','".$alamat."','".$usernama."','".$password."')");
		if ($insert) {
			echo "<script>alert('Sukses Menambahkan Data');location.href='datamahasiswa.php';</script>";
		}else{
			echo "<script>alert('Gagal Menambahkan Data');location.href='tambah_mahasiswa.php';</script>";
		}
	}
}
}
?>