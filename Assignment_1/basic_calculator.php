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
      font-size: 20px;
      color: black;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1> <u> TASK-7</u></h1>
    <h1> Simple Calculator </h1>
    <form action="" method="post">
      Insert First Number : <input type="text" name="num1" placeholder="First Number" required>
      <br> <br>
      Insert Second Number : <input type="text" name="num2" placeholder="Second Number" required>
      <br> <br>
      <select name="operator">
        <option value="addition">Add</option>
        <option value="subtraction">Substrac</option>
        <option value="multiplication">multiply</option>
        <option value="divide">Divide</option>
      </select>
      <button type="submit" name="submit" value="Calculate">Calculate</button>

    </form>
    <?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
      // Get the values from the form
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operator = $_POST['operator'];

      // Check which operator was chosen and perform the corresponding calculation
      if ($operator == 'addition') {
        $result = $num1 + $num2;
      } elseif ($operator == 'subtraction') {
        $result = $num1 - $num2;
      } elseif ($operator == 'multiplication') {
        $result = $num1 * $num2;
      } elseif ($operator == 'divide') {
        $result = $num1 / $num2;
      }
    } ?>

    <?php // If the form has been submitted, display the result
    if (isset($result)) {
      echo " Your First Input Number is :- {$num1} <br>
        Your Second Input Number is :- {$num2}  <br> 
        Your Required  {$operator}  Result is : $result";
    }
    ?>
  </div>

</body>

</html>