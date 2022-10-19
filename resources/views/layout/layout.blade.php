<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/ab8d9c2005.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><i class="fa-sharp fa-solid fa-truck-medical"></i></a>
            <div class="collapse navbar-collapse" id="mynavbar">

              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{Route('agendamento.index')}}">Agendamentos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{Route('medico.index')}}">Médico</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{Route('paciente.index')}}">Pacientes</a>
                </li>
              </ul>

              <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
              </form>
            </div>
          </div>
        </nav>

      <section class="container">
        @yield('content')
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>