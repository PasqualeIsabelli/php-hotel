<?php
  $title = 'PHP Hotel';
  $hotels = [
    [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
    ],
    [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
    ],
    [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
    ],
    [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
    ],
    [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
    ],
  ];
  $park = $_GET['Filtra tramite parcheggio hotel'] ?? '';
  $vote = $_GET['Filtra tramite voto hotel'] ?? '';
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>
<body>
  <div class="container">
    <h1 class="text-center fw-bold mt-5"><?php echo $title ?></h1>
    <form action="index.php" class=" mt-4 border p-3">
      <h2>Filtri</h2>
      <p class="fw-bold mt-4">Parcheggio:</p>
      <select class="form-select" name="park">
        <option selected>Filtra tramite parcheggio hotel</option>
        <option value="1">Disponibile</option>
        <option value="2">Non Disponibile</option>
      </select>
      <p class="fw-bold mt-4">Voto:</p>
      <select class="form-select" name="search">
        <option selected>Filtra tramite voto hotel</option>
        <option value="1">1/5</option>
        <option value="2">2/5</option>
        <option value="3">3/5</option>
        <option value="4">4/5</option>
        <option value="5">5/5</option>
      </select>
      <button type="submit" class="btn btn-primary mt-4">Applica filtri</button>
    </form>
    <h3 class="fw-bold mt-5">Hotel trovati:</h3>
    <table class="table mt-4">
      <thead>
        <tr>
          <th scope="col">NAME</th>
          <th scope="col">DESCRIPTION</th>
          <th scope="col">PARKING</th>
          <th scope="col">VOTE</th>
          <th scope="col">DISTANCE TO CENTER</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hotels as $hotel) { ?>
          <tr>
            <th scope="row"><?php echo $hotel['name'] ?></th>
            <td><?php echo $hotel['description'] ?></td>
            <td>
              <!-- Forma abbreviata -->
              <?php echo $hotel['parking'] ? '<p class="fw-bold">Disponibile</p>' : '<p class="fw-bold">Non disponibile</p>' ?>

              <!-- Forma estesa -->
              <?php /* if ($hotel['parking'] === true) { ?>
                <p class="fw-bold">Disponibile</p>
              <?php } else { ?>
                <p class="fw-bold">Non disponibile</p>
              <?php } */ ?>
            </td>
            <td><?php echo $hotel['vote'] ?> / 5</td>
            <td><?php echo $hotel['distance_to_center'] ?> km</td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>