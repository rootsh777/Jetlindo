<?php
// Función para detectar si es un dispositivo móvil
function esMovil() {
    $agente = $_SERVER['HTTP_USER_AGENT'];
    $moviles = ['Android', 'iPhone', 'iPad', 'iPod', 'Opera Mini', 'IEMobile', 'Mobile'];

    foreach ($moviles as $movil) {
        if (stripos($agente, $movil) !== false) {
            return true;
        }
    }
    return false;
}

// Si no es móvil, redirige a Google
if (!esMovil()) {
    header("Location: https://www.google.com/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Redirigiendo...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        // Redirige después de 1 segundo
        setTimeout(function() {
            window.location.href = "vuelos/index.html";
        }, 1000); // 1000 milisegundos = 1 segundo
    </script>
</head>
<body>
    <h1>Espere un momento...</h1>
    <p>.</p>
</body>
</html>