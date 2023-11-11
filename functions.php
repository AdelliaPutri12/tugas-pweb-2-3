<?php

function redirect($url)
{
    header("Location: $url");
    exit();
}

function display_error($message)
{
    echo '<div class="error-message">' . $message . '</div>';
}

function display_success($message)
{
    echo '<div class="success-message">' . $message . '</div>';
}

function get_data_from_database($table, $id)
{

}

function save_data_to_database($table, $data)
{
    
}

function validate_input($input)
{
    
}

function get_customer_data($customer_id)
{
    
}

function get_item_data($item_id)
{
    
}

function admin()
{
    require_once('../view/admin-panel/admin-login.php');
}

function dashboard()
{
    require_once('../view/admin-panel/admin-dashboard.php');
}

function customer_login()
{
    require_once('../view/forms/customer-login.php');
}

function customer_login_save()
{
    echo "Proses Login Customer";
}

function customer_register()
{
    require_once('../view/forms/customer-register.php');
}

function customer_register_save()
{
    echo "Proses Register Customer";
}

function customer_profile()
{
    require_once('../view/forms/customer-profile');
}

function customer_profile_edited()
{
    echo "Proses Edit Profil Customer";
}

function item($id)
{
    echo "Halaman Detail Item dengan ID $id";
    require_once('../view/shop/item.php');
    getItemById($id);
}

function cart()
{
    require_once('../view/shop/cart.php');
}


function order($id)
{
    echo "Halaman Detail Pesanan dengan ID $id";
    require_once('../view/shop/order.php');
    getItemById($id);
}

function contact()
{
    require_once('../view/shop/contact.php');
}

function logout()
{
    echo "Proses Logout";
}
