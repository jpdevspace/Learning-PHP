<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unit 1 - PHP Basics</title>
</head>
<body>
  <h2>List of all books:</h2>
  <ul>
    <?php foreach($books as $book) : ?>
      <li><?= $book['name'] ?></li>
    <?php endforeach; ?>
  </ul>

  <h2>Filtered list of books:</h2>
  <ul>
    <?php foreach($filteredBooks as $book) : ?>
      <li><?= $book['name'] ?> </li>
    <?php endforeach; ?>
  </ul>

  <h2><?= $business['name'] ?></h2>
  <ul>
    <?php foreach ($business['categories'] as $category) : ?>
      <li><?= $category; ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>