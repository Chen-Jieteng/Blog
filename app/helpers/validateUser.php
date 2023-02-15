<?php
function validateUser($user){
    $errors = array();
    if(empty($user['username'])){
        array_push($errors, '*未输入用户名');
    }
    if(empty($user['email'])){
        array_push($errors, '*未输入邮箱');
    }
    if(empty($user['password'])){
        array_push($errors, '*未输入密码');
    }
    if($user['passwordConf'] !== $user['password']){
        array_push($errors, '*密码不匹配');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if(isset($existingUser)){
        array_push($errors, '邮箱已注册');
    }
    $existingUsername = selectOne('users', ['username' => $user['username']]);
    if(isset($existingUsername)){
        array_push($errors, '用户名已占用');
    }
    return $errors;
}

function validateLogin($user){
    $errors = array();
    if(empty($user['username'])){
        array_push($errors, '*未输入用户名');
    }
    if(empty($user['password'])){
        array_push($errors, '*未输入密码');
    }

    return $errors;
}
?>