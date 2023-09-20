<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempreture Convrter Apps</title>
</head>
<style>
    .container {
        margin: 2rem;
        padding: 2rem;
        background: blueviolet;
        text-align: center;
    }

    button {
        background: #89e038;
        font-size: 20px;
        color: black;
    }
</style>

<body>
    <div class="container">
        <h1> <u> TASK-2</u></h1>
        <h1>Temperature Converter</h1><br><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

            <input type="number" name="temperature" placeholder="Enter Any Number"> <br> <br>
            <input type="radio" name="units" value="Celcius">Celcius
            <input type="radio" name="units" value="Farenheit">Farenheit <br><br>

            <button type="submit" name="submit" value="Convert Temprature">Convert Temprature </button>
            <br>
            <br>

        </form>
        <?php
        if (isset($_POST['submit'])) {
            $temperature = $_POST['temperature'];
            $units = $_POST['units'];
            if ($units == "Celcius") {
                $result = $temperature * 9 / 5 + 32;
                echo "$temperature degree Celcius = " . $result . " degree Farenheit";
            } else {
                $result = ($temperature - 32) * 5 / 9;
                echo "$temperature degree Farenheit = " . $result . " degree Celcius";
            }
        }
        ?>
    </div>
</body>

</html>