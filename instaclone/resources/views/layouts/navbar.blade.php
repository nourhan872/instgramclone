<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href="./svg/instalogo.svg">
</head>  
<body>  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample"
        aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
        <div class="container">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <a class="navbar-brand" href="#">
                <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png"
                  height="30" alt="" loading="lazy" />
              </a>
            </div>
            <div class="col-md-2">
              <form class="d-flex input-group w-auto">
                <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
              </form>
            </div>
            <div class="col-md-3">
              <ul class="navbar-nav justify-content-center">
                <!-- Icons -->
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#">
                    <i class="fas fa-home fa-lg text-dark"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#">
                    <i class="fas fa-paper-plane fa-lg text-dark"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#">
                    <i class="far fa-compass fa-lg text-dark"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#">
                    <i class="far fa-heart fa-lg text-dark"></i>
                  </a>
                </li>
                <!-- Avatar -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" 
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbootstrap.com/img/new/avatars/1.jpg" class="rounded-circle" height="22" alt=""
                      loading="lazy" />
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="">My profile</a>
                    </li>
                    <li><a class="dropdown-item" href="">Settings</a></li>
                    <li><a class="dropdown-item" href="">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
</body>
  

<script src="https://kit.fontawesome.com/caa6082b62.js" crossorigin="anonymous"></script>