<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = "";
$name = "";
$description = "";
$body = "";
$topic_id = "";
//$published = "";

if(isset($_GET['id'])){
    $post = selectOne($table, ['id' => $_GET['id']]);
    $id = $post['id'];
    $name = $post['name'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $description = $post['description'];

}

if(isset($_GET['delete_id'])){
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "文章已删除";
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . "/dashboard/publish/list.php");  
    exit();
} 

if(isset($_GET['published']) && isset($_GET['p_id'])){
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "修改生效";
    $_SESSION['type'] = "success";
    header('location: ' . BASE_URL . "/dashboard/publish/list.php");
    exit();
}

if(isset($_POST['add-post'])){
    //dd($_FILES['image']['name']);
    //$errors = validatePost($_POST);

    if(!empty($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if($result){
            $_POST['image'] = $image_name;
        }else{
            array_push($errors,"图片上传失败");
        }
    }
    else{
        array_push($errors, "缺少图片");
    }

    if(count($errors) === 0){
        unset($_POST['add-post']);
        $_POST['user_id'] = 1;
        $_POST['published'] = 1; //默认立即发布
        //$_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "文章已发布";
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . "/dashboard/publish/list.php");
        exit();
    }
    else{
        $name = $_POST['name'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $description = $_POST['description'];
        // $published = isset($_POST['published']) ? 1 : 0;
    }
}

if(isset($_POST['update-post'])){
    $errors = validatePost($_POST);
    if(!empty($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if($result){
            $_POST['image'] = $image_name;
        }else{
            array_push($errors,"图片上传失败");
        }
    }
    else{
        array_push($errors, "缺少图片");
    }

    if(count($errors) === 0){
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = 1;
        $_POST['published'] = 1; //默认立即发布
        //$_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "文章已更新";
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . "/dashboard/publish/list.php");
    }
    else{
        $name = $_POST['name'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $description = $_POST['description'];
        // $published = isset($_POST['published']) ? 1 : 0;
    }
}
?>