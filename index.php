<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Sistema de Votação</title>
</head>
<body class="bg-body-secondary">
	<div class="container text-center bg-white">
	<div class="row">   
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
				<div class="mb-3" align="left">
                        <a class="navbar-brand" href="#">SISTEMA DE VOTAÇÃO</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
                     </button>
                        </div>
                    </div>
                  </div>
                </nav>
            </div> 

		<h1>Qual é a sua cor favorita?</h1>
		<form method="POST" action="votar.php"> 
			<div class="form-group">
			<div class="mb-3" align="left">
					<input class="form-check-input" type="radio" name="cor" id="Azul" value="Azul">
					<label class="form-check-label" for="Azul">
						Azul
					</label>
				</div>
				<div class="mb-3" align="left">
					<input class="form-check-input" type="radio" name="cor" id="Amarelo" value="Amarelo">
					<label class="form-check-label" for="Amarelo">
						Amarelo
					</label>
				</div>
				<div class="mb-3" align="left">
					<input class="form-check-input" type="radio" name="cor" id="Vermelho" value="Vermelho">
					<label class="form-check-label" for="Vermelho">
						Vermelho
					</label>
				</div>
				<div class="mb-3" align="left">
					<input class="form-check-input" type="radio" name="cor" id="Preto" value="Preto">
					<label class="form-check-label" for="Preto">
						Preto
					</label>
				</div>
			</div>
			<div class="mb-3" align="left">
			<button type="submit" class="btn btn-primary">Votar</button>
</div>
		</form>
	</div>
</body>
</html>
