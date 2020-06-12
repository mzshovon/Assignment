<?php
function init()
{
    session_start();
}

//creates backend session
function createAdminSession($admin)
{
    $_SESSION['admin_id'] = $admin->id;
    $_SESSION['admin_email'] = $admin->email;
    $_SESSION['role_id'] = $admin->role;
}

function set($key, $val)
{
    $_SESSION[$key] = $val;
}

function get($key)
{
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    } else {
        return false;
    }
}

//redirects guest to a different page
function guestRedirect($link = '/')
{
    if (!isset($_SESSION['id'])) {
        header('location: ' . $link);
    }
}

//redirects backend to a different page
function adminRedirect($link = '/backend/dashboard')
{
    if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1) {
        header('location: ' . $link);
    }
}

// redirect writer to a different page
function writerRedirect($link = '/backend/dashboard')
{
    if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2) {
        header('location: ' . $link);
    }
}

// redirect customer to a different page
function customerRedirect($link = '/backend/dashboard')
{
    if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 3) {
        header('location: ' . $link);
    }
}

function checkAdminSession()
{
    checkAdminSession::init();
    if (checkAdminSession::get("admin-login") == false) {
        unset($_SESSION["admin-login"]);
        header(URLROOT . "backend/login.php");
    }
}

function checkAdminLogin()
{
    checkAdminLogin::init();
    if (checkAdminLogin::get("admin-login") == true) {
        header(URLROOT . "backend/dashboard.php");
    }
}
