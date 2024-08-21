<?php
    include("conexion.php");
    $array = array();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrenamiento deportivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Actividad.css">
    <link rel="stylesheet" href="css/footer.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.png" style="margin-left: 30px; width: 90px;" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" id="navlis" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navlis" href="vocabulario.php">Vocabulary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="navlis" href="Actividad.php">Activities</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Activities</h1>
          <p>Here you can find different activities to practice your learned English</p>
        </div>
      </section>

      <!-- Sections cards -->
      <div class="album py-5 bg-body-tertiary">
        <div class="container">
          <div class="row">
            <?php
            if ($result = mysqli_query($varConexion, "SELECT * FROM actividades")) {
                while ($row = $result->fetch_array(MYSQLI_NUM)) {
            ?>
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card shadow-sm">
                  <iframe allowfullscreen width="100%" height="225" frameborder="0" src="<?php echo $row[1] ?>" style="pointer-events: none;"></iframe>
                  <div class="card-body">
                    <p class="card-text"><?php echo $row[2] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="<?php echo $row[1] ?>" target="_blank" class="btn btn-sm btn-primary">Start the game</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
                }
            }
            ?>
          </div>
        </div>
      </div>

      <!-- footer -->
      <footer>
        <div class="footerContainer">
          <div class="footerNav">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="Vocabulario.php">Vocabulary</a></li>
              <li><a href="Actividad.php">Activities</a></li>
            </ul>
          </div>
        </div>
        <div class="footerBottom">
          <p>Copyright &copy;2024; Designed by <span class="designer">Sports</span></p>
        </div>
      </footer>
      <!-- footer -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
