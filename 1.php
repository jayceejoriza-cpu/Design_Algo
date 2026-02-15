<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Algo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylepages.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="container-head">
            <p align="left" id="button"> <a href="index.php #act" class = "btn btn-info">Back to Main</a></p>
            <h1>Counting the Frequency in an Array</h1>
            <p align="right" id="button"> <a href="2.php" class = "btn btn-info">Next</a></p>
            </div>
        <div class="container-body">
        <div class="map-img">
                <img src="images/1map.jpg">
            </div>
    <form id="form1" method="post">
    <div class="button">
        
    <button type="submit" name="city" id="buttonB" value="Mangan-Vaca">B</button>
    </div>
    <div class="button">
        <div class="line" id="line1"></div>
        <div class="line" id="line2"></div>
        <div class="line" id="line3"></div>
        <div class="line" id="line4"></div>
        <div class="line" id="line5"></div>
        <button type="submit" name="city" id="buttonA"  value="KNS">A</button>
        <button type="submit" name="city" id="buttonD"  value="Aningway">D</button>
    </div>
    <div class="button">
        <button type="submit" name="city" id="buttonC"  value="Cawag">C</button>
    </div>    
<?php
session_start();

/*
     A = KNS
     B = Mangan-Vaca
     C = Cawag
     D = Aningway
*/
$costs = [
    'KNS' => ['Mangan-Vaca' => 10, 'Cawag' => 15],
    'Mangan-Vaca' => ['Cawag' => 5, 'Aningway' => 12],
    'Cawag' => ['Mangan-Vaca' => 5,'Aningway' => 10],
    'Aningway' => []
];

if (!isset($_SESSION['currentCity'])) {
    $_SESSION['currentCity'] = 'KNS';
    $_SESSION['totalCost'] = 0;
    $_SESSION['path'] = ['KNS'];
}

if (isset($_POST['city'])) {
    $selectedCity = $_POST['city'];
    if (array_key_exists($selectedCity, $costs[$_SESSION['currentCity']])) {
        $_SESSION['totalCost'] += $costs[$_SESSION['currentCity']][$selectedCity];
        $_SESSION['currentCity'] = $selectedCity;
        $_SESSION['path'][] = $selectedCity;
    }
}

if ($_SESSION['currentCity'] == 'Aningway') {
    if ($_SESSION['path'] === ['KNS', 'Mangan-Vaca', 'Aningway']) {
        echo "Path <h5>" . implode(' -> ', $_SESSION['path']) . " has the minimum cost.</h5><br>";
    } else {
        echo "Path <h5>" . implode(' -> ', $_SESSION['path']) . " is not minimum cost.</h5><br>";
    }
    echo "Destination reached with total cost: <h4>₱" . $_SESSION['totalCost'] . "</h4><br>";
    session_destroy();
} else {
    echo "Current Path: <h4>" . implode(' -> ', $_SESSION['path']) . "</h4><br>";
    echo "Current Cost: <h4>₱" . $_SESSION['totalCost'] . "</h4><br>";
}
?>

    </form>
</body>
</html>