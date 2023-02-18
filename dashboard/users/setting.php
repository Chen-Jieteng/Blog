<?php 
include("../../path.php");
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
            <?php include(ROOT_PATH . "/app/partials/publishheader.php");?>
            <div class="main-container d-flex" >
                <?php include(ROOT_PATH . "/app/partials/publishsidebar.php");?>
                <div style="margin:5% 0% 0% 5%;">
                    <h4 class="mb-3">用户设置更改</h4>  
                    <form>
                        <div class="mb-3">
                            <label for="topic-name" class="form-label">新用户名</label>
                            <input type="text" class="form-control" id="topic-name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="topic-color" class="form-label">更改注册邮箱</label>
                            <input type="text" class="form-control" id="topic-color" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="topic-type" class="form-label">更改密码</label>
                            <input type="text" class="form-control" id="topic-type" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="topic-parent" class="form-label">确认新密码</label>
                            <input type="text" class="form-control" id="topic-parent" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">保存更改</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>


