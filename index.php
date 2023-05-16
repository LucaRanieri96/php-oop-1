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
  <link rel="stylesheet" href="style.css">
  <title>Films</title>
</head>

<body>
  <h1 align='center'>Films</h1>

  <div class="container">
    <div class="row row-cols-3 g-2">
      <?php foreach ($movies as $movie): ?>
        <div class="col">
          <div class="card bg-dark text-white">
            <img src="<?php echo $movie->getImgUrl(); ?>" class="card-img">
            <div class="card-img-overlay">
              <h4 class="card-title">
                <?php echo $movie->getTitle(); ?>
              </h4>
              <p class="card-text">
                <?php echo $movie->getDescription(); ?>
              </p>
              <p class="card-text">
                <?php echo $movie->getGenre()->name; ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>

</html>