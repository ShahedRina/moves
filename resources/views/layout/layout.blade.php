<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      body {
          font-family: Arial, sans-serif;
      }
      .movies-container {
          display: flex;
          flex-wrap: wrap;
          gap: 20px;
      }
      .movie {
          border: 1px solid #ddd;
          border-radius: 10px;
          padding: 10px;
          width: 200px;
          text-align: center;
      }
      .movie img {
          width: 100%;
          border-radius: 10px;
      }
      .movie-title {
          font-weight: bold;
          margin-top: 10px;
      }
      .movie-release-date {
          color: #555;
          font-size: 14px;
      }
  </style>
  
  </head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"> watching</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form method="POST" action="{{ route('moves.search')}}" class="d-flex" role="search">
              @csrf
              <input class="form-control me-2" type="search" name="team"  placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" name="team" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

  
      @yield("content")


  </body>
</html>