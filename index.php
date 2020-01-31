<?php

session_start();

require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'deleteUser') {
        deleteUser();
    }
    elseif ($_GET['action'] == 'createUser') {
        createUser();
    }
    elseif ($_GET['action']=='deleteUser'){
        deleteUser();
    }
    elseif($_GET['action']=='userLogin'){
        userLogin();
    }
}
else {
    listUsers();
}