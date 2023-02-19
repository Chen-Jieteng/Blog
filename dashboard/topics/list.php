<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
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
            span{
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
                    <h4>标签列表</h4> 
                    <?php include(ROOT_PATH . "/app/partials/messages.php");?> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">标签名称</th>
                                <th scope="col">颜色</th>
                                <th scope="col">标签类型</th>
                                <th scope="col">归属模块</th>
                                <th scope="col" width="300px">描述</th>
                                <th scope="col">设置日期</th>
                                <th scope="col">操作</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach($topics as $key => $topic): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $topic['name']; ?></td>
                                    <td><?php echo "<span style='background-color: $topic[tag_color];'></span>"; ?></td>
                                    <td><?php echo $topic['type']; ?></td>
                                    <td><?php echo $topic['tag_parent']; ?></td>
                                    <td><?php echo $topic['description']; ?></td>
                                    <td><?php echo $topic['create_date']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $topic['id'];?>" class="edit">编辑</a>
                                        <a href="list.php?del_id=<?php echo $topic['id'];?>" class="delete">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>


