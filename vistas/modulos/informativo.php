<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema para Gestión de Acuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  </head>

  <body>

    <header>
      <h1>Gestión de Acuarios</h1>
      <hr>
      <h4>Descubre todo lo que necesitas saber para cuidar adecuadamente a tus peces. Aprende a mantener un acuario en perfectas condiciones y lleno de vida. Desde la alimentación hasta el equilibrio del ecosistema acuático, te brindamos la mejor ayuda para garantizar el bienestar de tus peces.</h4>
      <img src="assets/imagenes/Fondo-principal-header.jpg" alt="Fondo Principal">
    </header>

    <nav id="navegacion">
      <div>
        <a href="/">
          <span>Contenido</span>
        </a>
        <button id="hamburguesa">☰</button>
      </div>
      <ul>
        <li><a href="#Peceras">Peceras</a></li>
        <li><a href="#Peces">Peces</a></li>
        <li><a href="#Mantenimiento">Mantenimiento</a></li>
        <li><a href="#Alimentación">Alimentación</a></li>
        <li><a href="#Plantas">Plantas</a></li>
      </ul>
    </nav>
      
    <main>
      <section id="Peceras">
        <h3>Peceras</h3>
        <hr>
        <div>
          <a href="index.php?ruta=peceras">
            <img src="/Proyecto-PIT/assets/imagenes/Fondos%20Principales/01-Fondo-principal-acuario.jpg" alt="Acuarios">
              <p>Obtén toda la información necesaria para tener tu pecera en buenas condiciones.</p>
          </a>
        </div>
      </section>

      <section id="Peces" class="even">
        <h3>Peces</h3>
        <hr>
        <div>
          <a href="index.php?ruta=peces">
            <img src="/Proyecto-PIT/assets/imagenes/Fondos%20Principales/02-Fondo-principal-peces.jpg" alt="Peces">
            <p>Conoce las especies ideales para tu acuario y aprende a brindarles el mejor entorno.</p>
          </a>
        </div>
      </section>

      <section id="Mantenimiento">
        <h3>Mantenimiento</h3>
        <hr>
        <div>
          <a href="index.php?ruta=mantenimiento">
            <img src="/Proyecto-PIT/assets/imagenes/Fondos%20Principales/03-Fondo-principal-mantenimiento.jpg" alt="Mantenimiento">
            <p>Aprende todo sobre el mantenimiento ideal de tu pecera para un ecosistema saludable.</p>
          </a>
        </div>
      </section>

      <section id="Alimentación" class="even">
        <h3>Alimentación</h3>
        <hr>
        <div>
          <a href="index.php?ruta=alimentacion">
            <img src="/Proyecto-PIT/assets/imagenes/Fondos%20Principales/04-Fondo-principal-alimentacion.jpg" alt="Alimentación">
            <p>Descubre todo lo que necesitas saber para alimentar adecuadamente a tus peces y asegurar su bienestar.</p>
          </a>
        </div>
      </section>

      <section id="Plantas">
        <h3>Plantas</h3>
        <hr>
        <div>
          <a href="index.php?ruta=plantas">
            <img src="/Proyecto-PIT/assets/imagenes/Fondos%20Principales/05-Fondo-principal-plantas.jpg" alt="Plantas">
            <p>Encuentra todo sobre el cuidado ideal de las plantas en tu acuario para un ecosistema equilibrado.</p>
          </a>
        </div>
      </section>
    </main>

    <footer>
      <p>&copy; Todos los derechos reservados.</p>
    </footer>

    <script src="assets/js/fixed.js"></script>
    <script src="assets/js/main.js"></script>

  </body>

</html>
