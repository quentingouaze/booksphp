<?php include_once 'templates/header.php' ?>
<table>
    <?php
        $html = '<thead><tr><th>FirstName</th><th>Last Name</th><th>Email</th>';
        foreach ($users as $user){
            $html.="<tr><td>{$user['firstname']}</td><td>{$user['lastname']}</td><td>{$user['email']}</td><td><a href='?action=deleteUser?email={$user['email']}'>Delete</a></tr>";
        }
        echo $html;
    ?>
</table>
<?php include_once 'templates/footer.php' ?>