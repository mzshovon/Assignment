<?php
session_start();

//creates backend session
function createAdminSession($admin){
    $_SESSION['admin_id'] = $admin->id;
    $_SESSION['admin_name'] = $admin->name;
    $_SESSION['admin_email'] = $admin->email;
}

//redirects guest to a different page
function guestRedirect($link = '/'){
    if (!isset($_SESSION['admin_id'])){
        header('location: '.$link);
    }
}

//redirects backend to a different page
function adminRedirect($link = '/backend/dashboard'){
    if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1){
        header('location: '.$link);
    }
}
// redirect writer to a different page
function writerRedirect($link = '/backend/dashboard'){
    if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2){
        header('location: '.$link);
    }
}
// redirect customer to a different page
function customerRedirect($link = '/backend/dashboard'){
    if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 3){
        header('location: '.$link);
    }
}