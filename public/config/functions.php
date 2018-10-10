<?php

function set_message($data)
{
    if (!empty($data)) {
        $_SESSION['message'] = $data;
    } else {
        $data = "";
    }
}

function display_message()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($data)
{
    header("Location: $data");
}

function query($data)
{
    global $koneksi;
    return $koneksi->query($data);
}

function confirm($data)
{
    global $koneksi;
    if (!$data) {
        die("QUERY FAILED " . $koneksi->connect_error());
    }
}

function escape_string($data)
{
    global $koneksi;
    return $koneksi->real_escape_string($data);
}

function fetch_array($data)
{
    return $data->fetch_array();
}

function get_devices()
{
    $query = query("SELECT * FROM tb_devices");
    confirm($query);
    while ($row = fetch_array($query)) {
        echo $row['dvc_name'];
    }
}

function login_user()
{
    if (isset($_POST['submit'])) {
        $username = escape_string($_POST['username']);
        $password = escape_string(md5($_POST['password']));

        $query = query("SELECT * FROM tb_admin WHERE adm_usr = '{$username}' AND adm_pass = '{$password}'");
        confirm($query);
        $row = fetch_array($query);
        if ($query->num_rows == 0) {
            set_message("Username atau Password salah!");
            redirect("login.php");
        } else {
            $_SESSION['admin_user'] = $row['adm_name'];
            redirect("admin");
        }
    }
}
