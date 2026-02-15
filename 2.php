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
                    <h1>Minimum Money Problem</h1>
                <p align="right" id="button"> <a href="3.php" class = "btn btn-info">Next</a></p>
            </div>
        <div class="container-body">
            <form method="POST">
                    <label><small>Target Amount</small> </label>
                    <br>
                    <input type = "number" name ="amount" id="amount" placeholder = "Input Target Amount" required></input>
                    <button class = "btn btn-success" type = "submit" name = "submit">Calculate</button>
                <br>
                <hr>
                <table align="center" border="1" bordercolor="#666698" Cellpadding="5%">
                    <tr>
                        <th width="50%">MONEY</th>
                        <th width="50%">QUANTITY</th>
                    </tr>

        </div>
    

        </div>
        
    </div>

    
<?php
function getMinimumCoins($denominations, $amount) {
   $result = [];
   $remainingAmount = $amount;

   for ($i = 0; $i < count($denominations); $i++) {
   $coinValue = $denominations[$i];
   $result[$coinValue] = intdiv($remainingAmount, $coinValue);
   $remainingAmount %= $coinValue;
   
   }    
   return $result;
}


$denominations = [1000, 500, 200, 100, 50, 20, 10, 5, 1];
$amount = (isset($_POST['amount'])) ? (int)$_POST['amount'] : 0;
 

$coinsNeeded = getMinimumCoins($denominations, $amount);

 echo "<h5>Target Amount = ₱ " . number_format($amount) . "</h5>"; 
foreach ($coinsNeeded as $coin => $count) {
    echo "<tr>
    <td>", "₱". number_format($coin) ."</td>
    <td>". number_format($count) . "<br>", "</td>
    </tr>";

}
?>

    </table>
    
    </div>
</body>
<script src="js/bootstrap.esm.min.js"></script>
</html>
