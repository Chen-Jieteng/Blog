<?php

function validatePost($post){
    $errors = array();
    if(empty($post['name'])){
        array_push($errors, '*标题无效');
    }
    if(empty($post['body'])){
        array_push($errors, '*正文为空');
    }
    if(empty($post['body'])){
        array_push($errors, '*摘要为空');
    }
    if(empty($post['topic_id'])){
        array_push($errors, '*未选择标签');
    }

    $existingPost = selectOne('posts', ['name' => $post['name']]);
    if($existingPost){
        if(isset($post['update-post']) && $existingPost['id'] != $post['id']){
            array_push($errors, '标题重复');
        }
        if(isset($post['add-post'])){
            array_push($errors, '标题重复');
        }
    }

    return $errors;
}
?>