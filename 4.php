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
            <h1>Couting the Frequency in an Array</h1>
            <p align="right" id="button"> <a href="5.php" class = "btn btn-info">Next</a></p>
            </div>
        <div class="container-body">
            <form id="form4" method="POST">
        <label><small>Input Letter</small> </label>
        <br>
		<input type = "text" name ="input" placeholder = "Input letter w/out spaces" oninput = "this.value = this.value.toUpperCase()" required></input> <button class = "btn btn-success" type = "submit" name = "submit">Calculate</button>
    <br>
    <div>
<hr>
<h4>Sequence of Letter:</h4>

<?php
if (isset($_POST["submit"])) {
    $string = $_POST["input"];
    $alphabets = range('A', 'Z');
    foreach ($alphabets as $alphabet) {
        $value = substr_count(strtoUpper($string), $alphabet);
        if ($value > 0) {
            echo "<h6>". $alphabet . ": " . $value . "<br>" . "</h6>";
        }
    }
}
?>

    </form>
    </div>
    </div>
</div>
    </body>
</body>
</html>