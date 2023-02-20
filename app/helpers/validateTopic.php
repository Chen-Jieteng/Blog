<?php
function validateTopic($topic){
    $errors = array();

    if(empty($topic['name'])){
        array_push($errors, '*标签名无效');
    }    
    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if($existingTopic){
        array_push($errors, '*标签重复');
    }

    if(empty($topic['tag_color'])){
        array_push($errors, '*颜色代码无效');
    }
    $existingTopic = selectOne('topics', ['tag_color' => $topic['tag_color']]);
    if($existingTopic){
        array_push($errors, '*颜色重复');
    }

    return $errors;
}

?>