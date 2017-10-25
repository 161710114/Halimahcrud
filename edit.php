<!DOCTYPE html>
<html>
<head>
</head>
<body>
        <center><h1>Edit</h1></center>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Jurusan</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$b = mysqli_query($koneksi,"SELECT * FROM jurusan WHERE id='$id'");
	$data = mysqli_fetch_array($b);
	?>
	<center><h3>Data Jurusan</h3></center>
	<fieldset style="width: 50%; margin: auto;">
	
		<form action="simpanedit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<p>
			<label>Jurusan</label> <br />
			<input type="text" name="jurusan" class="form-control" value="<?php echo $data['jurusan'];?>" required>
		</p>
		<p>
			 <button type="submit" class="btn btn-danger">Simpan</button>
		</p>
		</form>
	</fieldset>
	<br /><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>