<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

$questions = array(
    `
    <h4>What is 2+2?</h4>
    <input type="radio" name="q1" value="8" />8<br>
    <input type="radio" name="q1" value="6" />6<br>
    <input type="radio" name="q1" value="2" />2<br>
    <input type="radio" name="q1" value="4" />4`,
    `
    <h4>Question 2</h4>
    <input type="radio" name="q2" value="A" />Ans 1<br>
    <input type="radio" name="q2" value="B" />Ans 2<br>
    <input type="radio" name="q2" value="C" />Ans 3<br>
    <input type="radio" name="q2" value="D" />Ans 4`,
    `
    <h4>Question 3</h4>
    <input type="radio" name="q3" value="A" />Ans 1<br>
    <input type="radio" name="q3" value="B" />Ans 2<br>
    <input type="radio" name="q3" value="C" />Ans 3<br>
    <input type="radio" name="q3" value="D" />Ans 4`,
    `
    <h4>Question 4</h4>
    <input type="radio" name="q4" value="A" />Ans 1<br>
    <input type="radio" name="q4" value="B" />Ans 2<br>
    <input type="radio" name="q4" value="C" />Ans 3<br>
    <input type="radio" name="q4" value="D" />Ans 4`,
    `
    <h4>Question 5</h4>
    <input type="radio" name="q5" value="A" />Ans 1<br>
    <input type="radio" name="q5" value="B" />Ans 2<br>
    <input type="radio" name="q5" value="C" />Ans 3<br>
    <input type="radio" name="q5" value="D" />Ans 4`,
    `
    <h4>Question 6</h4>
    <input type="radio" name="q6" value="A" />Ans 1<br>
    <input type="radio" name="q6" value="B" />Ans 2<br>
    <input type="radio" name="q6" value="C" />Ans 3<br>
    <input type="radio" name="q6" value="D" />Ans 4`,
    `
    <h4>Question 7</h4>
    <input type="radio" name="q7" value="A" />Ans 1<br>
    <input type="radio" name="q7" value="B" />Ans 2<br>
    <input type="radio" name="q7" value="C" />Ans 3<br>
    <input type="radio" name="q7" value="D" />Ans 4`,
    `
    <h4>Question 8</h4>
    <input type="radio" name="q8" value="A" />Ans 1<br>
    <input type="radio" name="q8" value="B" />Ans 2<br>
    <input type="radio" name="q8" value="C" />Ans 3<br>
    <input type="radio" name="q8" value="D" />Ans 4`,
    `
    <h4>Question 9</h4>
    <input type="radio" name="q9" value="A" />Ans 1<br>
    <input type="radio" name="q9" value="B" />Ans 2<br>
    <input type="radio" name="q9" value="C" />Ans 3<br>
    <input type="radio" name="q9" value="D" />Ans 4`,
    `
    <h4>Question 10</h4>
    <input type="radio" name="q10" value="A" />Ans 1<br>
    <input type="radio" name="q10" value="B" />Ans 2<br>
    <input type="radio" name="q10" value="C" />Ans 3<br>
    <input type="radio" name="q10" value="D" />Ans 4`,
    `
    <h4>Question 11</h4>
    <input type="radio" name="q11" value="A" />Ans 1<br>
    <input type="radio" name="q11" value="B" />Ans 2<br>
    <input type="radio" name="q11" value="C" />Ans 3<br>
    <input type="radio" name="q11" value="D" />Ans 4`,
    `
    <h4>Question 12</h4>
    <input type="radio" name="q12" value="A" />Ans 1<br>
    <input type="radio" name="q12" value="B" />Ans 2<br>
    <input type="radio" name="q12" value="C" />Ans 3<br>
    <input type="radio" name="q12" value="D" />Ans 4`,
    `
    <h4>Question 13</h4>
    <input type="radio" name="q13" value="A" />Ans 1<br>
    <input type="radio" name="q13" value="B" />Ans 2<br>
    <input type="radio" name="q13" value="C" />Ans 3<br>
    <input type="radio" name="q13" value="D" />Ans 4`,
    `
    <h4>Question 14</h4>
    <input type="radio" name="q14" value="A" />Ans 1<br>
    <input type="radio" name="q14" value="B" />Ans 2<br>
    <input type="radio" name="q14" value="C" />Ans 3<br>
    <input type="radio" name="q14" value="D" />Ans 4`,
    `
    <h4>Question 15</h4>
    <input type="radio" name="q15" value="A" />Ans 1<br>
    <input type="radio" name="q15" value="B" />Ans 2<br>
    <input type="radio" name="q15" value="C" />Ans 3<br>
    <input type="radio" name="q15" value="D" />Ans 4`,
    `
    <h4>Question 16</h4>
    <input type="radio" name="q16" value="A" />Ans 1<br>
    <input type="radio" name="q16" value="B" />Ans 2<br>
    <input type="radio" name="q16" value="C" />Ans 3<br>
    <input type="radio" name="q16" value="D" />Ans 4`,
    `
    <h4>Question 17</h4>
    <input type="radio" name="q17" value="A" />Ans 1<br>
    <input type="radio" name="q17" value="B" />Ans 2<br>
    <input type="radio" name="q17" value="C" />Ans 3<br>
    <input type="radio" name="q17" value="D" />Ans 4`,
    `
    <h4>Question 18</h4>
    <input type="radio" name="q18" value="A" />Ans 1<br>
    <input type="radio" name="q18" value="B" />Ans 2<br>
    <input type="radio" name="q18" value="C" />Ans 3<br>
    <input type="radio" name="q18" value="D" />Ans 4`,
    `
    <h4>Question 19</h4>
    <input type="radio" name="q19" value="A" />Ans 1<br>
    <input type="radio" name="q19" value="B" />Ans 2<br>
    <input type="radio" name="q19" value="C" />Ans 3<br>
    <input type="radio" name="q19" value="D" />Ans 4`,
    `
    <h4>Question 20</h4>
    <input type="radio" name="q20" value="A" />Ans 1<br>
    <input type="radio" name="q20" value="B" />Ans 2<br>
    <input type="radio" name="q20" value="C" />Ans 3<br>
    <input type="radio" name="q20" value="D" />Ans 4`,
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
    $correctAns = 0;
    $ques1 = $_POST["q1"];

    if($ques1 == "D"){
        $correctAns++;
    };
    echo $correctAns;

}
?>

</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" ref="stylesheet">
    <title>McQuiz</title>
</head>
<body>
    
    <?php
    if($_POST){
        $x=0;

    if(isset($_POST['language']) && $_POST['language']==="humans") {
        $x++;
    }

    if(isset($_POST['source']) && $_POST['source']==="statements") {
        $x++;
    }

    if(isset($_POST['open']) && $_POST['open']==="false") {
        $x++;
    }
        echo "Your score is $x";
    }

    ?>

    <main role="main" class="container">
    <br>
    
    <form action= "index.php" method= "post">
    <form role="form" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> 
    method="post">
    
    What is 1+1?
    <br>
    <input type="radio" name="quesOne" value="1">1<br>
    <input type="radio" name="quesOne" value="2">2<br>
    <input type="radio" name="quesOne" value="6">6<br>
    <input type="radio" name="quesOne"
        <?php if (isset($quesOne) && $quesOne=="2") echo "checked";?>
            value="2">2<br>

    <button type="submit">Submit</button>

</body>
</html>
