<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = htmlspecialchars(trim($_POST['nom']));
  $prenom = htmlspecialchars(trim($_POST['prenom']));
  $entreprise = htmlspecialchars(trim($_POST['entreprise']));
  $mail = htmlspecialchars(trim($_POST['mail']));
  $telephone = htmlspecialchars(trim($_POST['telephone']));

  // Adresse e-mail de réception
  $to = "ledant.alexis.1@gmail.com"; // Remplacez par votre adresse e-mail
  $subject = "Nouveau message depuis le formulaire";

  // Contenu de l'email
  $message = "
            <html>
            <head>
                <title>Nouveau formulaire soumis</title>
            </head>
            <body>
                <h2>Informations du formulaire :</h2>
                <p><strong>Nom :</strong> $nom</p>
                <p><strong>Prénom :</strong> $prenom</p>
                <p><strong>Nom de l'entreprise :</strong> $entreprise</p>
                <p><strong>Numéro de téléphone :</strong> $telephone</p>
            </body>
            </html>
        ";

  // En-têtes pour l'e-mail
  $headers  = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: webmaster@example.com" . "\r\n"; // Remplacez par une adresse valide

  // Envoi de l'e-mail
  if (mail($to, $subject, $message, $headers)) {
    echo "Votre message a été envoyé avec succès.";
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ledant_Alexis</title>
  <link rel="stylesheet" href="./style/style.css" />
</head>

<body>
  <!-- PRESENTATION -->

  <header>
    <div>Développeur</div>
    <div>18 Ans</div>
    <div>
      <h1>Alexis_Ledant</h1>
    </div>
    <div>
      <img src="./img/photo.jpg" alt="" />
    </div>
  </header>
  <main>
    <section class="top">
      <div>
        <h2>Compétence, linguistique et technique</h2>
      </div>
      <div>
        <h3>Linguistique :</h3>
      </div>
      <p>Français</p>

      <!-- PROGRESS BAR -->

      <div class="container">
        <div class="skills français">100%</div>
      </div>
      <p>Anglais</p>
      <div class="container">
        <div class="skills anglais">85%</div>
      </div>
      <div>
        <h3>Technique :</h3>
      </div>
      <p>Html</p>
      <div class="container">
        <div class="skills html">80%</div>
      </div>
      <p>Css</p>
      <div class="container">
        <div class="skills css">60%</div>
      </div>
      <p>Php</p>
      <div class="container">
        <div class="skills php">10%</div>
      </div>
      <p>JavaScript</p>
      <div class="container">
        <div class="skills javascript">0.1%</div>
      </div>
    </section>

    <!-- DIPlÔME -->

    <section class="bottom">
      <div>
        <h2>Formation :</h2>
      </div>
      <div>CEB, CE1D, CE2D, assistant développeur ifapme 2024</div>
    </section>

    <!-- IMAGE ET PASSION -->

    <section class="overlast">
      <div>
        <h2>Intérêts :</h2>
      </div>
      <div class="L">jeu vidéo :</div>
      <div class="L">
        <img class="ph" src="./img/ow.jfif" alt="" />
      </div>
      <hr />
      <div class="L">informatique :</div>
      <div class="L">
        <img class="ph" src="./img/codage.jfif" alt="" />
      </div>
      <hr />
      <div class="L">anime/manga :</div>
      <div class="L">
        <img class="ph" src="./img/livre.jfif" alt="" />
      </div>
    </section>

    <!-- INFOS -->

    <section class="last">
      <div>
        <h2>Bio :</h2>
      </div>
      <div>
        Bonjour, je m'appelle Alexis, j'ai 18 ans. J'aime bien passer du temps
        avec mes amis en ligne comment dans la réalité. Je suis une personne
        très énergique mais je suis sérieux quand il le faut. J'ai découvert
        l'informatique durant un stage d'ingénieur en robotique et depuis le
        code est devenu l'une de mes passions. j'aime apprendre de nouvelles
        choses chaque jours et je suis toujours ouvert à écouter les plus
        expérimenté pour en apprendre plus.
      </div>
    </section>
  </main>
  <footer>
    <section class="laclasse">
      <div>
        <h2>Contact :</h2>
      </div>
      <div>
        <a href="tel:+32492094964">0492/094964</a>
      </div>
      <div>
        <a href="mailto:ledant.alexis.1@gmail.com">ledant.alexis.1@gmail.com</a>
      </div>
    </section>

    <!-- FORMULAIRE -->
    <section class="reign">
      <form action="index.php" method="POST">
        <input type="text" placeholder="nom" id="nom" name="nom" required><br><br>
        <input type="text" placeholder="prénom" id="prenom" name="prenom" required><br><br>
        <input type="text" placeholder="nom d'entreprise" id="entreprise" name="entreprise" required><br><br>
        <input type="mail" id="mail" name="mail" placeholder="ex : exemple@gmail.com"><br><br>
        <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" placeholder="ex : 0612345678" required><br><br>
        <button type="submit">Envoyer</button>
      </form>
    </section>
    <!-- FIN FORMULAIRE -->
  </footer>
</body>

</html>
