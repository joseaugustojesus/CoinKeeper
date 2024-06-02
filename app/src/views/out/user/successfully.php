<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinKeeper - Login</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-3/assets/css/login-3.css">
    <link rel="stylesheet" href="<?= css_directory("/notification.css") ?>">
    <link rel="stylesheet" href="<?= css_directory("/auth/login.css"); ?>">

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');


    * {
        font-family: "Inter", sans-serif;
        font-optical-sizing: auto;
        font-weight: 300;
        font-style: normal;
        font-variation-settings:
            "slnt" 0;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f7fa;
    }

    #columnLeft {
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
        background-color: #EAEAEA !important;
    }

    #columnRight {
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        background-color: #FFF !important;
    }
</style>

<body>

    <ul class="notificationsToasts"></ul>

    <section class="p-3 p-md-4 p-xl-5" id="login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 bsb-tpl-bg-platinum" id="columnLeft">
                    <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
                        <h3 class="m-0 text-center fw-bold">CoinKeeper</h3>
                        <img class="img-fluid rounded mx-auto my-4" loading="lazy" src="https://imgs.search.brave.com/bbGOkm4JFA3GaOL_XgYjFJ3agFqy-PACIQ_QATRTkvI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuZnJlZWltYWdl/cy5jb20vaW1hZ2Uv/cHJldmlld3MvZDlj/L2NyeXB0by1jaGFy/YWN0ZXItbW9uZXkt/aWNvbi1wbmctYXJ0/LTU2OTQ1NzQucG5n/P2ZtdA" width="245" height="80" alt="BootstrapBrain Logo">
                        <p class="mb-0 fw-bold text-center">Já possui conta? <a href="<?= route("/") ?>" class="link-secondary text-decoration-none d-flex align-items-center justify-content-center">Começar a poupar <i class="ph ph-arrow-right ms-2"></i></a></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 bsb-tpl-bg-lotion" id="columnRight">
                    <div class="p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h3 class="d-flex align-items-center fw-bold">Sua trajetória em rumo ao controle de suas finanças começa agora 🎉 </h3>
                                </div>
                            </div>
                        </div>
                        <form action="<?= route("/account/new") ?>" method="POST">
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label for="email" class="form-label fw-bold">Secret</label>
                                    <p id="secret"><?= $user->secret ?></p>
                                    <small class="text-muted">Salve sua chave de recuperação (fazer <a href="#" onclick="secretDownload()">download</a> 😉)</small>
                                </div>


                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn bsb-btn-xl bg-money" onclick="secretCopy()" type="button">COPIAR CHAVE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-5 mb-4 border-secondary-subtle">
                                <div class="text-end">
                                    <p class="text-secondary">Comece a poupar seu dinheiro agora mesmo e tenha total controle de seus gastos 🚀</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script src="<?= js_directory("/init.js") ?>"></script>
<script src="<?= js_directory("/notification.js") ?>"></script>

<?php
viewingNotifications();
// forgetSessions(["userCreated"]);
?>

<script>
    function secretDownload() {
        const secret = document.getElementById("secret").innerText;
        const link = document.createElement('a');
        link.download = 'coin_keeper_secret.txt';
        link.href = 'data:text/plain;charset=utf-8,' + encodeURIComponent(secret);
        link.style.display = 'none';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }


    const secretCopy = () => {
        navigator.clipboard.writeText(document.getElementById("secret").innerText).then(function() {
            notificationsToast("success", "A chave foi copiada com sucesso");
        }, function(err) {
            console.error('Async: Could not copy text: ', err);
        });
    }
</script>

</html>