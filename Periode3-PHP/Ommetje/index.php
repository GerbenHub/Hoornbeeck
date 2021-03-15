<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ommetje</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="style.css?<?= time() ?>" rel="stylesheet" />
</head>

<body>
  <h2 class="left">&nbsp Gerben2004</h2>
  <h2 class="right xp">XP &nbsp</h2>
  <h2 class="purple right">101 &nbsp</h2>
  <img class="bg" src="heide.png" alt="Paarse Heide" width="100%" />
  <img class="hersen" src="hersen.png" alt="hersen" />
  <div class="inverted"></div>
  <!-- <div class="m-auto d-flex">
    <h1 class="minutes">0</h1><h2 class="fs-10 left">/20</h2><h3 class="left min">min</h3>
  </div> -->

  <div class="d-flex flex-column ">

    <div class="d-flex">

        <h1 class="minutes">0</h1>
        <h2 class="fs-20 left">/20</h2>
        <h3 class="left min">min</h3>
 
    </div>

      <button class="m-auto white roundedcorners">Start Ommetje</button>
  </div>

  <div class="card h-100">
    <div class="card-body">
      <h5 class="card-title medailles-text mb-3">Teams</h5>
      <div class="d-flex flex-column ">
        <div class="flex-row d-flex ">
          <div class="med">
            <span class="d-block fw-bold grey">TI1AA C20</span>
            <small class="purple">Bekijk de ranglijst</small>
          </div>
          <div class="ms-auto">
            <span class="purple fw-bold">100</span>
            <span class="grey">XP</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card h-100 m-asdfadsf4">
    <div class="card-body">
      <h5 class="card-title medailles-text mb-3">Medailles</h5>
      <div class="d-flex flex-column ">
        <div class="flex-row d-flex ">
          <div class="medaille">
            <img src="hiker.png" />
          </div>
          <div class="medaille">
            <img class="medaille" src="bird.png" />
          </div>
        </div>
        <div class="flex-row d-flex">
          <div class="medaille">
            <img src="hak.png" />
          </div>
          <div class="medaille">
            <img src="love.png" />
          </div>
        </div>
        <div class="flex-row d-flex">
          <div class="medaille">
            <img src="run.png" />
          </div>
          <div class="medaille">
            <img src="hersens.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

