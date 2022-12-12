<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="Nurul Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Life Web</title>
    <link rel="shortcut icon" href="images/tittlelogo3.jpg" type="images/jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>
<body>
<!--header code started-->
<header>
  <div class="container">
  <nav class="navbar navbar-expand-lg bg-light">
    <a class="navbar-brand" href="index.php"><img src="images/tittlelogo2.jpg" height=60 width=60 alt=""></a>
      <h1 class="d-flex align-items-center mt-2 text-danger pe-2">DONATE LIFE</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item text-bg-light bg-danger me-2 border rounded-1">
            <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item text-bg-light bg-danger me-2 border rounded-1">
            <a class="nav-link text-light" href="donateblood.php">Donte Blood</a>
          </li>
          <li class="nav-item dropdown text-bg-light bg-danger me-2 border rounded-1">
            <a class="nav-link text-light dropdown-toggle" href="donor.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Request
            </a>
            <ul class="dropdown-menu text-bg-info text-danger me-2 border rounded-1">
              <li><a class="dropdown-item" href="blood_request.php">Blood Request</a></li>
              <li><a class="dropdown-item" href="plasma_request.php">Plasma Request</a></li>
              
            </ul>
          </li>
          <li class="nav-item text-bg-light bg-danger me-2 border rounded-1">
            <a class="nav-link text-light" href="signin.php">Signin</a>
          </li>
          <li class="nav-item text-bg-light bg-danger me-2 border rounded-1">
            <a class="nav-link text-light" href="signup.php">signup</a>
          </li>
          <li class="nav-item dropdown text-bg-light bg-danger me-2 border rounded-1">
            <a class="nav-link text-light dropdown-toggle" href="donor.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Donar
            </a>
            <ul class="dropdown-menu text-bg-info text-danger me-2 border rounded-1">
              <li><a class="dropdown-item" href="A+.php">A+</a></li>
              <li><a class="dropdown-item" href="#">A-</a></li>
              <li><a class="dropdown-item" href="#">B+</a></li>
              <li><a class="dropdown-item" href="#">B-</a></li>
              <li><a class="dropdown-item" href="#">O+</a></li>
              <li><a class="dropdown-item" href="#">O-</a></li>
              <li><a class="dropdown-item" href="#">AB+</a></li>
              <li><a class="dropdown-item" href="#">AB-</a></li>
            </ul>
          </li>
          <li class="nav-item text-bg-light bg-danger me-2 border rounded-1">
            <a class="nav-link text-light" href="signup.php">logout</a>
          </li>
        </ul>        
      </div>
    </div>
    </nav>
    <!--header code end-->