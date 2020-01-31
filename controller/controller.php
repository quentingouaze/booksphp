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
    _deleteUser();
    require('view/deleteUserView.php');
}
function userLogin()
{
    if ($_POST) {
        _userLogin();

        $storedpassword=_userLogin();
        if (password_verify($_POST['password'], $storedpassword[0]['password'])) {
       $_SESSION['storage']=$storedpassword[0]['password'];
           
        }
        else{
            echo 'Mauvais password';
        }
    }
    require('view/userLoginView.php');
}