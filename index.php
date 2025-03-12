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
    <script type="text/javascript" src="/js/index.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
    </style>
</head>

<body>  
    <header>
        <div id="navbar-container"></div>
        <script>
          fetch("navbar.html")
            .then(response => response.text())
            .then(data => document.getElementById("navbar-container").innerHTML = data);
        </script>

        <div class="hero">
            <h1 class="titre">RENAULT | DACIA</h1>
            <p class="textsous">📍 Saint Gilles Croix de Vie</p>
        </div>
    </header>


</body>

