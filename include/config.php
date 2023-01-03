<?php
$db = mysqli_connect('localhost','root','','kurd_source');
if (!$db){
    echo mysqli_connect_error($db);
    echo "DataBase Niya";
}
// set font kurdish in mysqli
$db->query("SET NAMES utf8");
$db->query("SET CHARACTER SET utf8");

function sec($data){
    global $db;
    $data = mysqli_real_escape_string($db,htmlspecialchars($data));
    return $data;
}

if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "ba";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "ba")
        $_SESSION['lang'] = "ba";
    else if ($_GET['lang'] == "so")
        $_SESSION['lang'] = "so";
}

require_once "language/" . $_SESSION['lang'] . ".php";

if(isset($_SESSION['object'])){
    $id = $_SESSION['object'];
}
?>