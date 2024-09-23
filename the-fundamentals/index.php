<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ],
];

/**
 * Filters an array of items using a given callback function.
 *
 * This function iterates through each item in the input array
 * and applies the provided callback function to determine if
 * the item should be included in the filtered result.
 *
 * @param array $items Items to filter.
 * @param callable $fn Callback function that receives each item as a parameter.
 *                     It should return true to keep the item, or false to exclude it.
 *
 * @return array Filtered items that satisfy the condition set by the callback.
 */
function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
}

/**
 * Filtering by release year biggest or equal 2000.
 */
$filteredBooks = filter($books, function ($book) {
    return $book['releaseYear'] < 2000;
});

?>


<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>

</html>