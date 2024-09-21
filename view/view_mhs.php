<?php 	

// memanggil koneksi.php untuk mengambil semua data
include('../config/koneksi.php');

// tamplate indexbootstrap
require '../NiceAdmin/index.php';

// instansiasi 
$db = new mahasiswa();
$tampil = new page();
$data_mahasiswa = $db->tampil_data_mahasiswa();

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
<!-- echo fungsi dengan metode polymorph -->
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

<table  class="table table-striped table-sm">

		<tr class="">
			<th>Id mahasiswa</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No. telp</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_mahasiswa as $row){
			?>
			<tr>
				<td><?php echo $row['mahasiswa_id']; ?></td>
				<td><?php echo $row['nim']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['no_telp']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
	</div>
</body>
<!-- inisiasi JS -->

<!-- Vendor JS Files -->
<script src="../NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../NiceAdmin/assets/vendor/quill/quill.min.js"></script>
<script src="../NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../NiceAdmin/assets/js/main.js"></script>

</html>