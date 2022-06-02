<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

    <script type="text/javascript" src="<?= base_url() ?>/jquery-signature/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/jquery-signature/css/jquery.signature.css">

    <script type="text/javascript" src="<?= base_url() ?>/jquery-signature/js/jquery.signature.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <link rel="shortcut icon" type="image/png" href="/ttl-logo.png"/>
    
    <title>WIRO</title>
</head>

<body class="bg-gradient-primary" background="der.jpeg">

<div class="container" style="text-align: center; position: inline-block;">
<div class="box">
<img src="ttl-logo.png" style="width: 300px; height: 150px; text-align: center;">
</div>
</div>
<?= $this->renderSection('content'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>js/sb-admin-2.min.js"></script>

</body>

</html> 