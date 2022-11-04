<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>3310</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    
<link href="{{ URL::asset('stylesheet.css') }}" rel="stylesheet">

</head>
    <body class="antialiased">  
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-color pop" href="/main">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-colorv2" href="airports">Airports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-colorv2" href="countries">Countries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-colorv2" href="airlines">Airlines</a>
          </li>
        </ul>
      </div>
    </div>
      </nav>

<!-- On tables -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Country</th>
      <th scope="col">Location</th>
      <th scope="col">Airlines</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Fly</th>
      <td>Litva</td>
      <td>25.883789062500313 5.743074897562977</td>
      <td>KebabInternational</td>
      <td>
      <a type="button" class="btn btn-success">Add airline</a>
      <a type="button" class="btn btn-danger">Remove airline</a>
      <a type="button" class="btn btn-warning">Edit</a>
      <a type="button" href="/delete" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
    </body>
</html>
