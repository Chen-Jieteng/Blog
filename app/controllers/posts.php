<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$name = "";
$body = "";
$topic_id = "";
//$published = "";


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
        $_SESSION['meesage'] = "文章已发布";
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . "/dashboard/publish/list.php");
    }
    else{
        $name = $_POST['name'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        // $published = isset($_POST['published']) ? 1 : 0;
    }
    
}
?>