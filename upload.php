<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/empresa.css">
    <title>Formulario de Registro</title>
</head>
<body>

	<?php
		if (isset($_POST['enviar-formulario'])){
			$formatosPermitidos = array("png","jpeg","xlsx", "jpg", "gif");
			$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

			if (in_array($extensao, $formatosPermitidos)) {
				$pasta = "arquivo/";
				$temporario = $_FILES['arquivo']['tmp_name'];
				$novoNome = uniqid().".$extensao";

				if (move_uploaded_file($temporario, $pasta.$novoNome)) {
					$mensagem="Upload feito com sucesso";
				}else{
					$mensagem="Erro não foi possivel fazer upload";
				}

			}else{
				$mensagem = "Formato inválido";
			}
			echo $mensagem;
		}
	?>

	<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
		  
	<input class="controls" type="file" name="arquivo"> <br>
			<input class="botons" type="submit" value="Registrar" name="enviar-formulario">
	</form>

	<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" >
		
		


			 <section class="form-register">

            <h4>Cézar Henrique - Tobías</h4>

            <select class="controls" id="layout">
            <option  placeholder="Nome da Empresa"  value="">Tipo Layout</option>
            <option value="basico">AP-Contas a pagar Caixa</option>
            <option value="intermediario">AR-Contas a receber Caixa</option>
            <option value="avançado">PB-Contas a receber Banco</option>
            
        </select>
            <input class="controls" type="text" id="empresa" placeholder="Nome da Empresa">
            <input class="controls" type="text" id="apelidos" placeholder="Segundo campo">
            <input class="controls" type="email" id="correo" placeholder="terceiro campo">
            <input class="controls" type="text" id="numero" placeholder="campo numérico">
          


            
            
            <input class="controls" type="file" name="arquivo"> <br>
			<input class="botons" type="submit" value="Registrar" name="enviar-formulario">
			
            <p><a href="#">Dúvidas?</a></p>
        </section>

		
	</form>
	
</body>
</html>