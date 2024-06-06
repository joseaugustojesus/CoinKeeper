<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinKeeper - Login</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-3/assets/css/login-3.css">
    <link rel="stylesheet" href="<?= css_directory("/auth/login.css"); ?>">
    <link rel="stylesheet" href="<?= css_directory("/notification.css") ?>">
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
                        <p class="mb-0 fw-bold text-center">Não possui conta? <a href="<?= route("/account/new") ?>" class="link-secondary text-decoration-none d-flex align-items-center justify-content-center">Bora poupar <i class="ph ph-arrow-right ms-2"></i></a></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 bsb-tpl-bg-lotion" id="columnRight">
                    <div class="p-3 p-md-4 p-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h3 class="d-flex align-items-center fw-bold">Autenticação <i class="ph ph-lock ms-2"></i></h3>
                                </div>
                            </div>
                        </div>
                        <form action="<?= route("/login") ?>" method="POST">
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label for="username" class="form-label fw-bold">Usuário <span class="text-danger">*</span></label>
                                    <input type="username" class="form-control" name="username" id="username" placeholder="coin.keeper" required>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label fw-bold">Senha <small>(Não erre mais de 3 vezes 😉)</small> <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" value="" required placeholder="********">
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn bsb-btn-xl bg-money" type="submit">ACESSAR</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-5 mb-4 border-secondary-subtle">
                                <div class="text-end">
                                    <p class="text-secondary">Precisa recuperar sua senha?</p>
                                    <a href="<?= route("/account/password/reset") ?>" class="link-secondary text-decoration-none">Clica aqui que nós te ajudamos 🚀</a>
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

<?php viewingNotifications(); ?>

</html>