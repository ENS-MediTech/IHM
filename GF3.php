<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./jecpas2_files/all.min.css">
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

        body {
            background-color: #E1EEFF;
        }

        color {
            background-color: #407daf;
            color: rgb(255, 0, 0);
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            cursor: pointer;
        }
    

    </style>
    <!-- Your CSS styles here -->
</head>
<body>
    <div class = "backd">
        <h2>Fiche de frais de : VILLECHALANNE <button class="color" id="add-button"><i class="fas fa-plus"></i> Ajouter</button></h2>
        <table>
            <tr>
                <th>Date</th>
                <th>supprimer</th>
                <th>modifier</th>
                <th>voir</th>
            </tr>
            <?php

            // Create connection
            $conn = new mysqli('localhost', 'root', 'Iroise29' ,'MediTech', 3306);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT FFR_ANNEE, FRR_MOIS, FRR_MONTANT_VALIDE, FRR_NB_JUSTIFICATIFS FROM fiche_frais";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["FFR_ANNEE"] . "/" . $row["FRR_MOIS"] . " " . $row["FRR_MONTANT_VALIDE"] . "€ " . $row["FRR_NB_JUSTIFICATIFS"] . "</td>";
                echo "<td><button><img src='poubelle.png'></button></td>";
                echo "<td><button><img src='modi.png'></button></td>";
                echo "<td><button><img src='ou.png'></button></td>";
                echo "</tr>";
              }
            } else {
              echo "0 results";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
