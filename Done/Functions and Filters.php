<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
<?php 
    $books = [
        [
            "name"=> "Do Android Dream of Electric sheep",
            "author"=> "Phillip K. Dick",
            "year"=> "1991",
            "purchaseUrl"=> "http://example.com",
        ],
        [
            "name"=> "Project Hail Mary",
            "author"=> "Andy Weir",
            "year"=> "2001",
            "purchaseUrl"=> "http://example.com",
        ],
        [
            "name"=> "The Martian",
            "author"=> "Andy Weir",
            "year"=> "1995",
            "purchaseUrl"=> "http://example.com",
        ]
    ];


    function filterAuthor($books, $author){
        $filteredBooks = [];

        foreach ($books as $book){
            if($book['author']  === $author){
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
    $filteredBooks = filterAuthor($books, 'Phillip K. Dick');
 
    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
            <a href="<?= $book['purchaseUrl']; ?>">
            <?= $book['name'];?> (<?= $book['year']; ?>) - By <?= $book['author']; ?>
            </a>
            </li>
          <?php endforeach;?>
    </ul>

    <p>
     
    </p>

</body>
</html>

