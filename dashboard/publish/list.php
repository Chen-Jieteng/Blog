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
        <link rel="stylesheet" href="../../assets/css/publish.css">
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
            <?php include(ROOT_PATH . "/app/partials/publishHeader.php");?>
            <div class="main-container d-flex" >
                <?php include(ROOT_PATH . "/app/partials/publishSidebar.php");?>
                <div style="margin:5% 0% 0% 5%;">
                    <h4>发过的文章</h4>  
                    <?php include(ROOT_PATH . "/app/partials/messages.php");?> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">文章</th>
                                <th scope="col">赞</th>
                                <th scope="col">评论</th>
                                <th scope="col">阅读量</th>
`                               <th scope="col">发布时间</th>
                                <th scope="col">操作</th>
                                <th scope="col">修改可见范围</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach($posts as $key => $post): ?>
                                <tr>
                                    <td style="width:30%"><?php echo $post['name']; ?>
                                        <div class="link-bottom-line row">
                                            <div>
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
                                        </div>
                                    </td>
                                    <td>0</td>
                                    <td>0</td> 
                                    <td>0</td>
                                    <td style="width:15%"><?php echo $post['create_time']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $post['id'];?>">编辑</a>
                                        <a href="edit.php?delete_id=<?php echo $post['id'];?>">删除</a>
                                    </td>
                                    <?php if($post['published']): ?>
                                        <td>
                                            <p>已公开</p>
                                            <a href="edit.php?published=0&p_id=<?php echo $post['id'];?>" class="hide">仅自己可见</a >
                                        </td>
                                    <?php else: ?>
                                        <td>
                                            <a href="edit.php?published=1&p_id=<?php echo $post['id'];?>" class="publish">公开</a>
                                            <p>仅自己可见</p>
                                        </td>
                                    <?php endif; ?>
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
