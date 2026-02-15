<i<!DOCTYPE html>
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
                <h1>Strings Array</h1>
              <p align="left" id="button"> <a href="index.php #act" class = "btn btn-info">Back to Main</a></p>
            </div>
        <div class="container-body">
            <h4>A. Sorting</h4>
            <form method="POST">

        <label>Input Numbers</label>
        <br>
        <input name='arrange' type='text' id='arrange' placeholder="Input number w/ spaces"/>
        <input type='submit' class='btn btn-success 'name='submit' value='Sort'></input> 

    <br>

    <div>
        
<?php
    if(isset($_POST['submit'])) {
        echo'<br>   <h5>Ascending:';
        $input = explode(' ', $_POST['arrange']);
        sort($input);
        echo'{ ';
        echo implode(',', $input);
        echo' }';    
    }
    
    echo'<br>';

    if(isset($_POST['submit'])) {
        echo'Descending:';
        $input = explode(' ', $_POST['arrange']);
        echo'{ ';
        rsort($input);
        echo implode(',', $input);
        echo' } </h5>';    
    }
?>
    </div>


<!--Merging-->

    <div>
        <hr>
        <h4>B.Merging</h4>
    <form method="POST">
    <label for="array1">Enter numbers for array 1</label><br>
    <input type="text" placeholder="Input Number w/ spaces" id="array1" name="array1"><br>
    <label for="array2">Enter numbers for array 2</label><br>
    <input type="text" placeholder="Input Number w/ spaces" id="array2" name="array2"><br><br>
    <input type="submit" class='btn btn-success' value="Merge"><br> 
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $input1 = $_POST["array1"];
    $input2 = $_POST["array2"];

    
    $mergedArray = array_merge(explode(" ", $input1), explode(" ", $input2));
    sort($mergedArray);
   
   
    echo "<h5>Merged Array:</h5>";
    echo "<h3>{ " . implode(",", $mergedArray) . " }</h3>";
}
?>
</form>
    </div>
    </div>
</div>

</body>
</body>
<script src="js/bootstrap.esm.min.js"></script>
</html>

<style>
    h4{
        display: flex;
        justify-content: center;
        margin-right: 400px;
    }
</style>