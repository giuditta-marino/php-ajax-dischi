<?php include __DIR__ . '/dati.php'; ?>

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https=>//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/master.css">
    <title></title>
  </head>
  <body>
    <div id="root">
      <h1>collezione di vinili</h1>
      <label for="cars">Seleziona il genere:</label>
      <select class="disk-selection"
      name="disk-selection"
      v-model="selectedGenre"
      @change="onChange(event)"
    >
        <option value="all" selected>Tutti i generi</option>
        <option value="rock">Rock</option>
        <option value="jazz">Jazz</option>
        <option value="pop">Pop</option>
        <option value="metal">Metal</option>
      </select>
      <div class="container">
        <?php
        // var_dump($disks);
        for ($i=0; $i < count($disks); $i++) {
          $disk= $disks[$i]; ?>
          <!-- var_dump($disk[title]); -->

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front" style="background-image: url('<?= $disk[poster] ?>');">
              </div>
              <div class="flip-card-back">
                <div class="text">
                  <h3 class="title-year"><?= $disk[title] , $disk[year]?></h3>
                  <p></p>
                  <p class="author"><?= $disk[author] ?></p>
                  <p class="genre"><?= $disk[genre] ?></p>
                </div>
              </div>

            </div>
          </div>

        <?php } ?>





      </div>

    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <!-- <script src="./assets/js/main.js" charset="utf-8"></script> -->
  </body>
</html>
