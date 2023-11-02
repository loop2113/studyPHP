<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
    $books = [
        [
            "name"=> "Do Android Dream of Electric sheep",
            "author"=> "Phillip K. Dick",
            "purchaseUrl"=> "http://example.com",
        ],
        [
            "name"=> "Project Hail Mary",
            "author"=> "Andy Weir",
            "purchaseUrl"=> "http://example.com",
        ]
    ];
    ?>
    <ul>
        <?php foreach ($books as $book): ?>
            <a href="<?= $book['purchaseUrl']?>">

            <li><?= $book['name'] ?></li>
            </a>

            <?php endforeach; ?>
        </ul>

</body>
</html>