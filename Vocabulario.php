<?php
    include("Conexion.php");
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocabulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/vocabulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

    <!-- Cards -->
    <div class="container">
      <div class="row">
        <?php
        
        if ($result = mysqli_query($varConexion, "SELECT * FROM words")) {
            while ($row = $result->fetch_array(MYSQLI_NUM)) {
                $audioId = $row[0]; 
    ?>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card">
                <div class="face front">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row[4]); ?>" alt="" class="img-fluid">
                    <h3><?php echo $row[1]?></h3>
                </div>
                <div class="face back d-flex flex-column">
                    <h3 class="text-center"><?php echo $row[2]?></h3>
                    <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center">
                        <audio controls class="mb-3">
                            <source src="servir_audio.php?id=<?php echo $audioId; ?>" type="audio/mpeg">
                        </audio>
                    </div>
                    <p class="text-center"><?php echo $row[3]?></p>
                </div>
            </div>
        </div>
    <?php 
            }
        }
    ?>
    
      </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
