<?php
require('model/model.php');

function listUsers()
{
    $users = _listUsers();
    require('view/listUsersView.php');
}

function createUser()
{
    if($_POST){
    _createUser();
    }
    require('view/createUserView.php');
}

function deleteUser()
{

    require('view/deleteUserView.php');
}