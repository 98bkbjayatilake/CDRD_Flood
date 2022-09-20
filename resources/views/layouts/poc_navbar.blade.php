<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,intial scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style>


</style>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Flood Guide</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
           data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Update</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="update_navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"></a>

                <ul class="dropdown-menu" aria-labelledby="update_navbarDropdown">
                  <li><a class="dropdown-item" href="#">Distric Secretary details</a></li>
                  <li><a class="dropdown-item" href="#">Divisional Secretary details</a></li>
                  <li><a class="dropdown-item" href=".pages.GN_update_details">Grama Niladari details</a></li>
                  <li><a class="dropdown-item" href="#">Hospital details in distric</a></li>
                  <li><a class="dropdown-item" href="#">School details in distric</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Display</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="display_navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"></a>

                <ul class="dropdown-menu" aria-labelledby="display_navbarDropdown">
                    <li><a class="dropdown-item" href="#">Distric Secretary details</a></li>
                    <li><a class="dropdown-item" href="#">Divisional Secretary details</a></li>
                    <li><a class="dropdown-item" href="#">Grama Niladari details</a></li>
                    <li><a class="dropdown-item" href="#">Hospital details in distric</a></li>
                    <li><a class="dropdown-item" href="#">School details in distric</a></li>
                </ul>
              </li>

            </ul>
        </div>

          <form class="d-flex">
              <button class="btn btn-outline-success" type="submit">Logout</button>
            </form>
          </div>
        </div>
      </nav>

      @yield('content')
</body>
</html>
