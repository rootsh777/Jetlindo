<?php
define('TELEGRAM_BOT_TOKEN', '8189575388:AAHvLEjJwlKx53yhGVywPKpRDPd_80Qwmp0');
define('TELEGRAM_CHAT_ID', '-4823321531');

// Registrar solicitud en logs para depuraci��n
error_log("Solicitud recibida: " . file_get_contents("php://input"));

// Recibir datos de JavaScript
$data = json_decode(file_get_contents("php://input"), true);

// Verificar si `$data['mensaje']` est�� definido y no es vac��o
if (!isset($data['mensaje']) || empty(trim($data['mensaje']))) {
    $mensajeUsuario = "�7�2�1�5 Advertencia: No se recibi�� mensaje v��lido";
} else {
    $mensajeUsuario = trim($data['mensaje']);
}

// Obtener informaci��n del usuario
$ip = $_SERVER['REMOTE_ADDR'] ?? "Desconocida";
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? "Desconocido";
$fecha = date("Y-m-d H:i:s");

// Construir mensaje para Telegram
$mensaje .= " *Mensaje:* $mensajeUsuario\n";
$mensaje .= " *IP:* $ip\n";
$mensaje .= " *Fecha:* $fecha\n";
//$mensaje .= "�9�7 *Navegador:* $userAgent";

// Funci��n para enviar mensaje con cURL
function enviarTelegram($mensaje) {
    $url = "https://api.telegram.org/bot" . TELEGRAM_BOT_TOKEN . "/sendMessage";

    // Convertir mensaje a UTF-8 para evitar caracteres inv��lidos
    $mensaje = utf8_encode($mensaje);

    $data = [
        'chat_id' => TELEGRAM_CHAT_ID,
        'text' => $mensaje,
        'parse_mode' => 'Markdown'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $respuesta = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Registrar respuesta en logs para depuraci��n
    error_log("Respuesta de Telegram ($http_code): " . $respuesta);

    return $respuesta;
}

// Enviar mensaje a Telegram
$respuestaTelegram = enviarTelegram($mensaje);

// Enviar respuesta al cliente
echo json_encode([
    "status" => "ok",
    "mensaje" => $mensajeUsuario,
    "respuesta" => json_decode($respuestaTelegram, true)
]);
?>
?>