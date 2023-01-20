<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="style.css">
    <title>Projects</title>
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <h3>Banuka Ashen Indula Kulasinghe</h3>
            <h5 class="text-danger text-sm-start">ashenindula@gmail.com</h5>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="#navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="HigherStudy.php" class="nav-link">Higher Study</a>
                </li>
                <li class="nav-item">
                    <a href="TrainingProgram.php" class="nav-link">Training Program</a>
                </li>
                <li class="nav-item">
                    <a href="lecturer.php" class="nav-link">Lecturers</a>
                </li>
                <li class="nav-item">
                    <a href="projects.php" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="gallary.php" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>

</nav>



<section id="learn" class="p-5 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <img class="w-100" src="img/Screenshot_1.jpg" alt="" class="imd-fluid">
            </div>
            <div class="col-md">
                <img class="w-100" src="img/Screenshot_2.jpg" alt="" class="imd-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <img class="w-100" src="img/Screenshot_3.jpg" alt="" class="imd-fluid">
            </div>
            <div class="col-md">
                <img class="w-100" src="img/Screenshot_4.jpg" alt="" class="imd-fluid">
            </div>
        </div>
    </div>
</section>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYXNoZW45OSIsImEiOiJja3Vlanc0a3cxa3V1Mm5xamJxbnVuM3FxIn0.FF8JkQG_Q6fuO87IVlcAmA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-70.060982, 42.35725],
        zoom: 18,
    });
</script>
<!-- Footer -->
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Copyright &copy; ashenindula@gmail.com</p>
        <a href="#" class="position-absolute bottom-0 end-0p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>
</body>

</html>