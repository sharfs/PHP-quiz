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
    <input type="radio" name="language" value="1">1<br>
    <input type="radio" name="language" value="2">2<br>
    <input type="radio" name="language" value="4">4
    <br>
    <br>

    What is 4+3?
    <br>
    <input type="radio" name="language" value="7">7<br>
    <input type="radio" name="language" value="5">5<br>
    <input type="radio" name="language" value="6">6
    <br>
    <br>

    <button type="submit">Submit</button>

</body>
</html>