<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
?>

<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="../../assets/css/index.css">
        <link rel="stylesheet" href="../../assets/css/login.css">
        <link rel="stylesheet" href="../../assets/css/publish.css">
    </head>
    <body>
        <!-- PHP codes -->
        
        <!-- HTML codes -->
        <div class="container-fluid">
            <?php include(ROOT_PATH . "/app/partials/publishHeader.php");?>
            <div class="main-container d-flex" style="background-color:#f7f8fa">
                <?php include(ROOT_PATH . "/app/partials/publishSidebar.php");?>  
                <div class="card" id="post-publish" style="width:50%">
                    <h5 class="card-header">文章创作</h5>
                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php');?>
                    <form action="create.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="pb-3">
                                <h6 class="card-title form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="标题，最多20字" value="<?php echo $name; ?>">
                                    <label for="name" class="text-muted">标题，最多20字</label>
                                </h6>
                                <small class="text-muted">标题字数：0/20</small>
                            </div>
                            <div class="pb-3">
                                <select class="form-select text-muted" name="topic_id">
                                    <option value="0">-----请选择标签-----</option>
                                    <?php $topics = array_slice($topics, 5); ?>
                                    <?php foreach($topics as $key => $topic):?>
                                        <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                                            <option selected value="<?php echo $topic['id']?>">
                                                "<?php echo $topic['tag_parent']?>": <?php echo $topic['name']?>
                                            </option>
                                        <?php else: ?>
                                            <option value="<?php echo $topic['id']?>">
                                                "<?php echo $topic['tag_parent']?>": <?php echo $topic['name']?>
                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="card-text form-floating pb-3">
                                <textarea class="form-control" id="body" style="height:150px" name="body" placeholder="此刻你想给大家分享什么？"><?php echo $body; ?></textarea>  
                                <label for="floatingInput" class="text-muted">此刻你想给大家分享什么？</label>
                            </div>
                            <div class="pb-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="image">图片</label>
                                <input type="file" class="form-control" name="image">
                            </div> 
                                <a href="#" class="btn btn-primary">表情</a> 
                                <a href="#" class="btn btn-primary">链接</a>                                 
                            </div>
                            <div class="pb-3">
                                <small class="text-muted">正文字数：0/5000</small><br>
                                <small class="text-muted">实时保存草稿</small>
                            </div>
                            <!-- <div> 暂时是不需要的，因为博客就应该默认发布文章，想隐藏可以自行设置
                                < ?php if(empty($published)):?>
                                <label>
                                    <input type="checkbox" name="published">发布成功
                                </label>
                                < ?php else:?>
                                <label>
                                    <input type="checkbox" name="published" checked>发布成功
                                </label>
                                < ?php endif;?>
                            </div> -->
                            <div>
                                <button type="submit" name="add-post" class="btn btn-primary">发表</a> 
                            </div>
                        </div>
                    </form>
                </div>     
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>