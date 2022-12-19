<?php 

include_once __DIR__  . '/classi/movie.php';


$movie1 = new Movie( 'batman', 1990, 'action', 9  );
echo $movie1->title;
//echo $movie1->voteRange();
//var_dump($movie1);

$movie2 = new Movie( 'spiderman', 2000, 'action', 6  );
//echo $movie2->voteRange();
//var_dump($movie2);

$movie3 = new Movie ('monella', 1998, 'erotico', 4);
//echo $movie3->voteRange();
//var_dump($movie3);

$movie = '';
//Aggiornamento del form per evitare gli errori e attivare il form solo se estitono dei parametri
if( !empty($_GET) && !empty( $_GET['title'] ) && !empty( $_GET['year'] ) && !empty( $_GET['genre'] ) ){
    $title = $_GET['title'];
    $year = $_GET['year'];
    $genre = $_GET['genre'];
  
    $movie = new Movie( $title, $year, $genre );
    var_dump( $movie );
  }
  



?>

<!doctype html>
<html lang="en">

<head>
  <title>php-oop</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  <h1>Inserisci un Film</h1>
  <form method="GET" action="">
  <input type="text" placeholder="title" name="title">
  <input type="text" placeholder="year" name="year">
  <input type="text" placeholder="genre" name="genre">
  <button class="btn btn-primary" type="submit">invia</button>
  </form>

  <div class="card" style="width: 18rem;">
  <img src="<php echo $movie->image  ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $movie->title ?> </h5>
    <p class="card-text"><?php echo $movie->year ?></p>
     <p class="card-text"><?php echo $movie->genre ?></p>
      <p class="card-text"><?php echo $movie->vote ?></p>
  </div>
</div>


  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

