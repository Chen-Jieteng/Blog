<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/login.css">

    </head>
    <body>
        <div class="container-fluid">
            <?php include(ROOT_PATH . "/app/partials/header.php");?>
            <div class="card" id="login-card" style="width:50%; margin: 3% auto 3% auto">
                <h5 class="card-header">用户登录</h5>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
                <form action="login.php" method="POST">
                    <div class="card-body">
                        <div class="pb-3">
                            <h6 class="card-title form-floating">
                                <input type="text" class="form-control" id="username" name="username" placeholder="用户名：" value="<?php echo $username; ?>">
                                <label for="username" class="text-muted">用户名：</label>
                            </h6>
                        </div>
                        <div class="pb-3">
                            <h6 class="card-title form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="登录密码：" value="<?php echo $password; ?>">
                                qwq
                                <label for="password" class="text-muted">登录密码：</label>
                            </h6>
                        </div>
                        <div class="pb-3">
                            <small>没有账号？<a href="<?php echo BASE_URL . '/signup.php'?>"><span class="text-muted">点击注册</a></span></small>
                        </div>
                        <div>
                            <button type="submit" name="login-btn" class="btn btn-primary">登录</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>