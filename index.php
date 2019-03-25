<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>McQuiz</title>
</head>
<body>
<form action="index.php" method="post" id="quiz">

<div>
<h3>1) What is 1+1?</h3>
<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
    <label for="question-1-answers-A">A) 4</label>
</div>
<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
    <label for="question-1-answers-B">B) 2</label>
</div>
<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
    <label for="question-1-answers-C">C) 1</label>
</div>
<div>
    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
    <label for="question-1-answers-D">D) None of the above</label>
</div>
</div>

<div>
<h3>2) What is 2+1?</h3>
<div>
    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
    <label for="question-2-answers-A">A) 3</label>
</div>
<div>
    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
    <label for="question-2-answers-B">B) 1</label>
</div>
<div>
    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
    <label for="question-2-answers-C">C) 2</label>
</div>
<div>
    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
    <label for="question-2-answers-D">D) None of the above</label>
</div>
</div>

<div>
<h3>3) What is 3x5?</h3>
<div>
    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
    <label for="question-3-answers-A">A) 2</label>
</div>
<div>
    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
    <label for="question-3-answers-B">B) 8</label>
</div>
<div>
    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
    <label for="question-3-answers-C">C) 15</label>
</div>
<div>
    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
    <label for="question-3-answers-D">D) None of the above</label>
</div>
</div>

<div>
<h3>4) What is 16/2?</h3>
<div>
    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
    <label for="question-4-answers-A">A) 4</label>
</div>
<div>
    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
    <label for="question-4-answers-B">B) 14</label>
</div>
<div>
    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
    <label for="question-4-answers-C">C) 32</label>
</div>
<div>
    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
    <label for="question-4-answers-D">D) None of the above</label>
</div>
</div>

<div>
<h3>5) What is 5+5?</h3>
<div>
    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
    <label for="question-5-answers-A">A) 5</label>
</div>
<div>
    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
    <label for="question-5-answers-B">B) 10</label>
</div>
<div>
    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
    <label for="question-5-answers-C">C) 11</label>
</div>
<div>
    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
    <label for="question-5-answers-D">D) None of the above</label>
</div>
</div>

<br>
<h2><input type="submit" value="Submit Quiz" /></h2>

</form>

<?php
    
    $answer1 = $_POST["question-1-answers"];
    $answer2 = $_POST["question-2-answers"];
    $answer3 = $_POST["question-3-answers"];
    $answer4 = $_POST["question-4-answers"];
    $answer5 = $_POST["question-5-answers"];

    $totalCorrect = 0;
    
    if ($answer1 == "B") { $totalCorrect++; }
    if ($answer2 == "A") { $totalCorrect++; }
    if ($answer3 == "C") { $totalCorrect++; }
    if ($answer4 == "D") { $totalCorrect++; }
    if ($answer5 == "B") { $totalCorrect++; }
    
    echo "<h1>" . "<div id='results'>$totalCorrect / 5 correct</div>" . "</h1>";
    
?>
</body>
</html>