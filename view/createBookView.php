<?php include_once 'templates/header.php' ?>

<?php if (isset($_POST['submit'])) { ?>
    <blockquote><?php echo $_POST['title']; ?> successfully added.</blockquote>
<?php } ?>
<h2>Créer un livre</h2>
    <form method="post">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title">
        <label for="lastname">Prénom</label>
        <input type="text" name="author" id="author">
        <label for="owner">Propriétaire</label>
        <input type="text" name="owner" id="owner">
        <input type="text" name="genre" id="genre">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php include_once 'templates/footer.php' ?>