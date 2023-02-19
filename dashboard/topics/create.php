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
                    <h4 class="mb-3">添加主题标签</h4> 
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
 
                    <form action="create.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">标签名称</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="<?php echo $name ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tag_color" class="form-label">标签颜色</label>
                            <input type="text" class="form-control" name="tag_color" id="tag_color" aria-describedby="tag_color"  value="<?php echo $tag_color ?>">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">标签类型</label>
                            <input type="text" class="form-control" name="type" id="type" aria-describedby="type">
                        </div>
                        <div class="mb-3">
                            <label for="tag_parent" class="form-label">归属模块</label>
                            <input type="text" class="form-control" name="tag_parent" id="tag_parent" aria-describedby="tag_parent">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">描述</label>
                            <textarea class="form-control" name="description" id="description" rows="3" ><?php echo $description; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="add-topic" class="btn btn-primary">添加标签</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>


