<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>IMC</title>
  </head>
  <body>
    <h1 style="text-align: center; padding-top: 65px; padding-bottom: 50px;">Índice de Massa Corporal</h1>
	<div class="container">
	<form name="form_imc" id="form_imc" method="POST" enctype="multipart/form-data" action="resultado.php" >
	  <div class="form-group">
		<label for="altura">Altura</label>
		<input type="number" step="0.01" min="1" class="form-control" id="altura" name="altura">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Peso</label>
		<input type="number" step="0.01" min="1" class="form-control" id="peso" name="peso">
	  </div>
	  <button type="submit" class="btn btn-primary">Calcular</button>
	</form>
	</div>
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>