<?php
// Associative Array (5 Students)
$students = [
    "Rahim" => 85,
    "Karim" => 92,
    "Sumaiya" => 78,
    "Jamal" => 88,
    "Hafsa" => 95
];

// Find max score and student name
$maxScore = max($students);
$topStudent = array_search($maxScore, $students);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result Sheet</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Result Sheet</h2>

<table>
    <tr>
        <th>Student Name</th>
        <th>Score</th>
    </tr>

    <?php
    foreach($students as $name => $score){
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$score</td>";
        echo "</tr>";
    }
    ?>
</table>

<h3>
    Highest Score: <?php echo $maxScore; ?> <br>
    Top Student: <?php echo $topStudent; ?>
</h3>

</body>
</html>
