<!DOCTYPE html>

<head>
    <meta charest="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/LoginStyle.css">

</head>

<body>
    <div class="FlexCol" id="containerLogin">
        <h1>Login</h1>
        <form class="FlexCol" id="formLogin">
            <label>
                Email
            </label>
            <input type="email">
            <label>
                password
            </label>
            <input type="password">
            <button class="Btncompt">Login</button>
            <p onclick="openModal()">vous avez pas un compt?</p>
        </form>
    </div>

<!-- model pour creer un compt avec function qui va le faire appareter qaund on click
 la phrase vous avez pas un compt? -->
    
 
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    
    <h2>Créer un compte</h2>
    <form action="./models/register.php" method="POST">
     
      <label for="email">Email</label><br>
      <input type="email" name="email" required><br><br>

      <label for="password">Mot de passe</label><br>
      <input type="password" name="password" required><br><br>

       <label for="name">Votre prenome</label><br>
      <input type="text" name="name" required><br><br>

      <label for="gender">Gender</label><br>
      <select name="gender" required>
        <option value="">-- Sélectionnez --</option>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
        <option value="Autre">Autre</option>
      </select><br><br>

      <label for="age">Âge</label><br>
      <input type="number" name="age" min="1" max="100"><br><br>

      <label for="residence_type">Type de résidence</label><br>
      <select name="residence_type" required>
        <option value="">-- Sélectionnez --</option>
        <option value="Étudiant">Étudiant</option>
        <option value="Visa de travail">Visa de travail</option>
        <option value="Réfugié">Réfugié</option>
      </select><br><br>

      <button type="submit">Envoyer</button>
    </form>
  </div>
</div>



<script src="public\js\script.js"></script>
</body>

</html>