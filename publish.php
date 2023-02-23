<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");
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
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/publish.css">
        <style>
            a{
                text-decoration: none;
                color: black;
            }
            thead{
                color:gray;
            }
            td{
                color:inherit;
            }
            tbody > tr > th{
                font-weight: normal;
            }
            .link-bottom-line span:first-of-type{
                height:9px;
                width:9px;
                flex:0 0 auto;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <?php include(ROOT_PATH . "/app/partials/header.php");?>
                <!--这里是最近发布栏-->
                <div class="container-fluid">
                    <div class="mt-5 mb-2 p-2 text-center bg-primary text-light">
                        <h3><b>技术笔记</b></h3>
                    </div>
                    <?php
                    $sql = "SELECT * FROM posts WHERE published='1'AND parent_topic_id='1' ORDER BY id DESC";
                    $stmt = $pdo->query($sql);
                    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                    <div class="row row-cols-1 row-cols-md-2 g-1">
                        <?php $i = 0; foreach($posts as $post): ?>
                        <div class="col">
                        <div class="card articleCard">
                        <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" class="card-img-top latest-article-img" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p>
                                <span class="badge"
                                style=
                                    "background-color:
                                    <?php 
                                    $sql = "SELECT t.tag_color AS tag_colors
                                    FROM posts p
                                    JOIN topics t ON p.topic_id = t.id
                                    WHERE p.id = {$post['id']}";
                                    $stmt = $pdo->query($sql);
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                    echo $row['tag_colors'];
                                    ?>">
                                <?php 
                                    $sql = "SELECT t.name AS topic_name
                                    FROM posts p
                                    JOIN topics t ON p.topic_id = t.id
                                    WHERE p.id = {$post['id']}";
                                    $stmt = $pdo->query($sql);
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                    echo $row['topic_name'];
                                    ?>
                                </span>

                                <span class="badge" 
                                style=
                                    "background-color:
                                    <?php 
                                    $sql = "SELECT t.tag_color AS parent_colors
                                    FROM posts p
                                    JOIN topics t ON p.parent_topic_id = t.id
                                    WHERE p.id = {$post['id']}";
                                    $stmt = $pdo->query($sql);
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                    echo $row['parent_colors'];
                                    ?>">
                                    <?php 
                                    $sql = "SELECT t.name AS topic_parent
                                    FROM posts p
                                    JOIN topics t ON p.parent_topic_id = t.id
                                    WHERE p.id = {$post['id']}";
                                    $stmt = $pdo->query($sql);
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                    echo $row['topic_parent'];
                                    ?>
                                </span>   
                                <p>
                                <h5 class="card-title"><b><a href="post.html"><?php echo $post['name'];?></a></b></h5>
                                <p class="card-text">
                                更新于 <small class="text-muted"><?php echo date('Y年n月j日', strtotime($post['update_time']));?>&nbsp;&nbsp;</small>
                                <img class="comment-img" src="./assets/images/comment.png" alt="">
                                <small class="text-muted">12</small>
                                </p>
                                <p class="card-text">
                                <?php echo mb_strlen($post['description'], 'UTF-8') > 48 ? mb_substr($post['description'], 0, 48, 'UTF-8') . '...' : $post['description'];?>
                                </p>
                                <p class="card-text">
                                <img class="user-img" src="./assets/images/userprofile.png" alt="">
                                <small class="text-muted">
                                <?php 
                                    $sql = "SELECT u.username AS user_name
                                    FROM posts p
                                    JOIN users u ON p.user_id = u.id
                                    WHERE p.id = {$post['id']}";
                                    $stmt = $pdo->query($sql);
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                    echo $row['user_name'];
                                ?>
                                </small>
                                </p>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <?php $i++; if($i == 4) break; ?>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>


