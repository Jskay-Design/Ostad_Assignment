<form action="" method="post">
    <input type="tempreture" name="tempreture" placeholder=" Enter tempreture value">
    <br>
    <button type="submit" name="submit"> Submit</button>


</form>
<?php
if (isset($_POST['submit'])) {
    // Get the values from the form
    $tempreture = $_POST['tempreture'];
    $submit = $_POST['submit'];



    //For Condition Apply
    if ($tempreture > 30) {
        echo " Your Entered Here $tempreture  and It means  Warm";
    } elseif ($tempreture <= 30 && $tempreture >= 12) {
        echo " It's Cool";
    } elseif ($tempreture <= 10 && $tempreture >= 0) {
        echo "Freezings";
    }


    // For Output Display
    // if (isset($submit)) {
    //     echo " Your Entered Here $tempreture";
    // }

}

?>


<?php

?>



















<?php
// $tempreture = 35;

// if ($tempreture > 30) {
//     echo "It's Warm";
// } elseif ($tempreture <= 30 && $tempreture >= 12) {
//     echo " It's Cool";
// } elseif ($tempreture <= 10 && $tempreture >= 0) {
//     echo "Freezings";
// }
?>