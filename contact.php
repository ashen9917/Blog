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
    <title>Contact</title>
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
</br></br></br></br></br>
<!-- Contact & Map -->
<section class="p5" style="padding:50px 0px;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md">
                <h2 class="text-center mb-4">Contact Info</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location:</span> 90, Raja Mawatha, Buttala
                    </li>

                    <li class="list-group-item">
                        <span class="fw-bold">Student Phone:</span> (070)3213678
                    </li>

                    <li class="list-group-item">
                        <span class="fw-bold">Student Email:</span> ashenindula@gmail.com
                    </li>

                    <li class="list-group-item">
                        <span class="fw-bold">Institute :</span> Java Institute for Advanced Technology
                    </li>

                    <li class="list-group-item">
                        <span class="fw-bold">Main Location:</span> Java Institute for Advanced Technology, &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Colombo
                    </li>

                </ul>
            </div>
            <div class="col-md">
                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.947614326073!2d79.85815221422625!3d6.896869420624867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bd8f6bc0e3f%3A0xebb846a35afbf4f4!2sJava%20Institute%20For%20Advanced%20Technology!5e0!3m2!1sen!2slk!4v1635174396779!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
</section>

</br></br></br></br>
<!-- Footer -->
<footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">Copyright &copy; ashenindula@gmail.com</p>
        <a href="#" class="position-absolute bottom-0 end-0p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby=enroll" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enroll">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">Fill out this form and we will get back to you</p>
                <form>
                    <div class="mb-3">
                        <label for="first-name" class="col-form-label">First Name:</label>
                        <input type="text" class="form-control" id="first-name">
                    </div>
                    <div class="mb-3">
                        <label for="last-name" class="col-form-label">Last Name:</label>
                        <input type="text" class="form-control" id="last-name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="col-form-label">Phone:</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script>

</script>
</body>

</html>