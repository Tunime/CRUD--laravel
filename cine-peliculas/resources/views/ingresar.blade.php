<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>crear</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		<form class="col-sm-4" action="/create" method="POST">
			{{csrf_field()}}
			<h3>INTRODUCE UNA PELICULA NUEVA</h3>
		<small id="emailHelp" class="form-text text-muted">Introduce una nueva pelicula para uq epuedas verla</small><br>
		  <div class="form-group">
		    <label for="exampleInputEmail1">nombre</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nompre pelicula" name="nombre">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">duracion</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="curacion" name="duracion">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">actor</label>
		    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="nompre del actor" name="actor">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">+ nuevo</button>
		</form>
	</div>
</body>
</html>