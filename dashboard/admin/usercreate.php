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
            <?php include(ROOT_PATH . "/app/partials/adminHeader.php");?>
            <div class="main-container d-flex" >
                <?php include(ROOT_PATH . "/app/partials/adminSidebar.php");?>
                <div style="margin:5% 0% 0% 5%;">
                    <h4 class="mb-3">添加新用户</h4>  
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
                    <form action="usercreate.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">用户名</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $username;?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">注册邮箱</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">注册密码</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="passwordConf" class="form-label">确认密码</label>
                            <input type="password" class="form-control" name="passwordConf">
                        </div>
                        <div class="pb-3">
                            <input type="checkbox" name="admin">管理员
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="create-admin" class="btn btn-primary">添加新用户</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>


