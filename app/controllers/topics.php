<?php
include(ROOT_PATH . "/app/database/db.php");

$table = 'topics';

$id = '';
$name = '';
$tag_color = '';
$type = '';
$tag_parent = '';
$description = '';

$topics = selectAll($table);

if(isset($_POST['add-topic'])){
    unset($_POST['add-topic']);
    $topic_id = create($table, $_POST);
    $_SESSION['message'] = '*成功新建标签';
    $_SESSION['type'] = '*success';
    header('location: ' . BASE_URL . '/dashboard/topics/list.php');
    exit();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $tag_color = $topic['tag_color'];
    $type = $topic['type'];
    $tag_parent = $topic['tag_parent'];
    $description = $topic['description'];
}
if(isset($_POST['update-topic'])){
    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table, $id, $_POST);
    $_SESSION['message'] = '*成功更改标签';
    $_SESSION['type'] = '*success';
    header('location: ' . BASE_URL . '/dashboard/topics/list.php');
    exit();
}
?>