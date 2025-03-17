<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Garage Renault - Dacia Rond-Point de l'Europe">
    <meta name="keywords" content="garage, réparations, vente de véhicule, véhicule, dacia, renault">
    <meta name="author" content="EC-Craftt">
    <title>Garage Renault</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/JS/index.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
    </style>
</head>
<body>  
<div id="navbar-container"></div>
    <script>
        fetch("navbar.php")
            .then(response => response.text())
            .then(data => document.getElementById("navbar-container").innerHTML = data);
    </script>
    
    <?php include('include/header.php'); ?>

    <section id="top">
        <div class="container">
            <h2>Bienvenue au garage Renault du rond point de l'Europe</h2>
            <p>Réparations, maintenance, achat, revente</p>
        </div>
    </section>


    <section id="service">
        <h2>Nos services</h2>

    </section>


    <section id="horaire">
        <h2>Nos horaires</h2>

    </section>


    <section id="loc">
        <h2>Ou sommes nous ?</h2>

    </section>


    <section id="contact">
        <h2>nous contactez<h2>

    </section>

    


    <?php include('include/footer.php'); ?>
</body>
</html>