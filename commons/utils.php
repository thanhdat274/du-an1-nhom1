<?php

const BASE_URL = "http://localhost:81/nhom1/";
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const PUBLIC_PATH = 'http://localhost:81/nhom1/public/';

const ADMIN_ROLE = 1;
const STAFF_ROLE = 2;

function dd()
{
    $data = func_get_args();
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

function client_render($view, $data = [])
{
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}

function admin_render($view, $data = [])
{
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}
function checkAuth($roles = [])
{

    if (!isset($_SESSION['user']) || $_SESSION['user'] == null || !in_array($_SESSION['user']['roles'], $roles)) {
        header('location: ' . BASE_URL . 'signup');
        die;
    }
}
