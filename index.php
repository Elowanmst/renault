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
    <link rel="icon" type="image/gif" href="image/favicon-renault.svg"/>
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
        <div class="solution-content">
            <div class="solution-text">
                <h3 class="wh">NOS SERVICES</h3>
            </div>
            
            <div class="solution-cards">
                <div class="card">
                    <h4>Vidange</h4>
                    <p>sous service</p>

                    <p>vous faite quoi a la vidange ?</p>
                    <ul class="custom-list">
                        <li>?</li>
                        <li>?</li>
                        <li>?</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>Entretiens</h4>
                    <p>sous service</p>
                    <p>c'est quoi un entretiens ?</p>
                    <ul class="custom-list">
                        <li>?</li>
                        <li>?</li>
                        <li>?</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>reparation en tout genre</h4>
                    <p>sous service</p>
                    <p>cest quoi une reparation</p>
                    <ul class="custom-list">
                        <li>?</li>
                        <li>?</li>
                        <li>?</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>?</h4>
                    <p>?</p>
                    <p>?</p>
                    <ul class="custom-list">
                        <li>?</li>
                        <li>A?</li>
                        <li>?</li>
                    </ul>
                </div>
            </div>               
        </div>

    </section>


    <section id="garage">

    </section>


    <section id="recrutement">
        <h2>Recrutement</h2>

    </section>

    <section id="loc">
        <h2>Nous trouvez</h2>
        <h3>14 route de la Roche - 85800 Saint Gilles Croix de Vie</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2736.5910320520948!2d-1.9142408236174886!3d46.69407212112066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48045652dd3bba83%3A0x81845e7725dcbe2e!2sGarage%20Renault%2FDacia%20Rond%20Point%20de%20L&#39;Europe%20Automobiles!5e0!3m2!1sfr!2sfr!4v1742247546947!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h3>Horaires</h3>
        <table>
            <thread>
                <tr>
                    <th>Jour</th>
                    <th>Matin</th>
                    <th>Après-midi</th>
                </tr>
            </thread>
            <tbody>

            <tr>
                <td>Lundi</td>
                <td>09:00 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Mardi</td>
                <td>08:30 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Mercredi</td>
                <td>08:30 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Jeudi</td>
                <td>08:30 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Vendredi</td>
                <td>08:30 - 12:00</td>
                <td>14:00 - 18:00</td>
            </tr>
            <tr>
                <td>Samedi</td>
                <td>fermé</td>
                <td></td>
            </tr>
            <tr>
                <td>Dimanche</td>
                <td>Fermé</td>
                <td></td>
            </tr>

            </tbody>

        </table>

        <h3>Fermeture exceptionelle</h3>
        
            <!-- horaire connecté a la base de données  -->


    </section>


    <section id="contact">
        <h2>nous contactez<h2>

    </section>

    


    <?php include('include/footer.php'); ?>
</body>
</html>