<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$table = 'users';
$admin_users = selectAll($table, ['admin' => 1]);

$errors = array();
$admin = '';
$username = '';
$email = '';
$password = '';
$passwordConf = '';

function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = $user['登陆成功'];
    $_SESSION['type'] = $user['success']; //CSS

        if($_SESSION['admin']){
            header('location: ' . BASE_URL . '/dashboard/admin/userlist.php');
        }
        else{
            header('location: ' . BASE_URL . '/index.php');
        } 
        exit();
}

if(isset($_POST['signup-btn']) || isset($_POST['create-admin'])){
    $errors = validateUser($_POST);
    if(count($errors) === 0){
        unset($_POST['signup-btn'],$_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if(isset($_POST['admin'])){
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = "管理员设置成功";
            $_SESSION['type'] = "success";
            header('location: ' . BASE_URL . '/dashboard/admin/userlist.php');
            exit();
        }
        else{
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        }
    }
    else{
        $username = $_POST['username'];
        // $admin = isset($_POST['admin']) ? 1 : 0; 需要的时候再加， 记得在create下面也要改
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf']; 
    }
}

if(isset($_POST['login-btn'])){
    $errors = validateLogin($_POST);
    if(count($errors) === 0){
        $user = selectOne('users', ['username' => $_POST['username']]);
        if($user && password_verify($_POST['password'], $user['password'])){
            //登录，重定向
            loginUser($user);
        }
        else{
            array_push($errors, '用户名或密码错误');
        }
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
}

?>