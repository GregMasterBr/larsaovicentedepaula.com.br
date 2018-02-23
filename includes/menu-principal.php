<?php
  if (preg_match("%TurismoSMA/$%", $_SERVER['REQUEST_URI']))
  { 
?>
    <header>
      <nav class=" navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><abbr title="Lar São Vicente de Paulo">LSVP</abbr></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quem-somos">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="voluntario">Voluntário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Doações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="parceiros">Parceiros</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<?php
  }
  else
  {
?>
    <header>
      <nav class=" navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><abbr title="Lar São Vicente de Paulo">LSVP</abbr></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../quem-somos">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../voluntario">Voluntário</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Doações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../parceiros">Parceiros</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<?php
  }
?>