<?php

include __DIR__ . '/models/Movie.php';
include __DIR__ . '/models/Genre.php';
include __DIR__ . '/models/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Films</title>
</head>

<body>
  <h1 align='center'>Films</h1>

  <?php foreach ($movies as $movie): ?>
    <ul>
      <li>
        <h2>
          <?php echo $movie->getTitle(); ?>
        </h2>
        <p>
          Genere:
          <?php echo $movie->getGenre()->name; ?>
        </p>
        <p>
          Descrizione:
          <?php echo $movie->getDescription(); ?>
        </p>
      </li>
    </ul>
  <?php endforeach; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>

</html>