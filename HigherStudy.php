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
    <title>Higher Study</title>
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
<!-- Showcase -->
<section class="bg-dark text-light p-5 text-center text-sm-start">
    <div class="container position-relative">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/pngwing.com.png" alt="">
            </div>
            <div class="w-700 p-3 position-absolute bottom-20 start-50">
                <span>
                    <h1><span class="text-success">About Software Engineering</span></h1>
                    <p class="">
                        Software engineering is the systematic application of engineering approaches to the development of software.A software engineer
                        is a person who applies the principles of software engineering to design, develop, maintain, test, and evaluate computer software.
                        The term programmer is sometimes used as a synonym, but may also lack connotations of engineering education or skills.
                        Engineering techniques are used to inform the software development process which involves the definition, implementation, assessment,
                        measurement, management, change, and improvement of the software life cycle process itself. It heavily uses software configuration management
                        which is about systematically controlling changes to the configuration, and maintaining the integrity and traceability of the configuration
                        and code throughout the system life cycle. Modern processes use software versioning.
                    </p>
            </div>
        </div>
</section>


<!-- Footer -->
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Copyright &copy; ashenindula@gmail.com</p>
        <a href="#" class="position-absolute bottom-0 end-0p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>



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
</body>

</html>