<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* body {
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;
} */
    </style>
</head>
<body>
    
    <h1>Recommended Books</h1>

    <?php 
    $books = [
        "Do androids dream of Electric Sheep",
        "The langoliers",
        "Hail Mary",
    ];
    ?>


    <ul>
        <?php 
        foreach ($books as $book):
        ?>
        <li><?= $book  ?></li>
        <?php endforeach;   ?>
    </ul>


</body>
</html>


<!-- 


<?php 
        $book = "Dark Matter";
        $read = true;

        if ($read){
            $message = "You have read the $book";
        } else {
            $message = "You have not read the $book";
        }

    ?>
    
    <h1>
     <?= $message?>
   
    
    </h1>



 -->