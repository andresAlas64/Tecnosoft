<?php
  $titulo = 'Tecnosoft';

  include_once 'plantillas/docDeclaracion.php';
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Tecnosoft</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#servicios">Servicios <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nosotros">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contáctenos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header -->
  <header class="main-header">
    <div class="background-overlay text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 justify-content-center align-self-center container-left">
            <h1>Tecnología avanzada para tus necesidades</h1>
            <p>Desde 1990 desarrollando software</p>
          </div>
          <div class="col-md-6 container-right">
            <img src="img/chipInclinada.png" alt="Imagen de un chip" class="img-fluid d-none d-sm-block opacidad">
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Informacion de los servicios -->
  <section id="servicios" class="bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="m-5">
          <h3>La diferencia de Tecnosoft</h3>
          <p>
            Porque somos una empresa con un historial de años en el campo de sistemas de software, mantenimiento de equipo de computación, redes y aplicaciones en ambiente local o en la nube
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Informacion de los servicios -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card text-center border-primary mb-5">
            <div class="card-body">
              <h3>Soporte</h3>
              <p>
                Brindamos soporte técnico en persona, teléfono o de manera remota en horario de oficina
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center border-primary mb-5">
            <div class="card-body">
              <h3>Programas</h3>
              <p>
                Diversos tipos de sistemas como facturación electrónica, contabilidad, sistemas de punto de venta, gestión de inventario, aplicaciones en ambiente local o en la nube
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center border-primary">
            <div class="card-body">
              <h3>Mantenimiento</h3>
              <p>
                Mantenimiento de equipos de computación, servidores y redes
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Informacion de los valores y mision de la empresa -->
  <section id="nosotros" class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Quienes somos</h3>
          <p>
            Tecnosoft Milenio somos una empresa con un historial de años en el desarrollo de software en Costa Rica. Brindamos productos de calidad para nuestros clientes, todo con el fin de dar el mejor servicio posible para nuestros usuarios. Nuestro objetivo como empresa es llegar a más clientes dentro y fuera del territorio, ofrecer un servicio totalmente personalizado responsable y serio, innovar en las tecnologías que usamos para ofrecer un producto con las especificaciones que requiere el mercado actual
          </p>
        </div>
        <div class="col-md-6 text-center">
          <img src="img/negocio.jpg" alt="Imagen de negocios" class="img-fluid" width="535px">
        </div>
      </div>
    </div>
  </section>
  <section class="text-right pb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/programacion.jpg" alt="Imagen lenguaje de programacion" class="img-fluid mb-4" width="535px">
        </div>
        <div class="col-md-6">
          <h3>Misión de Tecnosoft</h3>
          <p>
            Nuestra misión es satisfacer las necesidades y requerimientos de nuestros clientes en el campo de los sistemas de software, redes de computación y mantenimientos de equipos de computación. Ofreciendo soluciones de calidad y a un precio asequible para cada uno de nuestros usuarios
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php
    include_once 'plantillas/footer.php';

    include_once 'plantillas/docCierre.php';
  ?>
