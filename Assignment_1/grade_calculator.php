<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator System With PHP</title>

    <style>
        .container {
            margin: 2rem;
            padding: 2rem;
            background: blueviolet;
            text-align: center;
        }

        button {
            background: #89e038;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1> <u> TASK-7</u></h1>
        <h1> Grade Calculator </h1>

        <form action="" method="post">

            Enter First Score : <input type="number" name="score1" placeholder="Enter Your Score 1"> <br>
            Enter Second Score : <input type="number" name="score2" placeholder="Enter Your Score 2"> <br>
            Enter Third Score : <input type="number" name="score3" placeholder="Enter Your Score 2"> <br>

            <button type="submit" name="submit">Submit</button>
        </form>


        <?php
        if (isset($_POST["submit"])) {
            $score1 = $_POST['score1'];
            $score2 = $_POST['score2'];
            $score3 = $_POST['score3'];

            echo " Your First Score is {$score1}, <br> Second Score is {$score2}, <br> Third Score is {$score3} <br>";
            $avarage = ($score1 + $score2 + $score3) / 3;

            if ($avarage < 30) {
                echo "Your Avarage Score is {$avarage}. And  Your result Faild";
            } elseif ($avarage <= 39) {
                echo "Your Avarage Score is {$avarage}. And  Your result D Grade";

            }

        }

        ?>


    </div>

</body>

</html>