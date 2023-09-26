<?php
    // Task 4: Multidimensional Array
    
    $studentGrades = [
        "Reshma" =>  ["Math" => 85, "English" => 92, "Science" => 78],
        "Fahim" =>  ["Math" => 88, "English" => 95, "Science" => 98],
        "Mipta" =>  ["Math" => 95, "English" => 75, "Science" => 98]
    ];
    
    function AverageGrades($studentsArray)
    {
        foreach ($studentsArray as $student => $grades) {
            $average = array_sum($grades) / count($grades);
            printf("%s's Average grade is:  %.2f\n", $student, $average);
        }
    }
    
    // Call the function with the studentGrades array
    AverageGrades($studentGrades);

