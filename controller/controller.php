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
       
            echo "password OK <br>";
           session_start();
         
           $_SESSION['firstname'] = "Bienvenue ".$storedpassword[0]['password'];
           echo $_SESSION['firstname'];
          
        }
        else{
            echo 'Mauvais password';
        }
    }
    require('view/userLoginView.php');
}