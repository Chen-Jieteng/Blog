<?php include("path.php");
include(ROOT_PATH . "/app/controllers/posts.php");



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/post.css">
    </head>
    <html>
        <body>
            <div class="container-fluid">
                <?php include(ROOT_PATH . "/app/partials/header.php");?>
                <div class="main-container" style="background-color:#F8F8FF">
                    <div class="row text-light mt-3 mb-3" style="background-color:plum">
                        <div class="col-md-2 pt-3">
                            <p><b>分类：</b><?php 
                            $sql = "SELECT t.name AS topic_parent
                            FROM posts p
                            JOIN topics t ON p.parent_topic_id = t.id
                            WHERE p.id = {$post['id']}";
                            $stmt = $pdo->query($sql);
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            echo $row['topic_parent'];
                            ?></p>
                        </div>
                        <div class="col-md-10 pt-3">
                            <p><b>子分类：</b><?php  
                            $sql = "SELECT t.name AS topic_name
                            FROM posts p
                            JOIN topics t ON p.topic_id = t.id
                            WHERE p.id = {$post['id']}";
                            $stmt = $pdo->query($sql);
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            echo $row['topic_name'];
                            ?></p>
                        </div>
                    </div>
                    <div class="row post-img">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" class="img-fluid rounded-start post-img" alt="文章图片">
                    </div>
                    <div class="post-main">
                        <div class="row">
                            <div class="col-md-5">
                                <h1 style="font-size:45px"><b><?php echo $post['name'] ;?></b></h1>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <p><b>摘要：<br></b><?php echo $post['description'] ;?></p>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <img class="user-img" src="./assets/images/userprofile.png" alt="" style="width:3rem; height:3rem;">
                                    </div>
                                    <div class="col-md-3">
                                        <p><b>作者：</b>
                                        <?php 
                                            $sql = "SELECT u.username AS user_name
                                            FROM posts p
                                            JOIN users u ON p.user_id = u.id
                                            WHERE p.id = {$post['id']}";
                                            $stmt = $pdo->query($sql);
                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                            echo $row['user_name'];
                                        ?><br>
                                        <b>IP：</b>加拿大
                                    </p>
                                    </div>                                
                                    <div class="col-md-8">
                                        <p><b>发布时间：</b><?php echo date('Y年 n月j日 G:i', strtotime($post['create_time']));?><br>
                                        <b>更新时间：</b><?php echo date('Y年 n月j日 G:i', strtotime($post['update_time']));?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row post-body">
                            <?php echo nl2br($post['body']);?>
                        </div>
                        <div class="row mt-5" style="color:orange">
                            <p>特别声明：以上文章内容仅代表作者本人观点。如有作品版权、内容或其它相关问题请及时联系本站处理。</p>
                        </div>
                        <div class="mt-5 mb-2 p-2 text-center bg-primary text-light">
                            <h3><b>猜你想看</b></h3>
                        </div>
                        <?php include(ROOT_PATH . "/app/partials/latestArticle.php");?>
                        <div class="row pt-5 pb-5 text-light">
                            <div class="col-md-12" style="background-color:cornflowerblue">
                                <div style="text-align:center">
                                    <div class="row mt-2"><h3>关于订阅</h3></div>
                                    <div class="row">
                                        <p>
                                        欢迎访问我的个人数据博客，如果您觉得满意的话可以通过下面的订阅框，输入个人电子邮箱地址订阅，新文章发布会通过邮件的形式通知您。
                                        </p>
                                    </div>
                                </div>
                                <div class="row subsribe mb-2">
                                    <form class="d-flex">
                                        <input type="email" class="form-control me-2" id="exampleFormControlInput1" placeholder="请输入您的个人邮箱地址">
                                        <button type="submit" class="btn btn-success">订阅</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </body>
    </html>