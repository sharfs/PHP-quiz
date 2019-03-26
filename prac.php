<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>McQuiz</title>
</head>
<body>
    <h1>How well do you know basic maths?</h1>
    <h2>Answer every question and submit to calculate your score!</h2>
<?php

$questions = array(
    '
    <h4>1) What is 2+2?</h4>
    <input type="radio" name="q1" value="A" />8<br>
    <input type="radio" name="q1" value="B" />4<br>
    <input type="radio" name="q1" value="C" />6<br>
    <input type="radio" name="q1" value="D" />2',
    '
    <h4>2) What is 1+1?</h4>
    <input type="radio" name="q2" value="A" />2<br>
    <input type="radio" name="q2" value="B" />1<br>
    <input type="radio" name="q2" value="C" />3<br>
    <input type="radio" name="q2" value="D" />4',
    '
    <h4>3) What is 5+1?</h4>
    <input type="radio" name="q3" value="A" />4<br>
    <input type="radio" name="q3" value="B" />7<br>
    <input type="radio" name="q3" value="C" />6<br>
    <input type="radio" name="q3" value="D" />3',
    '
    <h4>4) What is 5+8?</h4>
    <input type="radio" name="q4" value="A" />12<br>
    <input type="radio" name="q4" value="B" />11<br>
    <input type="radio" name="q4" value="C" />3<br>
    <input type="radio" name="q4" value="D" />13',
    '
    <h4>5) What is 8-6?</h4>
    <input type="radio" name="q5" value="A" />14<br>
    <input type="radio" name="q5" value="B" />2<br>
    <input type="radio" name="q5" value="C" />4<br>
    <input type="radio" name="q5" value="D" />6',
    '
    <h4>6) What is 8+1?</h4>
    <input type="radio" name="q6" value="A" />7<br>
    <input type="radio" name="q6" value="B" />9<br>
    <input type="radio" name="q6" value="C" />5<br>
    <input type="radio" name="q6" value="D" />4',
    '
    <h4>7) What is 4+7?</h4>
    <input type="radio" name="q7" value="A" />11<br>
    <input type="radio" name="q7" value="B" />12<br>
    <input type="radio" name="q7" value="C" />8<br>
    <input type="radio" name="q7" value="D" />7',
    '
    <h4>8) What is 3+4?</h4>
    <input type="radio" name="q8" value="A" />5<br>
    <input type="radio" name="q8" value="B" />1<br>
    <input type="radio" name="q8" value="C" />2<br>
    <input type="radio" name="q8" value="D" />7',
    '
    <h4>9) What is 9-1?</h4>
    <input type="radio" name="q9" value="A" />3<br>
    <input type="radio" name="q9" value="B" />5<br>
    <input type="radio" name="q9" value="C" />7<br>
    <input type="radio" name="q9" value="D" />8',
    '
    <h4>10) What is 2-1?</h4>
    <input type="radio" name="q10" value="A" />2<br>
    <input type="radio" name="q10" value="B" />3<br>
    <input type="radio" name="q10" value="C" />4<br>
    <input type="radio" name="q10" value="D" />1',
    '
    <h4>11) What is 4-2?</h4>
    <input type="radio" name="q11" value="A" />3<br>
    <input type="radio" name="q11" value="B" />4<br>
    <input type="radio" name="q11" value="C" />2<br>
    <input type="radio" name="q11" value="D" />1',
    '
    <h4>12) What is 5-4?</h4>
    <input type="radio" name="q12" value="A" />1<br>
    <input type="radio" name="q12" value="B" />2<br>
    <input type="radio" name="q12" value="C" />4<br>
    <input type="radio" name="q12" value="D" />5',
    '
    <h4>13) What is 9+1?</h4>
    <input type="radio" name="q13" value="A" />9<br>
    <input type="radio" name="q13" value="B" />1<br>
    <input type="radio" name="q13" value="C" />10<br>
    <input type="radio" name="q13" value="D" />11',
    '
    <h4>14) What is 1+3?</h4>
    <input type="radio" name="q14" value="A" />3<br>
    <input type="radio" name="q14" value="B" />4<br>
    <input type="radio" name="q14" value="C" />1<br>
    <input type="radio" name="q14" value="D" />2',
    '
    <h4>15) What is 6-3?</h4>
    <input type="radio" name="q15" value="A" />6<br>
    <input type="radio" name="q15" value="B" />3<br>
    <input type="radio" name="q15" value="C" />2<br>
    <input type="radio" name="q15" value="D" />4',
    '
    <h4>16) What is 5-0?</h4>
    <input type="radio" name="q16" value="A" />5<br>
    <input type="radio" name="q16" value="B" />0<br>
    <input type="radio" name="q16" value="C" />50<br>
    <input type="radio" name="q16" value="D" />0,5',
    '
    <h4>17) What is 1-1?</h4>
    <input type="radio" name="q17" value="A" />0<br>
    <input type="radio" name="q17" value="B" />1<br>
    <input type="radio" name="q17" value="C" />2<br>
    <input type="radio" name="q17" value="D" />3',
    '
    <h4>18) What is 7-2?</h4>
    <input type="radio" name="q18" value="A" />3<br>
    <input type="radio" name="q18" value="B" />4<br>
    <input type="radio" name="q18" value="C" />5<br>
    <input type="radio" name="q18" value="D" />6',
    '
    <h4>19) What is 0+8?</h4>
    <input type="radio" name="q19" value="A" />0<br>
    <input type="radio" name="q19" value="B" />80<br>
    <input type="radio" name="q19" value="C" />18<br>
    <input type="radio" name="q19" value="D" />8',
    '
    <h4>20) What is 6+7?</h4>
    <input type="radio" name="q20" value="A" />12<br>
    <input type="radio" name="q20" value="B" />13<br>
    <input type="radio" name="q20" value="C" />1<br>
    <input type="radio" name="q20" value="D" />5',
);
?>

<form action= "prac.php" method= "post">
    
<?php
    $arrLength = count($questions);
    for($x = 0; $x < $arrLength; $x++) {
        echo $questions[$x];
        echo "<br>";
}; 

?>

<input type="submit" value="Submit!">
</form>

<?php
if(!empty($_POST)){
    $answer1 = $_POST['q1'];
    $answer2 = $_POST['q2'];
    $answer3 = $_POST['q3'];
    $answer4 = $_POST['q4'];
    $answer5 = $_POST['q5'];
    $answer6 = $_POST['q6'];
    $answer7 = $_POST['q7'];
    $answer8 = $_POST['q8'];
    $answer9 = $_POST['q9'];
    $answer10 = $_POST['q10'];
    $answer11 = $_POST['q11'];
    $answer12 = $_POST['q12'];
    $answer13 = $_POST['q13'];
    $answer14 = $_POST['q14'];
    $answer15 = $_POST['q15'];
    $answer16 = $_POST['q16'];
    $answer17 = $_POST['q17'];
    $answer18 = $_POST['q18'];
    $answer19 = $_POST['q19'];
    $answer20 = $_POST['q20'];

    $totalCorrect = 0;
    
    if ($answer1 == "B") { $totalCorrect++; }
    if ($answer2 == "A") { $totalCorrect++; }
    if ($answer3 == "C") { $totalCorrect++; }
    if ($answer4 == "D") { $totalCorrect++; }
    if ($answer5 == "B") { $totalCorrect++; }
    if ($answer6 == "B") { $totalCorrect++; }
    if ($answer7 == "A") { $totalCorrect++; }
    if ($answer8 == "D") { $totalCorrect++; }
    if ($answer9 == "D") { $totalCorrect++; }
    if ($answer10 == "D") { $totalCorrect++; }
    if ($answer11 == "C") { $totalCorrect++; }
    if ($answer12 == "A") { $totalCorrect++; }
    if ($answer13 == "C") { $totalCorrect++; }
    if ($answer14 == "B") { $totalCorrect++; }
    if ($answer15 == "B") { $totalCorrect++; }
    if ($answer16 == "A") { $totalCorrect++; }
    if ($answer17 == "A") { $totalCorrect++; }
    if ($answer18 == "C") { $totalCorrect++; }
    if ($answer19 == "D") { $totalCorrect++; }
    if ($answer20 == "B") { $totalCorrect++; }
    
    echo "<h1>" . "<div id='results'>$totalCorrect / 20 correct</div>" . "</h1>";

    if($totalCorrect <10){
       echo "<h1>" . "Try Again!" . "</h1>";
    } else if($totalCorrect >=10 && $totalCorrect <15){
        echo "<h1>" . "You scored average." . "</h1>";
    } else{
        echo "<h1>" . "You did well!" . "</h1>";
    }
}
?>
</body>
</html>