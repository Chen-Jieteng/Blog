<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>
<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/signup.css">
    </head>
    <body>

<!-- <div class="col-md-6" id="signup">
    <div class="col-md-10">
        <form action="signup.php" method="post">
            <h5><b>没有账号？免费注册</b></h5>

            ?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
            
            <div class="form-group">
                <label for="username">用户名</label>
                <input type="text" class="form-control" id="username" value="?php echo $username?>" placeholder="请输入您的用户名">
            </div>
            <div class="form-group">
                <label for="email">邮箱地址</label>
                <input type="email" class="form-control" id="email" value="?php echo $email?>" aria-describedby="emailHelp" placeholder="请输入您的邮箱">
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" id="password"  value="?php echo $password?>" placeholder="请输入您的密码">
            </div>
            <div class="form-group">
                <label for="passwordConf">确认密码</label>
                <input type="password" class="form-control" id="passwordConf" value="?php echo $passwordConf?>" placeholder="请输入您的密码">
            </div>
            <div class="form-group">
                <label for="Bday">生日</label>
                <input type="date" class="form-control" id="Bday">
                <label for="bdayHint"><small style="color:brown">*为什么收集我的生日？</small></label>
            </div>
            <div class="form-group">
                <label for="SignUpInputPassword">验证码</label>
                <input type="password" class="form-control" id="exampleInputPassword" placeholder="请输入您的密码">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1"><small class="text-muted">&nbsp;我已阅读并同意<a href="/">《芥尘数据仓库用户协议》</a>和<a href="/">《芥尘数据仓库隐私政策》</a></small></label>
            </div>
            <button type="submit" name="signup-btn" class="btn btn-primary">确认注册</button>
        </form>
    </div>
</div> -->

        <div class="container-fluid">
            <?php include(ROOT_PATH . "/app/partials/header.php");?>
            <div class="card" id="signup-card" style="width:50%; margin: 3% auto 3% auto">
                <h5 class="card-header">用户注册</h5>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
                <form action="signup.php" method="POST">
                    <div class="card-body">
                        <div class="pb-3">
                            <h6 class="card-title form-floating">
                                <input type="text" class="form-control" id="username" name="username" placeholder="用户名：" value="<?php echo $username; ?>">
                                <label for="username" class="text-muted">用户名：</label>
                            </h6>
                        </div>
                        <div class="pb-3">
                            <h6 class="card-title form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="邮箱：" value="<?php echo $email; ?>">
                                <label for="email" class="text-muted">邮箱：</label>
                            </h6>
                        </div>
                        <div class="pb-3">
                            <h6 class="card-title form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="密码：" value="<?php echo $password; ?>">
                                <label for="password" class="text-muted">密码：</label>
                            </h6>
                        </div>
                        <div class="pb-3">
                            <h6 class="card-title form-floating">
                                <input type="password" class="form-control" id="passwordConf" name="passwordConf" placeholder="确认密码：" value="<?php echo $passwordConf; ?>">
                                <label for="passwordConf" class="text-muted">确认密码：</label>
                            </h6>
                        </div>
                        <div class="pb-3">
                            <small>已有账号？<a href="<?php echo BASE_URL . '/login.php'?>"><span class="text-muted">点击登录</a></span></small>
                        </div>
                        <div>
                            <button type="submit" name="signup-btn" class="btn btn-primary">注册</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>