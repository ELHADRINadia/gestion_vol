<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel = 'stylesheet' integrity = 'sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin = 'anonymous'>
<link rel = 'stylesheet' href = 'style.css'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1'>
<title>vols</title>

<style>
label {
    cursor: pointer;
}
</style>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
        
        </ul>
        <form class="d-flex">
          <button class="btn btn-outline-success" type="submit">Connexion</button>
          <button class="btn btn-outline-success" type="submit">Sign up</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<body>
<div style = 'height: 50px;'></div>
<!-- <section style = "background-image: url('./public/imgs/fly-res.jpg');transition: 1s ;background-size:cover;height:max-;display:flex;align-items:center;justify-content:center; flex-direction:column;background-repeat: no-repeat; padding-top:50px;"> -->
<div class = 'pt-5'>
<form action = 'resultatvol' method = 'POST' name = 'searchform' id = 'searchform'>
<div class = 'bgClass'>
<div class = 'container border border-primary p-4'>
<div class = 'p-2'>
<h4>Trouvez un vol </h4>
<select name = 'flighttype' id = ''>
<option value = 'simple'>aller simple</option>
<option value = 'retour'>aller retour</option>
</select>
<!-- <input id = 'Aller' type = 'radio' name = 'flighttype' value = 'return' checked> <label for = 'Aller'>Aller simple</label>
<input id = 'Aller-Retour' type = 'radio' name = 'flighttype' value = 'oneway'> <label for = 'Aller-Retour'>Aller-Retour</label> -->
<!-- <input id = 'multi-destinations' type = 'radio' name = 'flighttype' value = 'return' checked = ''> multi-destinations -->
</div>
<div class = 'd-flex justify-space-between flex-wrap gap-5'>
<input type = 'text' id = 'Ville-depart' name = 'Ville_depart' placeholder = 'Ville de départ'>
<input type = 'datetime-local' id = 'datealler' name = 'datealler' placeholder = 'Date Aller'>
</div>
<div class = 'pt-5 d-grid gap-2 d-md-flex justify-content-center'>
<button type = 'submit' name = 'submit' class = 'btn btn-primary '> Recherche des vols</button>
</div>
</div>
</div>
</form>
</div>

<div class = 'container pt-5'>
<div class = 'row g-5 gap-2 pt-5'>
<div class = 'card col' style = 'width: 18rem;'>
<div class = 'card-body'>
<p class = 'card-text'>Recherchez</p>
<p class = 'card-text'>Indiquez l’aéroport de départ et de destination ainsi que les dates du vol souhaité afin de voir les offres de vols correspondantes.</p>
</div>
</div>

<div class = 'card col' style = 'width: 18rem;'>
<div class = 'card-body'>
<p class = 'card-text'>Comparez</p>
<p class = 'card-text'>Filtrez les différentes offres selon vos critères afin de trouver le billet répondant à l’ensemble de vos différentes exigences.</p>
</div>
</div>

<div class = 'card col' style = 'width: 18rem;'>
<div class = 'card-body'>
<p class = 'card-text'>Voyagez</p>
<p class = 'card-text'>Finalisez votre recherche de vol en réservant le billet de l’un des sites de voyages & Compagnies Aériennes que nous référençons.</p>
</div>
</div>

<div class = 'card col' style = 'width: 18rem;'>
<div class = 'card-body'>
<p class = 'card-text'>Economisez</p>
<p class = 'card-text'>Notre service est gratuit ! Faites des économies en trouvant gratuitement vos billets d’avion aller/retour qui respectent votre budget.</p>
</div>
</div>
</div>
</div>

<!-- </section> -->
<script src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js' integrity = 'sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf' crossorigin = 'anonymous'></script>
<script src = 'public/js/js.js'></script>
<script src="/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>