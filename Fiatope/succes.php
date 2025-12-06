<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<style>

        .btn {
            background-color: #0a0744ff;
            color: white;
            border: 1px solid #0a0744ff !important;
            padding: 12px 30px;
            border-radius: 50px !important;
            font-weight: 500 !important;
            transition: all 0.3s ease;
            align-self: flex-start;
        }

        .btn{
            background-color: #0a0744ff;
            transform: scale(1.05);
            color: white;
        }
</style>

    <?php require 'header.php'; ?>

    <div class="px-4 py-5 my-5 text-center"> <img class="d-block mx-auto mb-4" src="Gemini_Generated_Image_wtg9sgwtg9sgwtg9.png" alt="" width="72" height="68">
        <h1 class="display-5 fw-bold text-body-emphasis">Merci !</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Votre message a été envoyé avec succès ,nous reviendrons vers vous rapidement ! L'équipe Fiatope INVEST</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="index.php" class="btn btn-outline-secondary btn-lg px-4">Revenir à l'accueil</a>
            </div>
        </div>
    </div>

</body>

<!--lutilisateur peut plus repartir a  la page precedente-->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, '', 'index.php');
    }
    
</script>
<?php require 'footer.php'; ?>
</body>

</html>