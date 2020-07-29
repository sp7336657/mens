	<?php 
	// base de datos
	  require_once "base_datos.php";

	// definir las variable de la base de datos
	 $username = $email = $password = "";
	 $username_err = $email_err = $password_err = "";

	 if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty(trim($_POST["username"]))){
		$username_err = "por favor, ingrese su nombre de usuario";
	}else{
		$sql = "SELECT id FROM usuarios where usuario = ?";

		if($stmt = mysqli_prepare($link, $sql)){
			mysqli_stmt_bind_param($stmt, "s", $param_username);

			$param_username = trim($_POST["username"]);

			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);

				if(mysqli_stmt_num_rows($stmt) == 1){
					$username_err = "este nombre de userario  ya existe";
				}else{
					$username = trim($_POST["username"]);
				}
			}else{
				echo "algo salio mal";
			}
		}
	}

	if (empty(trim($_POST["email"]))){
		$email_err = "por favor, ingrese su nombre de gmail";
	}else{
		$sql = "SELECT id FROM usuarios where email = ?";

		if($stmt = mysqli_prepare($link, $sql)){
			mysqli_stmt_bind_param($stmt, "s", $param_email);

			$param_email = trim($_POST["email"]);

			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);

				if (mysqli_stmt_num_rows($stmt) == 1){
					$email_err = "este nombre de gmail  ya existe";
				}else{
					$email = trim($_POST["email"]);
				}
			}else{
				echo "algo salio mal";
			}
		}
	}
	 
	if(empty(trim($_POST["password"]))){
		$password_err = "por favor ingrese una clave";
	}elseif (strlen(trim($_POST["password"])) < 4){
		$password_err = "la clave de tener almenos 4 caracteres";
	} else{
		$password = trim($_POST["password"]);
	}


	if (empty($username_err) && empty($email_err) && empty($password_err))
	{
		$sql = "INSERT INTO usuarios (usuario, email, clave) VALUES (?, ?, ?)";

		if ($stmt = mysqli_prepare($link, $sql)) {
			mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

			$param_username = $username;
			$param_email = $email;
			$param_password = password_hash($password, $PASSWORD_DEFAULT);

			if (mysqli_stmt_execute($stmt)){
				header("location: index.php");
			}else{
				echo "algo salio mal intentalo mas tarde";
			}
		}
	}

	mysqli_close($link);

	 }

	 ?>