<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="skyblue">
        <center><h1></h1></center>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Input Jurusan</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<h1 align="center">Input Jurusan</h1>
<fieldset style="width: 50%; margin: auto;">
	

	<form action="simpan.php" method="post">
	<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><label>Jurusan</label></span>
  <input type="text" name="jurusan" class="form-control" aria-describedby="basic-addon1">
</div>

	
	<br />
	<p>
	    <button type="submit" class="btn btn-danger">Simpan</button>
		<button type="reset" class="btn btn-danger" onclick="return
		confirm('hapus data yang telah ada??')">Reset</button>
		
	</p>
	</form>
</fieldset>
<br />
<center><a class="btn btn-primary" href="lihatdata.php">&lt; Tabel Jurusan</a></center>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
