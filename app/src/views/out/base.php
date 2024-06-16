<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ck_title ?></title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <link rel="stylesheet" href="<?= css_directory("/bs5.css") ?>">
    <link rel="stylesheet" href="<?= css_directory("/notification.css") ?>">
    <link rel="stylesheet" href="<?= css_directory("/out/base.css"); ?>">
</head>

<body>

    <ul class="notificationsToasts"></ul>


    <section class="p-3 p-md-4 p-xl-5" id="login">
        <div class="container">
            <?= $this->section("content"); ?>
        </div>
    </section>

</body>


<script src="<?= js_directory("/init.js") ?>"></script>
<script src="<?= js_directory("/notification.js") ?>"></script>
<script src="<?= js_directory("/axios.js") ?>"></script>

<?php if (!empty($js)) { ?>
    <?php foreach ($js as $js_) { ?>
        <script src="<?= $js_ ?>"></script>
    <?php } ?>
<?php } ?>

<?php viewingNotifications(); ?>

</html>