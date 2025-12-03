<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Projets - Fiatope Invest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffc0cb;
        }

        .projects-section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #0a0744ff;
            margin-bottom: 50px;
        }

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(14, 9, 107, 0.1) 0%, rgba(14, 9, 107, 0) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
            z-index: 1;
        }

        .project-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 15px 40px rgba(14, 9, 107, 0.3);
        }

        .project-card:hover::before {
            opacity: 1;
        }

        .project-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .project-card:hover img {
            transform: scale(1.1);
        }

        .project-card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .project-card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #0a0744ff;
            margin-bottom: 15px;
        }

        .project-card-description {
            color: #000000ff;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .btn-project {
            background-color: #0a0744ff;
            color: white;
            border: 1px solid #0a0744ff !important;
            padding: 12px 30px;
            border-radius: 50px !important;
            font-weight: 500 !important;
            transition: all 0.3s ease;
            align-self: flex-start;
        }

        .btn-project:hover {
            background-color: #0a0744ff;
            transform: scale(1.05);
            color: white;
        }
    </style>
</head>

<body>
    <?php require 'header.php'; ?>

    <section class="projects-section">
        <div class="container">
            <h1 class="section-title">Nos Projets</h1>

            <div class="row g-4">
                <!-- Projet 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="./bioanipics.avif" alt="Projet 1">
                        <div class="project-card-body">
                            <h3 class="project-card-title">Bioani</h3>
                            <p class="project-card-description"style="text-align:justify">
                                Bioani est une entreprise spécialisée dans l’élevage de larves de mouches soldats noires, nourries à partir de déchets organiques collectés auprès d’acteurs privés et publics. Grâce à ce processus circulaire, l’entreprise produit des protéines d’insectes destinées à l’alimentation animale ainsi que du fertilisant organique pour l’agriculture. Bioani a été accompagnée par Fiatope Invest, qui a soutenu le développement de son activité par une levée de fonds de 50 000 euros.
                            </p>
                            <a href="https://www.bioanifarm.com/" class="btn btn-project">En savoir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="./picture/maisonfanel.jpeg" alt="Projet 2">
                        <div class="project-card-body">
                            <h3 class="project-card-title">Maison Fenel</h3>
                            <p class="project-card-description"style="text-align:justify">
                                La Maison Fenel met en valeur le savoir-faire burkinabè en transformant le Faso Danfani (pagne tissé) en accessoires modernes, élégants et fonctionnels. L’entreprise ambitionne d’en faire une référence de la mode et du quotidien au Burkina Faso et dans la sous-région. Elle a levé 30 000 € auprès de Fiatope Invest, répartis à parts égales entre capital et compte courant d’associé, afin de financer l’ouverture de son nouveau showroom.
                            </p>
                            <a href="https://www.lamaisonfenel.com/" class="btn btn-project">En savoir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="project-card">
                        <img src="./picture/bobo.jpg" alt="Projet 3">
                        <div class="project-card-body">
                            <h3 class="project-card-title">Madinina Foods</h3>
                            <p class="project-card-description"style="text-align:justify">

Madinina Foods (Biscuiterie bobo) est une entreprise camerounaise engagée dans la valorisation des matières premières locales à travers la production de biscuits et snacks élaborés à partir de farines locales. Alliant qualité, authenticité et savoir-faire, elle propose une gamme variée de produits adaptés aux goûts des consommateurs. Madinina Foods commercialise ses produits en vente directe ainsi qu’au sein de petites et moyennes surfaces.
                            </p>
                            <a href="https://biscuiteriebobocom.wordpress.com/" class="btn btn-project">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mb-5 pb-5"></div>


    <?php require 'footer.php'; ?>
</body>

</html>