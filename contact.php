<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiatope invest - Contact</title>
    <link href="/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: white !important;
        }

        .btn {
            background-color: white !important;
            color: #0a0744ff !important ;
            border: 1px solid #0a0744ff !important;
            border-radius: 10px !important;
            font-weight: 500 !important;
            transition: all 0.3s ease;
            align-self: flex-start;

        }

        .btn:hover {
            transform: scale(1.05)!important;
            color: white;
        }
    </style>
</head>

<body>
    <?php require 'header.php'; ?>

    <div class="container col-xl-10 col-xxl-8 px-5 py-6 mb-5 border shadow" style="background-color: #090642ff; margin-top: 50px; border-radius: 30px;">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-6 text-center text-lg-start d-flex flex-column justify-content-center">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3" style="color: white!important;">Contactez-nous !</h1>
                <p class="fs-4" style="font-size: 20px!important;">Une question ? Besoin d’un renseignement ? N’hésitez pas à nous contacter !</p>
            </div>
            <div class="col-lg-6">
                <form method="post" action="send_email.php" class="p-4 p-md-5 border rounded-3" style="background:white;">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="name" placeholder="Votre nom" required>
                                <label for="floatingName">Nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Votre email" required>
                                <label for="floatingEmail">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingSubject" name="subject" placeholder="Sujet" required>
                        <label for="floatingSubject">Sujet</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="floatingMessage" name="message" placeholder="Votre message" style="height: 120px" required></textarea>
                        <label for="floatingMessage">Message</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-lg btn-primary px-5" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="mb-5 pb-5"></div>


    <div class="mb-5 pb-5"></div>






    <?php require 'footer.php'; ?>
</body>

</html>