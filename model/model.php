<?php

function dbConnect()
{
    require "config.php";
    try {
        $pdo = new PDO($dsn,$username,$password,$options);
        return $pdo;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function _listUsers()
{
    $db = dbConnect();
    $req = $db->prepare("SELECT * FROM users");
    $req->execute();
    return $req->fetchAll();
    
}
function _createUser()
{
    $db =dbConnect();
    $hashpassword= password_hash($_POST['password'], PASSWORD_DEFAULT);
    $new_user = array(
        "userGroup" => $_POST['userGroup'],
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "email" => $_POST['email'],
        "password" => $hashpassword
      );
    $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "users",
        implode(", ", array_keys($new_user)),
        ":" . implode(", :", array_keys($new_user))
);
    $req= $db->prepare($sql);
    $req->bindValue(':userGroup',$_POST['userGroup'], PDO::PARAM_STR);
    $req->bindValue(':firstname',$_POST['firstname'], PDO::PARAM_STR);
    $req->bindValue(':lastname',$_POST['lastname'], PDO::PARAM_STR);
    $req->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
    $req->bindValue(':password',$hashpassword, PDO::PARAM_STR);
    $req->execute();
    return $req;
    
}

function _deleteUser()
{
    $db=dbConnect();
    $emailtodelete=$_GET['email'];
    $req= $db->prepare("DELETE FROM users WHERE email=:email");
    $req->bindValue(':email',$emailtodelete, PDO::PARAM_STR);
    $req->execute();
    var_dump($req);
    return("User with email = {$emailtodelete} deleted.");
}

function _userLogin()
{
    $db=dbConnect();
    $sql = "SELECT * 
                    FROM users
                    WHERE email = :email";
        $email = $_POST['email'];
        $statement = $db->prepare($sql);
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
}
