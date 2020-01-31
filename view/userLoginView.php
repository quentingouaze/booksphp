<?php include_once 'templates/header.php'; ?>

<form method="POST">
    <div class="field">
        <label for="email">Entrez votre email: </label>
        <input type="text" name="email" id="email" required>
    </div>
    <div class="field">
        <label for="password">Entrez votre mot de passe: </label>
        <input type="password" name="password" id="password" required>
    </div>
    <input type="submit" id='submit' value='LOGIN'>



<?php

include_once 'templates/footer.php';
?>