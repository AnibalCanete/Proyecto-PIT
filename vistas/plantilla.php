<?php
session_start();

// Verificamos sesión activa al principio
$sesionActiva = isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] === "ok";

// Definimos rutas públicas accesibles sin sesión
$publicas = ["peces", "peceras", "mantenimiento", "alimentacion", "plantas"];
$ruta = isset($_GET["ruta"]) ? $_GET["ruta"] : "inicio";

// Cierre de sesión
if ($ruta === "salir") {
  session_destroy();
  echo "<script>window.location = 'index.php?ruta=inicio';</script>";
  return;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Proyecto PIT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php if (!$sesionActiva && in_array($ruta, $publicas) || (!$sesionActiva && $ruta === "inicio")): ?>
  <!-- Estilos para contenido educativo -->
  <link rel="stylesheet" href="/Proyecto-PIT/assets/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700">
<?php else: ?>
  <!-- Estilos AdminLTE para sistema administrativo -->
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/plugins/iCheck/all.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="/Proyecto-PIT/vistas/bower_components/morris.js/morris.css">
<?php endif; ?>
<script src="/Proyecto-PIT/assets/js/fixed.js"></script>
  <script src="/Proyecto-PIT/assets/js/main.js"></script>
</head>

<body class="<?php echo (!$sesionActiva && in_array($ruta, $publicas)) || (!$sesionActiva && $ruta === 'inicio') ? '' : 'hold-transition skin-blue sidebar-mini'; ?>">
<?php if (!$sesionActiva && $ruta !== "login"): ?>
  <div style="background: linear-gradient( #2C9CB3); text-align: right; padding: 15px 30px;">
    <a href="index.php?ruta=login" style="padding: 10px 20px; color: black; text-decoration: none; border-radius: 4px;">Iniciar Sesión</a>
  </div>
<?php endif; ?>


<?php

// Login
if (!$sesionActiva && !in_array($ruta, $publicas) && $ruta !== "inicio") {
  include __DIR__ . "/modulos/login.php";
} else {

  if ($sesionActiva && !in_array($ruta, $publicas)) {
    echo '<div class="wrapper">';
    include __DIR__ . "/modulos/cabezote.php";
    include __DIR__ . "/modulos/menu.php";
  }

  if (!$sesionActiva && $ruta === "inicio") {
    echo "<div class='container'>";
    include __DIR__ . "/modulos/informativo.php";
    echo "</div>";
  } else {
    echo in_array($ruta, $publicas) ? "<div class='container'>" : "<div class='content-wrapper'>";
    $ruta_php = __DIR__ . "/modulos/" . $ruta . ".php";
    if (file_exists($ruta_php)) {
      include $ruta_php;
    } else {
      include __DIR__ . "/modulos/404.php";
    }
    echo "</div>";
  }

  if ($sesionActiva && !in_array($ruta, $publicas)) {
    include __DIR__ . "/modulos/footer.php";
    echo '</div>'; // wrapper
  }
}
?>

<?php if ($sesionActiva): ?>
<!-- Scripts AdminLTE -->
<script src="/Proyecto-PIT/vistas/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/fastclick/lib/fastclick.js"></script>
<script src="/Proyecto-PIT/vistas/dist/js/adminlte.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
<script src="/Proyecto-PIT/vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script src="/Proyecto-PIT/vistas/plugins/iCheck/icheck.min.js"></script>
<script src="/Proyecto-PIT/vistas/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/Proyecto-PIT/vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/Proyecto-PIT/vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="/Proyecto-PIT/vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/moment/min/moment.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/raphael/raphael.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/morris.js/morris.min.js"></script>
<script src="/Proyecto-PIT/vistas/bower_components/Chart.js/Chart.js"></script>

<script src="/Proyecto-PIT/vistas/js/plantilla.js"></script>
<script src="/Proyecto-PIT/vistas/js/usuarios.js"></script>
<script src="/Proyecto-PIT/vistas/js/categorias.js"></script>
<script src="/Proyecto-PIT/vistas/js/productos.js"></script>
<script src="/Proyecto-PIT/vistas/js/clientes.js"></script>
<script src="/Proyecto-PIT/vistas/js/ventas.js"></script>
<script src="/Proyecto-PIT/vistas/js/reportes.js"></script>
<?php endif; ?>
</body>
</html>
