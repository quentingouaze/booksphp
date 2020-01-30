<?php include_once 'templates/header.php' ?>

<?php if (isset($_POST['submit'])) { ?>
    <blockquote><?php echo $_POST['firstname']; ?> successfully added.</blockquote>
<?php } ?>
<h2>S'inscrire</h2>
    <form method="post">
    <select name = userGroup size="1">
    <option> Administrateur
    <option> Membre
    </select>
        <label for="firstname">Nom</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Prénom</label>
        <input type="text" name="lastname" id="lastname">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="email">Password</label>
        <input type="text" name="password" id="password">
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="action?=''">Index</a>

    <?php include_once 'templates/footer.php' ?>