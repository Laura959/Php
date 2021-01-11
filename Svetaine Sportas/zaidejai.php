<html>
    <head>
        <title>Sportas</title>
        <link rel="stylesheet" href="css/styles2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php

   
$mysqli = mysqli_connect("localhost","root", "[ems]", "sportas");

if(mysqli_connect_errno()){

printf("Connect failed: %s\n", mysqli_connect_error());

exit();

} else{
    $sql = "SELECT VARDAS, PAVARDE, NUOTRAUKA FROM sportininkai";

    $res = mysqli_query($mysqli, $sql);
    $i = 1;
    echo "<img class='imgg' src='images/pattern.png' alt='pattern'>";
    echo "<h1>VTVPMC</h1>";
    echo "<table>";
    echo "<tr><th>VARDAS</th><th>PAVARDE</th><th>NUOTRAUKA</th></tr>";
        while($row = mysqli_fetch_array($res)) { // kol yra row tol sukasi ciklas kaip suprantu
        
          echo "<tr><td><a href='".$i.".php'> " . $row['VARDAS']. "</a></td><td>" . $row['PAVARDE']. "</td><td><img src='" . $row['NUOTRAUKA']. "' alt='" .$row['VARDAS']."'></td></tr>";
          $i++;
        }
    echo "</table>";
}

    $mysqli = mysqli_connect("localhost","root", "[ems]", "sportas");

if(mysqli_connect_errno()){

printf("Connect failed: %s\n", mysqli_connect_error());

exit();

} else{
    $sql = "SELECT VARDAS, PAVARDE, NUOTRAUKA FROM sportininkai2";

    $res = mysqli_query($mysqli, $sql);

    $i = 6;
    echo "<img class='imgg' src='images/pattern.png' alt='pattern'>";
    echo "<h1>LOS ANGELES LAKERS</h1>";
    echo "<table>";
    echo "<tr><th>VARDAS</th><th>PAVARDE</th><th>NUOTRAUKA</th></tr>";
        while($row = mysqli_fetch_array($res)) { // kol yra row tol sukasi ciklas kaip suprantu
        
          echo "<tr><td><a href='".$i.".php'> " . $row['VARDAS']. "</a></td><td>" . $row['PAVARDE']. "</td><td><img src='" . $row['NUOTRAUKA']. "' alt='" .$row['VARDAS']."'></td></tr>";
          $i++;
        }
    echo "</table>";

    echo "<a class='atgal' href='index.php'>Atgal į varžybų sąrašą</a>";
}
    mysqli_close($mysqli);


    ?>
    </body>
    </html>