<!DOCTYPE html>
<html>
<head>
</head>
<body >

<center><ul class="nav nav-pills">
 <li role="presentation" class="active"><a href="/Halimahcrud/jurusan/lihatdata.php">Jurusan</a></li>
  <li role="presentation" class="active"><a href="/Halimahcrud/kelas/lihatdata.php">Kelas</a></li>
  <li role="presentation" class="active"><a href="/Halimahcrud/siswa/lihatdata.php">Siswa</a></li>
</ul>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><marquee>DATA JURUSAN</marquee></div>
  <div class="panel-body">
  </div>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jurusan</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <center><td><a class="btn btn-primary" href='tambah.php?id=$data[id]'>+Tambah Data</a></td></center>
	<center>	
<table class="table table-bordered" border="2">
	<th>Nomor</th>
	<th>Jurusan</th>
	<th colspan="3"><center>Opsi</center></th>
	</center>

	<?php
	include ('koneksi.php');
	$a = mysqli_query($koneksi,"SELECT * FROM jurusan");
	$no = 1;
	foreach ($a as $data) {
		echo "<tr>
    	<td> $no </td>
		<td>".$data['jurusan']."</td>
		<td><a class='btn btn-success' href='show.php?id=$data[id]'>Show</a></td>
		<td><a class='btn btn-info' href='edit.php?id=$data[id]'>Edit</a></td>
		<td><a  class='btn btn-warning' href='delete.php?id=$data[id]'>Delete</td>
		</tr>";
	$no++;
	}
?>

<br>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>

