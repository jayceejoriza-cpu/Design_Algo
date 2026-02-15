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
            <h1>Euclid's Algorithm</h1>
            <p align="right" id="button"> <a href="4.php" class = "btn btn-info">Next</a></p>
            </div>
        <div class="container-body">
            <form method="POST">
        <label><small>Input Numbers To Find GCD</small> </label>
        <br>
		<input type = "number" name ="amount1" placeholder = "Input Number 1 " required></input>
        <input type = "number" name ="amount2" placeholder = "Input Number 2" required></input>
        <button class = "btn btn-success" type = "submit" name = "submit">Calculate</button>
      <br>
<hr>

<?php
function gcd($a, $b) {
    
    if ($a < $b) {
        list($a, $b) = array($b, $a);
    }

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}


$number1 = (isset($_POST['amount1'])) ? (int)$_POST['amount1'] : 0;
$number2 = (isset($_POST['amount2'])) ? (int)$_POST['amount2'] : 0;

$result = gcd($number1, $number2);
echo "<h2>The GCD of $number1 and $number2 is: $result</h2>";
?>


    </form>
    </div>
</div>
    </body>
</body>
</html>