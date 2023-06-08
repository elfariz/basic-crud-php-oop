<?php 

include "../model/Database.php";

$db = new Database;

$id = $_GET['id'];
$ids = $_POST['id'];
$name = $_POST['nama'];
$age = $_POST['umur'];

$action = $_GET['act'];

if ($action == "add") {
    $db->input_data($name, $age);
    header("location:../view/");
} elseif($action == "update") {
    $db->update_data($ids, $name, $age);
    header("location:../view/");
}elseif ($action == "delete") {
    $db->delete_data($id);
    header("location:../view/");
}else{
    echo "woah, you've something wrong with your code";
}
?>