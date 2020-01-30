<?php
require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'deleteUser') {
        deleteUser();
    }
    elseif ($_GET['action'] == 'createUser') {
        createUser();
    }
}
else {
    listUsers();
}