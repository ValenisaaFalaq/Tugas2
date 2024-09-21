<?php 
// memanggil koneksi.php untuk mengambil semua data
include('../config/koneksi.php');

// tamplate index bootstrap
require '../NiceAdmin/index.php';

// instansiasi 
$db = new nilai();
$tampil = new page();

// menampilkan data remidi matkul dengan id MK001 saja
$nilai_matkul = $db->matkul_remidi("MK001");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	 <!-- Favicons -->
	 <link href="http://localhost/NiceAdmin/assets/img/favicon.png" rel="icon">
  		<link href="http://localhost/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://localhost/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="http://localhost/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://localhost/NiceAdmin/assets/css/style.css" rel="stylesheet">

</head>
<body>
<div class="col-sm-10 py-2 mx-auto">
<div class="container-fluid">
<div class="pagetitle">

<!-- mencetak function judul dengan metode polymorp -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">
			<?php
			echo $tampil->judul($db);
			?>
		  </li>
        </ol>
      </nav>
    </div>

<!-- pembuatan table  -->
<table  class="table table-striped table-sm">
		<tr>
			<th>Tanggal Perbaikan</th>
			<th>Keterangan</th>
			<th>Id Mahasiswa</th>
			<th>Mata Kuliah</th>
			<th>Semester</th>
			<th>Nilai</th>
			<th>Dosen id</th>
		</tr>

		<?php 
		// pemanggilan data dengan perulangan
		foreach($nilai_matkul as $row){
		?>
		
			<tr>

				<td><?php echo $row['tgl_perbaikan']; ?></td>
				<td><?php echo $row['keteragan']; ?></td>
				<td><?php echo $row['mahasiswa_id']; ?></td>
				<td><?php echo $row['matkul_id']; ?></td>
				<td><?php echo $row['semester_id']; ?></td>
				<td><?php echo $row['nilai_id']; ?></td>
				<td><?php echo $row['dosen_id']; ?></td>

			</tr>
			<?php 
		}
		?>
	</table>
</body>

<!-- Vendor JS Files -->
<script src="../NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../NiceAdmin/assets/vendor/quill/quill.min.js"></script>
<script src="../NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../NiceAdmin/assets/js/main.js"></script>

</html>