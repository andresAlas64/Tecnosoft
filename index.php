<?php
  $titulo = 'Tecnosoft';

  include_once 'plantillas/docDeclaracion.php';

  /*include_once 'plantillas/navbar.php';*/
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
          <div class="col-md-6 justify-content-center align-self-center">
            <h1>Tecnología avanzada para tus necesidades</h1>
            <p>Lorem ipsum dolor sit amet</p>
            <!--<a href="#" class="btn btn-outline-light text-black btn-header mb-5">Ver más</a>-->
          </div>
          <div class="col-md-6 text-center">
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
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, nemo, vel! Doloremque in dolorem, quaerat blanditiis, rem est et placeat quas, esse vero porro, totam voluptatem fugit quam labore itaque?
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
                Brindamos soporte técnico en persona o por la plataforma teamviewer las 24 horas de la semana.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center border-primary mb-5">
            <div class="card-body">
              <h3>Programas</h3>
              <p>
                Todo tipo de programas como facturación electrónica, contabilidad, sistemas de cajas, scaner de productos, servicios en la nube Microsoft azure entre otros muchos.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center border-primary">
            <div class="card-body">
              <h3>Mantenimiento</h3>
              <p>
                Mantenimiento de equipos de computación, servidores y todo tipo de impresoras.
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
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam labore repellendus quo atque repudiandae, ad blanditiis ipsa incidunt. Voluptatibus repellat, enim ex sed temporibus aperiam suscipit eum non facilis. Eius!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum iusto doloribus cupiditate nemo voluptates sunt id nobis est maiores, impedit, laudantium, incidunt mollitia ut molestiae aliquid vel reiciendis dolorem eaque.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae natus ipsa adipisci aspernatur unde sunt ipsum aut iste consequatur vero, quia saepe, voluptates id porro omnis, doloremque? Consequuntur, quo libero.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia harum in optio, itaque, nam soluta doloribus eius. Sint non dolorum qui, totam vitae itaque cupiditate provident temporibus possimus suscipit quam?
          </p>
          <!--<a href="#" class="btn btn-outline-primary text-black mb-5">Ver más</a>-->
        </div>
        <div class="col-md-6 text-center">
          <img src="img/negocio.jpg" alt="Imagen de negocios" class="img-fluid" width="535px">
        </div>
      </div>
    </div>
  </section>
  <!---->
  <section class="text-right pb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/programacion.jpg" alt="Imagen lenguaje de programacion" class="img-fluid mb-4" width="535px">
        </div>
        <div class="col-md-6">
          <h3>Misión de Tecnosoft</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam labore repellendus quo atque repudiandae, ad blanditiis ipsa incidunt. Voluptatibus repellat, enim ex sed temporibus aperiam suscipit eum non facilis. Eius!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum iusto doloribus cupiditate nemo voluptates sunt id nobis est maiores, impedit, laudantium, incidunt mollitia ut molestiae aliquid vel reiciendis dolorem eaque.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae natus ipsa adipisci aspernatur unde sunt ipsum aut iste consequatur vero, quia saepe, voluptates id porro omnis, doloremque? Consequuntur, quo libero.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia harum in optio, itaque, nam soluta doloribus eius. Sint non dolorum qui, totam vitae itaque cupiditate provident temporibus possimus suscipit quam?
          </p>
          <!--<a href="#" class="btn btn-outline-primary text-black mb-5">Ver más</a>-->
        </div>
      </div>
    </div>
  </section>
  <?php
    include_once 'plantillas/footer.php';

    include_once 'plantillas/docCierre.php';
  ?>
