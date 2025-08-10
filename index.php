<?php
// Función para detectar si es móvil o tablet
function esMovilOTablet() {
    $agente = strtolower($_SERVER['HTTP_USER_AGENT']);

    // Lista básica de identificadores de móviles/tablets
    $moviles = [
        'iphone', 'ipod', 'ipad', 'android', 'blackberry', 'bb10',
        'mini', 'windows phone', 'iemobile', 'mobi', 'tablet', 'kindle', 'playbook'
    ];

    foreach ($moviles as $dispositivo) {
        if (strpos($agente, $dispositivo) !== false) {
            return true;
        }
    }
    return false;
}

// Redirección
if (esMovilOTablet()) {
    header("Location: /vuelos/");
    exit;
} else {
    header("Location: https://www.jetsmart.com");
    exit;
}
?>