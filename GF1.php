<!DOCTYPE html>
<html>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E1EEFF;
        }

        h2 {
            color:#49A5EA;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-color: #AAC6ED;
            background-color: #F4FAFF;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 3px solid #A7C5ED;
            background-color: #F4FAFF;
        }

        th {
            background-color: #E9EFF6;
            color: rgb(1, 1, 1);
        }

        button {
            background-color: #F4FAFF;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            cursor: pointer;
        }

        .color {
            background-color: #407daf;
            color: rgb(255, 0, 0);
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            cursor: pointer;
        }
        
        .backd {
            background-color: #E1EEFF;
        }
    </style>
</head>
<body>

<h2>LISTE DES VISITEURS</h2>

<table>
    
      <a href="GF2.php">
        <button class="color">
          <span style="font-size: 20px;">+</span> Ajouter un visiteur
        </button>
      </a>
    
  <tr>
    <td>Nom</td>
    <td>Prénom</td> 
    <td>Date</td>
    <td>supprimer</td>
    <td>modifier</td>
    
  </tr>

  <?php 
  ini_set('display_errors', 1);
  // Inclusion du fichier PHP pour afficher la liste des visiteurs
  include 'connexion.php';
// Ã‰tablir la connexion Ã  la base de donnÃ©es
   $conn = connect();
  // Ã‰crire la requÃªte SQL pour sÃ©lectionner les donnÃ©es des visiteurs
  $sql = "SELECT VIS_NOM, VIS_PRENOM, VIS_DATE_EMBAUCHE FROM visiteur";
  $resultat = $conn->query($sql);
  
// VÃ©rifier si des rÃ©sultats sont retournÃ©s
if ($resultat->num_rows > 0) {
    // Afficher chaque visiteur dans le tableau
    while($row = $resultat->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['VIS_NOM'] . '</td>';
        echo '<td>' . $row['VIS_PRENOM'] . '</td>';
        echo '<td>' . $row['VIS_DATE_EMBAUCHE'] . '</td>';
        echo '<td></td>'; // Bouton de suppression
        echo '<td></td>'; // Bouton de modification
        echo '</tr>';
    }
} else {
    // Afficher un message si aucun visiteur n'est trouvÃ©
    echo "<tr><td colspan='6'>Aucun visiteur trouvÃ©.</td></tr>";
}
?>
</table>

</body>
</html>
