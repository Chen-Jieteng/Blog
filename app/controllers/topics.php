<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");

$table = 'topics';

$errors = array();
$id = '';
$name = '';
$tag_color = '';
$type = '';
$tag_parent = '';
$description = '';

$topics = selectAll($table);

if(isset($_POST['add-topic'])){
    $errors = validateTopic($_POST);

    if(count($errors) === 0){
        unset($_POST['add-topic']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = '*成功新建标签';
        $_SESSION['type'] = '*success';
        header('location: ' . BASE_URL . '/dashboard/topics/list.php');
        exit();
    }
    else{
        $name = $_POST['name'];
        $tag_color = $_POST['tag_color'];
        $type = $_POST['type'];
        $tag_parent = $_POST['tag_parent'];
        $description = $_POST['description'];
    }

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

if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = '*成功删除标签';
    $_SESSION['type'] = '*success';
    header('location: ' . BASE_URL . '/dashboard/topics/list.php');
    exit();
}

if(isset($_POST['update-topic'])){
    // $errors = validateTopic($_POST);
    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table, $id, $_POST);
    $_SESSION['message'] = '*成功更改标签';
    $_SESSION['type'] = '*success';
    header('location: ' . BASE_URL . '/dashboard/topics/list.php');
    exit();
    
    // 有bug所以先不用了，日后再修
    /* if(count($errors) === 0){
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = '*成功更改标签';
        $_SESSION['type'] = '*success';
        header('location: ' . BASE_URL . '/dashboard/topics/list.php');
        exit();
    }
    else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $tag_color = $_POST['tag_color'];
        $type = $_POST['type'];
        $tag_parent = $_POST['tag_parent'];
        $description = $_POST['description'];
    } */
}
?>