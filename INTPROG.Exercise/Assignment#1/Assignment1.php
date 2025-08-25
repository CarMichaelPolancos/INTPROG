<?php
// IF STATEMENT - executes code if one condition is true
$age = 20;
if ($age >= 18) {
    echo "You are old enough to vote.<br>";
}

// IF...ELSE STATEMENT - executes one block if true, another if false
$score = 45;
if ($score >= 50) {
    echo "You passed the exam.<br>";
} else {
    echo "You failed the exam.<br>";
}

// IF...ELSEIF...ELSE STATEMENT - multiple conditions
$grade = 85;
if ($grade >= 90) {
    echo "Your grade is A.<br>";
} elseif ($grade >= 75) {
    echo "Your grade is B.<br>";
} elseif ($grade >= 60) {
    echo "Your grade is C.<br>";
} else {
    echo "You need to improve.<br>";
}

// SWITCH STATEMENT - selects one of many options
$day = "Wednesday";
switch ($day) {
    case "Monday":
        echo "Start of the week.<br>";
        break;
    case "Wednesday":
        echo "It’s midweek already!<br>";
        break;
    case "Friday":
        echo "Weekend is near!<br>";
        break;
    default:
        echo "Just another day.<br>";
}
?>
