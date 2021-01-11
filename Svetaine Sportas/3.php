<html>
    <head>
        <title>Sportas</title>
        <link rel="stylesheet" href="css/styles3.css">
    </head>
    <body>
    <?php

if (!file_exists("Trecias_dvitaskiai.txt")) { // patikrina, ar egzistuoja failas
    exit ("No messages!");
} else { // jei failas yra, jis yra skaitomas, t.y. atidaromas (fopen) ir tekstas is failo nuskaitomas ir perkeliamas i masyva, ir uzdaromas (fclose) "file"
    $fp = fopen ("Trecias_dvitaskiai.txt", "r+");
    $n = file("Trecias_dvitaskiai.txt");
    fclose($fp);

        $pramete = 0;
        $pataike = 0;
    for ($i = 0; $i<count($n); $i++) {
        if ($n[$i] == 0) {
        $pramete++;
        } else  if ($n[$i] == 2) {
        $pataike++;
            }
    }
    $vidurkis = ($pataike/$i)*100;
    echo "<img src='images/pattern.png' alt='pattern'>";
    echo "<h1>Dvitaškių statistika:</h1>";
    echo "Žaidėjas metė dvitaškių: ".$i." kartus <br>";
    echo "Pataikė: ".$pataike." kartus. <br>";
    echo "Nepataikė: ".$pramete." kartus. <br>";
    echo "Žaidėjo pataikymo procentas: ".$vidurkis."<br><br>";
    }

    if (!file_exists("Tritaskiai/3.txt")) { // patikrina, ar egzistuoja failas
        exit ("No messages!");
    } else { // jei failas yra, jis yra skaitomas, t.y. atidaromas (fopen) ir tekstas is failo nuskaitomas ir perkeliamas i masyva, ir uzdaromas (fclose) "file"
        $fp = fopen ("Tritaskiai/3.txt", "r+");
        $n = file("Tritaskiai/3.txt");
        fclose($fp);
    
            $pramete = 0;
            $pataike = 0;
        for ($i = 0; $i<count($n); $i++) {
            if ($n[$i] == 0) {
            $pramete++;
            } else  if ($n[$i] == 3) {
            $pataike++;
                }
        }
        $vidurkis = ($pataike/$i)*100;
        echo "<div class='trit'>";
        echo "<img src='images/pattern.png' alt='pattern'>";
        echo "<h1>Tritaškių statistika:</h1>";
        echo "Žaidėjas metė tritaškių: ".$i." kartus <br>";
        echo "Pataikė: ".$pataike." kartus. <br>";
        echo "Nepataikė: ".$pramete." kartus. <br>";
        echo "Žaidėjo pataikymo procentas: ".$vidurkis."<br><br>";
        echo "<a href='zaidejai.php'>Atgal į žaidėjų statistiką</a>";
        echo "</div>";
            exit;
        }
        
    
        ?>
    </td>
    </tr>
    </table>
    </body>
    </html>

