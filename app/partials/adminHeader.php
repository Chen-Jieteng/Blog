<header>
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?php echo BASE_URL . '/index.php'?>">芥尘的数据仓库</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL . '/index.php'?>">主页</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL . '/dashboard/publish/create.php'?>">管理中心</a>
            </li>
        <ul class="navbar-nav  my-4 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <?php if(isset($_SESSION['id'])): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['username']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if($_SESSION['admin']): ?> 
                        <li><a class="dropdown-item" href="#">管理面板</a></li>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL . '/userprofile.php'?>">个人信息</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL . '/setting.php'?>">设置</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL . '/logout.php'?>" class="logout">注销</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        用户
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL . '/login.php'?>">登录</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL . '/signup.php'?>">注册</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                    语言
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="<?php echo BASE_URL . '/list.php'?>">简体中文</a></li>
                    <li><a class="dropdown-item" href="<?php echo BASE_URL . '/list.php'?>">繁体中文</a></li>
                    <li><a class="dropdown-item" href="<?php echo BASE_URL . '/list.php'?>">English</a></li>
                    <li><a class="dropdown-item" href="<?php echo BASE_URL . '/list.php'?>">日本語</a></li>
                </ul>
            </li>
        </ul>
    </div>
    </nav>
