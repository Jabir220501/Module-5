<?php
include("assets/models/connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Cars</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <button class="submit"><a href="./add.php">Add Vehicle</a></button>

        <table>
            <tr>
                <th>Kenteken</th>
                <th>Merk</th>
                <th>Kleur</th>
                <th>Bouwjaar</th>
                <th>Prijs</th>
                <th class="operation">Operations</th>
            </tr>
            <?php
                $sql = "SELECT * FROM `autos`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                    <td>" .$row['kenteken'] . "</td>
                    <td>" . $row['merk'] . "</td>
                    <td>" . $row['kleur'] . "</td>
                    <td>" . $row['bouwjaar'] . "</td>
                    <td>" .'$'. $row['prijs'] . "</td>
                    <td id='operation'>
                        <form action='./update.php' method='post'> 
                            <input type='hidden' value ='".$row['id']."' name='id'></input>
                            <input type='submit' name='submit' value='Update' class='update'></input>
                        </form>
                        <form action='./assets/models/delete.php' method='post'> 
                            <input type='hidden' value ='".$row['id']."' name='id'></input>
                            <input type='submit' name='submit' value='Delete' class='delete'></input>
                        </form>
                    </td>
                </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>