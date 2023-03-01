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
        <link rel="stylesheet" href="../..//assets/css/login.css">
        <link rel="stylesheet" href="../..//assets/css/publish.css">
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
            <?php include(ROOT_PATH . "/app/partials/adminHeader.php");?>
            <div class="main-container d-flex" >
                <?php include(ROOT_PATH . "/app/partials/adminSidebar.php");?>
                <div style="margin:5% 0% 0% 5%;">
                    <h4>所有文章</h4>  
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">文章</th>
                                <th scope="col">作者</th>
`                               <th scope="col">发布时间</th>
                                <th scope="col">操作</th>
                                <th scope="col">可见范围</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach($posts as $key => $post): ?>
                                <tr>
                                    <td style="width:13%">
                                    <div>
                                        <?php echo $post['name']; ?>
                                    </div>
                                        <div class="link-bottom-line row">
                                            <div class="col-md-6">
                                                <span 
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
                                                </span>
                                                <span style="color:gray;">
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
                                            </div>
                                            <div class="col-md-6">
                                                <span 
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
                                                </span>
                                                <span style="color:gray;">
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
                                            </div>
                                        </div>
                                    </td>
                                    <td style="width:5%">
                                        <?php 
                                            $sql = "SELECT u.username AS user_name
                                            FROM posts p
                                            JOIN users u ON p.user_id = u.id
                                            WHERE p.id = {$post['id']}";
                                            $stmt = $pdo->query($sql);
                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                            echo $row['user_name'];
                                        ?>
                                    </td>
                                    <td style="width:10%"><?php echo $post['create_time']; ?></td>
                                    <td style="width:6%">
                                        <a href="edit.php?published=0&p_id=<?php echo $post['id'];?>">删除</a>
                                        <a href="edit.php?published=1&p_id=<?php echo $post['id'];?>">恢复</a><br>
                                        <a href="edit.php?delete_id=<?php echo $post['id'];?>">永久删除</a>
                                    </td>
                                    <td style="width:7%">
                                        <?php if($post['published']): ?>
                                            <div>已公开</div>
                                            <div>
                                                <a href="../publish/edit.php?published=0&p_id=<?php echo $post['id'];?>" class="hide">
                                                仅自己可见</a>
                                            </div>
                                        <?php else: ?>
                                            <div>
                                                <a href="../publish/edit.php?published=1&p_id=<?php echo $post['id'];?>" class="publish">公开</a>
                                            </div>
                                            <div>仅自己可见</div>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>


