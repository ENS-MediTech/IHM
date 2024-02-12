<!DOCTYPE html>
<html>
<head>
	<title>Validation des frais par visiteur</title>
	<style>
		body {
			background-color: orange;
		}
		form {
			margin: 0 auto;
			width: 50%;
			padding: 20px;
			background-color: white;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
		}
		h1 {
			text-align: center;
		}
		label {
			display: block;
			margin-top: 10px;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="number"] {
			width: 100%;
			padding: 5px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 10px;
		}
		input[type="radio"] {
			margin-right: 5px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			float: right;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	

	<form>
		<h1>Validation des frais par visiteur</h1>
		<label for="visiteur">Choisir le visiteur :</label>
		<select id="visiteur" name="visiteur">
			<?php
			  
			  
			  
			  $servername = "localhost";
			  $username = "root";
			  $password = "Iroise29";
			  $dbname = "MediTech";
			  
			  $conn = new mysqli($servername, $username, $password, $dbname);
			  
			  
			  if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			  }
			  
			  
			  $sql = "SELECT VIS_NOM FROM visiteur" 
					  
			  if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			  } else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			  }
			  
			  $conn->close();
			  ?>
		</select>
		<label for="mois">Mois :</label>
		<select id="mois" name="mois">
			<option value="janvier">Janvier</option>
			<option value="fevrier">Février</option>
			<option value="mars">Mars</option>
			<option value="avril">Avril</option>
			<option value="mai">Mai</option>
			<option value="juin">Juin</option>
			<option value="juillet">Juillet</option>
			<option value="aout">Aout</option>
			<option value="septembre">Septembre</option>
			<option value="octobre">Octobre</option>
			<option value="novembre">Novembre</option>
			<option value="Decembre">Décembre</option>
		</select>
		<select id="mois" name="mois">
			<option value="janvier">Janvier</option>
			<option value="fevrier">Février</option>
			<option value="mars">Mars</option>
			<option value="avril">Avril</option>
			<option value="mai">Mai</option>
			<option value="juin">Juin</option>
			<option value="juillet">Juillet</option>
			<option value="aout">Aout</option>
			<option value="septembre">Septembre</option>
			<option value="octobre">Octobre</option>
			<option value="novembre">Novembre</option>
			<option value="Decembre">Décembre</option>
		</select>
		<h2>Frais au forfait</h2>
		
			<tr>
			  <td><label for="repas">Repas midi :</label></td>
			  
			  <td><label for="nuitee">Nuitée :</label></td>
			  <td><input type="number" id="nuitee" name="nuitee" min="0" required></td>
			
			  <td><label for="etape">Etape :</label></td>
			  <td><input type="number" id="etape" name="etape" min="0" required></td>
			
			  <td><label for="km">Km :</label></td>
			  <td><input type="number" id="km" name="km" min="0" value="" ></td>
			
			  <td><label for="situation">Situation :</label></td>
			  <td>
				<input type="radio" id="valide" name="situation" value="valide" checked>
				<label for="valide">Validé</label>
				<input type="radio" id="non-valide" name="situation" value="non-valide">
				<label for="non-valide">Non validé</label>
			  </td>
			
			  <td><label for="justificatifs">Nb Justificatifs :</label></td>
			  <td><input type="number" id="justificatifs" name="justificatifs" min="0"></td>
			
			</tr>
			<tr>
			  <td colspan="2"><input type="submit" value="Soumettre la requête"></td>
			</tr>
		
	</form>
</body>
</html>
