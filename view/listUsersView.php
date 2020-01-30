<?php include_once 'templates/header.php' ?>
<table>
    <?php
        $html = '';
        foreach ($users as $user){
            $html.="<tr><td>{$user['firstname']}</td><td>{$user['lastname']}</td><td>{$user['email']}</td></tr>";
        }
        echo $html;
    ?>
</table>
<?php include_once 'templates/footer.php' ?>