<html>
    <head>
        <title>Sportas</title>
        <link rel="stylesheet" href="css/styles3.css">
    </head>
    <body>
    <?php

if (!file_exists("Pirmas_dvitaskiai.txt")) { // patikrina, ar egzistuoja failas
    exit ("No messages!");
} else { // jei failas yra, jis yra skaitomas, t.y. atidaromas (fopen) ir tekstas is failo nuskaitomas ir perkeliamas i masyva, ir uzdaromas (fclose) "file"
    $fp = fopen ("Pirmas_dvitaskiai.txt", "r+");
    $n = file("Pirmas_dvitaskiai.txt");
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
       // exit;
    }

        if (!file_exists("Tritaskiai/1.txt")) { // patikrina, ar egzistuoja failas
            exit ("No messages!");
        } else { // jei failas yra, jis yra skaitomas, t.y. atidaromas (fopen) ir tekstas is failo nuskaitomas ir perkeliamas i masyva, ir uzdaromas (fclose) "file"
            $fp = fopen ("Tritaskiai/1.txt", "r+");
            $n = file("Tritaskiai/1.txt");
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
    </body>
    </html>

